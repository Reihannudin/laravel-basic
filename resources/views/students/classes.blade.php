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
        <th>Student</th>
         <th>Teacher</th>
    </tr>
    </thead>
    <tbody>
    @foreach($classes as $class)
        <tr>
            <td>{{ $class->name }}</td>
            <td>
                @foreach($class->students as $student)
                    - {{$student->name}} <br/>
                @endforeach
            </td>
            <td>
                @foreach($class->teacher as $teach)
                    {{$teach->name}} <br/>
                @endforeach
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
<?php
