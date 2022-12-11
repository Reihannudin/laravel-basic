<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class</title>
</head>
<body>
<h2>This is class page</h2>
<h3>List class from big-hit school</h3>
<table>
    <thead>
    <tr>
        <th>Classname</th>
{{--        <th>Teacher</th>--}}
{{--        <th>Student</th>--}}
    </tr>
    </thead>
    <tbody>
    @foreach($classes as $class)
        <tr>
            <td>{{ $class->name }}</td>
{{--            <td>{{ $student->nis }}</td>--}}
{{--            <td>{{ $student->gender }}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
<?php
