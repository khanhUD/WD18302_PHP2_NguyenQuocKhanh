<?php
include './src/Views/Block/Admin/header.php';
?>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <?php
        include './src/Views/Block/Admin/menu.php'
        ?>

        <!-- Layout container -->
        <div class="layout-page">
            <?php
            include './src/Views/Block/Admin/navbar.php'
            ?>
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <!-- / Content -->
                    <div class="row mt-3">
                        <!-- Cột chiều rộng 9 -->
                        <div class="col-md-12">
                            <div class="main-content">
                                <!-- Nội dung của cột 9 -->
                                <h4>Danh sách kế hoạch </h4>
                                <div class="card">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>

                                                    <th>Dự án </th>
                                                    <th>NGày bắt đầu</th>
                                                    <th>Ngày kế thúc</th>
                                                    <th>Chi phí</th>
                                                    <th>Duyệt</th>
                                                    <th>Chức năng</th>
                                                 
                                                </tr>

                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>Dự án 1</td>
                                                    <td>11/11/2024</td>
                                                    <td>12/12/2024</td>
                                                    <td>1.000.000.000</td>
                                                    
                                                    <td>
                                                        <a href="">Chấp nhận</a> |
                                                        <a href="">Từ chối</a>
                                                    </td>
                                                    <td>
                                                        <a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1"></i></i>Sửa</a>
                                                        <a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1"></i></i>Xem chi tiết</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->
                </div>

                <?php
                include './src/Views/Block/Admin/footer.php'
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
include './src/Views/Block/Admin/scrip.php'
?>