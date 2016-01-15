<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Editar Inscrição</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/stylesheet.css">
</head>
<body>
	<h1>Editar Inscrição</h1>
	<main>
      <section id="principal-info">
        <div></div>
        <button type="button">Insira uma foto</button>
        <?php 
        	
    		include_once'../connection/connection.php';
    		$con = abrirConexao();
    		mysql_set_charset('UTF8', $con);
    		if (isset($_GET["id"])){
    			$id = $_GET['id'];
    				
    		$sql = mysql_query("select * from inscritos where id = '$id'");
    		while($linha = mysql_fetch_array($sql)) {
    	?>
        <form action="../processamento/processaEditarInscricao.php" method="post">
        	<input type="hidden" value="<?php echo $linha['id']?>" name="id">
	        <label for="description">Descrição pessoal</label>
	        <textarea id="description" name="description" class="input" maxlength="50" placeholder="Quem é Você? Como você é? Quais são as coisas que você faz?"><?php echo $linha['descricao']?></textarea>
	 	</section>
	  	   <section id="others-info">
	        <label for="age">Idade</label>
	        <input id="age" name="age" class="input" type="number"  placeholder="Qual a sua idade?" value="<?php echo $linha['idade']?>">
	
	        <label for="breed">Raça</label>
	        <input id="breed" name="breed" class="input" type="text"  placeholder="Qual a sua raçã?" value="<?php echo $linha['raca']?>">
	
	        <label for="gender">Gênero</label>
	        <input id="gender" name="gender" class="input" type="text"  placeholder="Qual o seu gênero?" value="<?php echo $linha['genero']?>">
	
	        <label for="neighborhood">Bairro</label>
	        <input id="neighborhood"  name="neighborhood" class="input" type="text" placeholder="Em que bairro você mora?" value="<?php echo $linha['bairro']?>">
	
	        <label for="knowledge">Nivel de conhecimento</label>
	        <textarea id="knowledge" name="knowledge"  class="input" maxlength="50" placeholder="Qual o seu nivel de conhecimento em desenvolvimento de software e inglês?" ><?php echo $linha['nivel_conhece']?></textarea>
	
	        <label for="contribution">Contribuição a comunidade</label>
	        <textarea id="contribution" name="contribution" readonly="readonly" class="input" maxlength="50" placeholder="Como você acha que pode contribuir para a sua comunidade apÃ³s concluir o curso?"><?php echo $linha['contribuicao']?></textarea>
	
	        <label for="help">Como a ONG pode ajudar</label>
	        <textarea id="help" name="help" class="input" readonly="readonly" maxlength="50" placeholder="Como nós podemos te ajudar a alcançar seus objetivos?"><?php echo $linha['ajuda']?></textarea>
	
	        <label for="course">Curso</label>
	        <select id="course" name="couser" class="input">
	        <?php if ($linha['curso'] == 'development') {?>
	          <option value="<?php echo $linha['curso']?>">Desenvolvimento de Software</option>
	          <option value="english">Inglês</option>
	        <?php } else {?>
	         <option value="<?php echo $linha['curso']?>">Inglês</option>
	         <option value="development">Desenvolvimento de Software</option>
	        <?php }?>
	        </select>
	      </section>
	      	<input type="submit" value="Atualizar">
      </form>
      <?php 
    		}
    	}	
      ?>
    </main>

  <script src="scripts/elements.js"></script>
  <script src="scripts/main.js"></script>
</body>
</html>
