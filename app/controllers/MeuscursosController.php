<?php
namespace app\controllers;
use app\core\Controller;

class MeuscursosController extends Controller{
    
   public function index(){
       $dados["view"] = "Meus_cursos/meus_cursos";
       $this->load("template",$dados);
   } 
}
