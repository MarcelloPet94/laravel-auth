<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Articoli</title>
</head>
<body>

<div class="container">
    <div class="row ind">
        <ul>
            <li>ID</li>
            <li>Title</li>
            <li>Contenuto</li>
            <li>Stato</li>
            <li>Slug</li>
            <li>Operation</li>
        </ul>
    </div>
    @foreach ($posts as $post)
        <div class="row">
            <ul>
                <li>{{$post->id}}</li>
                <li>{{$post->title}}</li>
                <li>{{$post->content}}</li>
                <li>{{$post->published}}</li>
                <li>{{$post->slug}}</li>
                <li>
                    <a href="#">Open</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </li>
            </ul>    
        </div> 
    @endforeach    
</div>       
</body>
</html>