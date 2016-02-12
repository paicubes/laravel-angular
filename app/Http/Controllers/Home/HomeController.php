<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   public function index(){
	   return View("home.index");
   }
   public function getAboutContent(){
	   return json_encode(array("id"=>5,"name"=>"Ashwani"));
   }
}
