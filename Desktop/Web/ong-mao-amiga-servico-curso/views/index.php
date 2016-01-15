<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Consulta de Inscritos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/stylesheet.css">
    <!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.8/css/jquery.dataTables.css">
	<!-- jQuery -->
	<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<!-- DataTables -->
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.8/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="js/teste.js"></script>
</head>
<body>
	<h1>Lista de Inscritos</h1>
    <main>
      
    	<?php 
    		include_once '../connection/connection.php';
    		$con = abrirConexao();
    		mysql_set_charset('UTF8', $con);
    	?>
    	<table id="inscritos">
    		<thead>
    			<th>Descrição Pessoal</th>
    			<th>Consultar</th>
    		</thead>
    	<?php 	
    		$sql = mysql_query("select * from inscritos");
    		while($linha = mysql_fetch_array($sql)) {
    	?>
    		<tbody>
    			<td><?php echo $linha['descricao']?></td>
    			<td>
    				<a href="verInscricao.php?id=<?php echo $linha['id']?>">
    					<button type="button" class="botoes">Ver Inscricao</button>
    				</a>
    			</td>
   			</tbody>
			<?php 
    			}
			?>
    	</table>
	  
    </main>
  <script src="../scripts/elements.js"></script>
  <script src="../scripts/main.js"></script>
</body>
</html>