<?php
session_start();

if (isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
	echo "Área Apenas Para Usuários!";
} else {
	header("location: cadastro.php");
}
?>

<form method="POST">
	<input name="logout" type="submit" value="Sair">
</form>

<?php
	if (isset($_POST['logout']) && empty($_POST['logout']) == false) {
		session_destroy();
		header("location: cadastro.php");
	}
?>