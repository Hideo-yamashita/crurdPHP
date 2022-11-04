<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuarios</title>
</head>
<body>
    <?php session_start();?>

    <h1>Seja Bem Vindo, !</h1>
    <?php echo $_SESSION["usuario"]["NOME"]?>
</body>
</html>