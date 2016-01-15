<?php
	if (isset($_POST)) {
		$id = $_POST['id'];
		header("Location: ../views/editarInscricao.php?id=$id");
	}
?>