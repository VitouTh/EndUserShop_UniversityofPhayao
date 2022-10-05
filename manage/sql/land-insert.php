<?php
include_once('../../includes/authen.php');
if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $for = $_POST['for'];
    //$detail = $_POST['detail'];
    $detail = str_replace('../../../', './', $_POST['detail']);

    $temp =  explode('.', $_FILES['file']['name']);
    $new_name = round(microtime(true) * 9999) . '.' . end($temp);
    $url_upload = '../../img/land/' . $new_name;
    if (move_uploaded_file($_FILES['file']['tmp_name'], $url_upload)) {

        $sql = "INSERT INTO `land` (`type`, `for`, `land`, `address`, `detail`, `rai`,`price`, `created_by`, `created_date`, `status`, `image`) 
            VALUES ('" . $type . "', 
                    '" . $for . "', 
                    '" . $_POST['land'] . "',
                    '" . $_POST['address'] . "',
                    '" . $detail . "',
                    '" . $_POST['rai'] . "',
                    '" . $_POST['price'] . "',
                    '" . $_SESSION['id'] . "',
                    '" . date("Y-m-d H:i:s") . "',
                    'ว่าง',
                    '" . $new_name . "');";

        $result = $conn->query($sql);
        if ($result) {
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal.fire({
                      title: "บันทึกสำเร็จ!",
                      text: "เพิ่มประกาศเรียบร้อยแล้ว!",
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
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal.fire({
                      title: "ผิดพลาด!",
                      text: "การอัปโหลดผิดพลาด กรุณาลองใหม่!",
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