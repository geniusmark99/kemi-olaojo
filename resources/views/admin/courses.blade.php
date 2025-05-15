@extends('layouts.admin')
@section('admin-content')
    <!-- Content -->
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <div class="max-w-4xl mx-auto mt-8">
                <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-6">
                    @csrf
                    <div>
                        <label for="title" class="block font-medium">Title</label>
                        <input type="text" name="title" id="title" class="w-full border-gray-300 rounded-lg">
                    </div>
                    <div>
                        <label for="thumbnail" class="block font-medium">Thumbnail</label>
                        <input type="file" name="thumbnail" id="thumbnail" class="w-full">
                    </div>
                    <div>
                        <label for="video" class="block font-medium">Video</label>
                        <input type="file" name="video" id="video" class="w-full">
                    </div>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->
@endsection
