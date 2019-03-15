<?php
print "\n Quantos M² você deseja converter em milímetro: ";
$valor = (float) fgets(STDIN); 
$metros = $valor;
$valor = $valor * 1000;
print "\n $metros M² após ser convertido equivale a $valor milímetro(s) ";
