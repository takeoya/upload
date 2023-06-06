<?php
include("models/conexao.php");
//declarando na variável o nomde da placaque vai receber os arquivos 
$diretorio = "arquivos/";

//operador ternário que verifica se o arquivo existe
$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;

//estrutura de repetição que verifica todos os arquivos selecionados para upload
for ($k = 0; $k < count($arquivo['name']); $k++) {
	$destino = $diretorio . "/" . $arquivo['name'][$k];
	$extension = pathinfo($destino, PATHINFO_EXTENSION);

	$varImgName = $arquivo['name'][$k];
	$varImgNameRandom = uniqid() . "." . $extension; 
	if($extension == "png"){
		if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {
			mysqli_query($conexao, "INSERT INTO imgname (nome_arquivo, nome_random) 
            values('$varImgName','$varImgNameRandom')");
			echo "Arquivo enviado com sucesso!";
		} else {
			echo "Erro ao enviar o arquivo.";
		}
	}else{
		echo "Arquivo não compatível com a extensão PNG";
	}
	
	
}
?>