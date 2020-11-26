
<?php
$autor = $_REQUEST['autor'];

$conn = new mysqli("localhost", "amanda", "123456", "bibilioteca");
$stmt = $conn->prepare("SELECT * FROM llibre WHERE autor=".$autor);
$stmt->execute();
$result = $stmt->get_result();

echo "<table class='table table-striped table-bordered'>
 <thead class='thead-dark'> 
 <tr>
    <th> ISBN</th>
    <th>Titol</th>
    <th>Gènere</th>
    <th>Num.Pàgines</th>
    <th>Any Publicació</th>

</tr>
<tbody>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['ISBN'] . "</td>";
    echo "<td>" . $row['titol'] . "</td>";
    echo "<td>" . $row['genere'] . "</td>";
    echo "<td>" . $row['numPag'] . "</td>";
    echo "<td>" . $row['anyPublicacio'] . "</td>";
    echo "</tr>";
}

echo "</tbody></table>";
