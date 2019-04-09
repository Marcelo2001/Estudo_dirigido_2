<?php

print "Digite o primeiro número (não repita números): ";
$primeiro = fgets(STDIN);

print "Digite o segundo número (não repita números): ";
$segundo = fgets(STDIN);

print "Digite o terceiro número (não repita números): ";
$terceiro = fgets(STDIN);


if ($primeiro > $segundo and $segundo > $terceiro) {

    print "$primeiro \n" . "$segundo \n" . "$terceiro \n";

}elseif ($primeiro > $terceiro and $terceiro > $segundo) {

    print "$primeiro \n" . "$terceiro \n" . "$segundo \n";

}elseif ($segundo > $primeiro and $primeiro > $terceiro) {

    print "$segundo \n" . "$primeiro \n" . "$terceiro \n";

}elseif ($segundo > $terceiro and $terceiro > $primeiro) {

    print "$segundo \n" . "$terceiro \n" . "$primeiro \n";

}elseif ($terceiro > $primeiro and $primeiro > $segundo) {

    print "$terceiro \n" . "$primeiro \n" . "$segundo \n";

}elseif ($terceiro > $segundo and $segundo > $primeiro) {

    print "$terceiro \n" . "$segundo \n" . "$primeiro \n";

}
