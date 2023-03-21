<?php

namespace App;

use App\Item;

class CarrinhoCompra {
    // atributos

    // métodos
    public function __construct(){
        $this->items = [];
    }

    public function getItems() {
        return $this->items;
    }

    public function adicionarItem(Item $item){
        array_push($this->itens, $item);
        return true;
    }

    public function validarCarrinho(){
        return count($this->itens) > 0;
    }
}