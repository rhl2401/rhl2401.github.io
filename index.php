<?php
include_once "dbconnect.php";
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$response = array();
$response["success"] = false;


$sql = "SELECT * FROM posts";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    $response["count"] = $result->num_rows;
    while ($row = $result->fetch_assoc()) {
        $response["posts"][] = $row;
    }
    //$response["posts"][] = $result->fetch_assoc();
    $response["success"] = true;
} else {
    $response["msg"] = "Failed loading from DB";
}

echo json_encode($response);

