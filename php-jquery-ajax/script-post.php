<?php 
$usuarios = array(
	[
		"id" => 1,
		"nombre" => "Andres",
		"rol_id" => 1
	],
	[
		"id" => 2,
		"nombre" => "Dario",
		"rol_id" => 1
	],
	[
		"id" => 3,
		"nombre" => "Jose",
		"rol_id" => 2
	]	
);
$roles = array(
	[
		"id" => 1,
		"rol" => "user"
	],
	[
		"id" => 2,
		"rol" => "admin"
	]
);

if ( (isset($_POST['id'])) && (isset($_POST['rol_id'])) ) {
	$user = "";
	for ($i=0; $i < count($usuarios); $i++) { 
		if ($_POST['id'] == $usuarios[$i]["id"]) {
			$user .= $usuarios[$i]["nombre"];
		}
	}
	$user .= ", ";
	for ($j=0; $j < count($roles); $j++) { 
		if ($_POST['rol_id'] == $roles[$j]["id"]) {
			$user .= $roles[$j]["rol"];
		}
	}
	echo $user;
	exit();
} else {
	echo "Error!!";
	exit();
}