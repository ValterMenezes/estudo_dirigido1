<?php
Print  "\n Quantos dias: ";
$dias = (int) fgets (STDIN);
Print  "\n Quantas horas: ";
$horas = (int) fgets (STDIN);
Print  "\n Quantos minutos: ";
$minutos = (int) fgets (STDIN);
Print  "\n Quantos segundos: ";
$segundos = (int) fgets (STDIN);
$mconvertidos = $minutos * 60;
$hconvertidas = $horas * (60**2);
$dconvertidos = ($dias * 24) * (60**2);
$sconvertidos = $dconvertidos + $hconvertidas + $mconvertidos + $segundos;
print "\n $dias dia(s), $horas hora(s), $minutos minuto(s) e $segundos segundos equivalem a: $sconvertidos segundos. ";
