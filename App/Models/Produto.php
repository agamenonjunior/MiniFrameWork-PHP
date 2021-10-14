<?php

namespace App\Models;
use PDO;
use MF\Model\Model;

class Produto extends Model{
    
    public function getProduto()
    {
        $query = "SELECT id,descricao,preco from tb_produtos";
        return $this->db->query($query)->fetchAll();
    }

}


?>