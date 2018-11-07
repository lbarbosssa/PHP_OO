<?php
class Veiculo {
	public $modelo;
	public $cor;
	Public $ano;

	public function Andar(){
		echo "Andou";
	}
	public function Parar(){
		echo "Parou";
	}
}

class Carro extends Veiculo {
	
	public function ligarLimpador () {
		echo "Limpando ...";
	}
}

class Moto extends Veiculo {

	public function darGrau () {
		echo "Empinando ...";
	}
}

$carro = new Carro();
$carro->modelo = "Fusca";
$carro->cor = "Azul";
$carro->ano = 1969;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
var_dump($carro);
echo "<br>";
echo "<hr>";

$moto = new Moto();
$moto->modelo = "Kawasaki Ninja";
$moto->cor = "Verde";
$moto->ano = 2018;
$moto->Parar();
echo "<br>";
$moto->darGrau();
echo "<br>";
var_dump($moto);
echo "<br>";
?>