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

	<div class="sobre-conteudo">

		<h2>O que é Lorem Ipsum?</h2>
		<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>

		<h2>Porque nós o usamos?</h2>
		<p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).</p>

	</div><!--sobre-conteudo-->

	<footer>
		<p>All rights reserved by Gabriel Henrique</p>
	</footer><!--footer-->

	<script src="js/jquery.js"></script>
	<script src="js/functions.js"></script>
</body>
</html>

