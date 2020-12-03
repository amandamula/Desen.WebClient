<?php
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "amanda", "123456", "bibilioteca");
$stmt = $conn->prepare("SELECT * FROM llibre");


if(isset($_GET['isbn'])){
    $stmt = $conn->prepare("SELECT * FROM llibre WHERE isbn=".$_REQUEST['isbn']);
    $stmt->execute();
    $res = $stmt->get_result();
    while($row = mysqli_fetch_array($res)) {
        $id = $row['autor'];

    }

    $stmt = $conn->prepare("SELECT * FROM AUTOR WHERE idautor =".$id);
}

$stmt->execute();
$result = $stmt->get_result();



$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
