<div class="titulo">Argumento Padrão</div>

<?php

function saudacao ($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    echo "Bem vindo, $nome $sobrenome!<br>";


}

echo saudacao();
echo saudacao(NULL);
echo saudacao(null, NULL);
echo saudacao('Mestre', 'Supremo');


function anotarPedido ($comida, $bebida = 'Agua') {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = 'Agua', $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido2('Refrigerante2','Pizza2');

?>