<?php/*
include("models/conexao.php"); 
$diretorio = "arquivos/";

    if(isset($_POST['filePath'])){
        $filePath = $_POST['filePath'];
        if(file_exists($filePath)){
            unlink($filePath);
            echo "O arquivo foi deletado";
        }else{
            echo "O arquivo não pode ser excluído";
        }
    }*/

include("models/conexao.php"); 
$diretorio = "arquivos/";
$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;

        if(unlink($arquivo)){
            mysqli_query($conexao , "DELETE from imgname WHERE nome_arquivo = '$filePath'");
            echo "O arquivo foi deletado";
        }else{
            echo "O arquivo não pode ser excluído";
        }
?>