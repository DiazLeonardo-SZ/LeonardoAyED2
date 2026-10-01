<?php 

function conectar() {
	
	$link = new PDO("mysql:host=".$_ENV["SQL_SERVER"]."; dbname=argentina", "root", $_ENV["MYSQL_ROOT_PASSWORD"]);
	$link->exec("set names utf8");
	return $link;

}

function consultar($query) {

	$stmt = conectar()->prepare($query);

	if($stmt->execute()) {
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	} else { 
		print_r($stmt -> errorInfo());
	}

	$stmt = null;
	
}
