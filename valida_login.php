<?php

	session_start();

	$usuario_autenticado = false;
	$user_id = null;
	$perfil_user_id = null;
	$perfis = [00 => 'ADM', 11 => 'User'];
	
	
	$usuarios = [

		['id' =>  1, 'email' => 'dougoliveira564@gmail.com', 'senha' => 'qwe3022', 'perfil_id' => 00],
		['id' =>  2, 'email' => 'douglasgash@gmail.com', 'senha' => 'qwe302274', 'perfil_id' => 11],
		['id' =>  3, 'email' => 'dougo564@gmail.com', 'senha' => 'qwe30227451', 'perfil_id' => 11]
	
	];

	

	foreach($usuarios as $user){

		$user_email = $_POST['email'];
		$user_password = $_POST['senha'];

		if($user['email'] === $user_email && $user['senha'] === $user_password){
			$usuario_autenticado = true;
			$user_id = $user['id'];
			$perfil_user_id = $user['perfil_id'];
		};
	};

	if($usuario_autenticado){
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $user_id;
		$_SESSION['perfil_id'] = $perfil_user_id;
		header('Location: ./pages/home.php');
	}else{
		$_SESSION['autenticado'] = 'NÃO';
		header('Location: ./pages/index.php?login=erro');
	};
?>