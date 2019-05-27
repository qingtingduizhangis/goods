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
<table style="border: 2px solid greenyellow">
    <tr>
        <td>id</td>
        <td>用户名</td>
        <td>密码</td>
        <td>电话</td>
        <td>邮箱</td>
        <td>钱</td>
        <td>操作</td>
    </tr>
    @foreach($res as $v)
    <tr>
        <td>{{$v->uid}}</td>
        <td>{{$v->uname}}</td>
        <td>{{$v->pwd}}</td>
        <td>{{$v->tel}}</td>
        <td>{{$v->email}}</td>
        <td>{{$v->money}}</td>
        <td><a href="{{route('user.upUserform')}}?id={{$v->uid}}">修改</a></td>
    </tr>
        @endforeach
</table>
<p></p>
<a href="{{route('user.getInfolist')}}">众筹商品信息管理</a><p></p>
<a href="{{route('user.getGoodslist')}}">商品管理</a><p></p>
</body>
</html>