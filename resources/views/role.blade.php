<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Role</title>
</head>
<body>
<h2>This is role page</h2>

{{-- if directive --}}
<h1>With if directive</h1>
@if ($role == 'manager')
    <h2>Hei {{$name}} kamu adalah seorang manager</h2>
@elseif ($role==='staff')
    <h2>Hei {{$name}} kamu adalah seorang karyawan</h2>
@else
    <h2>Hei {{$name}} kamu bukan seseorang yang berkerja disini</h2>
@endif

{{--switch directive--}}
<h1>With Switch directive</h1>
@switch($role)
    @case($role=='manager')
        <h2>Hei {{$name}} kamu adalah seorang manager</h2>
        @break
    @case($role =='staff')
        <h2>Hei {{$name}} kamu adalah seorang karyawan</h2>
        @break
    @default
        <h2>Hei {{$name}} kamu bukan seseorang yang berkerja disini</h2>
@endswitch
</body>
</html>
