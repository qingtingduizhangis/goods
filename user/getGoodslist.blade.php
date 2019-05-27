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
        <td>商品名称</td>
        <td>商品图片</td>
        <td>商品描述</td>
        <td>商品价格</td>
        <td>商品数量</td>
        <td colspan="3">操作</td>
    </tr>
    @foreach($res as $v)
        <tr>
            <td>{{$v->g_id}}</td>
            <td>{{$v->g_name}}</td>
            <td><img src="/storage/{{$v->g_img}}" width="50" height="50"></td>
            <td>{{$v->g_desc}}</td>
            <td>{{$v->g_price}}</td>
            <td>{{$v->g_num}}</td>
            <td><a href="{{route('user.upGoodsform')}}?id={{$v->g_id}}">更新</a></td>
            <td><a href="{{route('user.delGoods')}}?id={{$v->g_id}}">删除</a></td>
            <td><a href="{{route('user.addGoodsform')}}">添加</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>