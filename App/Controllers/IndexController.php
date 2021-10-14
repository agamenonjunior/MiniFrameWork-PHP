<?php

namespace App\Controllers;
// Recursos do FrameWork
use stdClass;
use MF\Controller\Action;
use MF\Model\Container;
// Models do FrameWork

use App\Models\Info;
use App\Models\Produto;


class indexController extends Action{
    

    public function index(){
        //isolando a camada view
        //$this->view->dados = array('titulo','descricao');
        /**Instancia de conexao */
        $produto = Container::getModel('Produto');
        /**Instancia de Modelo */
        $produtos = $produto->getProduto();
        $this->view->dados = $produtos;
        $this->render('index','layout1');
    }
    public function sobreNos(){
         /**Instancia de conexao */
         $info = Container::getModel('info');
         /**Instancia de Modelo */
         $infomacoes = $info->getInfo();
         $this->view->dados = $infomacoes;       
        $this->render('sobreNos','layout2');
    }

    
}




?>