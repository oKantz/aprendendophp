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

    public function construct($CodigoProduto, $NomeProduto, $CodigoFornecedor, $CodigoCategoria, $QuantidadeUnidade, $PrecoUnitario, $UnidadesEstoque, $UnidadesPedidas, $NivelEstoque, $Descontinuado){
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
    }

        public function get_CodigoProduto($CodigoProduto) {

            return $this-> $CodigoProduto;
        }

    
        public function set_NomeProduto($NomeProduto, $value) {

            $this->$NomeProduto = $value;
        }

        public function set_QuantidadeUnidade($QuantidadeUnidade, $value) {

            $this->$QuantidadeUnidade = $value;
        }


    }


?>
