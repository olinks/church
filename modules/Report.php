<?php
    include "../connection/Database.php";
    $from = $_POST['from'];
    $to = $_POST['to'];

    $sql = "SELECT * FROM income WHERE date BETWEEN '$from' AND '$to'";
    $rs = $db -> query("$sql");
    if($rs -> num_rows){
        $res = $rs->fetch_all(MYSQLI_ASSOC);
        echo json_encode($res);
    }
?>