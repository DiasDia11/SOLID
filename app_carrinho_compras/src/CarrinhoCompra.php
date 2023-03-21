<?php

namespace App;

class CarrinhoCompra {
    // atributos
    private $items;
    private $status;
    private $valorTotal;

    // métodos
    public function __construct(){
        $this->items = [];
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibirItems() {
        return $this->items;
    }

    public function itemValido(string $items, float $valor){
        if($items == '' || $valor <= 0){
            return false;
        }
        return true;
    }

    public function adicionarItems(string $items, float $valor){

        if($this->itemValido($items,$valor)){
            array_push($this->items, ["item" => $items, "valor" => $valor]);
            $this->valorTotal += valor;
            return true;
        }
        return false;
    }

    public function exibirValorTotal(){
        return $this->valorTotal;
    }

    public function exibirStatus(){
        return $this->status;
    }

    public function confirmarPedido(){
        if($this->validarCarrinho()){
            $this->status = 'confirmado';
            $this->enviarEmailConfirmacao();
            return true;
        }
        return false;
    }

    public function enviarEmailConfirmacao(){
        echo'<br />.. enviando e-mail de confirmacao <br />';
    }

    public function validarCarrinho(){
        return count($this->items) > 0;
    }
}