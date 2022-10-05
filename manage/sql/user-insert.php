<?php
include_once('../../includes/authen.php');
if (isset($_POST['submit'])) {

    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);

    if ($password == $confirm_password) {

        $sql_check_username = "SELECT * FROM `user` WHERE `username` = '" . $_POST['username'] . "' ";
        $check_username = $conn->query($sql_check_username);
        if (!$check_username->num_rows) {
            $hashed = password_hash($password, PASSWORD_DEFAULT);

            $role = $_POST['role'];

            $sql = "INSERT INTO `user` (`username`, `password`, `name`, `role`, `email`, `tel`, `line`) 
            VALUES ('" . $_POST['username'] . "', 
                    '" . $hashed . "', 
                    '" . $_POST['name'] . "',
                    '" . $role . "',
                    '" . $_POST['email'] . "',
                    '" . $_POST['tel'] . "',
                    '" . $_POST['line'] . "');";

            $result = $conn->query($sql);
            if ($result) {
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal.fire({
                      title: "บันทึกสำเร็จ!",
                      text: "เพิ่มสมาชิกเรียบร้อยแล้ว!",
                      type: "success",
                      icon: "success"
                    });';
                echo '}, 500 );</script>';

                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { 
                        window.location.href = "../user.php";';
                echo '}, 2000 );</script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal.fire({
                      title: "ผิดพลาด!",
                      text: "กรุณาลองใหม่!",
                      type: "warning",
                      icon: "error"
                    });';
                echo '}, 500 );</script>';

                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { 
                        window.location.href = "../user.php";';
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
                window.location.href = "../user.php";';
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
                window.location.href = "../user.php";';
        echo '}, 3000 );</script>';
    }
} else {
    header('Refresh:0; url=../user.php');
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