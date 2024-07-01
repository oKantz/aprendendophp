<?php
Class Fornecedores{
private $CodigoFornecedor;
private $NomeEmpresa;
private $NomeContato;
private $CargoContato;
private $Endereco;
private $Cidade;
private $UF;
private $CEP;
private $Pais;
private $Telefone;

public function __construct($CodigoFornecedor, $NomeEmpresa, $NomeContato, $CargoContato, $Endereco, $Cidade, $UF, $CEP, $Pais, $Telefone){

    $this -> CodigoFornecedor = $CodigoFornecedor;
    $this -> NomeEmpresa = $NomeEmpresa;
    $this -> NomeContato = $NomeContato;
    $this -> CargoContato = $CargoContato;
    $this -> Endereco = $Endereco;
    $this -> Cidade = $Cidade;
    $this -> UF = $UF;
    $this -> CEP = $CEP;
    $this -> Pais = $Pais;
    $this -> Telefone = $Telefone;



    }   

}

?>