<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter new student</title>
</head>
<body>
    <h1>Add New Student</h1>

    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <label>First_Name: </label>
        <input type='text' name='first_name's>
        <br>

        <label>Last_Name: </label>
        <input type='text' name='last_name'>
        <br>

        <label>Email: </label>
        <input type='text' name='email'>
        <br>

        <label>Phone_Number: </label>
        <input type='integer' name='phone_number'>
        <br>

        <label>Gender: </label>
        <input type='text' name='gender'>
        <br>

        <label>Semester: </label>
        <input type='integer' name='semester'>
        <br>

        <label>Department: </label>
        <input type='text' name='department'>
        <br>

        <label>Address: </label>
        <input type='text' name='address'>
        <br>

        <button type="submit">Save Data</button>
    </form>

</body>
</html>