<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('post.crm.login')}}" method="post">
    @csrf
    @method('post')
    <input type="text" name="market_name">
    <input type="text" name="market_password">
    <button type="submit">w</button>
</form>
</body>
</html>
