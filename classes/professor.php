<?php
	
	class Professor {
		public function cadastrarProfessor($nome,$email,$senha,$disciplina) {
			$pdo = new PDO('mysql:host=localhost;dbname=escola','root','');
			$sql = $pdo->prepare("INSERT INTO `professor` VALUES(null,?,?,?,?)");
			$sql->execute(array($nome,$email,md5($senha),$disciplina));
		}
	}
?>