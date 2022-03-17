<div class="align_controller">
@include('layouts.admin')
    <div class="container">
        <div class="space_btn_area">
            <h2>Lista dei post</h2>
            <a href="{{ route('admin.posts.index')}}" class="btnStyl goback">Crea</a>
        </div>           
        <div class="riga ind">
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
            <div class="riga">
                <ul>
                    <li>{{$post->id}}</li>
                    <li>{{$post->title}}</li>
                    <li>{{$post->content}}</li>
                    <li>{{$post->published}}</li>
                    <li>{{$post->slug}}</li>
                    <li>
                        <a href="{{ route('admin.posts.show', $post->id) }}">Open</a>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </li>
                </ul>    
            </div> 
        @endforeach    
    </div>        