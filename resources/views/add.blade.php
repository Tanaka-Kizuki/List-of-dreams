<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規追加</title>
</head>
<body>
    <div class="add">
        <form action="/home" method="post">
        @csrf
            <h2>やりたいこと</h2>
            <input type="text" name="do">
            <h2>最寄り駅</h2>
            <input type="text" name="train">
            <h2>タグ</h2>
            <input type="radio" value="やりたいこと" name="tag" checked="true">やりたいこと
            <input type="radio" value="カフェ" name="tag">カフェ
            <input type="submit" value="保存">
        </form>
    </div>
</body>
</html>