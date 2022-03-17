<div class="align_controller">
@include('layouts.admin')
    <div class="container">
        <div class="space_btn_area">
            <h2>Post ID: {{$post->id}}</h2>
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
            <div class="riga">
                <ul>
                    <li>{{$post->id}}</li>
                    <li>{{$post->title}}</li>
                    <li>{{$post->content}}</li>
                    <li>{{$post->published}}</li>
                    <li>{{$post->slug}}</li>
                    <li>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </li>
                </ul>    
            </div> 
            <div class="space_btn_area">
                <a href="{{ route('admin.posts.index')}}" class="btnStyl goback">Go back</a>
            </div>            
    </div>  
</div>    

         