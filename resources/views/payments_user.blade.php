<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>start</th>
            <th>end</th>
            <th>type</th>
        </tr>
        
            @foreach ($payment as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->start_sub }}</td>
                <td>{{ $item->expire_sub }}</td>
                <td>{{ $item->subscriptions->title }}</td>
            </tr>
            @endforeach
    </table>
</body>
</html>