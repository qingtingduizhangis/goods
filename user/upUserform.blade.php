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
<form action="{{route('user.upUserdata')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="uid" value="{{$res->uid}}">
    用户名：<input type="text" name="uname" value="{{$res->uname}}"><p></p>
    密码：<input type="text" name="pwd" value="{{$res->pwd}}"><p></p>
    电话：<input type="text" name="tel" value="{{$res->tel}}"><p></p>
    邮箱：<input type="text" name="email" value="{{$res->email}}"><p></p>
    金额：<input type="text" name="money" value="{{$res->money}}"><p></p>
    <input type="submit" value="修改">
</form>
</body>
</html>