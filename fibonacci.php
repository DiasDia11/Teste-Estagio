<?php


// SEGUNDA QUESTÃO


 function calculo($numero) {
    $primeiro = 0;
    $segundo = 1;
    $valor = (int)$numero;
    $ponteiro = 0;

    while ($ponteiro < $valor){
        echo $primeiro . " ,";
        $terceiro = $segundo + $primeiro;
        $primeiro = $segundo;
        $segundo = $terceiro;


        $ponteiro++;
    }

 }

 if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];

    calculo($numero);
 }
?>
