<?php

print "Digite o primeiro número: ";
$primeiro = (float)fgets(STDIN);

print "Digite o segundo número: ";
$segundo = (float)fgets(STDIN);

print "Digite o terceiro número: ";
$terceiro = (float)fgets(STDIN);

if ($primeiro > $segundo and $primeiro > $terceiro) {

    print "O primeiro número é o maior\n";

}

elseif ($segundo > $primeiro and $segundo > $terceiro) {

    print "O segundo númeor é o maior\n";

}

elseif ($terceiro > $primeiro and $terceiro > $segundo) {

    print "O terceiro número é o maior\n";

}

elseif ($primeiro == $segundo and $primeiro == $terceiro) {

    print "Todos os números são iguais \n";

}
