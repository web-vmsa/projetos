<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Login</title>
	<meta charset="utf-8">
	<style type="text/css">
		.titulo {
			margin: auto;
			background-color: gray;
			height: 100px;
			width: 500px;
			text-align: center;
			line-height: 100px;
			border-top-right-radius: 20px;
			border-top-left-radius: 20px;
			font-family: Arial;
		}
		.titulo h1 {
			margin: 0;
			padding: 0;
			color: white;
		}
		.formulario {
			margin:auto; 
			background-color: gray;
			height: 345px;
			width: 445px;
			margin-top: 10px;
			text-align: left;
			padding-left: 55px;
			padding-top: 25px;
			font-family: Arial;
			color: white;
			font-size: 20px;
			margin-bottom: 5px;
		}
		.formulario input {
			border: 1px solid black;
			height: 20px;
			border-radius: 10px;
			outline: 0;
		}
		.rodape {
			margin: auto;
			margin-top: 10px;
			background-color: gray;
			height: 100px;
			width: 500px;
			text-align: center;
			line-height: 100px;
			border-bottom-right-radius: 20px;
			border-bottom-left-radius: 20px;
			font-family: Arial;
			color: white;
		}
		.rodape h2 {
			margin: 0;
			padding: 0;
		}
	</style>
</head>
<body>
</body>
	<?php
		session_start();

		if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);

			$dsn = "mysql:dbname=sistema_login;host=localhost";
			$dbuser = "root";
			$dbpass = "";

			try {
				$pdo = new PDO($dsn, $dbuser, $dbpass);
				$sql = $pdo->query("SELECT * FROM usuarios WHERE nome = '$nome' AND email = '$email' AND senha = '$senha'");
				if ($sql->rowCount() > 0) {
					$dados = $sql->fetch();

					$_SESSION['id'] = $dados['id'];

					header("location: index_login.php");
				}
			} catch (Exception $e) {
				echo "Falha: ".$e->getMessage();
			}
		}
	?>
	<div class="titulo">
		<h1>Sistema de Login - VMSA</h1>
	</div>
	<div class="formulario">
		<form method="POST">
			Nome:<br><br>
			<input type="text" name="nome"><br><br>
			E-mail:<br><br>
			<input type="text" name="email"><br><br>
			Senha:<br><br>
			<input type="password" name="senha"><br><br>
			<input type="submit" value="Entrar">
		</form>
	</div>
	<div class="rodape">
		<h2>Desenvolvido por VMSA @2020.</h2>
	</div>
</body>
</html>