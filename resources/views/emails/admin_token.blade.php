<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protokos Medical Admin Token Verification</title>
</head>

<body style="background-color: #f3f4f6; padding: 10px 4px;">

    <div
        style="max-width: 28rem; margin: 0 auto; background-color: #ffffff; border-radius: 0.5rem; overflow: hidden; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); padding: 1.5rem;">
        <div style="display: flex; justify-content: center; margin-bottom: 1rem;">


            <img src="https://kemi-olaojo.com/images/Protokos-logo.png" alt="Ageno Logo"
                style="height: 60px; width: 60px; border-radius: 9999px; display: block; margin: 0 auto; 
                object-fit: contain">
        </div>

        <h2 style="font-size: 1.25rem; font-weight: 600; color: #1f2937; text-align: center; margin-bottom: 1rem;">
            Two-Factor Authentication Token</h2>

        <p style="color: #4b5563; font-size: 1rem; line-height: 1.625; margin-bottom: 1rem;">
            Hello {{ $adminName }},
        </p>

        <p style="color: #4b5563; font-size: 1rem; line-height: 1.625; margin-bottom: 1rem;">
            Your authentication token is required to complete your login. Please enter the code below within 10 minutes
            to confirm your login attempt.
        </p>

        <!-- Token Code -->
        <div
            style="display: flex; justify-content: center; align-items: center; margin-top: 1.5rem; margin-bottom: 1rem;">
            <span
                style="padding: 0.5rem 1rem; background-color: #4f46e5; color: #ffffff; font-weight: 600; font-size: 1.125rem; letter-spacing: 0.05em; border-radius: 0.5rem;">
                {{ $token }}
            </span>
        </div>

        <!-- Footer -->
        <div style="text-align: center; border-top: 1px solid #e5e7eb; padding-top: 1rem;">
            <p style="font-size: 0.75rem; color: #6b7280;">© {{ date('Y') }} Protokos. All rights reserved.</p>
        </div>
    </div>

</body>

</html>
