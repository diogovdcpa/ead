<?php
namespace app\controllers;
use app\core\Controller;

class PerfilController extends Controller{
    
   public function index(){
       $dados["view"] = "Perfil/perfil";
       $this->load("template",$dados);
   } 
}
