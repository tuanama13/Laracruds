<?php

namespace App\Http\Controllers;

use App\Apiartikel;
use Illuminate\Http\Request;

class ControllerApiartikel extends Controller
{
    public function index()
	{
	    //
	    $data = \App\Apiartikel::all();

	    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
	        // $res['message'] = "Success!";
	        $res['articles'] = $data;
	        return response($res);
	    }
	    else{
	        $res['message'] = "Empty!";
	        return response($res);
	    }
	}
}