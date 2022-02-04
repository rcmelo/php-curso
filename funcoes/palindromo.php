<div id="titulo">Desafio Palindromo</div>

<?php

function Palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;

    //var_dump($ultimoIndice);

    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return 'Não';
        }
    }
   return 'Sim';
}

echo Palindromo('arara').' ';
echo Palindromo('bola').' ';
echo Palindromo('ana').' ';
echo Palindromo('ovo').' ';
echo '<br>';

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim': 'Não';
}

echo Palindromo('arara').' ';
echo Palindromo('bola').' ';
echo Palindromo('ana').' ';
echo Palindromo('ovo').' ';

?>