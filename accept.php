<?php
    require_once('includes/connect.php');
    $buy_id = $_GET['id'];
    $land_id = $_GET['land_id'];

    $sql = "UPDATE sale SET status=2 WHERE buy_id=" . $buy_id . " AND land_id = ". $land_id;
    $result = $conn->query($sql);
    if($result){
        $url = 'index.php';
        header('Location: '.$url);
    }
?>