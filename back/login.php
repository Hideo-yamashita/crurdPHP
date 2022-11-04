<?php
$login = $_POST['login'];

$senha = $_POST['senha'];


if(empty($login))
{
    exit("Faltando o campo login");
}
if(empty($senha))
{
    exit("Faltando o campo senha");
}

$conexao = new PDO("mysql:host=localhost;port=3306;dbname=phpcrud","root","devisate");


$conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$comando  = $conexao ->prepare("SELECT * FROM  usuario where  login = ? and  senha = ?");
$comando -> execute([$login,$senha]);
$resultado = $comando ->fetchAll(PDO::FETCH_ASSOC);


if (empty($resultado))
{
    exit("usuario n encontrado");
}
echo "<pre>";
var_dump($resultado);
echo"</pre>";

$usuario = $resultado[0];
session_start();
$_SESSION["usuario"] = $resultado[0];
header("Location: ./../front/listagem.php");

?>