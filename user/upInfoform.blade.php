<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>众筹信息添加页面</title>
</head>
<body>
<form action="{{route('user.upInfodata')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="c_id" value="{{$res->c_id}}">
    商品名称：<input type="text" name="gid" value="{{$res->gid}}"><p></p>
    开始时间：<input type="date" name="start_time" value="{{$res->start_time}}"><p></p>
    结束时间：<input type="date" name="end_time" value="{{$res->end_time}}"><p></p>
    总人数：<input type="text" name="peoplesum" value="{{$res->peoplesum}}"><p></p>
    当前人数：<input type="text" name="peoplenow" value="{{$res->peoplenow}}"><p></p>
    众筹金额：<input type="text" name="c_money" value="{{$res->c_money}}"><p></p>
    众筹状态：
    @if($res->c_status == '众筹中')
    <select name="c_status">
        <option value="众筹中" selected="selected">众筹中</option>
        <option value="众筹成功">众筹成功</option>
        <option value="众筹失败">众筹失败</option>
    </select><p></p>
        @elseif($res->c_status == '众筹成功')
        <select name="c_status">
            <option value="众筹中">众筹中</option>
            <option value="众筹成功" selected="selected">众筹成功</option>
            <option value="众筹失败">众筹失败</option>
        </select><p></p>
      @elseif($res->c_status == '众筹失败')
        <select name="c_status">
            <option value="众筹中">众筹中</option>
            <option value="众筹成功">众筹成功</option>
            <option value="众筹失败" selected="selected">众筹失败</option>
        </select><p></p>
    @endif
    <input type="submit" value="修改">
</form>
</body>
</html>