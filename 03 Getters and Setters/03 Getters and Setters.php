<?php

class Login {
	private $email;
	private $senha;

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


$logar = new Login();
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();
echo "<br><br>";

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
echo "<br><br>";




?>