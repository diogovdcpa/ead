<?php
namespace app\controllers;
use app\core\Controller;

class HomeController extends Controller{
    
   public function index(){
       $dados["view"] = "login";
       $this->load("login",$dados);
   } 
}
