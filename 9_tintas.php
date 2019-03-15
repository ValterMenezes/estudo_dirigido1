<?php
print " Quantos M² serão pintados: ";
$area_pintada      = (float) fgets (STDIN);

// Lata 1
$lata1             = 0;
$preço_lata1       = 0;
$quantidade_lata1  = 0;
// Galão 1
$galao1            = 0;
$preço_galao1      = 0;
$quantidade_galao1 = 0;
// Lata 2
$lata2             = 0;
$preço_lata2       = 0;
$quantidade_lata2  = 0;
// Galão 2
$galao2            = 0;
$preço_galao2      = 0;
$quantidade_galao2 = 0;
// Margem de Sobra
$margem_sobra      = $area_pintada + ($area_pintada * 0.10);
$litros_gastos     = $margem_sobra / 6;

// Compra 1
while ($lata1 < $litros_gastos) {
    
    $lata1            = $lata1            + 18;
    $preço_lata1      = $preço_lata1      + 80;
    $quantidade_lata1 = $quantidade_lata1 + 1;
}

print "[1] Para pintar $area_pintada M² você poderá fazer a compra de $quantidade_lata1 lata(s) de 18L, custando R$ $preço_lata1 \n";
// Compra 2
while ($galao1 < $litros_gastos) {
    
    $galao1            = $galao1            + 3.6;
    $preço_galao1      = $preço_galao1      + 25;
    $quantidade_galao1 = $quantidade_galao1 + 1;
}

print "[2] Para pintar $area_pintada M² você poderá fazer a compra de $quantidade_galao1 galão(ões) de 3,6L, custando R$ $preço_galao1 \n";
// Compra 3
while ( $litros_gastos > 0) {
    while ( $litros_gastos >= 18) {
        $preço_lata2       = $preço_lata2       + 80;
        $quantidade_lata2  = $quantidade_lata2  + 1;
        $litros_gastos     = $litros_gastos     - 18;  
    }
        $galao2            = $galao2            + 3.6;
        $preço_galao2      = $preço_galao2      + 25;
        $quantidade_galao2 = $quantidade_galao2 + 1;
        $litros_gastos     = $litros_gastos     - 3.6;  
}

$valor_total = $preço_galao2 + $preço_lata2;
print "[3] Para pintar $area_pintada M² você poderá fazer a compra de $quantidade_lata2 lata(s) de 18L, junto com $quantidade_galao2 galão(ões) de 3,6L custando R$ $valor_total \n";
