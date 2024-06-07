<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Os dados informados são:</h1>
  <?php
  $nome = $_POST["txtNome"];
  $ender = $_POST["txtNome"];
  $cpf = $_POST["txtCPF"];
  $estado = $_POST["listEstados"];
  $dtNasc = $_POST["txtData"];
  $sexo = $_POST["sexo"]
  $cinema = $_POST["checkCinema"];
  $musica = $_POST["checkMusica"];
  $info = $_POST["checkInfo"];
  $login = $_POST["txtLogin"];
  $senha1 = $_POST["txtSenha1"];
  $senha2 = $_POST["txtSenha2"];

  $camposOK = true;
  if($nome == ""){ 
    echo "Informe o NOME. <br>";
    $camposOK = false;
  }
  if ($ender == ""){
    echo "Informe o ENDEREÇO. <br>";
    $camposOK = false;

  }
  if ($senha1 !== $senha2){
    echo "Informe o ENDEREÇO. <br>";
    $camposOK = false;
  }
  if ($ender == ""){
    echo "As SENHAS não conferem. <br>";
    $camposOK = false;    
  }
  if ($camposOK){
    echo "<TABLE border='0' cellpadding='5'";
    echo "<TR><TD>NOME:</TD><TD><B> $nome </B></TD>"
  }
</body>
</html>

