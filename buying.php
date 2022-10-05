<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();
require_once('includes/connect.php');
    $sell_id = $_GET['sell_id'];
    $buy_id = $_GET['buy_id'];
    $land_id = $_GET['land_id'];

    if($sell_id == $buy_id){
        echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal.fire({
                      title: "ไม่สามารถสั้งซื้อได้!",
                      text: "โปรดลองใหม่!",
                      type: "warning",
                      icon: "error"
                    });';
                echo '}, 500 );</script>';

                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { 
                        window.location.href = "index.php";';
                echo '}, 5000 );</script>';
    
    }else{
    $sql = "INSERT INTO `sale` (`sell_id`, `buy_id`, `status`, `land_id`) 
        VALUES ('" . $sell_id . "', 
                '" . $buy_id . "', 
                '" . 1 . "',
                '" . $land_id . "');";
    $result = $conn->query($sql);
    if($result){
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal.fire({
              title: "สั่งซื้อสินค้าสำเร็จ!",
              text: "ได้สั่งซื้อแล้ว",
              type: "success",
              icon: "success"
            });';
        echo '}, 500 );</script>';

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { 
                window.location.href = "index.php";';
        echo '}, 1500 );</script>';
    }
    }

    // $sql_check_land_id = "SELECT * FROM `rating_data` WHERE `land_id` = '" . $_GET['id'] . "' ";
    // $check_land_id = $conn->query($sql_check_land_id);

    // $sql_check_user_id = "SELECT * FROM `rating_data` WHERE `user_id` = '" . $_GET['user_id'] . "' ";
    // $check_user_id = $conn->query($sql_check_user_id);

    // if (!$check_land_id->num_rows || !$check_user_id->num_rows) {
    // $sql = "INSERT INTO `rating_data` (`user_id`, `remark`, `rating`, `land_id`) 
    // VALUES ('" . $user_id . "', 
    //         '" . $remark . "', 
    //         '" . $rate . "',
    //         '" . $land_id . "');";

    // $result = $conn->query($sql);
    // }else {
    //     $message = "rating already";
    //     echo "<script type='text/javascript'>alert('$message');</script>";
    // }

?>