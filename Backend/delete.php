<?php
    require_once('connect');

    $input = file_get_contents('php://input');
    $message = array();
    $id = $_GET['id'];

    //$query = mysqli_query($con, "DELETE FROM students WHERE id = '$id' LIMIT 1";);
    $query = "DELETE FROM students WHERE id = '$id' LIMIT 1";
    $result = mysqli_query($con, $query);

    if($query){
        http_response_code(201);
        $message['status'] = "Success";
    }else{
        http_response_code(422);
        $message['status'] = "Error";
    }

    echo json_decode($message);
    echo mysqli_error($con);
?>