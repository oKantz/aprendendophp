<?php
Class ItensPedido {

    private $NumeroPedido;
    private $CodigoProduto;
    private $PrecoUnitario;
    private $Quantidade;
    private $Desconto;


    public function __construct($NumeroPedido, $CodigoProduto, $PrecoUnitario, $Quantidade, $Desconto){
        $this -> NumeroPedido = $NumeroPedido;
        $this -> CodigoProduto = $CodigoProduto;
        $this -> PrecoUnitario = $PrecoUnitario;
        $this -> Quantidade = $Quantidade;
        $this -> Desconto = $Desconto;
    }
}
?>