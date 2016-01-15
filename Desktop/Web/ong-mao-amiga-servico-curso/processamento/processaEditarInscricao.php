<?php
	include_once '../connection/connection.php';
	$con = abrirConexao();
	mysql_set_charset('UTF8', $con);
	
	if (isset($_POST)) {
		 $id = $_POST['id'];
		 $description = $_POST['description'];
		 $age = $_POST['age'];
		 $breed = $_POST['breed'];
		 $gender = $_POST['gender'];
		 $neighborhood = $_POST['neighborhood'];
		 $knowledge = $_POST['knowledge'];
		 $contribution = $_POST['contribution'];
		 $help = $_POST['help'];
		 $couser = $_POST['couser'];
		 
		$sql = "update inscritos set descricao = '$description',idade = '$age',raca = '$breed',genero = '$gender',bairro = '$neighborhood'
						,nivel_conhece = '$knowledge',contribuicao = '$contribution',ajuda = '$help',curso = '$couser' where id = '$id'";
		
		$resultado = mysql_query($sql);
		
		if ($resultado){
			echo "<script>window.location='../views/index.php';alert('Atualização Realizada com Sucesso!!');</script>";
			mysql_close();
		}
		else{
			echo "<script>window.location='../views/index.php';alert('Ops: Houve alguma falha ao atualizar seu Cadastro. Tente novamente!');</script>";
			mysql_close();
		}
	}
?>						