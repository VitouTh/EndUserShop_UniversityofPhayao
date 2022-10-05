<?php
require_once('../includes/authen.php');
if (!$_SESSION['id']) {
    header('location: ../login.php');
}
$file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php");

$sql_dis = "SELECT * FROM `display`";
$result_dis = $conn->query($sql_dis);
$row_dis = $result_dis->fetch_assoc();

$sql_me = "SELECT * FROM `user` WHERE `id` = '" . $_SESSION['id'] . "'";
$result_me = $conn->query($sql_me);
$row_me = $result_me->fetch_assoc();

?>


       
        

<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="../img/up.jpg" alt="Icon" style="width: 30px; height: 30px;">
            </div>
            <h3 class="m-0 text-primary">จัดการข้อมูล</h3>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index.php"
                    class="nav-item nav-link <?php echo $file_name == 'index' ? 'active' : '' ?>">หน้าแรก</a>
                <?php if ($row_me['role'] == 'admin') { ?>
                <a href="web.php"
                    class="nav-item nav-link <?php echo $file_name == 'web' ? 'active' : '' ?>">เว็บไซต์</a>
                <a href="user.php"
                    class="nav-item nav-link <?php echo $file_name == 'user' || $file_name == 'user-add' || $file_name == 'user-edit' ? 'active' : '' ?>">สมาชิก</a>
                <?php } ?>
                <?php if ($row_me['role'] == 'admin') { ?>
                <a href="land.php"
                    class="nav-item nav-link <?php echo $file_name == 'land' || $file_name == 'land-add' || $file_name == 'land-edit' ? 'active' : '' ?>">ประกาศ</a>
                <?php } ?>
                <?php if ($row_me['role'] == 'user') { ?>
                <a href="land.php"
                    class="nav-item nav-link <?php echo $file_name == 'land' || $file_name == 'land-add' || $file_name == 'land-edit' ? 'active' : '' ?>">ประกาศ</a>
                <?php } ?>
                <a href="profile.php"
                    class="nav-item nav-link <?php echo $file_name == 'profile' ? 'active' : '' ?>">โปรไฟล์</a>
                    <?php if ($row_me['role'] == 'user') { ?>
                <a href="line.php"
                    class="nav-item nav-link <?php echo $file_name == 'line' ? 'active' : '' ?>">แจ้งรายชื่อคนโกง</a>
                <?php } ?>
                
            </div>
            <?php if ($row_me['role'] == 'admin') { ?>
  <div class="dropdown" style="margin-right: 15px; ">
  <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   เมนูอื่นๆ
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item"  href="blacklist.php"
                    class="nav-item nav-link <?php echo $file_name == 'blacklist' || $file_name == 'blacklist-add' || $file_name == 'blacklist-edit' ? 'active' : '' ?>">blacklist</a></li>
    <li><a class="dropdown-item" href="com.php?id=<?php echo $row['id']; ?>"
                    class="nav-item nav-link <?php echo $file_name == 'com' ? 'active' : '' ?>">คอมเมนต์</a></li>
    <li><a class="dropdown-item" href="order.php?id=<?php echo $_SESSION['id'] ?>"
                    class="nav-item nav-link <?php echo $file_name == 'order' ? 'active' : '' ?>">คำสั่งซื้อ</a></li>
  </ul>
</div>
                <?php } ?>

                <?php if ($row_me['role'] == 'user') { ?>
  <div class="dropdown" style="margin-right: 15px; ">
  <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   เมนูอื่นๆ
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item"  href="com.php?id=<?php echo $row['id']; ?>"
                    class="nav-item nav-link <?php echo $file_name == 'com' ? 'active' : '' ?>">คอมเมนต์</a></li>
    <li><a class="dropdown-item" href="from.php"
                    class="nav-item nav-link <?php echo $file_name == 'from' ? 'active' : '' ?>">แบบประเมิน</a></li>
    <li><a class="dropdown-item" href="order.php?id=<?php echo $_SESSION['id'] ?>"
                    class="nav-item nav-link">คำสั่งซื้อ</a></li>
                                   
  </ul>
</div>
                <?php } ?>
            
            <a href="logout.php" class="btn btn-danger px-3 d-none d-lg-flex">ออกจากระบบ</a>
            <a href="../index.php" style="margin-left: 15px;"
                class="btn btn-primary px-3 d-none d-lg-flex"><?php echo $row_dis['web_name']; ?></a>
        </div>
    </nav>
    
</div>
<!-- Navbar End -->