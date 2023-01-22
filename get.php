<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: *');
    header('Access-Control-Allow-Headers: *');

    define('DB_HOST', 'localhost');
    define('DB_USER', 'michal');
    define('DB_PASS', 'michal');
    define('DB_NAME', 'messages');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $sql = "SELECT * from messages";
    $mysqli = mysqli_query($conn,$sql);
    $json_data = array();

    while($row = mysqli_fetch_assoc($mysqli)) {
        $json_data[] = $row;
    }
    echo json_encode(['phpresult'=>$json_data]);


