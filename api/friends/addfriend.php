<?php require '../config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$data=json_decode(file_get_contents("php://input"));

$uid=$data->uid;

$fid=$data->fid;

$status=$data->status;
$notification=$data->notification;

$sql = "INSERT INTO friends (uid,fid,status,notification) VALUES ('$uid',  '$fid' , '$status', '$notification')";

$result = $conn->query($sql);

echo "success";

$conn->close();
?>