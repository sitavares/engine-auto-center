<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>servicos</title>
	</head>
<body>

<?php
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $numeroContato = $_POST["numeroContato"];
    $modeloCarro = $_POST["modeloCarro"];
    $anoCarro = $_POST["anoCarro"];
    $quilometragem = $_POST["quilometragem"];
    $informacoesCarro = $_POST["InformacoesCarro"];

    if ($nome == ""){
        die("Deve informar seu nome.");
    }
    if ($email == ""){
        die("Deve informar seu email.");
    }
    if ($numeroContato == ""){
        die("Deve informar seu Telefone.");
    }
    if ($modeloCarro == ""){
        die("Deve informar o modelo do seu carro.");
    }
    if ($anoCarro == ""){
        die("Deve informar o ano do seu carro.");
    }
    if ($quilometragem == ""){
        die("Deve informar quantos quilometros seu carro tem.");
    }
    if ($informacoesCarro == ""){
        die("Deve informar o que deseja fazer em seu carro.");
    }

    echo "Enviado com sucesso.";

    $conexao = mysqli_connect("localhost","root", "");

	//Procurando Database
	mysqli_select_db($conexao, "engine_autocenter") or die("Erro ao conectar ao banco de dados: ".mysqli_error($conexao));

	//Objeto de inserção de dados
	$sql = "INSERT INTO servicos(nome, email, numeroContato, modeloCarro, anoCarro, quilometragem, informacoesCarro) VALUES ('$nome','$email','$numeroContato','$modeloCarro','$anoCarro','$quilometragem','$informacoesCarro')";

	//Inserção de dados SQL
	mysqli_query($conexao, $sql) or die ("Erro! - Não foi possível inserir dados: " .mysqli_error($conexao));
?>