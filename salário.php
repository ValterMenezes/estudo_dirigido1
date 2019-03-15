<?php
print "\n Seu salário: R$ ";
$salario = (float) fgets (STDIN);
print "\n O aumento: ";
$aumento = (float) fgets (STDIN);
$salario_aumento = $salario * ($aumento / 100);
$novo_salario  = $salario + $salario_aumento;
print "\n Com o aumento de $aumento%, O salário que era: R$ $salario passa a ser: R$ $novo_salario  ";
