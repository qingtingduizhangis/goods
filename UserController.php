<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    //查询用户的基本信息
    public function getUserinfo(){
        $m = new User();
        $res = $m->getAll();
        return view('user.getUserinfo',['res'=>$res]);
    }
    //要修改的用户的页面
    public function upUserform(Request $request){
        $id = $request->get('id');
        $m = new User();
        $res = $m->findUpuser($id);
        return view('user.upUserform',['res'=>$res]);
    }
    //修改用户的数据
    public function upUserdata(Request $request){
        $id = $request->post('uid');
        $uname = $request->post('uname');
        $pwd = $request->post('pwd');
        $tel = $request->post('tel');
        $email = $request->post('email');
        $money = $request->post('money');
        $m = new User();
        $res = $m->upUsers($id,$uname,$pwd,$tel,$email,$money);
        if($res){
           return "<script>alert('修改成功');location.href='getUserinfo';</script>";
        }else{
           return "<script>alert('修改失败');location.href='getUserinfo';</script>";
        }
    }
    //众筹商品添加表单
    public function addGoodsform(){
        return view('user.addGoodsform');
    }
    //商品数据入库
    public function addGoods(Request $request){
        $g_name = $request->post('g_name');
        $g_desc = $request->post('g_desc');
        $g_price = $request->post('g_price');
        $g_num = $request->post('g_num');
        $g_img = $request->file('g_img');
        $store_result = $g_img->store('g_img');
        $m = new User();
        $res = $m->addGoodsdata($g_name,$g_desc,$g_price,$g_num,$store_result);
        if($res){
            return "<script>alert('添加成功');location.href='getGoodslist';</script>";
        }else{
            return "<script>alert('添加失败');location.href='getGoodslist';</script>";
        }
    }
    //众筹产品列表显示
    public function getGoodslist(){
        $m = new User();
        $res = $m->findGoods();
        return view('user.getGoodslist',['res'=>$res]);
    }
    //根据id删除商品
    public function delGoods(Request $request){
        $id = $request->get('id');
        $m = new User();
        $res = $m->delGoodsdata($id);
        if($res){
            return "<script>alert('删除成功');location.href='getGoodslist';</script>";
        }else{
            return "<script>alert('删除失败');location.href='getGoodslist';</script>";
        }
    }
    //要更新的商品的数据
    public function upGoodsform(Request $request){
        $id = $request->get('id');
        $m = new User();
        $res = $m->findUpgoods($id);
        return view('user.upGoodsform',['res'=>$res]);
    }
    //修改商品数据
    public function upGoodsdata(Request $request){
        $id = $request->post('g_id');
        $g_name = $request->post('g_name');
        $g_desc = $request->post('g_desc');
        $g_price = $request->post('g_price');
        $g_num = $request->post('g_num');
        $g_img = $request->file('g_img');
        $store_result = $g_img->store('g_img');
        $m = new User();
        $res = $m->upGoods($id,$g_name,$g_desc,$g_price,$g_num,$store_result);
        if($res){
            return "<script>alert('修改成功');location.href='getGoodslist';</script>";
        }else{
            return "<script>alert('修改失败');location.href='getGoodslist';</script>";
        }
    }
    //众筹信息的添加表单
    public function addInfoform(){
        return view('user.addInfoform');
    }
    //众筹信息创建
    public function addInfo(Request $request){
        $gid = $request->post('gid');
        $start_time = $request->post('start_time');
        $end_time = $request->post('end_time');
        $peoplesum = $request->post('peoplesum');
        $peoplenow = $request->post('peoplenow');
        $c_money = $request->post('c_money');
        $c_status = $request->post('c_status');
        $m = new User();
        $res = $m->addinfodata($gid,$start_time,$end_time,$peoplesum,$peoplenow,$c_money,$c_status);
        if($res){
            return "<script>alert('添加成功');location.href='getInfolist';</script>";
        }else{
            return "<script>alert('添加失败');location.href='getInfolist';</script>";
        }
    }
    //众筹信息列表显示
    public function getInfolist(){
        $m = new User();
        $res = $m->findInfo();
        return view('user.getInfolist',['res'=>$res]);
    }
    //删除众筹信息
    public function delInfo(Request $request){
        $id = $request->get('id');
        $m = new User();
        $res = $m->delInfodata($id);
        if($res){
            return "<script>alert('删除成功');location.href='getInfolist';</script>";
        }else{
            return "<script>alert('删除失败');location.href='getInfolist';</script>";
        }
    }
    //根据id查出要修改的信息数据
    public function upInfoform(Request $request){
        $id = $request->get('id');
        $m = new User();
        $res = $m->findUpinfos($id);
        return view('user.upInfoform',['res'=>$res]);
    }
    //修改数据众筹信息
    public function upInfodata(Request $request){
        $id = $request->post('c_id');
        $gid = $request->post('gid');
        $start_time = $request->post('start_time');
        $end_time = $request->post('end_time');
        $peoplesum = $request->post('peoplesum');
        $peoplenow = $request->post('peoplenow');
        $c_money = $request->post('c_money');
        $c_status = $request->post('c_status');
        $m = new User();
        $res = $m->upInfo($id,$gid,$start_time,$end_time,$peoplesum,$peoplenow,$c_money,$c_status);
        if($res){
            return "<script>alert('修改成功');location.href='getInfolist';</script>";
        }else{
            return "<script>alert('修改失败');location.href='getInfolist';</script>";
        }
    }
}
