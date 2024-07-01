<?php
Class Categorias{
    private $CodigoCategoria;
    private $NomeCategoria;
    private $Descricao;
    private $Figura;

    public function __construct($CodigoCategoria, $NomeCategoria, $Descricao, $Figura){
        $this -> CodigoCategoria = $CodigoCategoria;
        $this -> NomeCategoria = $NomeCategoria;
        $this -> Descricao = $Descricao;
        $this -> Figura = $Figura;

    }

}

?>