<?php
require_once('authen.php');
$file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php");

$sql_dis = "SELECT * FROM `display`";
$result_dis = $conn->query($sql_dis);
$row_dis = $result_dis->fetch_assoc();
?>

<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="img/up.jpg" alt="Icon" style="width: 30px; height: 30px;">
            </div>
            <h3 class="m-0 text-primary"><?php echo $row_dis['web_name']; ?></h3>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index.php"
                    class="nav-item nav-link <?php echo $file_name == 'index' ? 'active' : '' ?>">หน้าแรก</a>
                <a href="about.php"
                    class="nav-item nav-link <?php echo $file_name == 'about' ? 'active' : '' ?>">เกี่ยวกับเรา</a>
                <a href="contact.php"
                    class="nav-item nav-link <?php echo $file_name == 'contact' ? 'active' : '' ?>">ติดต่อเรา</a>
                <a href="back.php"
                    class="nav-item nav-link <?php echo $file_name == 'back' ? 'active' : '' ?>">ผู้ถูกพิพาท</a>
                <a href="law.php"
                    class="nav-item nav-link <?php echo $file_name == 'law' ? 'active' : '' ?>">ข้อตกลง</a>
            </div>
            <?php
            if (!$_SESSION['id']) { ?>
            <a href="login.php" class="btn btn-primary px-3 d-none d-lg-flex">เข้าสู่ระบบ</a>
            <?php } else { ?>
            <a href="manage/index.php" class="btn btn-primary px-3 d-none d-lg-flex">จัดการ</a>
            <?php } ?>
        </div>
    </nav>
</div>
<!-- Navbar End -->