<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="upload" enctype="multipart/form-data" method="post" action="upload.php">
        <input type="hidden" name="MAX_FILE_SIZE" value="99999999">
        <input type="file" name="arquivo[]" multiple="multiple">
        <input name="enviar" type="submit" value="Enviar">
    </form>
    
    <form name="unlink" enctype="multipart/form-data" method="post" action="unlink.php">
        <input type="file" name="filePath">
        <input name="excluir" type="submit" value="Excluir">
    </form>
</body>
</html>