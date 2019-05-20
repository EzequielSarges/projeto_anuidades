<?php

require_once '../Models/Processo.php';
require_once '../Util/FabricaConnection.php';


class ProcessoDAO{


public function cadastrar($processo)
{
    $query = 'INSERT INTO processos(NOME, NUMERO, EF, DATA_DEBITO, VALOR_ORIGINARIO, VALOR_ATUALIZADO) VALUES('."'".$processo->nome."'".','."'".$processo->numero."'".','."'".$processo->ef."'".','."'".$processo->dataDebito."'".','.$processo->valorOriginal.','.$processo->valorAtualizado.')';
    $conexao = FabricaConnection::conectar();
    $conexao->exec($query);
 
}

public function listar()
{
    $query = 'SELECT * from processos';
    $conexao = FabricaConnection::conectar();
    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();
    return $lista;
}

public function obter($numero)
{
    $query = 'SELECT * from processos WHERE NUMERO LIKE '."'".$numero."%'";
    $conexao = FabricaConnection::conectar();
    $resultado = $conexao->query($query);
    $array = $resultado->fetchAll();
    foreach($array as $objeto)
    {
        return $objeto;
    }
    
}
public function pegaTotal()
{
    $query = 'SELECT SUM(VALOR_ATUALIZADO) from processos';
    $conexao = FabricaConnection::conectar();
    $resultado = $conexao->query($query);
    $array = $resultado->fetchAll();
    foreach($array as $objeto)
    {
        return $objeto;
    }
}


}


?>
