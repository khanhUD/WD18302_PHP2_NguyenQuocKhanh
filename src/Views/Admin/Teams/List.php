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
                    <div class="mt-3">
                        <div class="mt-3">
                            <div class="row">
                                <!-- Cột chiều rộng 3 -->
                                <div class="col-md-6">
                                    <div class="sidebar">
                                        <!-- Nội dung của cột 3 -->
                                        <h4>TẠO NHÓM </h4>
                                        <div class="card p-3">
                                            <form id="form-add-users" action="#" method="post" enctype="multipart/form-data">
                                                <div class="row">

                                                    <div class="mb-3 col-md-12 form-group">
                                                        <label for="team_name" class="form-label">Tên nhóm</label>
                                                        <input class="form-control" type="text" id="team_name" name="team_name" value="" placeholder="Nhập tên nhóm..." />
                                                        <span class="form-message" id="team_name-error"></span>
                                                    </div>
                                                    <div class="mb-3 col-md-12 form-group">
                                                        <label for="team_manager" class="form-label">Trưởng nhóm</label>
                                                        <input class="form-control" type="text" id="team_manager" name="team_manager" value="" placeholder="Nhập tên trưởng nhóm..." />
                                                        <span class="form-message" id="team_manager-error"></span>
                                                    </div>

                                                </div>
                                                <button type="submit" class="btn btn-primary">Thêm</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="row mt-3">
                            <!-- Cột chiều rộng 9 -->
                            <div class="col-md-6">
                                <div class="main-content">
                                    <!-- Nội dung của cột 9 -->
                                    <h4>DANH SÁCH NHÓM</h4>
                                    <div class="card">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Tên nhóm</th>
                                                        <th>Trưởng nhóm</th>
                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    <tr>
                                                        <td>1</td>
                                                        <td>Khanh</td>
                                                        <td>
                                                            <div class="dropdown">

                                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt me-1"></i> Xem chi tiết</a>
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
                    </div>
                    <!--  -->
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