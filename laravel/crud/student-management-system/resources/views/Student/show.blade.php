<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
        <p>{{ $student->first_name }}</p>
        <p>{{ $student->last_name }}</p>
        <p>{{ $student->email }}</p>
        <p>{{ $student->phone_number }}</p>
        <p>{{ $student->gender }}</p>
        <p>{{ $student->semester }}</p>
        <p>{{ $student->department }}</p>
        <p>{{ $student->address }}</p>

        <a href=" {{ route('student.index') }}"> Back </a>
</body>
</html>