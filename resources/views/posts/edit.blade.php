<!DOCYTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
         <h1>編集</h1>
         
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            
            <p>Title</p>
            <input type="text" name="post[title]" placeholder="タイトル" value="{{$post->title}}"/>
           
            <p>Body</p>
            <input type='text' name="post[body]" placeholder="本文" value="{{$post->body}}">
          
        <p>
            <input type="submit" value="edit">
            </form>
            </p>
        
       <div class="footer">
           <a href="/posts/{{$post->id}}">戻る</a>
       </div>   
    </body>
</html>