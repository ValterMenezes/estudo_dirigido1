<?php
print "\n Temperatura em Celcius (°C): ";
$celcius    = (float) fgets (STDIN);
$fahrenheit = 9 * $celcius / 5 + 32;
print "\n $celcius °C equivalem a $fahrenheit °F ";
