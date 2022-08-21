<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>cadClient</title>
	</head>
<body>
<?php
	//Converter objetos 
	$email = $_POST["email"];
	$senha = $_POST["password"];

	//Condições de conexão

	if($email == ""){
		die("Deve se informar um Email!");
	}
	if ($senha == "") {
		die("Deve se informar uma Senha!");
	}
	echo "conectado com sucesso!";
	//objeto de conexão
	$conexao = mysqli_connect("localhost","root", "");

	//Procurando Database
	mysqli_select_db($conexao, "engine_autocenter") or die("Erro ao conectar ao banco de dados: ".mysqli_error($conexao));

	//Objeto de inserção de dados
	$sql = "INSERT INTO usuario(email, senha) VALUES ('$email','$senha')";

	//Inserção de dados SQL
	mysqli_query($conexao, $sql) or die ("Erro! - Não foi possível inserir dados: " .mysqli_error($conexao));
?>
	</body>
</html>
