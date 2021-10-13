<?php

namespace MF\Controller;

abstract class Action{
    
    protected $view;

    public function __construct()
    {
       $this->view = new \stdClass(); // cria um objeto vazio p/ criar atribuitos dentro das views 
    }

    protected function render($view){
        echo $classeAtual = get_class($this);
        $classeAtual = str_replace("App\\Controllers\\", "",$classeAtual);
        $classeAtual = strtolower(str_replace("Controller", "",$classeAtual));
        echo "<hr>";      
        require_once("../App/Views/".$classeAtual."/".$view.".phtml.");
    }
}

?>