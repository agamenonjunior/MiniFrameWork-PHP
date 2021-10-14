<?php

namespace App\Controllers;

use stdClass;
use MF\Controller\Action;
use App\Connection;
use App\Models\Info;
use App\Models\Produto;

class indexController extends Action{
    

    public function index(){
        //isolando a camada view
        //$this->view->dados = array('titulo','descricao');
        /**Instancia de conexao */
        $conn = Connection::getDb();
        /**Instancia de Modelo */
        $produto = new Produto($conn);
        $produtos = $produto->getProduto();
        $this->view->dados = $produtos;
        $this->render('index','layout1');
    }
    public function sobreNos(){
         /**Instancia de conexao */
         $conn = Connection::getDb();
         /**Instancia de Modelo */
         $info = new Info($conn);
         $infomacoes = $info->getInfo();
         $this->view->dados = $infomacoes;       
        $this->render('sobreNos','layout2');
    }

    
}




?>