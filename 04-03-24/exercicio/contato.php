<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BD Contato</title>
</head>
<body>
  <h1>Os dados informados são:</h1>
  <?php
  $nome = $_POST["txtNome"];
  $ender = $_POST["txtNome"];
  $cpf = $_POST["txtCPF"];
  $estado = $_POST["listEstados"];
  $dtNasc = $_POST["txtData"];
  $sexo = $_POST["sexo"];
  $mensagem = $_POST["txtMensagem"];

  $camposOK = true;
  if($nome == ""){ 
    echo "Informe o NOME. <br>";
    $camposOK = false;
  }
  if ($ender == ""){
    echo "Informe o ENDEREÇO. <br>";
    $camposOK = false;

  }
  if ($camposOK){
    echo "<TABLE border='0' cellpadding='5'";
    echo "<TR><TD>NOME:</TD><TD><B> $nome </B></TD>"
  }
</body>
</html>

