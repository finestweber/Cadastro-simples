<?php
include('config.php');
	switch (@$_REQUEST['page']) {
		case 'cadastro':
			// code...
			include('cadastrar.php');
			break;

		case 'salvar':
			// code...
			include('salvar-usuario.php');
			break;
		
		default:
			// code...
			print 'clique em cadastrar';
			break;
	}