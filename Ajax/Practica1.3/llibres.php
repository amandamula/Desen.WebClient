<?php
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "amanda", "123456", "bibilioteca");
$stmt = $conn->prepare("SELECT * FROM autor");
if(isset($_GET['autor'])){
    $stmt = $conn->prepare("SELECT * FROM llibre WHERE autor=".$_REQUEST['autor']);
}
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);