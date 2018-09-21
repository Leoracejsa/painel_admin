<html>
<head>
	<title>Conexao</title>
</head>
<body>
<?php 
$host = "mysql.leonardoahmed.com.br";
$user = "leonardoahmed06";
$pass = "avenida689";
$banco = "leonardoahmed06";
$conexao = mysql_connect($host,$user,$pass) or die (mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

</body>
</html>