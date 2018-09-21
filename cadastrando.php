<html>
<head>
	<title></title>
</head>
<body>
<?php 
$host = "mysql.leonardoahmed.com.br";
$user = "leonardoahmed06";
$pass = "avenida689";
$banco = "leonardoahmed06";
$conexao = mysql_connect($host,$user,$pass) or die (mysql_error());
mysql_select_db($banco) or die(mysql_error());

$userUniversityId=$_POST['userUniversityId'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$userDocument=$_POST['userDocument'];
$userBornDate=$_POST['userBornDate'];
$userEmail=$_POST['userEmail'];
$userPassword = hash('sha256', hash('sha256', $userPassword, false), false);
$userFunction=$_POST['userFunction'];
// $courseId=$_POST['courseId'];
$sql = mysql_query("INSERT INTO users(userUniversityId, firstName, lastName, userDocument, userBornDate, userEmail, userPassword, userFunction)
	VALUES('$userUniversityId', '$firstName', '$lastName', '$userDocument', '$userBornDate', '$userEmail', '$userPassword', '$userFunction')");
echo "Cadastrado com Sucesso";
?>
</body>
</html>