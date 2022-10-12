<?php
	switch ($_REQUEST['acao']) {
		case 'cadastro':
			// code...
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = md5($_POST['senha']);
			$data_nasc = $_POST['data_nasc'];

			$sql = "INSERT INTO usuarios(nome, email, senha, data_nasc) VALUES('{$nome}','{$email}','{$senha}','{$data_nasc}')";

			$resultado = $conn->query($sql);
			break;
		
		default:
			// code...
			break;
	}