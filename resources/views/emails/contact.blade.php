<!DOCTYPE html>
<html>

<head>
    <title>Contact Message</title>
</head>

<body>
    <h2>New Contact Message</h2>
    <p><strong>Fullname:</strong> {{ $data['lastname'] }} {{ $data['firstname'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Message:</strong><br>{{ $data['message'] }}</p>
</body>

</html>
