<?php
header('Content-Type: application/json');
$conn = mysqli_connect("localhost","root","root","monitoring");
$sqlQuery = "SELECT `trans_status`.`run_time` AS `Timestamp`, COUNT(`trans_status`.`status`) AS `ActiveServers` FROM `trans_status` WHERE `trans_status`.`status` = '1' AND `trans_status`.`run_time` >= '2023-01-01 00:00:01' AND `trans_status`.`run_time` <= '2023-01-02 23:59:59' GROUP BY Timestamp;";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
?>