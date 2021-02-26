<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracel_Storage</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    @include('partials.nav')
    <form action="/files" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" id="">
        <button type="submit" class="btn btn-success"> Add</button>
    </form>
    <script src="{{asset('js/app.js')}}"></script> 
</body>
</html>