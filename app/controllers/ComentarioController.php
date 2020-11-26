<?php
namespace app\controllers;
use app\core\Controller;

class ComentarioController extends Controller{
    
   public function index(){
       $dados["view"] = "Comentario/comentario";
       $this->load("template",$dados);
   } 
}
