<div class="titulo">Desafio 7 erros</div>

<?php 

interface Template {
    function metodo1();
    public function metodo2($parametro);
}

// retirado extends e inserido implements
abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou funcionando";
    }

    // inplementando o metodo da interface do Template
    public function metodo1() {

    }
}

// Tirado implements da classe e inserido extends
// Uma classe não implementa outra, apenas extende
class Classe extends ClasseAbstrata {
    function __construct($parametro) {

    }

    public function metodo2($parametro) {

    }

}
// new objeto
$exemplo = new Classe('...');
// passando o parametro com ->
$exemplo->metodo3();


?>