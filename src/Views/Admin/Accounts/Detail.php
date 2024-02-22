<?php
include './src/Views/Block/Admin/header.php';
?>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <?php
        include './src/Views/Block/Admin/menu.php';
        ?>

        <!-- Layout container -->
        <div class="layout-page">
            <?php
            include './src/Views/Block/Admin/navbar.php';
            ?>
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <!-- / Content -->
                    <div class="container">


                        <h4 class="mt-5">Thông tin tài khoản</h4>
                        <div class=" text-end ">
                            <a class="btn btn-primary" href="/tai-khoan/sua/<?= $Account['account_id'] ?>"><i class="bi bi-pencil-square me-1"></i>Sửa</a>
                        </div>
                        <div class="card  mt-2">
                            <div class="card-body">
                                <div class="col-md-2">
                                    <img src="../../../../public/uploads/<?= !empty($Account['image']) ? $Account['image'] : 'no_image.png' ?>" alt="" class="img-fluid rounded">
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <p class="card-text"><strong>Họ Và Tên:</strong> <?= $Account['full_name'] ?></p>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="card-text"><strong>Số điện thoại:</strong> <?= $Account['phone_number'] ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="card-text"><strong>Email:</strong> <?= $Account['email'] ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="card-text"><strong>Chức vụ:</strong> <?= $Account['role_name'] ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="card-text"><strong>Trạng thái tài khoản:</strong> <?= $Account['status'] == 1 ? 'Đang Mở' : ($Account['status'] == -1 ? 'Đang khóa' : 'Chờ Duyệt') ?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!-- / Content -->
                </div>

                <?php
                include './src/Views/Block/Admin/footer.php';
                ?>


                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->
<script src="../../../../public/assets/admin/js/pages/Accounts.js"></script>
<?php
include './src/Views/Block/Admin/scrip.php';
?>