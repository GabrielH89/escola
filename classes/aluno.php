<?php
	
	class Aluno {
		public function cadastrarAluno($nome,$email,$media,$situacao){
			$pdo = new PDO('mysql:host=localhost;dbname=escola','root','');
			$sql = $pdo->prepare("INSERT INTO `aluno` VALUES (null,?,?,?,?)");
			$sql->execute(array($nome,$email,$media,$situacao));
		}
	}
?>