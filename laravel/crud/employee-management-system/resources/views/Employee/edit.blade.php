<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Employee </h1>
    <form action="{{ route('employee.update', $employee) }}" method="POST">
        <!-- yeh kia hota  -->
        @csrf @method('PUT')
        <p>Full_Name:
        <input type="text" name="full_name" value="{{$employee->full_name}}" required>
        <p>
        <br>

        <p>Email:
        <input type='text' name='email' value="{{$employee->email}}">
        <p>
        <br>

        <p>Phone number:
        <input type='number' name='phone_number' value="{{$employee->phone_number}}">
        <p>
        <br>

        <p>Department: 
        <input type='text' name='department' value="{{$employee->department}}">
        </p>
        <br>

        <p>Position:
        <input type='text'  name='position' value="{{$employee->position}}"> 
        </p>
        <br>

        <p>Salary: 
        <input type='number' name='salary' value="{{$employee->salary}}"> 
        <p>
        <br>

        <p>Joining date
        <input type='date' name='joining_date' value="{{$employee->joining_date}}"> 
        </p>
        <br>

        <p>Address: 
        <input type='text' name='address' value="{{$employee->address}}"> 
        </p>
        <br>
        <button type="submit">Update</button> 
</form>
</body>
</html>