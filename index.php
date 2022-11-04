<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud</title>
    <link rel="stylesheet" href="flex-style.css">
    <link rel="stylesheet" href="flex.css">
</head>
<body class = "flex-col children-center">
    <fieldset class = "text-center">
        <legend>login</legend>
        <form action="back/login.php" method ="POST" class = "flex-col space-30">
            <input type="text" name ="login" placeholder = "Login" required>
            <input type="password" name="senha" placeholder = "Senhar"required>
            <button class = "button primary" type="submit">Entrar</button>
            
        </form>
    </fieldset>
</body>
</html>