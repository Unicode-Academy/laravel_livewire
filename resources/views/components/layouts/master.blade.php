<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Unicode Academy' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .todos {
            padding: 20px;
        }

        .todos .todo-list {
            list-style: none;
        }

        .todos .todo-list span.completed {
            text-decoration: line-through;
            color: gray;
        }
    </style>
</head>

<body>
    {{$slot}}
</body>

</html>