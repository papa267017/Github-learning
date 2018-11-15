<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\test;

class TestController extends Controller
{
    public function index(){
      
	  echo test::test3();
	  
	  echo "<br>Test Controller.";
   }
}
