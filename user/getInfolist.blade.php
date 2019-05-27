<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>众筹信息列表</title>
</head>
<body>
<table style="border: 2px solid greenyellow">
    <tr>
        <td>id</td>
        <td>商品名称</td>
        <td>开始时间</td>
        <td>结束时间</td>
        <td>总人数</td>
        <td>当前人数</td>
        <td>众筹金额</td>
        <td>众筹状态</td>
        <td colspan="3">操作</td>
    </tr>
    @foreach($res as $v)
        <tr>
            <td>{{$v->c_id}}</td>
            <td>{{$v->gid}}</td>
            <td>{{$v->start_time}}</td>
            <td>{{$v->end_time}}</td>
            <td>{{$v->peoplesum}}</td>
            <td>{{$v->peoplenow}}</td>
            <td>{{$v->c_money}}</td>
            <td>{{$v->c_status}}</td>
            <td><a href="{{route('user.upInfoform')}}?id={{$v->c_id}}">修改</a></td>
            <td><a href="{{route('user.delInfo')}}?id={{$v->c_id}}">删除</a></td>
            <td><a href="{{route('user.addInfoform')}}">创建</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>