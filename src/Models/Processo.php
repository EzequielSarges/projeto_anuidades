<?php
class Processo{
    private $nome;
    private $numero;
    private $ef;
    private $dataDebito;
    private $valorOriginal;
    private $valorAtualizado;

 
    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        return $this->$atributo = $valor;
    }
    public function __construct($nome, $numero, $ef, $dataDebito, $valorOriginal, $valorAtualizado)
    {
        $this->nome = $nome;
        $this->numero = $numero;
        $this->ef = $ef;
        $this->dataDebito = $dataDebito;
        $this->valorOriginal = $valorOriginal;
        $this->valorAtualizado = $valorAtualizado;
    }


}
?>