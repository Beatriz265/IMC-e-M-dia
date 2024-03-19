<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
      // obtém valores do formulário
      $n1 = $_GET["nota1"];
      $n2 = $_GET["nota2"];
      $usuario = $_GET["usuario"];
      // calcular a média
      $media = ($n1 + $n2)/2;

      // exibe nome, media e situação
      echo '<table border="1">';
      echo '<tr><th>Média</th><th>Situação</th></tr>';

      echo "<p>Aluno: $usuario</p>";
      echo "<p>Média: $media</p>";
      
      if ($media >= 6){
        $situacao = "Aprovado";
      }
      if ($media < 4){  
        $situacao = "Reprovado";
      }
      if ($media >= 4 && $media < 6){
        $situacao = "Exame final";
      }
    
      echo "<p>Situação: $situacao </p>";
    ?> 
</body>
</html>