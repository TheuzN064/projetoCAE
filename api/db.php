<?php
$servername = "sql.freedb.tech";
$username = "freedb_lucena1709";
$password = "*DpwRG5bEGweq!D";
$dbname = "freedb_projetocae";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
