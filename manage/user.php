<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>สมาชิก</title>
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

    <!-- datatables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" />

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
        <?php require_once('includes/navbar.php');
        ?>
        <!-- Navbar End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                            style="max-width: 600px;">
                            <h3 class="mb-3">สมาชิก</h3>
                            <a href="user-add.php" class="btn btn-primary btn" style="width: 200px;"> เพิ่ม สมาชิก</a>
                        </div>

                        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">ชื่อ - สกุล</th>
                                    <th class="text-center">อีเมล</th>
                                    <th class="text-center">เบอร์โทร</th>
                                    <th class="text-center">ID ไลน์</th>
                                    <th class="text-center">บทบาท</th>
                                    <th class="text-center">จัดการ</th>
                                    <th class="text-center">แบน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM `user` ORDER BY `id` DESC";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['tel']; ?></td>
                                    <td><?php echo $row['line']; ?></td>
                                    <td class="text-center"><?php echo $row['role']; ?></td>
                                    <td class="text-center" style="width: 150px;">
                                        <a href="user-edit.php?id=<?php echo $row['id']; ?>"
                                            class=" btn btn-warning btn-sm " style="width: 60px;">แก้ไข</a>
                                        <?php if ($row['id'] != '1') { ?>
                                        <!-- <a href="#" class="btn btn-danger btn-sm"
                                            onclick="deleteItem(<?php echo $row['id']; ?>);" style="width: 60px;">
                                            ลบ</a> -->
                                        <a href="#" class="btn btn-danger btn-sm" style="width: 60px;"
                                            onclick="deleteItem(<?php echo $row['id']; ?>);">
                                            ลบ</a>
                                        <?php } ?>
                                    </td>
                                    <td><a href="blacklist-add.php?id=<?php echo $row['id']; ?>"
                                            class=" btn btn-primary btn-sm " style="width: 60px;">แบน</a>
                                    
                                     </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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

    <!-- datatables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>

    <script>
    // Delete
    function deleteItem(id) {
        if (confirm('ต้องการลบข้อมูลสมาชิกนี้หรือไม่') == true) {
            window.location = `sql/user-delete.php?id=${id}`;
        }
    };

    // Data tables
    $(document).ready(function() {
        $('#dataTable').DataTable();
        responsive: true;
    });

    $.extend(true, $.fn.dataTable.defaults, {
        "language": {
            "sProcessing": "กำลังดำเนินการ...",
            "sLengthMenu": "แสดง  _MENU_ แถว",
            "sZeroRecords": "ไม่พบข้อมูล",
            "sInfo": "แสดง  _START_  ถึง _END_  จาก _TOTAL_  แถว",
            "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
            "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
            "sInfoPostFix": "",
            "sLength": "แถว",
            "sSearch": "ค้นหา:",
            "sSearchPlaceholder": "ค้นหา",
            "sUrl": "",
            "oPaginate": {
                "sFirst": "เริ่มต้น",
                "sPrevious": "ก่อนหน้า",
                "sNext": "ถัดไป",
                "sLast": "สุดท้าย"
            }
        }
    });
    </script>

    <script>
    $(document).ready(function() {
        $('.btn-danger').on('click', function() {
            var type = $(this).data('type');
            var data = $(this).data("set");
            var parent = $(this).parent().parent();

            if (type === 'delete') {
                swal({
                    title: data.title + 'การลบ',
                    text: 'ต้องการลบข้อมูล "' + data.name + '" ?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'ยกเลิก',
                    confirmButtonText: 'ลบ',
                    confirmButtonClass: 'btn btn-space btn-lg btn-success hover',
                    cancelButtonClass: 'btn btn-space btn-lg btn-danger hover',
                    buttonsStyling: false,
                    preConfirm: function() {
                        return new Promise(function(resolve) {
                            $.ajax({
                                    url: 'sql/user-delete.php',
                                    /* php post url */
                                    type: 'POST',
                                    data: {
                                        id: data.id,
                                        delete: data.option,
                                        extra: data.extra ? data.extra : null,
                                        title: encodeURIComponent(data.name)
                                    },
                                    dataType: 'php'
                                })

                                .done(function(response) {
                                    swal({
                                        title: 'ลบแล้ว!',
                                        text: data.title +
                                            ' ลบสำเร็จแล้ว.',
                                        type: 'สำเร็จ',
                                        confirmButtonClass: 'btn btn-space btn-lg btn-primary hover',
                                        confirmButtonText: 'Ok',
                                        buttonsStyling: false
                                    });
                                    parent.fadeOut(400, function() {
                                        parent.remove();
                                    });
                                    $('php, body').animate({
                                        scrollTop: 0
                                    }, 600);

                                })
                                .fail(function() {
                                    swal({
                                        title: 'เกิดข้อผิดพลาด',
                                        text: 'กรุณาลองใหม่อีกครั้งในภายหลัง :)',
                                        type: 'ข้อผิดพลาด',
                                        confirmButtonClass: 'btn btn-primary btn-lg',
                                        buttonsStyling: false
                                    });
                                });
                        });
                    },
                    allowOutsideClick: false
                });
            }
        });
    });
    </script>
</body>

</html>