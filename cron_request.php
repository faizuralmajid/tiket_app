<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_tiket";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$tgl = date("Y-m-d");
$sql = "SELECT * FROM tbl_request WHERE status='open' AND end_date='$tgl'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $sql = "UPDATE tbl_request SET status = 'Close' WHERE id = '$id' ";
        $result = $conn->query($sql);
    }
} else {
    echo "0 results";
}
$conn->close();
