<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use DB;
class DBController extends Controller
{
    /**
     * 查询
     */
    public function select(){
    	$res = DB::select('select * from user limit 5');
    	dd($res);
    }

    /**
     * 事务
     */
    public function trans(){

    	DB::transaction(function(){
	    	$res1 = DB::update('update user set account = account - 100 where id = 1');
	    	$res2 = DB::update('update user set account = account + 100 where id = 2');

	    	if( $res1 && $res2 ){
	    		DB::commit();
	    	}else{
	    		DB::rollback();
	    	}


    		// try{
    		// 	$res2 = DB::update('update user sets account = account + 100 where id = 2');
    		// }catch(\Exception $e){
    		// 	echo $e->getMessage();
    		// }
    		// echo 222;

    	});

    	return view('page1');

    }

    /**
     * join
     */
    public function join(){
    	$res = DB::table('goods')
    	->join('type','goods.typeid','=','type.id')
    	->skip(0)
    	->take(10)
    	->get();
    	dd($res);
    }



}
