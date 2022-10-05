<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ประกาศ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- sweetalert2 -->
    <script src="../lib/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../lib/sweetalert2/dist/sweetalert2.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Custom sweetalert2 Stylesheet -->
    <link href="../css/sweetalert2.css" rel="stylesheet">
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
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                            style="max-width: 600px;">
                            <h3 class="mb-3">เพิ่ม ประกาศ</h3>
                            <a href="land.php" class="btn btn-secondary btn" style="width: 200px;"> ย้อนกลับ</a>
                        </div>

                    </div>
                </div>
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <form action="sql/land-insert.php" method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <div class="custom-file">
                                            <input type="hidden" name="image">
                                            <img id="imgUpload" style="width: 500px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3" style="margin-top: 150px;">
                                    <div class="form-floating">
                                        <input type="file" class="custom-file-input" name="file" id="customFile">
                                        <!-- <label class="custom-file-label" for="customFile"></label> -->
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select border-1 py-3" aria-hidden="true" name="type"
                                            placeholder="ประเภท" required>
                                            <option value="">--- ประเภท ---</option>
                                            <option value="เครื่องใช้ไฟฟ้า">เครื่องใช้ไฟฟ้า</option>
                                            <option value="เสื้อผ้า">เสื้อผ้า</option>
                                            <option value="ของใช้ทั่วไป">ของใช้ทั่วไป</option>
                                            <option value="รองเท้า">รองเท้า</option>
                                            <option value="กระเป๋า">กระเป๋า</option>
                                            <option value="หนังสือ">หนังสือ</option>
                                            <option value="อื่นๆ">อื่นๆ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select border-1 py-3" aria-hidden="true" name="for"
                                            placeholder="สำหรับ" required>
                                            <option value="">--- สำหรับ ---</option>
                                            <option value="ขาย">ขาย</option>
                                            <option value="รับซื้อ">รับซื้อ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="land" name="land"
                                            placeholder="หัวข้อ" required>
                                        <label for="land">หัวข้อ</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="land">รายละเอียด</label>
                                    <div class="form-floating">
                                        <textarea class="d-none" name="detail" id="detail" rows="10"
                                            cols="80"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="จังหวัด" required>
                                        <label for="address">จังหวัด</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="rai" name="rai" placeholder="ชิ้น"
                                            required>
                                        <label for="rai">ชิ้น</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="price" name="price"
                                            placeholder="ราคา" required>
                                        <label for="price">ราคา</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" name="submit"
                                        class="btn btn-primary w-100 py-3">บันทึก</button>
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
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- CK Editor -->
    <script src="../lib/ckeditor/ckeditor.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>

    <script>
    $('.custom-file-input').on('change', function() {
        var size = this.files[0].size / 1024 / 1024
        if (size.toFixed(2) > 2) {
            alert('to big, maximum is 2MB')
        } else {
            var fileName = $(this).val().split('\\').pop()
            $(this).siblings('.custom-file-label').html(fileName)
            if (this.files[0]) {
                var reader = new FileReader()
                $('.figure').addClass('d-block')
                reader.onload = function(e) {
                    $('#imgUpload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0])
            }
        }
    })

    //CKEDITOR
    CKEDITOR.replace('detail', {
        filebrowserBrowseUrl: '../lib/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl: '../lib/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl: '../lib/responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    });
    </script>

</body>

</html>