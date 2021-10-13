<?php

namespace App\Controllers;

use stdClass;

class indexController{

    private $view;

    public function __construct()
    {
       $this->view = new \stdClass(); // cria um objeto vazio p/ criar atribuitos dentro das views 
    }

    public function index(){
        //isolando a camada view
        $this->view->dados = array('titulo','descricao');
        $this->render('index');
    }
    public function sobreNos(){
        //isolando a camada view
        $this->view->dados = array('titulo','descricao');        
        $this->render('sobreNos');
    }

    public function render($view){
        echo $classeAtual = get_class($this);
        $classeAtual = str_replace("App\\Controllers\\", "",$classeAtual);
        $classeAtual = strtolower(str_replace("Controller", "",$classeAtual));
        echo "<hr>";      
        require_once("../App/Views/".$classeAtual."/".$view.".phtml.");
    }
}




?>