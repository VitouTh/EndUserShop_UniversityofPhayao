<?php
include_once('../../includes/authen.php');
if (isset($_POST['submit'])) {

    if (isset($_POST['role'])) {
        $role = $_POST['role'];
    } else {
        $role = 'admin';
    }

    $sql = "UPDATE `user` 
        SET `name` = '" . $_POST['name'] . "',
            `line` = '" . $_POST['line'] . "',
            `email` = '" . $_POST['email'] . "',
            `tel` = '" . $_POST['tel'] . "',
            `role` = '" . $role . "'
        WHERE `id` = '" . $_POST['id'] . "';";

    $result = $conn->query($sql) or die($conn->error);
    if ($result) {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal.fire({
                      title: "บันทึกสำเร็จ!",
                      text: "แก้ไขข้อมูลสมาชิกเรียบร้อยแล้ว!",
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