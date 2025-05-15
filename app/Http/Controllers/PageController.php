<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;
use App\Models\CBTQuestion;
use App\Models\CBTResult;
use Illuminate\Support\Facades\Mail;
use App\Mail\CertificateMail;
use Illuminate\Support\Facades\Auth;
use App\Models\UserCourse;
use App\Services\PrintfulService;
use App\Mail\ContactMessageMail;


class PageController extends Controller
{


    protected $printfulService;

    public function __construct(PrintfulService $printfulService)
    {
        $this->printfulService = $printfulService;
    }

    public function getPoems()
    {
        $poems = [
            ["title" => "The Sun", "content" => "The sun shines bright, giving us light."],
            ["title" => "The Moon", "content" => "The moon glows softly, lighting the night."],
            ["title" => "The Ocean", "content" => "Waves crash and dance, a timeless trance."],
            ["title" => "The Steps", "content" => "Waves crash and dance, a timeless trance. Waves crash and dance, a timeless trance.Waves crash and dance, a timeless trance.Waves crash and dance, a timeless trance.Waves crash and dance, a timeless trance.Waves crash and dance, a timeless trance.Waves crash and dance, a timeless trance.Waves crash and dance, a timeless trance.Waves crash and dance, a timeless trance.Waves crash and dance, a timeless trance.Waves crash and dance, a timeless trance.Waves crash and dance, a timeless trance.Waves crash and dance, a timeless trance."],
        ];

        return response()->json($poems);
    }


    public function publisherSearch(Request $request)
    {

        $query = $request->input('query');
        $data = [
            ['id' => 1, 'name' => 'Apple'],
            ['id' => 2, 'name' => 'Banana'],
            ['id' => 3, 'name' => 'Orange'],
            ['id' => 4, 'name' => 'Mango'],
            ['id' => 5, 'name' => 'Pineapple'],
            ['id' => 6, 'name' => 'Strawberry'],
        ];

        $filtered = array_filter($data, function ($item) use ($query) {
            return stripos($item['name'], $query) !== false;
        });

        return response()->json(array_values($filtered));
    }


    public function studentCourseSlug($slug)
    {
        return View('general.student-lms-course-details');
    }

    public function studentQuiz(CBTQuestion $cbtquestions)
    {
        return View('general.student-lms-quiz', compact('cbtquestions'));
    }

    public function studentQuizSubmit(Request $request, CBTQuestion $cbtquestions)
    {
        $request->validate(['answers' => 'required|array']);
        $score = 0;
        foreach ($cbtquestions->questions as $question) {
            if (isset($request->answers[$question->id]) && $request->answers[$question->id] == $question->answer) {
                $score++;
            }
        }
        $percentage = ($score / $cbtquestions->questions->count()) * 100;
        auth()->user()->scores()->create([
            'quiz_id' => $cbtquestions->id,
            'score' => $percentage,
        ]);

        return redirect()->route('student.cbt-result', ['id' => $cbtquestions->id]);
    }

    public function studentDashboard()
    {
        $courses = Course::all();
        return View('general.student-lms-dashboard', compact('courses'));
    }

    public function studentCourses()
    {
        // $course_all = Course::all();
        // $courses = $course_all->only([1, 2, 3, 4, 5, 6]);
        $courses = Course::all();
        return View('general.student-lms-courses', compact('courses'));
    }


    // HERE
    public function studentCourseDetails($id)
    {
        $course = Course::where('id', $id)->firstOrFail();

        $userHasAccess = UserCourse::where('user_id', auth()->id())
            ->where('course_id', $id)
            ->where('expires_at', '>', now())
            ->exists();

        if (!$userHasAccess) {
            return redirect()->route('student.dashboard')->with('error', 'You need to enroll first.');
        } elseif ($userHasAccess) {
            return redirect()->route('course.cbt', ['course_code' => $course->course_code]);
        }
        // return View('general.student-lms-course-details', compact('course'));
    }



    public function studentCertificate()
    {
        return View('general.student-lms-certificate');
    }
    public function studentCbt()
    {
        return View('general.student-lms-cbt');
    }

    public function showCBT($course_code)
    {
        $course = Course::where('course_code', $course_code)->firstOrFail();
        $questions = CbtQuestion::where('course_code', $course_code)->get();

        return view('general.student-course-cbt', compact('course', 'questions'));
    }


    public function cbtSubmit(Request $request, $course_code)
    {
        $course = Course::where('course_code', $course_code)->firstOrFail();
        $questions = CbtQuestion::where('course_code', $course_code)->get();
        $user = Auth::user();
        $score = 0;
        $correctAnswers = 0;
        $totalQuestions = $questions->count();
        $answers = $request->except('_token');

        foreach ($questions as $question) {
            $userAnswer = $answers['question_' . $question->id] ?? null;

            if ($userAnswer && $userAnswer === $question->correct_answer) {
                $correctAnswers++;
            }
        }

        // Calculate score percentage
        $score = ($totalQuestions > 0) ? round(($correctAnswers / $totalQuestions) * 100, 2) : 0;
        $passed = $score >= 70;

        // dd($passed);

        // // Save result in database
        $cbtResult = CBTResult::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'score' => $score,
            'status' => $passed ? 'passed' : 'failed',
        ]);

        if ($passed) {
            $certificateUrl = route('certificate.generate', ['result_id' => $cbtResult->id]);
            Mail::to($user->email)->send(new CertificateMail($user, $course, $certificateUrl));
        }
        return redirect()->route('course.cbt.result', ['result_id' => $cbtResult->id]);
    }

    public function cbtResult($result_id)
    {
        $result = CBTResult::with('course')->findOrFail($result_id);
        return view('general.cbt-result', compact('result'));
    }

    public function generateCertificate($result_id)
    {
        $result = CBTResult::with('user', 'course')->findOrFail($result_id);

        if ($result->status !== 'passed') {
            return redirect()->route('course.cbt.result', ['result_id' => $result_id])->with('error', 'You did not pass the CBT.');
        }

        // Generate Certificate (This is a placeholder, replace with actual PDF generation)
        $certificateText = "Certificate of Completion\n\n";
        $certificateText .= "Awarded to: {$result->user->firstname} {$result->user->lastname}\n";
        $certificateText .= "For completing: {$result->course->title}\n";
        $certificateText .= "Score: {$result->score}%\n";

        return response($certificateText)->header('Content-Type', 'text/plain');
    }

    public function studentExam()
    {
        return View('general.student-lms-cbt-exam');
    }


    public function studentResult()
    {
        return View('general.student-lms-cbt-result');
    }


    public function studentSettings()
    {
        $user = auth()->user();
        return View('general.student-lms-settings', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        $user = auth()->user();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->phone_number = $request->phone_number;
        $user->save();
        return redirect()->back()->with('status', 'Your profile have been updated successfully!');
    }

    public function passwordUpdate(Request $request)
    {
        $user = $request->user();
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);
        if (!Hash::check($request->current_password, $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => 'The current password is incorrect.',
            ]);
        }
        $user->update(['password' => Hash::make($request->password)]);
        return redirect()->back()->with('password-status', 'Your password have been updated successfully!');
    }

    public function uploadPicture(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = $request->user();
        if ($user->profile_picture) {
            Storage::delete('public/profile_pictures/' . $user->profile_picture);
        }
        $filename = time() . '.' . $request->file('profile_picture')->extension();
        $request->file('profile_picture')->storeAs('public/profile_pictures', $filename);

        // Update the user profile
        $user->update(['profile_picture' => $filename]);

        return redirect()->back()->with('picture-status', 'Profile picture updated successfully!');
    }

    public function  medicaforget()
    {
        return View('general.medical-forget');
    }



    public function bookstore()
    {
        return View('general.bookstore');
    }

    public function about()
    {
        return View('general.about');
    }

    public function contact()
    {
        return View('general.contact');
    }




    public function contactSent(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to(config('mail.contact_address'))->send(new ContactMessageMail($validated));
        session()->flash('success', 'Your message has been sent successfully.');
        return redirect()->back();
    }

    public function blog()
    {
        return View('general.blog');
    }
    public function protokos()
    {

        $data = [
            ['id' => 1, 'name' => 'Obsterics and Gynaecology Ultrasound'],
            ['id' => 2, 'name' => '3rd Trimester Scan for the Ultrasound'],
            ['id' => 3, 'name' => 'NT Scanning for the Beginner'],
            ['id' => 4, 'name' => 'Ultrasound services in an Early Pregnancy'],
            ['id' => 5, 'name' => 'Pineapple'],
            ['id' => 6, 'name' => 'Strawberry'],
        ];


        $ingramSparkBooks = [


            [
                'id' => 1,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015063.jpg?viewkey=9f32010a5a18f9b46b104c2adf8b62ca1d7799b33d8762e0b261b252929ac060',
                'title' => 'NT Scanning for the Beginner',
                'link' => 'https://shop.ingramspark.com/b/084?params=sfNKYL9ugt6Lzt1Fi7X0UUiCvHvQJfpqnPgb4zYwthd',
                'author' => 'OLA-OJO, OLUWAKEMI O',
                'coming_soon' => false,

            ],


            [
                'id' => 2,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015071.jpg?viewkey=037e9b66a5cfb9590d48955209dcce1d63af4f9097e4626934ed22ee8cede829',
                'title' => 'Ultrasound Services in An Early Pregnancy and Acute Gynaecological Unit Book 1',
                'link' => 'https://shop.ingramspark.com/b/084?params=Ps22anVgXRnpSVcx3zDTwpkC2GUBbhuktkLXU5Y5Yv8',
                'author' => 'OLA-OJO, OLUWAKEMI O',
                'coming_soon' => false,
            ],

            [
                'id' => 3,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/190801508X.jpg?viewkey=a97f90229362d7a0bb6a48fd9ba49c571caf600d6a000f0538a91e6dfde56f5d',
                'title' => 'Ultrasound Services in An Early Pregnancy and Acut ....',
                'link' => 'https://shop.ingramspark.com/b/084?params=GJjL4uBvIjUAJx6XAkNne92mauRHuGsmpHyERmez3kz',
                'author' => 'Ola-Ojo, Oluwakemi, and Spiliopoulos, Dimitrios,',
                'coming_soon' => false,
            ],

            [
                'id' => 4,
                'imgSrc' => './images/Anomaly-Scan-Cover.jpeg',
                'title' => 'Anamaly Scan for the Ultrasonographer',
                'link' => 'https://shop.ingramspark.com/b/084?params=GJjL4uBvIjUAJx6XAkNne92mauRHuGsmpHyERmez3kz',
                'author' => 'Ola-Ojo, Oluwakemi, Edited by Spiliopoulos, Dimitrios,',
                'coming_soon' => true,
            ],

            [
                'id' => 5,
                'imgSrc' => './images/Trisemester-Scan-Cover.jpeg',
                'title' => 'Trisemester Scan for the Ultrasonographer',
                'link' => 'https://shop.ingramspark.com/b/084?params=GJjL4uBvIjUAJx6XAkNne92mauRHuGsmpHyERmez3kz',
                'author' => 'Ola-Ojo, Oluwakemi, Edited by Spiliopoulos, Dimitrios,',
                'coming_soon' => true,
            ],


        ];





        return View('general.protokos', compact('data', 'ingramSparkBooks'));
    }


    public function bookReview($id)
    {

        $ingramSparkBooks = [
            [
                "id" => 1,
                "title" => "NT Scanning for the Beginner",
                "author" => "OLA-OJO, OLUWAKEMI O",
                'book_cover' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015063.jpg?viewkey=9f32010a5a18f9b46b104c2adf8b62ca1d7799b33d8762e0b261b252929ac060',
                'link' => 'https://shop.ingramspark.com/b/084?params=sfNKYL9ugt6Lzt1Fi7X0UUiCvHvQJfpqnPgb4zYwthd',
                'coming_soon' => false,
                "review" => " <p>
                    First impressions are that this is a richly illustrated book throughout and aimed as described at the
                    beginner new to nuchal translucency screening. It assumes no prior knowledge and takes the reader
                    through
                    the entire range of applications and interpretations. Examples are used with excellent quality
                    ultrasound
                    images and labelled in detail which provides the newcomer with clear images to use for reference.
                </p>
                <p>
                    Its systematic and structured approach makes each chapter a learning module but also it can be a
                    reference
                    book to dip into. The chapters comprise a greater portion of images than text, and the style is direct
                    and
                    concise with appropriate practical learning points throughout given by the author with extensive
                    practical
                    experience.
                </p>
                <p>
                    The wide range of ultrasound images mean that examples of all common conditions have been collected for
                    reference. The book would be ideally placed in the ultrasound examination room for comparisons to be
                    made by
                    the sonographer in training. Qualified sonographers will also find this ideal for revision and reference
                    as
                    will trainee doctors entering fetal medicine.
                </p>
                <p>
                    I found the book ideal as a teaching aid to use in the scan room. The title gives no hint of the more
                    extended content of other first trimester anomalies found incidental to nuchal screening such as
                    megacystis
                    and omphalocoele which gives a more rounded and comprehensive picture of first trimester screening.
                </p>
                <p>
                    The inclusion of early pregnancy complications into the realm of early pregnancy assessment is useful
                    and
                    particularly the cases combining pregnancy with benign gynaecological pathology such as the complex
                    ovarian
                    cyst, fibroids and pregnancy with an IUCD. The inclusion of an IVF pregnancy and the dilemma of not
                    redating
                    it at the time of NT screening but using dating derived from IVF treatment is instructive as is the case
                    of
                    Ovarian Hyperstimulation Syndrome with co-existing pregnancy.
                </p>
                <p>
                    The setting in which the author works has allowed for uncommon scenarios to be presented such as
                    pregnancy
                    with a transplanted kidney in the pelvis. Chapter 5 incorporates a useful section on “What’s wrong with
                    these images?” which is very appropriate when auditing image quality and pertinent to everyday practice.
                </p>
                <p>
                    The last chapter comprises of 40 case presentations all relevant to pregnancy, again well illustrated,
                    some
                    more common place than others. Its size makes it a true handbook and portable to use in the work
                    environment.
                </p>
                <p>
                    The index is limited but adequate and balanced by the clearly labelled table of content in the
                    preliminary
                    pages. It’s the book to carry around and dip into regularly. The author describes that only the best
                    obtainable views have been used for illustration which makes the examples all the more useful for
                    teaching
                    purposes. The websites referenced are limited to imaging and are pertinent to the text.
                </p>",
            ],
            [
                "id" => 2,
                "title" => "Ultrasound Services in An Early Pregnancy and Acute Gynaecological Unit. Book 1",
                "author" => "OLA-OJO, OLUWAKEMI O",
                'book_cover' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015071.jpg?viewkey=037e9b66a5cfb9590d48955209dcce1d63af4f9097e4626934ed22ee8cede829',
                'link' => 'https://shop.ingramspark.com/b/084?params=Ps22anVgXRnpSVcx3zDTwpkC2GUBbhuktkLXU5Y5Yv8',
                'coming_soon' => false,
                "review" => "This book is a must-have for any sonographer working in early pregnancy and acute care. It covers the latest techniques and protocols, making it an invaluable resource for both new and experienced practitioners.",
            ],
            [
                "id" => 3,
                "title" => "Ultrasound Services in An Early Pregnancy and Acute Gynaecological Unit. Book 2",
                "author" => "Ola-Ojo, Oluwakemi",
                'book_cover' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/190801508X.jpg?viewkey=a97f90229362d7a0bb6a48fd9ba49c571caf600d6a000f0538a91e6dfde56f5d',
                'link' => 'https://shop.ingramspark.com/b/084?params=GJjL4uBvIjUAJx6XAkNne92mauRHuGsmpHyERmez3kz',
                'coming_soon' => false,
                "review" => "This book is an essential guide for sonographers performing anomaly scans. It provides detailed information on the techniques and protocols involved, making it a valuable resource for any practitioner in this field.",
            ],
            [
                "id" => 4,
                "title" => "Trisemester Scan for the Ultrasonographer",
                "author" => "Ola-Ojo, Oluwakemi",
                "book_cover" => "./images/Anomaly-Scan-Cover.jpeg",
                'link' => '/protokos-publishers',
                'coming_soon' => true,
                "review" => "This book is a comprehensive guide for sonographers performing trisemester scans. It covers the latest techniques and protocols, making it an invaluable resource for both new and experienced practitioners.",
            ],
            [
                "id" => 5,
                "title" => "Ultrasound Services in An Early Pregnancy and Acute Care",
                "author" => "Ola-Ojo, Oluwakemi, Edited by Spiliopoulos, Dimitrios,",
                "book_cover" => "./images/Trisemester-Scan-Cover.jpeg",
                'link' => '/protokos-publishers',
                'coming_soon' => true,
                "review" => "This book is a must-have for any sonographer working in early pregnancy and acute care. It covers the latest techniques and protocols, making it an invaluable resource for both new and experienced practitioners.",
            ],
            // [
            //     "id" => 6,
            //     "title" => "Ultrasound Services in An Early Pregnancy and Acute Care",
            //     "author" => "Ola-Ojo, Oluwakemi, Edited by Spiliopoulos, Dimitrios,",
            //     "book_cover" => "./images/Ultrasound-Services-Cover.jpeg",
            //     "review" => "This book is a must-have for any sonographer working in early pregnancy and acute care. It covers the latest techniques and protocols, making it an invaluable resource for both new and experienced practitioners.",
            // ],
        ];

        $book = collect($ingramSparkBooks)->firstWhere('id', (int)$id);

        return View('general.book-review', compact('book'));
    }

    public function medical()
    {
        return View('general.medical');
    }

    public function favourStore()
    {


        $ingramSparkBooks = [
            [
                'id' => 0,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015098.jpg?viewkey=55894bc2f67648b5635696810bdecf073fa155db82a99f6cb00cfb9e44afa210',
                'title' => 'FIGHT',
                'link' => 'https://shop.ingramspark.com/b/084?params=RhndQPY15vL0ez11dNXTW0OXlF9GC5PsGrq9cno4xNO',
                'author' => 'OJO, WILLIAM RUFUS, and OLADIPO, SUMBO, and OJO, OLUWAKEMI,',
            ],

            [
                'id' => 1,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015047.jpg?viewkey=159bb237960d25bca4668c568a0abaf491cefdba9600019c4ffcadbe8c35cfb7',
                'title' => ' ABC OF PEOPLE and THINGS IN THE BIBLE - Parents/Te ....',
                'link' => 'https://shop.ingramspark.com/b/084?params=rDsdCogu4s9L5NrNoFgGRPG0VWzdiQOfYgYq7MxvnWI',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],

            [
                'id' => 2,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015055.jpg?viewkey=57719d3c6a058de97497f063caa0b9b71d388131e82587fb0d61d490b3df4731',
                'title' => 'ABC of People and Things in the Bible-Childs Wor ....',
                'link' => 'https://shop.ingramspark.com/b/084?params=k5udoBQj7Pn6icBoCh3EfrP6tNsBNiZXkfZOKrtp9Vt',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],

            [
                'id' => 3,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015039.jpg?viewkey=fd195906e2aa2df1d79837c6b042d99a631f39db8c7a8558ec28f64358e900b5',
                'title' => 'ABC of People and Things in the Bible-Childs Wor ....',
                'link' => 'https://shop.ingramspark.com/b/084?params=q6mwSBGSASf0EUXviYOgUjeiORtVK3RziCJJ14nyWgA',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],

            [
                'id' => 4,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015020.jpg?viewkey=b1f54a358bce8c0a74828562901864d20a921daa83487bb9b834535bb1245943',
                'title' => 'ABC of People and Things in the Bible-Childs Wor ....',
                'link' => 'https://shop.ingramspark.com/b/084?params=wHzAYGs77j8cwpORT3dnrjKOa70UhfK7V6XVwPrckpX',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],

            [
                'id' => 5,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/190801511X.jpg?viewkey=795800446a1e69089eb9837b7b103a609bb386c0b2fb894e34a243996c17b403',
                'title' => 'The Enemy Within',
                'link' => 'https://shop.ingramspark.com/b/084?params=HjnfXm9Ksdlxg4aBWsYeZXcLejvZPjiCav0eKAWesbA',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],

            [
                'id' => 6,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015128.jpg?viewkey=02713d9a99758995690e91cdca52845ee015ab8053b983ffb6706b00866bbd6e',
                'title' => 'INSPIRATION FOR THE MAN OF VALOUR',
                'link' => 'https://shop.ingramspark.com/b/084?params=Ox9WA3awkUVWkc0Al0FFLFwp5gg17jDu6CUsFloD57t',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],

            [
                'id' => 7,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015101.jpg?viewkey=3332fb590b702c6fbae578b23e16c5ed53c0674dbf742e47b3cc8d50a2a292e0',
                'title' => 'TO THE GROOM WITH LOVE',
                'link' => 'https://shop.ingramspark.com/b/084?params=EHMEWAREIRtXhlgR3irmiUGooAGeu2ikAKBiynGEUey',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],

            [
                'id' => 8,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015063.jpg?viewkey=9f32010a5a18f9b46b104c2adf8b62ca1d7799b33d8762e0b261b252929ac060',
                'title' => 'NT Scanning for the Beginner',
                'link' => 'https://shop.ingramspark.com/b/084?params=sfNKYL9ugt6Lzt1Fi7X0UUiCvHvQJfpqnPgb4zYwthd',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],


            [
                'id' => 9,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015071.jpg?viewkey=037e9b66a5cfb9590d48955209dcce1d63af4f9097e4626934ed22ee8cede829',
                'title' => 'Ultrasound Services in An Early Pregnancy and Acut ....',
                'link' => 'https://shop.ingramspark.com/b/084?params=Ps22anVgXRnpSVcx3zDTwpkC2GUBbhuktkLXU5Y5Yv8',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],

            [
                'id' => 10,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/190801508X.jpg?viewkey=a97f90229362d7a0bb6a48fd9ba49c571caf600d6a000f0538a91e6dfde56f5d',
                'title' => 'Ultrasound Services in An Early Pregnancy and Acut ....',
                'link' => 'https://shop.ingramspark.com/b/084?params=GJjL4uBvIjUAJx6XAkNne92mauRHuGsmpHyERmez3kz',
                'author' => 'Ola-Ojo, Oluwakemi, and Spiliopoulos, Dimitrios,',
            ],

            [
                'id' => 11,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/1908015012.jpg?viewkey=e82c101810a0887c14f2134e664d464265befd0ec9eab565ab4bbcbd693e666a',
                'title' => ' GOOD DADS, BAD DADS - WORKBOOK',
                'link' => 'https://shop.ingramspark.com/b/084?params=QznpJoPX3b4Y1tRg59pXLXMhsGdaHQl64IzAic14PXi',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],
            [
                'id' => 12,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/0955789877.jpg?viewkey=f4a200deb2dd09382e92b756835fabf0362f052ddb7652ae36f25f660250499c',
                'title' => 'Let"s Reason Together - Youth"s A-Z 9 (Book 1)',
                'link' => 'https://shop.ingramspark.com/b/084?params=vAgMNv25rNCXBP0FzCbSpomVqKvve8bDT0gnKJPJf45',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],


            [
                'id' => 13,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/0955789893.jpg?viewkey=f51f5f01f5aa8dd310247d915976e64378f0c3033bf0df82a9d6d5dd8798d382',
                'title' => 'Let"s Reason Together-Youth"s A-Z. (Book 2)',
                'link' => 'https://shop.ingramspark.com/b/084?params=vAgMNv25rNCXBP0FzCbSpomVqKvve8bDT0gnKJPJf45',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],


            [
                'id' => 14,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/095578980X.jpg?viewkey=8362fba0081bc78235c00dd06dc67172944043d6580b3678a6717bd0631aa1db',
                'title' => 'Refuge Under His Wings',
                'link' => 'https://shop.ingramspark.com/b/084?params=UJengCup6rONPIxK7ZLqKwPFuFLLU4cz9LZjdOnrrZn',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],

            [
                'id' => 15,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/0955789869.jpg?viewkey=761f744597035347b4bc73cc2de47b799de3a685f80b1b090bc2b6434be7e915',
                'title' => 'There is a Reward for Parenting',
                'link' => 'https://shop.ingramspark.com/b/084?params=l4G2oFxwQ3mLeU3eGVMGfYZB0jhAhfUd1tshwlN1hL4',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],

            [
                'id' => 16,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/0955789850.jpg?viewkey=28d2ecfc4cefc5088bb742c158194f82884675b3e998a69f47f100641d811f8d',
                'title' => 'Grace or Works?',
                'link' => 'https://shop.ingramspark.com/b/084?params=ji0yZ8psCGNlV7Ybh7KcFltLWi60L2HY27jj7Ev2Nxh',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],

            [
                'id' => 17,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/0955789834.jpg?viewkey=775823d35e034e016ca383d24672d85a55511a641546705f484ca1c300a3b983',
                'title' => 'Provocation, Prayer and Praise',
                'link' => 'https://shop.ingramspark.com/b/084?params=I5m1lO6EnvSQKs3FNfcAhs1Z43UFy3YvxegRCKwbyzm',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],

            [
                'id' => 18,
                'imgSrc' => 'https://image-hub-cloud.lightningsource.com/2011-04-01/Images/front_cover/x200/sku/0955789818.jpg?viewkey=204dc8c1cb22e3d2c57757580bd8dd8871a4413ba8b9784deb0f65350b1b6d8f',
                'title' => 'GOOD MUMS, BAD MUMS',
                'link' => 'https://shop.ingramspark.com/b/084?params=I3E9M1qutTT0tdS4fBePjloLk54yn9oWj1YP7y679D3',
                'author' => 'OLA-OJO, OLUWAKEMI O',
            ],



        ];

        return View('general.favour-store', compact('ingramSparkBooks'));
    }


    public function allProducts()
    {
        $products = $this->printfulService->getSyncedProducts();
        $products = $products['result'];
        // $products = array_slice($products, 0, 30);
        // return response()->json($products);
        return view('general.all-products', compact('products'));
    }

    public function yorubaWeb()
    {
        return View('general.ede-yoruba');
    }
}
