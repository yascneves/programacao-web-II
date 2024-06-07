<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Clientes</title>
</head>
<body>
  <?php
  $nome = $_POST["txtNome"];
  $ender = $_POST["txtEndereco"];
  $cpf = $_POST["txtCPF"];
  $estado = $_POST["listEstados"];
  $dtNasc = $_POST["txtData"];
  $sexo = $_POST["sexo"];
  $cinema = $_POST["checkCinema"];
  $musica = $_POST["checkMusica"];
  $info = $_POST["checkInfo"];
  $login = $_POST["txtLogin"];
  $senha1 = $_POST["txtSenha1"];
  $senha2 = $_POST["txtSenha2"];

  $camposOK = true;
  if($nome == ""){
    echo "Informe o NOME. <BR>";
    $camposOK = false;
  }
  if($ender == ""){
    echo "Informe o ENDEREÇO. <BR>";
    $camposOK = false;
  }
  if($login == ""){
    echo "Informe o LOGIN. <BR>";
    $camposOK = false;
  }
  if($senha1 != $senha2){
    echo "As SENHAS não conferem!. <BR>";
    $camposOK = false;
  }

  if(strlen($dtNasc) == 10){
    $dia = substr($dtNasc,0,2);
    $mes = substr($dtNasc,3,2);
    $ano = substr($dtNasc,6,4);
    $dtNasc = "$ano-$mes-$dia";
    if(!checkdate($mes, $dia, $ano)){
      echo "DATA inválida. <BR>";
      $camposOK = false;
    }
  } else {
    echo "DATA inválida. <BR>";
    $camposOK = false;
  }
    ?>
</body>
</html>