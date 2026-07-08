<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Add New Student</h1>

    <form action="{{ route('student.update', $student) }}" method="POST">
        @csrf @method('PUT')
        <label>First_Name: </label>
        <input type='text' name='first_name' value="{{$student->first_name}}" required>
        <br>

        <label>Last_Name: </label>
        <input type='text' name='last_name' value="{{$student->last_name}}">
        <br>

        <label>Email: </label>
        <input type='text' name='email' value="{{$student->email}}">
        <br>

        <label>Phone_Number: </label>
        <input type='integer' name='phone_number' value="{{$student->phone_number}}">
        <br>

        <label>Gender: </label>
        <input type='text' name='gender' value="{{$student->gender}}">
        <br>

        <label>Semester: </label>
        <input type='integer' name='semester' value="{{$student->semester}}">
        <br>

        <label>Department: </label>
        <input type='text' name='department' value="{{$student->department}}">
        <br>

        <label>Address: </label>
        <input type='text' name='address' value="{{$student->address}}">
        <br>

        <button type="submit">Update </button>
    </form>

</body>
</html>