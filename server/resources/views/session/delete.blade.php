<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>session破棄</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">   
</head>
<body>
    <div class="mx-auto" style="margin-top: 200px; width: 800px;">
    <div class="alert alert-warning" role="alert">セッションのデータが破棄されました</div>
        <a href="/session"><button type="button" class="btn btn-primary">戻る</button></a>
    </div>
</body>
</html>