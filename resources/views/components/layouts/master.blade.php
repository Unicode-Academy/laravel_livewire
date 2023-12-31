<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Unicode Academy' }}</title>
    <meta name="description" content="{{$description ?? 'Unicode Academy'}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

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
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    {{$slot}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</body>

</html>