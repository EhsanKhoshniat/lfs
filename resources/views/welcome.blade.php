<!DOCTYPE html>
<html>
<head>
    <title>Laracasts</title>
</head>
<body>
    <ul>
        @foreach ($tasks as $task)   
            <li>Task {{$task->id}}: {{ $task->body }}</li>
        @endforeach
    </ul>
</body>
</html>