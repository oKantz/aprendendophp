<?php
Class Pedidos{

    private $NumPedido;
    private $CodigoCliente;
    private $CodigoFuncionario;
    private $DataPedido;
    private $DataEntrega;
    private $DataEnvio;
    private $Frete;
    private $NomeDestinatario;
    private $EnderecoDestinatario;
    private $CidadeDestino;
    private $CEPDestino;
    private $PaisDestino;

    
    public function __construct($NumPedido, $CodigoCliente, $CodigoFuncionario, $DataPedido, $DataEntrega, $DataEnvio, $Frete, $NomeDestinatario, $EnderecoDestinatario, $CidadeDestino, $CEPDestino, $PaisDestino){
        $this -> NumPedido = $NumPedido;
         $this -> CodigoCliente = $CodigoCliente;
         $this -> CodigoFuncionario = $CodigoFuncionario;
         $this -> DataPedido = $DataPedido;
         $this -> DataEntrega = $DataEntrega;
         $this -> DataEnvio = $DataEnvio;
         $this -> Frete = $Frete;
         $this -> NomeDestinatario = $NomeDestinatario;
         $this -> EnderecoDestinatario = $EnderecoDestinatario;
         $this -> CidadeDestino = $CidadeDestino;
         $this -> CEPDestino = $CEPDestino;
         $this -> PaisDestino = $PaisDestino;
        }
    }


?>