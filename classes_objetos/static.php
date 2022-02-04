<div class="titulo">Membros Estáticos</div>

<?php

class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe(estática)';

    public function mostrarA() {
        echo "Não estatico = {$this->naoStatic}<br>";
        // Tentativa 1 
        //echo "Estática = {$this->static}<br>";
        // Tentativa 2
        //echo "Estática = {self::$static}<br>"
        echo "Estática = ". self::$static . "<br>";
    }

    public static function mostrarStaticA() {
        //echo "Não estática = {$this->nãoStatic}<br>";
        //echo "Estática = {$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    } 
}
    
$objetoA = new A();
$objetoA->mostrarA(); 
$objetoA->mostrarStaticA(); // não é a forma ideal
echo '<br>';
echo A::$static, '<br>'; // ideal acessar diretamente pela classe
A::mostrarStaticA();      // ideal acessar diretamente pela classe

A::$static = 'Alterado membro de classe';
A::mostrarStaticA();
?>