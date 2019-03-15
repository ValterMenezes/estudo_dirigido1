<?php
print "\n Quantos cigarros que você fuma por dia: ";
$cigarros = (int) fgets (STDIN);
print "\n Quantos anos você esta fumando: ";
$anos = (float) fgets (STDIN);
$dias = ((($cigarros * 10) /60 ) / 24 ) * ($anos * 365);
print "\n Foram perdidos aproximadamente de $dias dia(s) fumando cigarros.";
