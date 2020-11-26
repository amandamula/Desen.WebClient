<?php
$conn = new mysqli("localhost", "amanda", "123456", "bibilioteca");
$stmt = $conn->prepare("SELECT titol FROM llibre ORDER BY titol");
$stmt->execute();
$result = $stmt->get_result();

$a = array();
while($row = mysqli_fetch_array($result)) {
    array_push($a, $row['titol']);
}

//$a = array_column($result, 'titol');

$q = $_REQUEST["q"];
$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "no suggestion" : $hint;