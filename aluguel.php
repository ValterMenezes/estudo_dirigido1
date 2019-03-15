<?php
print "\n Quantos quilometros foi feito com o veículo alugado: ";
$quilometragem = (float) fgets (STDIN);
print "\n Quantos dias o veículo foi alugado: ";
$dias = (float) fgets (STDIN);
$preço_a_pagar = ($dias * 60) + ($quilometragem * 0.15);
print "\n O preço pelo aluguel do carro é: R$ $preço_a_pagar";
