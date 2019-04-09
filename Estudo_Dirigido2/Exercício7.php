<?php

print "Digite o primeiro número: ";
$primeiro = fgets(STDIN);

print "Digite o segundo número: ";
$segundo = fgets(STDIN);

print "Digite o terceiro número: ";
$terceiro = fgets(STDIN);

if ($primeiro > $segundo and $primeiro > $terceiro) {

    print "O primeiro número é o maior \n";

}elseif ($segundo > $primeiro and $segundo > $terceiro) {

    print "O segundo número é o maior \n";

}elseif ($terceiro > $primeiro and $terceiro > $segundo) {

    print "O terceiro número é o maior \n";

}elseif ($primeiro == $segundo and $primeiro == $terceiro) {

    print "Todos os números são iguais \n";

}

if ($primeiro < $segundo and $primeiro < $terceiro) {

    print "O primeiro número é o menor \n";

}elseif ($segundo < $primeiro and $segundo < $terceiro) {

    print "O segundo número é o menor \n";

}elseif ($terceiro < $primeiro and $terceiro < $segundo) {

    print "O terceiro número é o menor \n";

}


if ($primeiro == $segundo and $primeiro != $terceiro) {

    print "O primeiro e o segundo números são iguais \n";

}elseif ($primeiro == $terceiro and $primeiro != $segundo) {

    print "O primeiro e o terceiro números são iguais \n";

}elseif ($segundo == $terceiro and $segundo != $primeiro) {

    print "O segundo e o terceiro números são iguais \n";

}
