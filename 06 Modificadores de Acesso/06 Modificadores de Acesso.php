<?php
/*
public - Visivel em qualquer lugar;

protected - Apenas os herdeiros da classe ve o m;etodo - ex get and setters;

private visivel apenas dentro da classe que declarou.
*/


class Veiculo {
	protected $modelo;
	public $cor;
	Public $ano;

	private function Andar(){
		echo "Andou";
	}
	protected function Parar(){
		echo "Parou";
	}

	public function exibirAcao(){
		$this->Andar();
	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($m){
		$this->modelo = $m;
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
	public function exibirAcao2(){
		$this->Parar();
	}
}



$carro1 = new Carro();
$carro1->setModelo("fusca");
echo $carro1->getModelo() . "<br>";

$carro2 = new Veiculo();
$carro2->exibirAcao();
echo "<br>";

$moto1 = new Moto();
$moto1->exibirAcao2();


?>