
<?php 

	class Pessoa {
		public $nome;
		public $idade;
	
		public function Falar() {
			echo "Falou <br>";
		}

		public function Falar_Completo() {
			echo $this->nome. " de ".$this->idade." anos acabou de falar";
		}
	}


$lucas = new Pessoa();
$lucas->nome = "Lucas Barbosa";
$lucas->idade = "22";
$lucas->Falar();
var_dump($lucas);
echo "<br>";
echo $lucas->nome;
echo "<br>";
$lucas->Falar_Completo();
?>