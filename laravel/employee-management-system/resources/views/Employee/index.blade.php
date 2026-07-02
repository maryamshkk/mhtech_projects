<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="{{ route('employee.create') }}">Add Employee</a>
    <table border="1">
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Department</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Joining Date</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->full_name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->phone_number }}</td>
            <td>{{ $employee->department }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
            <td>{{ $employee->joining_date }}</td>
            <td>{{ $employee->address }}</td>
            <td>
                <a href="{{ route('employee.edit', $employee) }}">Edit</a>
                <form action="{{ route('employee.update', $employee)}}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
</table>
</body>
</html>