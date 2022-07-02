<?php
session_start();
include 'conexao.php';

if (isset($_POST['bt_login']))
{
	if (($_POST['login'] != "") && (trim($_POST['senha']) != ""))
	{
		$login = $_POST['login'];
		$senha = md5($_POST['senha']);
        $usuario = $_POST['flexRadioDefault'];
		
		if ($usuario == 'B'){
			$sql = "SELECT * FROM usuario 
		        WHERE login = '$login' 
				  and senha = '$senha'
                  and tipo = '$usuario'";
		}else{
			$sql = "SELECT * FROM eleitor 
		        WHERE cpf = '$login' 
				  and senha = rtrim('$senha')";
		}

		$res = mysqli_query($conexao, $sql);
		if ($row = mysqli_fetch_array($res))
		{
			if ($usuario == 'B') {
				$_SESSION['login'] = $row['login'];
				$_SESSION['senha']  = $row['senha'];
            	$_SESSION['usuario'] = $row['tipo'];
            	header('Location: menu.php');
			}else {
				$_SESSION['login'] = $row['cpf'];
				$_SESSION['senha']  = $row['senha'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['uf'] = $row['uf'];
				
			if ($row['ativo'] == 'Y') {
            	header('Location: urna.php');
			}else {
				header('Location: resultado.php');
			}
		}
		} 
		else {
			header('Location: login.php?lgInvalido=1');
		}
	}
}

?>