<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request){
   
    		session_start(); 
    		$task = $_POST['task'];
			$_SESSION['array_task'][]=$task;
			$list_task = $_SESSION['array_task'];

    	return view('task')->with(compact('list_task'));

    }

    public function delete(){
    	session_start();
    	session_destroy();
    	return view('welcome');
    }
}
