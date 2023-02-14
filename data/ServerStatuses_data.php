<?php

include '../../env.php';
include '../autoload.php';

header('Content-Type: application/json');

$conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'),env('DB_NAME'));
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }

$sqlQuery = "SELECT trans_status.run_time AS Timestamp, trans_status.status FROM trans_status WHERE trans_status.idservice = ? AND `trans_status`.`run_time` >= ? AND `trans_status`.`run_time` <= ? ;";
$stmt = $conn->prepare($sqlQuery); 
$stmt->bind_param("iss", $ServiceId, $TimestampStart, $TimestampEnd);

$ServiceId = $_POST['ServiceId'];
$TimestampStart = $_POST['Timestamp'] . " 00:00:01";
$TimestampEnd = $_POST['Timestamp'] . " 23:59:59";
$stmt->execute();

$result = $stmt->get_result();
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
$stmt->close();

?>