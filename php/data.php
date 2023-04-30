<?php

$conn = mysqli_connect("172.18.0.3", "root", "utsSNA_php","Redlock");
if (!$conn) {
  die("Connection failed: " . mysql_connect_error());
}
$sql = "SELECT COUNT(*) as Data FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); 
    echo "Total Data = " . $row["Data"];
} else {
    echo "0 results";
}
?>

