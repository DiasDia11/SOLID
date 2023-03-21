<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;


$carrinho1 = new CarrinhoCompra();
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
echo 'status' .$carrinho->exibirStatus();