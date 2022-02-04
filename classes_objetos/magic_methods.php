<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'E morreu!';
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . "<br>";
    }

    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}";
    }

    public function __call($metodo, $params) {
        echo "Tentando executar método '${metodo}'.";
        echo "<br>, com os parametros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Ricardo', 40); // __construct
$pessoa->apresentar(); // chamando __toString
echo $pessoa, '<br>';  // chamando __toString
$pessoa->nome = 'Renan'; // chamando __toString
$pessoa->idade = 35;   // chamando __toString
$pessoa->apresentar();  // chamando __toString

echo '<br>';

// var_dump($pessoa->nomeCompleto); 
$pessoa->nomeCompleto = 'Muito Legal!!';  // chamando __set
echo '<br>'; 
$pessoa->nomeCompleto; // chamando __get
echo '<br>';
echo $pessoa->nome; // acessa o atributo diretamente sem __get
echo '<br>';
$pessoa->exec(1, 'teste', true, [1,2,3]); // chamando __call
echo '<br>';
$pessoa = null;  // __destruct

?>