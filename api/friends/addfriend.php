<?php require '../config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$data=json_decode(file_get_contents("php://input"));

$uid=$data->uid;

$fid=$data->fid;

$sql = "INSERT INTO friends (uid,fid) VALUES ('$uid',  '$fid')";

$result = $conn->query($sql);

echo "success";

$conn->close();
?>