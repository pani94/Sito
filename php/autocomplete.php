<?php

include "php/function.php";
 $conn = mysqli_connect("localhost", "S3959772", "AlexDelPiero10","S3959772");
if(isset($_GET['term'])){
    $term= test_input($_GET['term']);
$a_json = array();
$a_json_row = array();
$sql = "SELECT * FROM Materie WHERE nome LIKE '%$term%' ";
if ($data = mysqli_query($conn,$sql)) {
	while($row = mysqli_fetch_array($data)) {
        $nome = $row['nome'];
		$a_json_row["nome"] = $nome;
		array_push($a_json, $a_json_row);
	}
}
echo json_encode($a_json);
flush();
mysqli_close($conn);
}

?>
