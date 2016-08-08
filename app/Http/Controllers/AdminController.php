<?php
/**
@summer编写
@后台登陆界面
 **/
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Session;
use DB;
use Input;
class AdminController extends BaseController{
    /**后台登陆展示**/
    public function adminShow(){
        return view("login/admin");
    }
    /**后台登录**/
    public function adminLogin(Request $request){
        $user=htmlspecialchars($request->input("user"));
        $pwd=md5(htmlspecialchars($request->input("pwd")));

        /**防止sql注入**/
        //DB::connection()->enableQueryLog();
        $result = DB::table('login')->where('user', $user)->where('pwd', $pwd)->first();
        //$queries = DB::getQueryLog();
        //print_r($queries);
        if($result){
           echo "1";
        }else{
            echo "0";
        }
    }
    /**后台注册**/
    public function adminZhu(Request $request){
        if(empty($_POST)){
            return view("login/zhu");
        }else{
            $user=htmlspecialchars($request->input("user"));
            $pwd=md5(htmlspecialchars($request->input("pwd")));
            $psw=md5(htmlspecialchars($request->input("psw")));
            if($psw==$pwd){
                DB::table("login")->insert(['user'=>$user,'pwd'=>$pwd,'psw'=>$psw]);
                echo "1";
            }else{
                echo "0";
            }
        }
    }
}