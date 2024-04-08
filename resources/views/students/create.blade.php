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
        <form action="{{route('students.store')}}" method="POST">
            @csrf
            <input type="text" name="name"><br>
            <select name="school_class_id">
                @foreach ($school_classes as $school_class)
                    <option value="{{$school_class->id}}">{{$school_class->name}}</option>
                @endforeach
            </select>
            <br>
            <input type="submit" value="bewaar">
            {{ $errors->first('name') }}
            {{ $errors->first('school_class_id') }}
        </form>
    </div>
</body>
</html>
