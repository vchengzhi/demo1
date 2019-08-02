<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * cookie设置
     */
    public function set(){
        //设置
        //\Cookie::queue('name','cc','10');
        //读取
        $name = \Cookie::get('name');
        dd($name);
    }

    /**
     * 写入闪存
     */
    public function flash(){
        // \Session::flash('info','恭喜您，添加成功');
        return redirect('get-flash')->with('info','添加成功');
    }

    /**
     * 读取闪存
     */

    public function getFlash(){
        //echo \Session::get('info');
        return view('admin');
    }

    public function user(){
        return view('user');
    }

    public function insert(){
        //表单验证 检测用户 密码
        if( empty($_POST['username']) || strlen($_POST['username']) < 6 || strlen($_POST['username']) > 20 ){
            \Session::flash('error','用户名格式不正确');
            return back()->withInput();
        }
    }

    /**
     * 响应
     */
    public function response(){
        //普通字符串
        //return 'cc';
        //return '<span>这是span</span>';

        //返回json
        //return response()->json(['name'=>'cc','age'=>27]);
        //return view('view');
        
        //下载
        return response()->download('../readme.md');

    }

    /**
     * 视图
     */
    public function views(){
        return view('user.add',[
            'title' => '第一次接触视图',
            'content' => '内容',
            'page' => '<a href="1.html">1</a><a href="2.html">2</a>',
            ]);
        //在 resources/views 下创建 user文件夹 在 user 下创建 add.blade.php
    }

    /**
     * 创建页面1
     */
    public function page1(){
        return view('page1');
    }

    /**
     * 创建页面1
     */
    public function page2(){
        return view('page2');
    }

    /**
     * 控制
     */
    public function control(){
        return view('control',[
            'isVip' => true,
            'classmates' => [
                '贾诩',
                '李冰',
                '杨洋'
            ]

        ]);
    }


}
