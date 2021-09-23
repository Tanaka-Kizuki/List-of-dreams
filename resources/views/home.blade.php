<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <div class="main">
        <div class="search">
            <form action="/home" method="post">
                @csrf
                <input type="text" name="keyword">
                <button>検索</button>
            </form>
        </div>
        <div class="list">
            <ul>
                <li>あああ</li>
            </ul>
        </div>
    </div>
</body>
</html>