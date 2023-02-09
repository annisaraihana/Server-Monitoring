<?php

include '../env.php';
include '../autoload.php';

header('Content-Type: application/json');
$conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'),env('DB_NAME'));
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }


$sqlQuery = "SELECT `master_service`.`idservice` AS ServiceId, `master_service`.`nameservice` AS ServiceName, `master_service`.`description` AS ServiceDesc\n"

    . "FROM `master_service`;";

$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);

?>