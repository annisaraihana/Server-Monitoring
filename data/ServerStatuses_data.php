<?php


function GetServerStatus($ServiceId) {
    include '../env.php';
    include '../autoload.php';

    header('Content-Type: application/json');
    $conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'),env('DB_NAME'));
    $sqlQuery = "SELECT trans_status.run_time AS Timestamp, trans_status.status FROM trans_status WHERE trans_status.idservice =  " . $ServiceId . " AND `trans_status`.`run_time` >= '2023-01-01 00:00:01' AND `trans_status`.`run_time` <= '2023-01-02 23:59:59';";
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
$sqlQuery = "SELECT trans_status.run_time AS Timestamp, trans_status.status FROM trans_status WHERE trans_status.idservice =  " . $ServiceId . " AND `trans_status`.`run_time` >= '2023-01-01 00:00:01' AND `trans_status`.`run_time` <= '2023-01-02 23:59:59';";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);


?>