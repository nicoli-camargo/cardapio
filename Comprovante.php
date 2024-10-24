<<?php

$XBurguer = $_POST["XBurguer"];
$XSalada = $_POST["XSalada"];
$Xtudo = $_POST["Xtudo"];
$Coca = $_POST["Caca"];
$Conquista = $_POST["Conquista"];
$Fanta = $_POST["Fanta"];
$obs = $_POST["obs"];
$valorTotal = 0.00;

if (isset($_POST["XBurguer"])) {
    $valorTotal = (8.50 * $Xburguer);
}

if (isset($_POST["XSalada"])) {
    $valorTotal = (7.60 * $XSalada);
}

if (isset($_POST["Xtudo"])) {
    $valorTotal = (10.50 * $Xtudo);
}

if (isset($_POST["XBurguer"])) {
    $valorTotal = (9.60 * $Xburguer);
}

if (isset($_POST["XBurguer"])) {
    $valorTotal = (7.50 * $Xburguer);
}

if (isset($_POST["XBurguer"])) {
    $valorTotal = (8.20 * $Xburguer);
}

echo "Pedido realizado com sucesso!<br>";
echo "Sua conta ficoyu em R$: ", $valorTotal;
echo "obs: ", $obs;
echo "<br><a href='Cardapio.html'>Voltar</a>";
?>