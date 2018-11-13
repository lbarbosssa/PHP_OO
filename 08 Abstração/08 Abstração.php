<?php
/*
A classe abstrata agora serve de modelo para as classe que extendem ela;

O metodo abstrato agora é obrigatorio nas classes criadas;

Mesmo sendo uma classe abstrata, ela pode ter declarado metodos publicos;
*/

abstract class Banco {
	protected $saldo;
	protected $limiteSaque;
	protected $saque;

	public function setSaldo($s){
		$this->saldo = $s;

	}
	public function getSaldo(){
		return "<hr> Saldo: " . $this->saldo;
	}

	abstract protected function Sacar($s);
	abstract protected function Depositar($d);

}

class Itau extends Banco{

	public function Sacar($s){
		$this->saldo -= $s;
		echo "<hr> Sacou: " . $s;
	}

	public function Depositar($d){
		$this->saldo += $d;
		echo "<hr> Depositou: " . $d;
	}
}

$itau = new Itau();
$itau->setSaldo(1000);
echo $itau->getSaldo();
$itau->Sacar(250);
echo $itau->getSaldo();
$itau->Depositar(900);
echo $itau->getSaldo();

?>