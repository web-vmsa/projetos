<?php
	$dsn = "mysql:dbname=locadora_filmes;host=localhost";
	$dbuser = "root";
	$dbpass = "";

		try {
			$pdo = new PDO($dsn, $dbuser, $dbpass);
		} catch (Exception $e) {
			echo "Falha: ".$e->getMessage();
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reservas de Filmes</title>
	<meta charset="utf-8">
</head>
<body>
	<h1 style="font-family: Arial; color: red;">Reserve um Filme Para a Noite</h1>

	<p style="font-size: 25px; font-family: Arial;">Venha reservar um filme com a gente, preencha os campos abaixo e o resto é com a gente!</p>

	<form method="POST" style="font-family: Arial;">
		Seu nome:<br><br>
		<input type="text" name="nome"><br><br>
		Seu Melhor Email:<br><br>
		<input type="email" name="email"><br><br>
		Selecione o Filme
		<select name="option">
			<option></option>
			<option value="Vingadores">Vingadores</option>
			<option value="Noite Louca">Noite Louca</option>
			<option value="Vida Bandida">Vida Bandida</option>
		</select><br><br>
		Quero esse Filme por
		<select name="data">
			<option></option>
			<option value="1 Semana">1 Semana</option>
			<option value="2 Semanas">2 Semanas</option>
			<option value="3 Semanas">3 Semanas</option>
		</select><br><br>
		<input type="submit" value="Reservar">
	</form>
</body>
</html>
<?php
	if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$filme = $_POST['option'];
		$data = $_POST['data'];

		$sql = "INSERT INTO reservas SET nome = '$nome', email = '$email', filme = '$filme', data = '$data'";
			$sql = $pdo->query($sql);
	}
?>