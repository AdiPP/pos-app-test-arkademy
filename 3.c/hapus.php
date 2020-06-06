<?php

include './connection.php';

$idProduct = $_GET['id'];

$sql = "SELECT c.name cashier, c.id idCashier, p.name product, p.id idProduct, cg.name category, cg.id idCategory, p.price price FROM Cashier c JOIN Product p ON p.id_cashier = c.id JOIN Category cg ON cg.id = p.id_category WHERE p.id = $idProduct";
$product = mysqli_fetch_assoc(mysqli_query($conn, $sql));

$sql = "DELETE FROM Product WHERE id = $idProduct";
if (mysqli_query($conn, $sql)) {
  header('Location: ./index.php?pesan=hapus&cashier='.$product['cashier'].'&id='.$idProduct);
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>