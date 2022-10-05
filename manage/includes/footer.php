<?php
$sql = "SELECT * FROM `display`";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6">
                <h5 class="text-white mb-4">ติดต่อเราได้ที่นี่</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $row['address']; ?></p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo $row['tel']; ?></p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $row['email']; ?></p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" target="_blank"
                        href="<?php echo $row['link_twiiter']; ?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank"
                        href="<?php echo $row['link_facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank"
                        href="<?php echo $row['link_youtube']; ?>"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank"
                        href="<?php echo $row['link_line']; ?>"><i class="fab fa-line"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">เมนู</h5>
                <a class="btn btn-link text-white-50" href="index.php">หน้าแรก</a>
                <a class="btn btn-link text-white-50" href="user.php">สมาชิก</a>
                <a class="btn btn-link text-white-50" href="land.php">ประกาศ</a>
                <a class="btn btn-link text-white-50" href="../index.php"><?php echo $row_dis['web_name']; ?></a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">สมาชิก</h5>
                <a class="btn btn-link text-white-50" href="profile.php">โปรไฟล์</a>
                <a class="btn btn-link text-white-50" href="logout.php">ออกจากระบบ</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center">
                    &copy; <a class="border-bottom" href="#"><?php echo $row['site_name']; ?></a> , All Right Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->