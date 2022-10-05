<?php
include_once('../../includes/authen.php');
if (isset($_POST['submit'])) {

    $sql = "UPDATE `display` 
        SET `web_name` = '" . $_POST['web_name'] . "',
            `site_name` = '" . $_POST['site_name'] . "',
            `email` = '" . $_POST['email'] . "',
            `tel` = '" . $_POST['tel'] . "',
            `address` = '" . $_POST['address'] . "',
            `link_twiiter` = '" . $_POST['link_twiiter'] . "',
            `link_facebook` = '" . $_POST['link_facebook'] . "',
            `link_youtube` = '" . $_POST['link_youtube'] . "',
            `link_line` = '" . $_POST['link_line'] . "',
            `embed_map` = '" . $_POST['embed_map'] . "'
        WHERE `id` = '" . $_POST['id'] . "';";

    $result = $conn->query($sql) or die($conn->error);
    if ($result) {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal.fire({
                      title: "บันทึกสำเร็จ!",
                      text: "แก้ไขโปรไฟล์เรียบร้อยแล้ว!",
                      type: "success",
                      icon: "success"
                    });';
        echo '}, 500 );</script>';

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { 
                        window.location.href = "../web.php";';
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
                        window.location.href = "../web.php";';
        echo '}, 3000 );</script>';
    }
} else {
    header('Refresh:0; url=../web.php');
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