<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;
use App\EmailService;
use App\Pedido;
use App\Item;


echo "<h3> Com SRP </h3>";

$pedido = new Pedido();
//-------------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta copo');
$item1->setValor(4.55);

$item2->setDescricao('Lâmpada');
$item2->setValor(9.99);
// -----------------------------------------
echo '<h4>Pedido iniciado</h4>';
echo'<pre>';
print_r($pedido);
echo '</pre';
//-----------------------------------------
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);
//----------------------------------------
echo '<h4>Pedido com items</h4>';
echo'<pre>';
print_r($pedido);
echo '</pre';
//------------------------------------------------
echo '<h4>Itens do carrinho</h4>';
echo'<pre>';
print_r($pedido->getCarrinhoCompra()->getItems());
echo '</pre';
//------------------------------------------------
echo '<h4>Valor do pedido</h4>';
$total = 0;
foreach($pedido->getCarrinhoCompra()->getItems() as $key => $item) {
    $total += $item->getValor();
}
echo $total;
//------------------------------------------------
echo '<h4>Carrinho está valido?</h4>';
echo $pedido->getCarrinhoCompra()->validarCarrinho();
//------------------------------------------------
echo '<h4>Status pedido</h4>';
echo $pedido->getStatus();
//------------------------------------------------
echo '<h4>Confirmar Pedido</h4>';
echo $pedido->confirmar();
//------------------------------------------------
echo '<h4>E-mail</h4>';
if($pedido->getStatus() == 'confirmado'){
    EmailService::dispararEmail();
}


// Sem SRP
/*$carrinho1 = new CarrinhoCompra();
$carrinho1->exibirItems();
print_r($carrinho1->exibirItems());
echo 'Valor total: '.$carrinho1->exibirValorTotal(); 


$carrinho1->adicionarItems('Bicicleta', 750.00);
$carrinho1->adicionarItems('Geladeira', 1950.40);
$carrinho1->adicionarItems('Tapete', 350.20);

echo"<br />";
print_r($carrinho1->exibirItems());
echo 'Valor total Recaulculado: '.$carrinho1->exibirValorTotal();

echo"<br />";
echo 'status' .$carrinho->exibirStatus();
echo"<br />";
if($carrinho->confirmarPedido()){
    echo 'Pedido realizado com sucesso!';
} else {
    echo 'Erro na confirmação do pedido. Carrinho não possui items';
}
echo"<br />";
echo 'status' .$carrinho->exibirStatus();*/