<?php

print "Digite um valor numérico: ";
$Valor = fgets(STDIN);

if ($Valor > 0) {

    print "O Valor é positivo. \n";

}elseif ($Valor == 0){

    print "O Valor é nulo. \n";

}else{

    print "O valor é negativo. \n";

}
