<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>

<?php 
    //Utilizando condicionais
    //Vou criar uma aplicação comercial com produtos, os produtos 


    //celular
    

    //computador


    //televisão

    $cliente = 'Marcelo';
    $assinatura = false;
    $frete = 50;


    $celular = 999;
    $televisao = 1799;
    $computador = 2399;

    $produtoCarrinho = $celular;
    
    echo $produtoCarrinho;
    echo '<br>';


    //Ao clicar em comprar, caso o cliente tenha assinatura da loja o frete é gratis, caso ele não tenha assinatura da loja ele pagara frete. Se o produto for acima de 1000 reais o cliente tem 20% de desconto, caso o produto seja acima de 2000 o cliente tem 30% de desconto.
 
    if($assinatura AND $produtoCarrinho >1999) {
        if($produtoCarrinho > 999 AND $produtoCarrinho < 2000) {
            $produtoCarrinho = $produtoCarrinho - ($produtoCarrinho * 0.20);
            echo "Pedido finalizado $cliente. Seu produto tem o custo total de $produtoCarrinho";
        } else if($produtoCarrinho > 1999) {
            $produtoCarrinho = $produtoCarrinho - ($produtoCarrinho * 0.30);
            echo "Pedido finalizado $cliente. Seu produto tem o custo total de $produtoCarrinho";
        } else {
            echo "Pedido finalizado $cliente. Seu produto tem o custo total de $produtoCarrinho";
        }
    }  if($assinatura == false) {
         if($produtoCarrinho > 999 AND $produtoCarrinho < 2000) {
            $produtoCarrinho = $produtoCarrinho - ($produtoCarrinho * 0.20);
            $produtoCarrinho += $frete;
            echo "Pedido finalizado $cliente. Seu produto tem o custo total de $produtoCarrinho";

        } else if($produtoCarrinho > 1999) {
            $produtoCarrinho = $produtoCarrinho - ($produtoCarrinho * 0.30);
            $produtoCarrinho += $frete;
            echo "Pedido finalizado $cliente. Seu produto tem o custo total de $produtoCarrinho";
        } else {
            $produtoCarrinho += $frete;
            echo "Pedido finalizado $cliente. Seu produto tem o custo total de $produtoCarrinho";
        }
    }




?>
    
</body>
</html>