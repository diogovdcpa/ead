<?php
namespace app\controllers;
use app\core\Controller;

class AulaController extends Controller{
    
   public function index(){
       $dados["view"] = "Aula";
       $this->load("template",$dados);
   } 
}
