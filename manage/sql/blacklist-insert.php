<?php
include_once('../../includes/authen.php');
if (isset($_POST['submit'])) {

    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);

    if ($password == $confirm_password) {

        $sql_check_name = "SELECT * FROM `blacklist` WHERE `name` = '" . $_POST['name'] . "' ";
        $check_name = $conn->query($sql_check_name);
        if (!$check_name->num_rows) {
            $hashed = password_hash($password, PASSWORD_DEFAULT);

            $role = $_POST['role'];
                
            $sql = "INSERT INTO `blacklist` (`name`, `tel`, `line`) 
            VALUES (
                    '" . $_POST['name'] . "',
                    '" . $_POST['tel'] . "',
                    '" . $_POST['line'] . "');";

            $result = $conn->query($sql);
             $sql1 = "UPDATE `user` 
        SET 
            `role` = '" . $role . "'
        WHERE `name` = '" . $_POST['name'] . "';";




            $result1 = $conn->query($sql1);
            if ($result &&  $result1) {
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal.fire({
                      title: "บันทึกสำเร็จ!",
                      text: "เพิ่มรายชื่อคนโกงเรียบร้อยแล้ว!",
                      type: "success",
                      icon: "success"
                    });';
                echo '}, 500 );</script>';

                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { 
                        window.location.href = "../blacklist.php";';
                echo '}, 2000 );</script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal.fire({
                      title: "ผิดพลาด!",
                      text: "มีข้อมูลอยู่แล้ว!",
                      type: "warning",
                      icon: "error"
                    });';
                echo '}, 500 );</script>';

                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { 
                        window.location.href = "../blacklist.php";';
                echo '}, 3000 );</script>';
            }
        } else {
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal.fire({
            title: "ผิดพลาด!",
            text: "ชื่อผู้ใช้งานนี้มีอยู่แล้ว!",
            type: "warning",
            icon: "error"
            });';
            echo '}, 500 );</script>';

            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { 
                window.location.href = "../blacklist.php";';
            echo '}, 3000 );</script>';
        }
    } else {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal.fire({
              title: "ผิดพลาด!",
              text: "รหัสผ่านไม่ตรงกัน!",
              type: "warning",
              icon: "error"
            });';
        echo '}, 500 );</script>';

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { 
                window.location.href = "../blacklist.php";';
        echo '}, 3000 );</script>';
    }
} else {
    header('Refresh:0; url=../blacklist.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- sweetalert2 -->
    <script src="../../lib/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../../lib/sweetalert2/dist/sweetalert2.min.css">

    <!-- Custom sweetalert2 Stylesheet -->
    <link href="../../css/sweetalert2.css" rel="stylesheet">
</head>

</html>