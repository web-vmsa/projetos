<?php
	session_start();

	if (isset($_POST['email']) && empty($_POST['email']) == false) {
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);

		$dsn = "mysql:dbname=test;host=localhost";
		$dbuser = "root";
		$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
		$sql = $pdo->query("SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'");

		if ($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			$_SESSION['id'] = $dado['id'];

			header("location: site.php");
		}
	} catch (Exception $e) {
		echo "Falha na Conexão: ".$e->getMessage();
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
	<input type="submit" value="Entrar"><br><br>
	<a href="cadastrar.php" style="color: black;">Criar Conta</a>
</form>