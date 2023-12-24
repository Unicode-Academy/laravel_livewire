<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @livewireStyles
</head>
<body>
    @php 
        $title = "Create Posts";
    @endphp
    <h1>Demo Livewire</h1>
    <livewire:counter />
    <livewire:posts.create-post :title="$title"/>
    @livewireScripts
</body>
</html>
