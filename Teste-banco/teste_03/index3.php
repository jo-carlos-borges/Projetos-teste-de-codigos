<?php
	/*
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
	$sql = $pdo->prepare("SELECT * FROM `teste` ");
	$sql->execute();
	$teste = $sql->fetchALL();
	foreach ($teste as $key => $value) {
		echo $value['nome'];
		echo '<hr>';
	}
	*/

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = $pdo->prepare("SELECT * FROM `teste` RIGHT JOIN cargo ON `teste`.`cargo`=`cargo`.ìd`");
	$sql->execute();
	$teste = $sql->fetchALL();
	foreach ($teste as $key => $value) {
		echo $value['nome'];
		echo ' | ';
		echo $value['cargo'];
		echo '<hr>';
	}



?>