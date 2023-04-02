<!DOCYTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>投稿フォーム</h1>
        <form action="/posts"method="post">
            @csrf
            <p>Title</p>
            <input type="text" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}"/>
            <p class='title_ error' style="color:red">{{$errors->first('post.title')}}</p>
            <p>Body</p>
            <textarea name="post[body]" placeholder="本文" >{{old('post.body')}}</textarea>
           <p class='body_error' style="color:red">{{$errors->first('post.body')}}</p>
        
            <input type="submit" value="保存する">
            </form>
        
       <div class="footer">
           <a href="/">戻る</a>
       </div>   
    </body>
</html>