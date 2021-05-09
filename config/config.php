<?php
$conn = new mysqli('localhost','root','','perpustakaan');
session_start();
if(empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
include 'function.php';
?>
