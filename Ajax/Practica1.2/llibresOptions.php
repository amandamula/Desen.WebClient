<?php
$conn = new mysqli("localhost", "amanda", "123456", "bibilioteca");
$stmt = $conn->prepare("SELECT idautor,nom,llinatges FROM autor");
$stmt->execute();
$result = $stmt->get_result();

while($row = mysqli_fetch_array($result)) {
    echo "<option value='".$row['idautor']."'>".$row['nom']." ".$row['llinatges']."</option>";
}