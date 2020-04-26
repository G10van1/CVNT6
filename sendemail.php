<?php
	if (isset($_POST['send'])) {

		ini_set('display_errors', 1);

		error_reporting(E_ALL);

		$from = "contato@unikeys.com.br";

		$to = "contato@unikeys.com.br";

		$subject = "Contato CVNT6";

		$name = $_POST["cName"];

		$email = $_POST["cEmail"];

		$fone = $_POST["cFone"];

		$message = "Nome: ".$name."\nEmail: ".$email."\nFone: ".$fone."\nMensagem: ";

		$message = $message. $_POST["cMessage"]. "\n";

		$headers = "De:". $from;

		mail($to, $subject, $message, $headers);

		echo "A mensagem de e-mail foi enviada.";

		//break;
	}
	//echo "A mensagem de e-mail não foi enviada.";
?>