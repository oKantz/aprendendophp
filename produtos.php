<?php
Class Produtos{
    private $CodigoProduto;
    private $NomeProduto;
    private $CodigoFornecedor;
    private $CodigoCategoria;
    private $QuantidadeUnidade;
    private $PrecoUnitario;
    private $UnidadesEstoque;
    private $UnidadesPedidas;
    private $NivelEstoque;
    private $Descontinuado;

    public function __construct($CodigoProduto, $NomeProduto, $CodigoFornecedor, $CodigoCategoria, $QuantidadeUnidade, $PrecoUnitario, $UnidadesEstoque, $UnidadesPedidas, $NivelEstoque, $Descontinuado){
        $this -> CodigoProduto = $CodigoProduto;
        $this -> NomeProduto = $NomeProduto;
        $this -> CodigoFornecedor = $CodigoFornecedor;
        $this -> CodigoCategoria = $CodigoCategoria;
        $this -> QuantidadeUnidade = $QuantidadeUnidade;
        $this -> PrecoUnitario = $PrecoUnitario;
        $this -> UnidadeEstoque = $UnidadesEstoque;
        $this -> UnidadesPedidas = $UnidadesPedidas;
        $this -> NivelEstoque = $NivelEstoque;
        $this -> Descontinuado = $Descontinuado;

        public function __get($CodigoProduto) {

            echo $CodigoProduto;
            return $this-> $CodigoProduto;
        }

        public function __get($NomeProduto) {

            echo $NomeProduto;
            return $this-> $NomeProduto;
        }

        public function __get($CodigoCategoria) {

            echo $CodigoCategoria;
            return $this-> $CodigoCategoria;
        }

        public function __set($CodigoProduto, $value) {

            echo $CodigoProduto to $value;
            $this->$CodigoProduto = $value;
        }
        

        public function __set($NomeProduto, $value) {

            echo $NomeProduto to $value;
            $this->$NomeProduto = $value;
        }

        public function __set($CodigoProduto, $value) {

            echo $CodigoProduto to $value;
            $this->$CodigoProduto = $value;
        }


    }
}
?>