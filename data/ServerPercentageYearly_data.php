<?php


function GetServerPercentage($ServiceId) {

    include '../env.php';
    include '../autoload.php';
    
    header('Content-Type: application/json');
    $conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'),env('DB_NAME'));
    $sqlQuery = "SELECT COUNT(CASE WHEN trans_status.status = 1 THEN 1 END) AS ActiveCount, COUNT(CASE WHEN trans_status.status = 0 THEN 1 END) AS InactiveCount FROM trans_status WHERE trans_status.idservice =  " . $ServiceId . " AND `trans_status`.`run_time` >= '2022-01-01 00:00:01' AND `trans_status`.`run_time` <= '2022-12-31 23:59:59';";
    $result = mysqli_query($conn,$sqlQuery);
    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }
    mysqli_close($conn);
    echo json_encode($data);

}

include '../env.php';
include '../autoload.php';

header('Content-Type: application/json');
$ServiceId = $_POST['ServiceId'];
$conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'),env('DB_NAME'));
$sqlQuery = "SELECT COUNT(CASE WHEN trans_status.status = 1 THEN 1 END) AS ActiveCount, COUNT(CASE WHEN trans_status.status = 0 THEN 1 END) AS InactiveCount FROM trans_status WHERE trans_status.idservice =  " . $ServiceId . " AND `trans_status`.`run_time` >= '2022-01-01 00:00:01' AND `trans_status`.`run_time` <= '2022-12-31 23:59:59';";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);

?>