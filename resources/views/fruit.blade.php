<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
</head>
<body>
<div style="width: 90%; margin: 0 auto" >
    <h2>This is fruit page</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
        </tr>
        @foreach($fruits as $fruit)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$fruit}}</td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>
<?php
