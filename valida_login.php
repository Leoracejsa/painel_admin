<?php 
	session_start();
	$usuariot = $_POST['usuario'];
	$senhat = $_POST['senha'];
	include_once("conexao.php");

	$result = mysql_query("SELECT * FROM usuarios WHERE login='$usuariot' AND senha='$senhat' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
	//echo "Usuario: ".$resultado ['nome'];
	if(empty($resultado)){
		//Mensagem de Erro
		$_SESSION['LoginErro'] = "Usuário ou Senha Inválido";

		//Manda o usuário para a página de login
		header("Location: login.php");
	}
?>