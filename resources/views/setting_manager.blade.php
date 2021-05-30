<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('setting.store') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="value1" placeholder="name">
            <input type="text" name="name1" placeholder="name">
        </div>
        <div>
            <input type="text" name="value2" placeholder="name">
            <input type="text" name="name2" placeholder="name">
        </div>
        <div>
            <input type="text" name="value3" placeholder="name">
            <input type="text" name="name3" placeholder="name">
        </div>
        <div>
            <input type="text" name="value4" placeholder="name">
            <input type="text" name="name4" placeholder="name">
        </div>
        <div>
            <input type="text" name="value5" placeholder="name">
            <input type="text" name="name5" placeholder="name">
        </div>
        <button type="submit">Submit</button>
    </form>
    <div>
        <table>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>discription</th>
                <th>slug</th>
            </tr>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->title }}</td>
                <td>{{ $course->discription }}</td>
                <td>{{ $course->slug }}</td>
            </tr>
        @endforeach
    </table>
    </div>
</body>
</html>