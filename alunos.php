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

	<div class="alunos-list">
		<div class="head-aprovados">
			<h3>Lista dos aprovados</h3>
		</div>
		<div class="panel-aprovados">
			<table class="table">
				<thead class="thead">
					<tr>
						<td>Id</td>
						<td>Nome</td>
						<td>E-mail</td>
						<td>Média</td>
					</tr>
				</thead>
				<tbody class="aprovados-list">
					<?php
						$selectAluno = $pdo->prepare("SELECT `id`, `nome`, `email`, `media`, `situacao` FROM `aluno` WHERE `situacao`='Aprovado(a)' ORDER BY `nome`");
						$selectAluno->execute();
						$aluno = $selectAluno->fetchAll();
						foreach($aluno as $key=>$value){
					?>
					<tr>
						<td><?php echo $value['id']; ?></td>
						<td><?php echo $value['nome']; ?></td>	
						<td><?php echo $value['email']; ?></td>
						<td><?php echo $value['media']; ?></td>
						<td><input type="submit" name="delete" value="Excluir"></td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div><!--panel-aprovados-->
		<div class="aprovados-button">
			<input type="submit" name="show" value="Mostrar">
			<input type="submit" name="hide" value="Ocultar">
		</div><!--aprovados-button-->
	</div><!--alunos-list-->

	<div class="alunos-list">
		<div class="head-recuperacao">
			<h3>Lista dos que estão em recuperação</h3>
		</div>
		<div class="panel-recuperacao">
			<table class="table">
				<thead class="thead">
					<tr>
						<td>Id</td>
						<td>Nome</td>
						<td>E-mail</td>
						<td>Média</td>
					</tr>
				</thead>
				<tbody class="recuperacao-list">
					<?php
						$selectAluno = $pdo->prepare("SELECT `id`, `nome`, `email`, `media`, `situacao` FROM `aluno` WHERE `situacao`='Recuperação' ORDER BY `nome`");
						$selectAluno->execute();
						$aluno = $selectAluno->fetchAll();
						foreach($aluno as $key=>$value){
					?>
					<tr>
						<td><?php echo $value['id']; ?></td>
						<td><?php echo $value['nome']; ?></td>	
						<td><?php echo $value['email']; ?></td>
						<td><?php echo $value['media']; ?></td>
						<td><input type="submit" name="delete" value="Excluir"></td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div><!--panel-recuperacao-->
		<div class="recuperacao-button">
			<input type="submit" name="show" value="Mostrar">
			<input type="submit" name="hide" value="Ocultar">
		</div><!--aprovados-button-->
	</div><!--alunos-list-->

	<div class="alunos-list">
		<div class="head-reprovados">
			<h3>Lista dos reprovados</h3>
		</div>
		<div class="panel-reprovados">
			<table class="table">
				<thead class="thead">
					<tr>
						<td>Id</td>
						<td>Nome</td>
						<td>E-mail</td>
						<td>Média</td>
					</tr>
				</thead>
				<tbody class="reprovados-list">
					<?php
						$selectAluno = $pdo->prepare("SELECT `id`, `nome`, `email`, `media`, `situacao` FROM `aluno` WHERE `situacao`='Reprovado(a)' ORDER BY `nome`");
						$selectAluno->execute();
						$aluno = $selectAluno->fetchAll();
						foreach($aluno as $key=>$value){
					?>
					<tr>
						<td><?php echo $value['id']; ?></td>
						<td><?php echo $value['nome']; ?></td>	
						<td><?php echo $value['email']; ?></td>
						<td><?php echo $value['media']; ?></td>
						<td><input type="submit" name="delete" value="Excluir"></td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div><!--panel-recuperacao-->
		<?php
			if(isset($_POST['delete'])){
				 $pdo = new PDO('mysql:host=localhost;dbname=escola','root','');
				 $sql = $pdo->prepare("DELETE FROM `aluno` WHERE id = ?");
				 $sql->execute(array($_POST['delete']));
				 echo "Aluno excluído com sucesso";
			}else{
				echo "Error";
			}
		?>
		<div class="reprovados-button">
			<input type="submit" name="show" value="Mostrar">
			<input type="submit" name="hide" value="Ocultar">
		</div><!--aprovados-button-->
	</div><!--alunos-list-->

	<footer>
		<p>All rights reserved by Gabriel Henrique</p>
	</footer><!--footer-->

	<script src="js/jquery.js"></script>
	<script src="js/functions.js"></script>
</body>
</html>



