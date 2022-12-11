<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student</title>
</head>
<body>
<h2>This is student page</h2>
<h3>List student from big-hit school</h3>
<table>
    <thead>
        <tr>
            <th>NAME</th>
            <th>NIS</th>
            <th>GENDER</th>
            <th>CLASS</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->class_id }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
<?php
