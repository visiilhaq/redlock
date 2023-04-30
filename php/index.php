<?php

$conn = mysqli_connect("172.18.0.3", "root", "utsSNA_php","Redlock");
if (!$conn) {
  die("Connection failed: " . mysql_connect_error());
}
$sql = "SELECT * FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID= " . $row["ID"]. ", Nama= " . $row["Nama"]. ", Alamat= " . $row["Alamat"]. ", Jabatan= " . $row["Jabatan"] ."<br>";
    }
} else {
    echo "0 results";
}
?>
