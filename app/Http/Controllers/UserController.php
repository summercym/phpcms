<?php
/**
@summer编写
@管理员界面
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
include("./com.blade.php");
class UserController extends BaseController{
    /**管理员添加**/
    public function userAdd(){
        return view("user/add");
    }
}