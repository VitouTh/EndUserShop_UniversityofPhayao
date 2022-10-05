<?php
session_start();
require_once('includes/connect.php');
if (isset($_POST['submit'])) {

    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);

    if ($password == $confirm_password) {

        $sql_check_username = "SELECT * FROM `user` WHERE `username` = '" . $_POST['username'] . "' ";
        $check_username = $conn->query($sql_check_username);
        if (!$check_username->num_rows) {
            $hashed = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO `user` (`username`, `password`, `name`,`email`,`tel`,`line`, `role`, `last_login`) 
            VALUES ('" . $_POST['username'] . "', 
                    '" . $hashed . "', 
                    '" . $_POST['name'] . "',
                    '" . $_POST['email'] . "',
                    '" . $_POST['tel'] . "',
                    '" . $_POST['line'] . "',
                    'user',
                    '" . date("Y-m-d H:i:s") . "');";

            $result = $conn->query($sql);
            if ($result) {
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal.fire({
                      title: "สมัครสมาชิกสำเร็จ!",
                      text: "กรุณาเข้าสู่ระบบ!",
                      type: "success",
                      icon: "success"
                    });';
                echo '}, 500 );</script>';

                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { 
                        window.location.href = "login.php";';
                echo '}, 5000 );</script>';
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
                        window.location.href = "register.php";';
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
                window.location.href = "register.php";';
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
                window.location.href = "register.php";';
        echo '}, 3000 );</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>สมัครสมาชิก</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- sweetalert2 -->
    <script src="lib/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="lib/sweetalert2/dist/sweetalert2.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom sweetalert2 Stylesheet -->
    <link href="css/sweetalert2.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php require_once('includes/navbar.php'); ?>
        <!-- Navbar End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="p-5 pe-0">
                            <img class="img-fluid w-100"
                                src="https://images.unsplash.com/photo-1540535099023-85e352781693?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">สมัครสมาชิก</h1>
                        <form action="" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Username" required>
                                        <label for="username">Username</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="name"
                                            required>
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="อีเมล" required>
                                        <label for="email">อีเมล</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="tel" name="tel"
                                            placeholder="เบอร์โทร" required>
                                        <label for="tel">เบอร์โทร</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="line" name="line"
                                            placeholder="ID ไลน์" required>
                                        <label for="line">ID ไลน์</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password" required>
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="confirm_password"
                                            name="confirm_password" placeholder="Confirm password" required>
                                        <label for="confirm_password">Confirm password</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn btn-primary w-100 py-2 mb-4"
                                        type="submit">สมัครสมาชิก</button>
                                </div>
                                <div class="col-12">
                                    หากมีบัญชีผู้ใช้งานอยู่แล้ว ? <a href="login.php"
                                        class="btn btn-warning">เข้าสู่ระบบ</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Footer Start -->
        <?php require_once('includes/footer.php'); ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>