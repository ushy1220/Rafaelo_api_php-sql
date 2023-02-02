<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    define('DB_HOST', 'localhost');
    define('DB_USER', 'michal');
    define('DB_PASS', 'michal');
    define('DB_NAME', 'messages');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(isset($_POST['delete'])) {
        $id = mysqli_real_escape_string($conn, $_POST['delete']);
        $query = "DELETE FROM messages WHERE id= '$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            echo "success!";
        } else {
            echo "failed!";
        }
    }


    /*
    $sql = "DELETE FROM users WHERE id = :id";
    $path = explode('/', $_SERVER['REQUEST_URI']);

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(':id', $path[3]);

    if($stmt->execute()) {
        $response = ['status' => 1, 'message' => 'Record deleted successfully.'];
    } else {
        $response = ['status' => 0, 'message' => 'Failed to delete record.'];
    }
    echo json_encode($response);
    break;
  */  
    