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

                    <div class="mt-3">
                        <div class="row mt-3">
                            <!-- Cột chiều rộng 9 -->
                            <div class="col-md-6">
                                <div class="main-content">
                                    <!-- Nội dung của cột 9 -->
                                   <h4>NHÓM 1</h4>
                                    <h5>NHÓM TRƯỞNG: Nguyễn Quốc Khanh</h5>

                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="row mt-3">
                                    <!-- Cột chiều rộng 9 -->
                                    <div class="col-md-12">
                                        <div class="main-content">
                                            <!-- Nội dung của cột 9 -->
                                            <h5>DANH SÁCH NHÂN VIÊN</h5>
                                            <div class="card">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>

                                                                <th>Họ và tên</th>
                                                                <th>Hình</th>
                                                                <th>Email</th>
                                                                <th>Địa chỉ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-border-bottom-0">

                                                            <tr>

                                                                <td>Khanh</td>
                                                                <td>Khanh@gmail.com</td>
                                                                <td>Khanh@gmail.com</td>
                                                                <td>Nhân viên</td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
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