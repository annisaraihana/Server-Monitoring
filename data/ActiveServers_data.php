<?php
include '../env.php';
include '../autoload.php';

header('Content-Type: application/json');
$conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'),env('DB_NAME'));
$sqlQuery = "SELECT `trans_status`.`run_time` AS `Timestamp`, COUNT(`trans_status`.`status`) AS `ActiveServers` FROM `trans_status` WHERE `trans_status`.`status` = '1' AND `trans_status`.`run_time` >= DATE_SUB(NOW(), INTERVAL 1 HOUR) GROUP BY Timestamp;";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
?>