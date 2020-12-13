<?php
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "amanda", "123456", "bibilioteca");

if(isset($_GET['isbn'])) {
    $stmt = $conn->prepare("SELECT * FROM llibre WHERE isbn=" . $_REQUEST['isbn']);
    $stmt->execute();
    $res = $stmt->get_result();
    $outp = $res->fetch_all(MYSQLI_ASSOC);
}

echo json_encode($outp);
