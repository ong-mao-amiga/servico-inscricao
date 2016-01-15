<?php
	include_once '../connection/connection.php';
	$con = abrirConexao();
	mysql_set_charset('UTF8', $con);
	
	if (isset($_POST)) {
		 $description = $_POST['description'];
		 $age = $_POST['age'];
		 $breed = $_POST['breed'];
		 $gender = $_POST['gender'];
		 $neighborhood = $_POST['neighborhood'];
		 $knowledge = $_POST['knowledge'];
		 $contribution = $_POST['contribution'];
		 $help = $_POST['help'];
		 $couser = $_POST['couser'];
		
		//$foto = $_FILES['foto']['tmp_name'];
		//$tamanho = $_FILES['foto']['size'];
		//$tipo = $_FILES['foto']['type'];
		
		//fp = fopen($foto, "rb");
		//$conteudo = fread($fp, $tamanho);	
		//$conteudo = addslashes($conteudo);
		//fclose($fp);
		
		$sql = "Insert into inscritos (descricao,idade,raca,genero,bairro,nivel_conhece,contribuicao,ajuda,curso)
						values ('$description','$age','$breed','$gender','$neighborhood','$knowledge','$contribution','$help','$couser')";
		$resultado = mysql_query($sql);
		if ($resultado) {
			echo "<script>window.location='../views/index.php';alert('Sua inscrição foi realizada com sucesso!!');</script>";
		}
		else {
			echo "<script>window.location='../../inscricao-curso-gh-pages/index.html';alert('Ops: Houve alguma falha ao finalizar sua inscrição. Tente novamente!');</script>";
			//echo $resultado;
		}
	}