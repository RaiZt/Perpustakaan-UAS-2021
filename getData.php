<?php
    include 'config/config.php';
    $i = 1;
    $query = "SELECT * FROM user ORDER BY id_user DESC";
    $result = $conn->prepare($query);
    $result->execute();
    $res1 = $result->get_result();
    while ($row = $res1->fetch_assoc()) {
        $data[$i]['id_user'] = $row['id_user'];
        $data[$i]['nama_user'] = $row['nama_user'];
        $data[$i]['username'] = $row['username'];
        $data[$i]['password'] = $row['password'];
        $data[$i]['level'] = $row['level'];
        $data[$i]['status'] = $row['status'];

        $i++;
	} 

    $out = array_values($data);
    echo json_encode($out);
?>