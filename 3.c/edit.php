<?php
include './connection.php';

$idProduct = $_POST['idProduct'];
$cashier = $_POST['cashier'];
$category = $_POST['category'];
$product = $_POST['product'];
$price = $_POST['price'];

$sql = "UPDATE Product SET name = '$product', price = $price, id_category = $category, id_cashier = $cashier WHERE id = $idProduct";
if (mysqli_query($conn, $sql)) {
  header('Location: ./index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>