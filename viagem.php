<?php
print "\n Quantos Km deseja percorrer: ";
$distancia = (float) fgets(STDIN);
print "\n Média de velocidade em Km/h desejada para a viagem: ";
$velocidade = (float) fgets (STDIN);
$tempo = $distancia / $velocidade;
print "\n A viagem vai demorar aproximadamente $tempo hora(s) ";
