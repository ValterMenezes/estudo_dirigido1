<?php
print "\n Preço da mercadoria: R$ ";
$preço = (float) fgets (STDIN);
print "\n Desconto de: ";
$desconto = (float) fgets (STDIN);
$valor_des = $preço * ($desconto /100);
$com_des = $preço - $valor_des; 
print "\n O preço da mercadoria com o desconto de $desconto% é: R$ $com_des ";
