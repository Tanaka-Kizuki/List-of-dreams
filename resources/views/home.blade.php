<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/list.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>List</title>
</head>
<body>
    <div class="main" id="app">
        <div class="search">
            <form action="/home" method="post">
                @csrf
                <input type="text" name="keyword">
                <button>検索</button>
            </form>
        </div>
        <example-component></example-component>
        <do-component :items='{{$items}}'></do-component>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>