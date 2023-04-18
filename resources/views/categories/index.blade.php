<!DOCYTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div>
            @foreach($questions as $question)
            <a href="https://teratail.com/questions/{{ $question['id']}}"></a>
            <div>{{$questioon['title']}}</div>
            @endforeach
            </div>
        </div>
        <h1>Blog Name</h1>
        <a href='/posts/create'>create blog</a>
        <div class='posts'>
            @foreach ($posts as $post)
             <div class='post'>
                 <h2 class='title'>
                     <a href="/posts/{{$post->id}}">{{ $post->title }}</a>
                     </h2>
                 <p class='body'>{{$post->body}}</p>
                 <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>
                 <form action ="/posts/{{$post->id}}"   id="form_{{$post->id}}"  method="POST" >
                    @csrf
                    @method('DELETE')
                    <p>
                    <button type="button" onclick="deletepost({{$post->id}})" >
                         DELETE</button>
                    </p>
                 </form>
                 
                 
        </div>
        @endforeach
        </div>
        <div class='paginate'>
            {{$posts->links() }}
        </div>
        <a href="/">戻る</a>
        <script>
        function deletepost(id)   
        {
            'use strict'
            if(confirm("削除すると復元できません。\n本当に削除しますか？"))
            {document.getElementById(`form_${id}`).submit();}
        }
        </script>
    </body>
</html>
