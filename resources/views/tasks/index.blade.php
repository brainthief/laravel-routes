<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<ul>
    @foreach ($tasks as $task)
        <li><a href="{{$task->id}}">{{$task->body}}</a></li>
    @endforeach
</ul>
</body>

</html>