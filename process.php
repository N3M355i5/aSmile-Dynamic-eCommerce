<?php
$email=$_COOKIE['email']; 
include 'dbconnectuser.php'; 
$sql = "SELECT name FROM users WHERE email = '$email'";
$result = $conn->query($sql);
if (!empty($result) && $result->num_rows > 0) {
// output data of each 
while($row = $result->fetch_assoc()) {
echo $row["name"];
}
}
?>