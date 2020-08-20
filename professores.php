<?php
	$pdo = new PDO("mysql:host=localhost;dbname=escola",'root','');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title></title>
</head>
<body>
	<div class="header">
		<h1>Escola Gabriel Henrique</h1>
	</div><!--header-->

	<div class="menu">
		<ul type="disc">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">Sobre</a></li>
			<li><a href="alunos.php">Lista alunos</a></li>
			<li><a href="professores.php">Lista professores</a></li>
		</ul>
	</div><!--menu-->

	<div class="professores-list">
		<div class="professores-head">
			<h3>Lista de professores</h3>
		</div><!--professores-head-->
		<table class="table">
			<thead class="thead">
				<tr>
					<td>Nome</td>
					<td>E-mail</td>
					<td>Disciplina</td>
				</tr>
			</thead>
			<tbody class="prof-listagem">
				<?php
					$selectProf = $pdo->prepare("SELECT `nome`, `email`, `disciplina` FROM `professor` ORDER BY `nome`");
					$selectProf->execute();
					$prof = $selectProf->fetchAll();
					foreach($prof as $key=>$value){
				?>
				<tr>
					<td><?php echo $value['nome']; ?></td>
					<td><?php echo $value['email']; ?></td>
					<td><?php echo $value['disciplina']; ?></td>
					<td><button id_membro="<?php echo $value['id']; ?>" type="button" class="deletar-membro btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir</button></td>
				</tr>
				<?php }?>
			</tbody>
		</table>
		</div><!--professores-list-->
		<div class="prof-button">
			<input type="submit" name="hide" value="Ocultar">
			<input type="submit" name="show" value="Mostrar">
		</div>
	</div>

	<section class="pesquisar-prof">
		<form method="POST">
				<div class="pesquisar-prof-title">
					<h4>Pesquisar professor por disciplina</h4>
				</div>
				<label>Português</label>
				<input type="radio" name="disc" id="portugues" value="1" checked>
				<label>Matemática</label>
				<input type="radio" name="disc" id="matematica" value="2">
				<label>História</label>
				<input type="radio" name="disc" id="historia" value="3">
				<input type="submit" class="botao" value="Pesquisar">
		</form>

	<table>
		<thead class="thead">
			<tr>
				<td>Nome</td>
				<td>E-mail</td>
			</tr>
		</thead>
		<body class="search-prof-list">
		<?php
			$disc = isset($_POST['disc'])?$_POST['disc']:0;
				switch($disc){
					case 1:
					$selectProf = $pdo->prepare("SELECT `nome`, `email`, `disciplina` FROM `professor` WHERE `disciplina`='Português' ORDER BY `nome`");
					$selectProf->execute();
					$prof = $selectProf->fetchAll();
					foreach($prof as $key=>$value){
		?>	
					<tr>
						<td><?php echo $value['nome']; ?></td>
						<td><?php echo $value['email']; ?></td>
					</tr>
				<?php }
					break;
				}
				?>

		<?php			
				$disc = isset($_POST['disc'])?$_POST['disc']:0;
				switch($disc){
					case 2:
					$selectProf = $pdo->prepare("SELECT `nome`, `email`, `disciplina` FROM `professor` WHERE `disciplina`='Matemática' ORDER BY `nome`");
					$selectProf->execute();
					$prof = $selectProf->fetchAll();
					foreach($prof as $key=>$value){
		?>		
					<tr>
						<td><?php echo $value['nome']; ?></td>
						<td><?php echo $value['email']; ?></td>
					</tr>
		
				<?php }
					break;
				}
				?>

		<?php
				$disc = isset($_POST['disc'])?$_POST['disc']:0;
				switch($disc){
					case 3:
					$selectProf = $pdo->prepare("SELECT `nome`, `email`, `disciplina` FROM `professor` WHERE `disciplina`='História' ORDER BY `nome`");
					$selectProf->execute();
					$prof = $selectProf->fetchAll();
					foreach($prof as $key=>$value){
		?>		
				<tr>
					<td><?php echo $value['nome']; ?></td>
					<td><?php echo $value['email']; ?></td>
				</tr>
				<?php }
					break;
				}	
				?>

		</body>		
	</table>
	</section><!--pesquisar-prof-->

	<footer>
		<p>All rights reserved by Gabriel Henrique</p>
	</footer><!--footer-->

	<script src="js/jquery.js"></script>
	<script src="js/functions.js"></script>
</body>
</html>



