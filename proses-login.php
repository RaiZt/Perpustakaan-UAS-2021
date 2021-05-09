<?php 
include('config/config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$query);
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($num_row >= 1){
    echo "success";

    $_SESSION['id_user'] = $row['id_user'];
    $_SESSION['nama_user'] = $row['nama_user'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['level'] = $row['level'];

} else {
    echo "error";
}

?>