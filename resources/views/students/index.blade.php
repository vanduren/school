<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach($students as $student)
            <a href="{{ route('students.edit', $student) }}">{{ $student->name }}</a><br>
        @endforeach
    </div>
</body>
</html>
