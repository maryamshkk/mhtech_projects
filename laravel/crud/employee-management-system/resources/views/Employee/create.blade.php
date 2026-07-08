<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Employee</h2>
    <form action="{{ route('employee.store') }}" method="POST">
            @csrf  
        <br> 
            <div> 
                <label>Full Name</label> <input type="text" name="full_name"> 
            </div> 
        <br> 
            <div> 
                <label>Email</label> <input type="email" name="email"> 
            </div> 
        <br> 
            <div> 
                <label>Phone Number</label> <input type="text" name="phone_number"> 
            </div> 
        <br> 
            <div> 
                <label>Department</label> <input type="text" name="department"> 
            </div> 
        <br> 
            <div> <label>Position</label> <input type="text" name="position"> </div> 
        <br> 
            <div> <label>Salary</label> <input type="number" name="salary"> </div> 
        <br> 
            <div> <label>Joining Date</label> <input type="date" name="joining_date"> </div> 
        <br> 
            <div> <label>Address</label> <textarea name="address"></textarea> </div> 
        <br> 
            <button type="submit">Save Employee</button> 
        </form>

</body>
</html>