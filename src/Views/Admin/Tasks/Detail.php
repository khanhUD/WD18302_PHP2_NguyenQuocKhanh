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

                    <div class="container">
                        <h1 class="mt-5 mb-4">Chi Tiết Nhiệm Vụ Dự Án</h1>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tên Nhiệm Vụ: Task Name</h5>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <p class="card-text"><strong>Dự Án:</strong> Project Name</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="card-text"><strong>Nhóm Thực Hiện:</strong> Team Name</p>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <p class="card-text"><strong>Ngày Bắt Đầu:</strong> Start Date</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="card-text"><strong>Ngày Kết Thúc:</strong> End Date</p>
                                    </div>
                                </div>
                                <p class="card-text mt-4"><strong>Nội Dung Nhiệm Vụ:</strong> Task Content</p>
                                <p class="card-text "><strong>Mô Tả:</strong> Task Description</p>
                                <p class="card-text "><strong>DANH SÁCH NHÂN VIÊN:</strong> </p>

                                <div class="card">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>

                                                    <th>Họ và tên</th>
                                                    <th>Hình</th>
                                                    <th>Email</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">

                                                <tr>

                                                    <td>Khanh</td>
                                                    <td>Khanh@gmail.com</td>
                                                    <td>Khanh@gmail.com</td>
                                                    <td>Nhân viên</td>
                                                    <td>
                                                        <div class="dropdown">

                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#"><i class="bx bx-edit-alt me-1"></i> Sửa</a>
                                                                <form method="post" action="#">
                                                                    <input type="hidden" name="id" value="<?= $items['id'] ?>">
                                                                    <button class="dropdown-item" type="submit">
                                                                        <i class="bx bx-trash me-1"></i>Xóa</button>
                                                                </form>
                                                            </div>
                                                        </div>
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