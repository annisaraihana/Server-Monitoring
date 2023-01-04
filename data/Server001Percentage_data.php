<?php
header('Content-Type: application/json');
$conn = mysqli_connect("localhost","root","root","monitoring");
$sqlQuery = "SELECT COUNT(CASE WHEN trans_status.status = 1 THEN 1 END) AS ActiveCount, COUNT(CASE WHEN trans_status.status = 0 THEN 1 END) AS InactiveCount FROM trans_status WHERE `trans_status`.`run_time` >= '2022-01-01 00:00:01' AND `trans_status`.`run_time` <= '2022-01-31 23:59:59';";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);

/*$conn = mysqli_connect("localhost","root","root","monitoring");
$sqlQuery = "SELECT COUNT(*) FROM trans_status WHERE trans_status.status = 0 AND trans_status.idservice = 001 AND `trans_status`.`run_time` >= '2022-01-01 00:00:01' AND `trans_status`.`run_time` <= '2022-01-31 23:59:59';";
$result = mysqli_query($conn,$sqlQuery);
$inactivedata = array();
foreach ($result as $row) {
	$inactivedata[] = $row;
}
mysqli_close($conn);
echo json_encode($inactivedata);*/

?>