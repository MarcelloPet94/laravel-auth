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
    @dump($posts)
    <table>
        <tr>
            <th>ID</th>
            <th>title</th>
            <th>Content</th>
            <th>Published state</th>
            <th>Slug</th>
        </tr>    
        @foreach ($posts as $post)
        <tr>    
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->published}}</td>
            <td>{{$post->slug}}</td>   
        </tr>
        @endforeach
    </table>    
</body>
</html>