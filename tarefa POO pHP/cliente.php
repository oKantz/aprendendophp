<?php
class Clientes {
    private $CodigoCliente;
    private $Endereco;
    private $Cidade;
    private $CEP;
    private $UF;
    private $Pais;
    private $Telefone;
    
    public function __construct($CodigoCliente, $Endereco, $Cidade, $CEP, $UF, $Pais, $Telefone){
        $this -> CodigoCliente = $CodigoCliente;
        $this -> Endereco = $Endereco;
        $this -> Cidade = $Cidade;
        $this -> CEP = $CEP;
        $this -> UF = $UF;
        $this -> Pais = $Pais;
        $this -> Telefone = $Telefone;
    }
}


?>