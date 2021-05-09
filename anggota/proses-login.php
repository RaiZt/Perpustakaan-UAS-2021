<?php 
include('../config/config.php');

$kode_anggota = $_POST['kode_anggota'];
$no_tlp = $_POST['no_tlp'];

$query = "SELECT * FROM anggota WHERE kode_anggota='$kode_anggota' AND no_tlp='$no_tlp'";
$result = mysqli_query($conn,$query);
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($num_row >= 1){
    // var_dump($query);
    echo "success";

    $_SESSION['id_anggota'] = $row['id_anggota'];
    $_SESSION['nama_anggota'] = $row['nama_anggota'];
    $_SESSION['kode_anggota'] = $row['kode_anggota'];
    $_SESSION['no_tlp'] = $row['no_tlp'];
    $_SESSION['status_anggota'] = $row['status_anggota'];

} else {
    var_dump($query);
    echo "error";
}

?>