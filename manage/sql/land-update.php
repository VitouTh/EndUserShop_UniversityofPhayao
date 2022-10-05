<?php
include_once('../../includes/authen.php');
if (isset($_POST['submit'])) {

    $type = $_POST['type'];
    $for = $_POST['for'];
    $status = $_POST['status'];
    //$detail = $_POST['detail'];
    $detail = str_replace('../../../', './', $_POST['detail']);

    $image_name = $_POST['data_file'];
    if ($_FILES['file']['name'] != '') {
        $temp =  explode('.', $_FILES['file']['name']);
        $image_name = round(microtime(true) * 9999) . '.' . end($temp);
        $url_upload = '../../img/land/' . $image_name;
        if (move_uploaded_file($_FILES['file']['tmp_name'], $url_upload)) {
            $image_delete = ROOT_PATH . $base_path . pathinfo($_POST['data_file'], PATHINFO_BASENAME);
            unlink($image_delete);
        } else {
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal.fire({
                        title: "ผิดพลาด!",
                        text: "ไม่สามารถอัพโหลดรูปภาพใหม่ได้ กรุณาลองใหม่!",
                        type: "warning",
                        icon: "error"
                        });';
            echo '}, 500 );</script>';

            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { 
                            window.location.href = "../land.php";';
            echo '}, 3000 );</script>';
        }
    }

    $sql = "UPDATE `land` 
        SET `type` = '" . $type . "',
            `for` = '" . $for . "',
            `land` = '" . $_POST['land'] . "',
            `address` = '" . $_POST['address'] . "',
            `detail` = '" . $detail . "',
            `rai` = '" . $_POST['rai'] . "',
            `image` = '" . $image_name . "',
            `status` = '" . $status . "'
        WHERE `id` = '" . $_POST['id'] . "';";

    $result = $conn->query($sql) or die($conn->error);
    if ($result) {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal.fire({
                      title: "บันทึกสำเร็จ!",
                      text: "แก้ไขประกาศเรียบร้อยแล้ว!",
                      type: "success",
                      icon: "success"
                    });';
        echo '}, 500 );</script>';

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { 
                        window.location.href = "../land.php";';
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
                        window.location.href = "../land.php";';
        echo '}, 3000 );</script>';
    }
} else {
    header('Refresh:0; url=../land.php');
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