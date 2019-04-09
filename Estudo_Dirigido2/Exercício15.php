<?php

print "ATENÇÃO: NÃO REPITA NÚMEROS \n\n";



print "Digite o primeiro número: ";
$primeiro = fgets(STDIN);

print "Digite o segundo número: ";
$segundo = fgets(STDIN);

print "Digite o terceiro número: ";
$terceiro = fgets(STDIN);

print "Digite o quarto número: ";	
$quarto = fgets(STDIN);

print "Digite o quinto número: ";
$quinto = fgets(STDIN);

if ($primeiro == $segundo or $primeiro == $terceiro or $primeiro == $quarto or $primeiro == $quinto or $segundo == $terceiro or $segundo == $quarto or $segundo == $quinto or $terceiro == $quarto or $terceiro == $quinto or $quarto == $quinto) {

    print "Eu disse para não repetir números. \n";
    exit;

}

if ($primeiro > $segundo and $primeiro > $terceiro and $primeiro > $quarto and $primeiro > $quinto) {

    print "O primeiro número é o maior. \n";

}elseif ($segundo > $primeiro and $segundo > $terceiro and $segundo > $quarto and $segundo > $quinto) {

    print "O segundo número é o maior. \n";

}elseif ($terceiro > $primeiro and $terceiro > $segundo and $terceiro > $quarto and $terceiro > $quinto) {

    print "O terceiro número é o maior. \n";

}elseif ($quarto > $primeiro and $quarto > $segundo and $quarto > $terceiro and $quarto > $quinto) {

    print "O quarto número é o maior. \n";

}elseif ($quinto > $primeiro and $quinto > $segundo and $quinto > $terceiro and $quinto > $quarto) {

    print "O quinto número é o maior. \n";

}
