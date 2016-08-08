<?php
/**
@summer编写
@后台index主界面
 **/
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Database\Query;
use DB;
use Input;
include("./com.blade.php");
class IndexController extends BaseController{
    /**主界面展示**/
    public function adminIndex(){
        return view("content/index");
    }
    /**个人信息展示**/
    public function adminUser(){
        return view("user/person");
    }
}