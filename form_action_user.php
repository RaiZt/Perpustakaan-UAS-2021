<?php
include 'config/config.php';
include 'csrf.php';
 
$nama_user = stripslashes(strip_tags(htmlspecialchars($_POST['nama_user'] ,ENT_QUOTES)));
$username = stripslashes(strip_tags(htmlspecialchars($_POST['username'] ,ENT_QUOTES)));
$password = stripslashes(strip_tags(htmlspecialchars($_POST['password'] ,ENT_QUOTES)));
$level = stripslashes(strip_tags(htmlspecialchars($_POST['level'] ,ENT_QUOTES)));
$status = stripslashes(strip_tags(htmlspecialchars($_POST['status'] ,ENT_QUOTES)));
 
$query = "INSERT into user (nama_user, username, password, level, status) VALUES (?, ?, ?, ?, ?)";
$result = $conn->prepare($query);
$result->bind_param("sssss", $nama_user, $username, $password, $level, $status);
$result->execute();
 
echo json_encode(['success' => 'Sukses']);
 
$conn->close();
?>