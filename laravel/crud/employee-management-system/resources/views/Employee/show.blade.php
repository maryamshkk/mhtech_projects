<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- hum show mein kia likhte hain aur kun likhte hain  -->
    <h1>{{ $employee->full_name}} </h1>
    <p>Full_Name: ${{$employee->full_name}} </p>
    <p>Email: {{ $employee->email }}</p>
    <p>Phone_Number {{ $employee->phone_number }}</p>
    <p>Department {{ $employee->department }}</p>
    <p>Position {{ $employee->position }}</p>
    <p>Salary {{ $employee->salary }}</p>  
    <p>Joining Date {{ $employee->joining_date }}</p>
    <p>Address{{ $employee->address }}</p>

    <a href="{{ route('employee.index') }}"> Back </a>
</body>
</html>