<?php
	require_once('classes/aluno.php');
	$aluno = new Aluno;

	require_once('classes/professor.php');
	$prof = new Professor;
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
	<div class="form-options">
		<input type="submit" name="menu-prof" value="Formulário de professor">
		<input type="submit" name="menu-aluno" value="Formulário de aluno">
	</div><!--form-options-->

	<div class="menu">
		<ul type="disc">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">Sobre</a></li>
			<li><a href="alunos.php">Lista alunos</a></li>
			<li><a href="professores.php">Lista professores</a></li>
		</ul>
	</div><!--menu-->

	<div class="form-aluno">
		<form method="POST">
		<h2>Cadastrar dados e nota do aluno</h2>
		<div class="span">Nome</div>
		<input type="text" name="nome" required>
		<div class="span">E-mail</div>
		<input type="email" name="email" required>
		<div class="span">Nota 1</div>
		<input type="text" name="n1" required>
		<div class="span">Nota 2</div>
		<input type="text" name="n2" required>
		<input type="submit" name="cadastrar-aluno" value="Calcular">
		</form>
	</div><!--form-->
	<?php
		if (isset($_POST['cadastrar-aluno'])){
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
			$media = ($n1+$n2)/2;
			if($media>=7){
				if($aluno->cadastrarAluno($nome,$email,$media,'Aprovado(a)')){

				}else{
					echo "Aluno(a) aprovado(a) <br/>";
					echo "Média: $media <br/>";
					echo "Dados enviados com sucesso!";
				}
			}else if($media>=5 && $media<7){
				if($aluno->cadastrarAluno($nome,$email,$media,'Recuperação')){

				}else{
					echo "Aluno(a) em recuperação <br/>";
					echo "Média: $media <br/>";
					echo "Dados enviados com sucesso!";	
				}
			}else{
				if($aluno->cadastrarAluno($nome,$email,$media,'Reprovado(a)')){

				}else{
					echo "Aluno(a) reprovado(a) <br/>";
					echo "Média: $media <br/>";
					echo "Dados enviados com sucesso!";		
				}
			}
		}
	?>

	<div class="form-prof">
		<form method="POST">
		<h2>Cadastrar professor</h2>
		<div class="span">Nome</div>
		<input type="text" name="nome" required>
		<div class="span">E-mail</div>
		<input type="email" name="email" required>
		<div class="span">Senha</div>
		<input type="password" name="senha" required>
		<div class="span"></div>
		<select class="span-disciplina" name="disciplina" required data-error="Informe a disciplina">
			<option value="">Disciplina</option>
			<option value="1">Português</option>
			<option value="2">Matemática</option>
			<option value="3">História</option>
		</select>	
		<input type="submit" name="cadastrar-prof" value="Calcular">
		</form>
	</div><!--form-->
	<?php

		$disc = isset($_POST['disciplina'])?$_POST['disciplina']:0;
		switch($disc){
			case 1: 
				if (isset($_POST['cadastrar-prof'])){
					$nome = $_POST['nome'];
					$email = $_POST['email'];
					$senha = $_POST['senha'];
					$disciplina = $_POST['disciplina'];
					if($prof->cadastrarProfessor($nome,$email,$senha,'Português')){

					}else{
						echo "Professor(a) cadastrado(a) com sucesso!";
					}
				}
				break;
			case 2:
				if(isset($_POST['cadastrar-prof'])){
					$nome = $_POST['nome'];
					$email = $_POST['email'];
					$senha = $_POST['senha'];
					$disciplina = $_POST['disciplina'];
					if($prof->cadastrarProfessor($nome,$email,$senha,'Matemática')){

					}else{
						echo "Professor(a) cadastrado(a) com sucesso!";
					}
				}		
				break;
			case 3:
				if(isset($_POST['cadastrar-prof'])){
					$nome = $_POST['nome'];
					$email = $_POST['email'];
					$senha = $_POST['senha'];
					$disciplina = $_POST['disciplina'];
					if($prof->cadastrarProfessor($nome,$email,$senha,'História')){

					}else{
						echo "Professor(a) cadastrado(a) com sucesso!";
					}
				}		
				break;
		}
		
	?>


	<footer>
		<p>All rights reserved by Gabriel Henrique</p>
	</footer><!--footer-->

	<script src="js/jquery.js"></script>
	<script src="js/functions.js"></script>
</body>
</html>




