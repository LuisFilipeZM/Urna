<?php
session_start();
if (!isset($_SESSION['usuario']))
	die('Acesso negado - você não esta logado ou não tem permissão de acesso a esta pagina!');
?>