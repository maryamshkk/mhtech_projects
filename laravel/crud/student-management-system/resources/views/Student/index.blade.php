<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body>
    <h1 class="text-3xl font-bold  pt-5 pb-5 text-center text-white bg-amber-950">
      Student Managemet System
    </h1>
    <a href="{{ route('student.create') }}" class="pl-10 ">Add New Student </a>

    <table class="border-2 mt-10">
        <tr>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>Email</th>
            <th>Phone_Number</th>
            <th>Gender</th>
            <th>Semester</th>
            <th>Department</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        @foreach($students as $student)

        <tr>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone_number }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->semester }}</td>
            <td>{{ $student->department }}</td>
            <td>{{ $student->address }}</td>

            <td>
            <a href="{{ route('student.edit', $student) }}">Edit </a>
            <form action="{{ route('student.destroy', $student) }}" class='cursor-pointer' method="POST">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>

  </body>
</html>