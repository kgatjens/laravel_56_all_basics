<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class NumbersController extends Controller
{
    //action that return a view
    public function getIndex(){
    	return view('numbers.index')
    	->with('numbers', array('one','two','three','four', 'five'));
    }

    public function getNumber1(){
    	return 'action for number 1';
    }

    public function anyNumber2(){
    	return 'action for number 2';
    }

    public function getForm(Request $request){
    	$data = $request;

    	//var_dump($request);
    	return "Name: ".$request->input('name');
    	//die();
    }
}
