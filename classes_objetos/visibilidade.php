<div class="titulo">Visibilidade</div>


<?php 

class A {
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        //$this->naoMostrar();
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo 'Serei trasmitido por herança.';
    }

    private function naoMostrar() {
        echo 'Não vou imprimir!<br>';
    }
}

$a = new A();
$a->mostrarA();
//$a->naoMostrar();
//echo "Fim";

class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        //echo "Class B) Private = {$this->privado}<br>";

        parent::vaiPorHeranca();
    }
}

echo '<br>';
$b = new B();
$b->mostrarB();
echo '<br>';
$b->mostrarA();
//$b->naoMostrar();

?>