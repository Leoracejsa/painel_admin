<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistema de Cadastro</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form name="signup" method="post" action="cadastrando.php">
		Matrícula: <input type="text" name="userUniversityId" /><br><br>
		Nome: <input type="text" name="firstName" /><br><br>
		Sobrenome: <input type="text" name="lastName" /><br><br>
		Identidade: <input type="text" name="userDocument" /><br><br>
		Data de Nascimento: <input type="date" name="userBornDate" /><br><br>
		E-mail: <input type="email" name="userEmail" /><br><br>
		Senha: <input type="password" name="userPassword" /><br><br>
		Função: <input type="text" name="userFunction" /><br><br>
		<!-- Código_Curso: <input type="text" name="courseId" /><br><br> -->

		<input type="submit" value="Cadastrar"> 	
	</form>
</body>
</html>