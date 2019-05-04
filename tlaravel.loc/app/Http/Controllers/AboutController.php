<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AboutController extends Controller
{
	

    //
    public function index(){
		$products = DB::table('product')->get();
		
    	$data = [
    			"title" => "My Food",
    			"products" =>$products
    	];

    	return view('about',$data);


	}

	
	
	


	
    
}
