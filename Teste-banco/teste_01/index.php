<?php
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id = 1;

	// OR Funciona como 'ou'
	// AND funciona como 'e'

	$sql = $pdo->prepare("UPDATE `clientes` SET name='Mario',sobrenome='frita' WHERE id=$id");

	if ($sql->execute()){
		echo 'Meu cliente foi atualizado com sucesso!';
	}

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id = 1;

	$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=3");

	if ($sql->execute()){
		echo 'Meu cliente foi deletado com sucesso';
	}

?>