<?php


include '../env.php';
include '../autoload.php';

header('Content-Type: application/json');

$conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'),env('DB_NAME'));
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }

$sqlQuery = "SELECT COUNT(CASE WHEN trans_status.status = 1 THEN 1 END) AS ActiveCount, COUNT(CASE WHEN trans_status.status = 0 THEN 1 END) AS InactiveCount FROM trans_status WHERE trans_status.idservice = ? AND MONTH(`trans_status`.`run_time`) = ? AND YEAR(`trans_status`.`run_time`) = ?;";
$stmt = $conn->prepare($sqlQuery); 
$stmt->bind_param("iii", $ServiceId, $MonthId, $Year);

$ServiceId = $_POST['ServiceId'];
$MonthId = $_POST['MonthId'];
$Year = $_POST['Year'];
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