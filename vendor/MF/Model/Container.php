<?php

namespace MF\Model;
use App\Connection;
class Container{
 
    /**
     * Retorna o modelo já instanciado e com conexao estabelecida
     */
    public static function  getModel($model)
    {
        $class ="\\App\\Models\\".ucfirst($model);
        /**Instancia de conexao */
        $conn = Connection::getDb();
        return new $class($conn);
    }

}

?>