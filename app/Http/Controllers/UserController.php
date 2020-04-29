<?php
namespace App\Http\Controllers;

use Illuminate\http\Request;

class UserController extends Controller{
     public function index(Request $request, $name){
         $age = $request->age;
         $sex = $request->sex;
         //return'哈哈哈哈'.$name.'ihpone'.$age.'ppd'.$sex;
         return view('test',['age'=>$age,'sex'=>$sex]);
     }
}

?>