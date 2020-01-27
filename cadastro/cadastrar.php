<?php
	if (isset($_POST['email']) && empty($_POST['email']) == false) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);

		$dsn = "mysql:dbname=test;host=localhost";
		$dbuser = "root";
		$dbpass = "";

		try {
			$pdo = new PDO($dsn, $dbuser, $dbpass);

			$sql = $pdo->query("INSERT INTO cadastro SET nome = '$nome', email = '$email', senha = '$senha'");
			header("location: cadastro.php");
		} catch (Exception $e) {
			
		}

	}
?>

<form method="POST" style="font-family: Arial;">
	Nome:<br><br>
	<input type="text" name="nome" placeholder="Seu Nome..."><br><br>
	E-mail:<br><br>
	<input type="text" name="email" placeholder="Seu Email..."><br><br>
	Senha:<br><br>
	<input type="password" name="senha"><br><br>
	<input type="submit" value="Criar Conta"><br><br>
</form>