<?php
include './App/Views/Block/Admin/header.php';
?>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <?php
        include './App/Views/Block/Admin/menu.php'
        ?>

        <!-- Layout container -->
        <div class="layout-page">
            <?php
            include './App/Views/Block/Admin/navbar.php'
            ?>
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <!-- / Content -->

                    <div class="container">
                        <h1 class="mt-5 mb-4">Chi Tiết Dự Án</h1>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="card-title">Tên Dự Án: Project Name</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-md-right"><strong>Chi Phí:</strong> Project Cost</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Ngày Bắt Đầu:</strong> Start Date</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-md-right"><strong>Ngày Kết Thúc:</strong> End Date</p>
                                    </div>
                                </div>
                                <p><strong>Mô Tả Dự Án:</strong> Project Description</p>

                                <h5 class="mt-4">Danh Sách Nhiệm Vụ:</h5>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center ">
                                        <div class="text-left">
                                            Giải Phóng Mặt Bằng Quy Hoạch
                                        </div>
                                        <div class="text-right">
                                            <a href="#" class="btn btn-primary btn-sm">Xem chi tiết</a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center ">
                                        <div class="text-left">
                                            Giải Phóng Mặt Bằng Quy Hoạch
                                        </div>
                                        <div class="text-right">
                                            <a href="#" class="btn btn-primary btn-sm">Xem chi tiết</a>
                                        </div>
                                    </li>
                                    
                                    <!-- Thêm các mục khác tùy thuộc vào số lượng nhiệm vụ trong dự án -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->
                </div>

                <?php
                include './App/Views/Block/Admin/footer.php'
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
<?php
include './App/Views/Block/Admin/scrip.php'
?>