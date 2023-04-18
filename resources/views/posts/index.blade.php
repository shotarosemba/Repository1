<x-app-layout>
      

    <body>
        <div>
            @foreach($questions as $question)
            <div>
            <a href="https://teratail.com/questions/{{ $question['id']}}">
                {{$question['title']}}
            </a>
            </div>
            @endforeach
            </div>
        <h1>Blog Name</h1>
        
        <a href='/posts/create'>create blog</a>
        <div class='posts'>
            {{Auth::user()->naame}}
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
        
        <script>
        function deletepost(id)   
        {
            'use strict'
            if(confirm("削除すると復元できません。\n本当に削除しますか？"))
            {document.getElementById(`form_${id}`).submit();}
        }
        </script>
    </body>
</x-app-layout>