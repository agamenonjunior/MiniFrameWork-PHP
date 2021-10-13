<?php

namespace App\Controllers;

use stdClass;
use MF\Controller\Action;

class indexController extends Action{
    

    public function index(){
        //isolando a camada view
        $this->view->dados = array('titulo','descricao');
        $this->render('index','layout1');
    }
    public function sobreNos(){
        //isolando a camada view
        $this->view->dados = array('titulo','descricao');        
        $this->render('sobreNos','layout2');
    }

    
}




?>