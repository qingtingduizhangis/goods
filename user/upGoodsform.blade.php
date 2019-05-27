<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品修改页面</title>
</head>
<body>
<form action="{{route('user.upGoodsdata')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="g_id" value="{{$res->g_id}}">
    商品名称：<input type="text" name="g_name" value="{{$res->g_name}}"><p></p>
    商品图片：<input type="file" name="g_img" value="{{$res->g_img}}"><p></p>
    商品描述：<input type="text" name="g_desc" value="{{$res->g_desc}}"><p></p>
    商品价格：<input type="text" name="g_price" value="{{$res->g_price}}"><p></p>
    商品数量：<input type="text" name="g_num" value="{{$res->g_num}}"><p></p>
    <input type="submit" value="更新">
</form>
</body>
</html>