<?php 

    // Conn
    include '../../views/config/conn.php';

    // get Post
    $data = json_decode(file_get_contents("php://input"), TRUE);

    $lists = "select * from documentos";
    $lists = $conn->query($lists)->fetch_all(MYSQLI_ASSOC);

    // echo count($lists);
    for($i=0; $i < count($lists);$i++){
        $lists[$i]['opcion'] = 'true';
        // print_r($lists[$i]);
    }

    // print_r($lists);

    echo json_encode($lists);
?>