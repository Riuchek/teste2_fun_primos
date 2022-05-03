<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Funçao Ano</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" id="n1" placeholder="Numero 1">
        <input type="text" id="n2" placeholder="Numero 2">
        <input type="button" value="Testar" id="Enviar">
    </form>


    <?php
 if (isset($_GET["matricula"])) {
    $matricula = $_GET["matricula"];
}
if (isset($_GET["aluno"])) {
    $aluno = $_GET["aluno"];
}
if (isset($_GET["nasc"])) {
    $nasc = $_GET["nasc"];
}
    ?>
</body>

</html>