<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>セッション利用</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">   
</head>
<body>
    <div class="mx-auto" style="margin-top: 100px; width: 800px;">
        @if (Session::has('msg'))
            <h2>session()->flashはリロードすると破棄されます</h2>         
            <div class="alert alert-success" role="alert"><span class="badge badge-secondary">session:msg</span> {{ Session::get('msg') }}</div>            
        @endif

        @if (Session::has('text'))
            <h2>session()->put</h2>  
            <div class="alert alert-success" role="alert"><span class="badge badge-secondary">session:text</span> {{ Session::get('text') }}</div>
            <a href="session/delete"><button type="button" class="btn btn-danger">セッションを破棄</button></a>
            @else
            <h2>セッションは存在しません</h2>
        @endif

        @if (!Session::has('text'))
        <form action="session" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">テキストを入力</label>
                <input type="text" class="form-control" name="text">
                <button type="submit" class="btn btn-primary">保存</button>
            </div>
        </form>
        @endif
    </div>
</body>
</html>