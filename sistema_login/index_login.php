<?php
		session_start();

		if (isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
			echo "Bem Vindo";
		} else {
			header("location: login_id.php");
		}
?>
<br><br>
<form method="POST">
	<input name="sair" type="submit" value="Sair">
</form>

<?php
	if (isset($_POST['sair']) && empty($_POST['sair']) == false) {
		session_destroy();

		header("location: login_id.php");
	}
?>

