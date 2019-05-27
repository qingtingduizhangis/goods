<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    //查用户表的用户基本信息
    public function getAll(){
        return DB::table('user')->get();
    }
    //根据id查出要修改的用户的数据
    public function findUpuser($id){
        return DB::table('user')->where(['uid'=>$id])->first();
    }
    //修改用户表中的数据
    public function upUsers($id,$uname,$pwd,$tel,$email,$money){
        return DB::table('user')->where(['uid'=>$id])->update([
           'uname'   => $uname,
            'pwd'    => $pwd,
            'tel'    => $tel,
            'email'  => $email,
            'money'  => $money,
        ]);
    }
    //众筹商品入库
    public function addGoodsdata($g_name,$g_desc,$g_price,$g_num,$store_result){
        return DB::table('goods')->insert([
            'g_name' => $g_name,
            'g_desc' => $g_desc,
            'g_price' => $g_price,
            'g_num' => $g_num,
            'g_img' => $store_result,
        ]);
    }
    //查商品表的全部数据
    public function findGoods(){
        return DB::table('goods')->get();
    }
    //删除商品
    public function delGoodsdata($id){
        return DB::table('goods')->where(['g_id'=>$id])->delete();
    }
    //根据id查出要修改的商品的数据
    public function findUpgoods($id){
        return DB::table('goods')->where(['g_id'=>$id])->first();
    }
    //修改数据库里商品的数据
    public function upGoods($id,$g_name,$g_desc,$g_price,$g_num,$store_result){
        return DB::table('goods')->where(['g_id'=>$id])->update([
            'g_name' => $g_name,
            'g_desc' => $g_desc,
            'g_price' => $g_price,
            'g_num' => $g_num,
            'g_img' => $store_result,
        ]);
    }
    //众筹信息入库
    public function addinfodata($gid,$start_time,$end_time,$peoplesum,$peoplenow,$c_money,$c_status){
        return DB::table('goods_info')->insert([
            'gid' => $gid,
            'start_time' => $start_time,
            'end_time' => $end_time,
            'peoplesum' => $peoplesum,
            'peoplenow' => $peoplenow,
            'c_money' => $c_money,
            'c_status' => $c_status,
        ]);
    }
    //查询众筹信息
    public function findInfo(){
        return DB::table('goods_info')->get();
    }
    //删除众筹信息
    public function delInfodata($id){
        return DB::table('goods_info')->where(['c_id'=>$id])->delete();
    }
    //查出要修改的数据
    public function findUpinfos($id){
        return DB::table('goods_info')->where(['c_id'=>$id])->first();
    }
    //修改众筹信息数据
    public function upInfo($id,$gid,$start_time,$end_time,$peoplesum,$peoplenow,$c_money,$c_status){
        return DB::table('goods_info')->where(['c_id'=>$id])->update([
            'gid' => $gid,
            'start_time' => $start_time,
            'end_time' => $end_time,
            'peoplesum' => $peoplesum,
            'peoplenow' => $peoplenow,
            'c_money' => $c_money,
            'c_status' => $c_status,
        ]);
    }
}
