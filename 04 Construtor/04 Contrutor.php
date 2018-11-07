<?php

class Login {
	private $email;
	private $senha;
	private $nome;

	public function __construct($email, $senha, $nome) {
		$this->nome = $nome;
		$this->setEmail($email);
		$this->setSenha($senha);

	}

	public function getNome(){
		return $this->nome;
	}

	public function getEmail(){
		return $this->email;
	}
	public function setEmail($e){
		$email_filtrado = filter_var($e, FILTER_SANITIZE_EMAIL);
		$this->email = $email_filtrado;
	}

	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($s){
		$this->senha = $s;
	}

	public function Logar() {
		if($this->email == "teste@teste.com" and $this->senha == "123456"){
			echo "Logado com sucesso";
		}
		else{
			echo "Dados Inválidos";
		}
	}
}


$logar = new Login("teste@teste.com", "123456", "Lucas Barbosa");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();
echo "<br>". $logar->getNome();
echo "<br><br>";


/* --Criado sem o __construct
$logarE = new Login();
$logarE->setEmail("teste@invalido.com");
$logarE->setSenha("invalido");
$logarE->Logar();
echo "<br>";
echo $logarE->getEmail();
echo "<br><br>";

$logarR = new Login();
$logarR->setEmail("teste()//@teste.com");
$logarR->setSenha("123456");
$logarR->Logar();
echo "<br>";
echo $logarR->getEmail();
echo "<br><br>";*/


?>