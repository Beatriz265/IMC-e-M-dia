<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário</h1>
    <form action="prog.php" method="GET">
        <input type="text"
               name="usuario"
               placeholder="Digite seu nome">
        <br>
        <input type="number"
               name="nota1"
               min=0.0
               max=10.0
               step="any"
               placeholder="Digite a primeira nota">
        <br>
        <input type="number"
               name="nota2"
               min=0.0
               max=10.0
               step="any"
               placeholder="Digite a segunda nota">
        <br>
        <input type="submit" value="OK">
        <input type="reset" value="apagar">
    </form>    
</body>
</html>