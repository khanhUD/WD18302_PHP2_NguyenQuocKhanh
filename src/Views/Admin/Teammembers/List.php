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
                        <div class="row">
                            <!-- Cột chiều rộng 3 -->
                            <div class="col-md-12">
                                <div class="sidebar">
                                    <!-- Nội dung của cột 3 -->
                                    <h4>TẠO NHÂN VIÊN</h4>
                                    <div class="card p-3">
                                        <form id="form-add-users" action="#" method="post" enctype="multipart/form-data">
                                            <div class="row">

                                                <div class="mb-3 col-md-6 form-group">
                                                    <label for="member_name" class="form-label">Họ và tên</label>
                                                    <input class="form-control" type="text" id="member_name" name="member_name" value="" placeholder="Nhập họ và tên..." />
                                                    <span class="form-message" id="member_name-error"></span>
                                                </div>
                                                <div class="mb-3 col-md-6 form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input class="form-control" type="text" id="email" name="email" value="" placeholder="Nhập email..." />
                                                    <span class="form-message" id="email-error"></span>
                                                </div>
                                                <div class="mb-3 col-md-6 form-group">
                                                    <label for="phone_number" class="form-label">Số điện thoại</label>
                                                    <input class="form-control" type="text" id="phone_number" name="phone_number" value="" placeholder="Nhập họ và tên..." />
                                                    <span class="form-message" id="phone_number-error"></span>
                                                </div>
                                                <div class="mb-3 col-md-6 form-group">
                                                    <label for="address" class="form-label">Địa chỉ</label>
                                                    <input class="form-control" type="address" id="address" name="address" value="" placeholder="Nhập địa chỉ" />
                                                    <span class="form-message" id="address-error"></span>
                                                </div>

                                                <div class="mb-3 col-md-6 form-group">
                                                    <label for="image" class="form-label">Hình ảnh</label>
                                                    <input type="file" class="form-control" id="image" name="image">
                                                    <span class="form-message" id="image-error"></span>
                                                </div>

                                                <div class="mb-3 col-md-6 form-group">
                                                    <label for="team_id" class="form-label">Nhóm</label>
                                                    <select class="form-control" name="team_id" id="team_id">

                                                        <option value="1">Nhóm 1</option>
                                                        <option value="1">Nhóm 2</option>
                                                        <option value="1">Nhóm 3</option>

                                                    </select>
                                                    <span class="form-message"></span>
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-primary">Thêm</button>
                                            <button type="reset" class="btn btn-primary">Nhập lại</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="row mt-3">
                            <!-- Cột chiều rộng 9 -->
                            <div class="col-md-12">
                                <div class="main-content">
                                    <!-- Nội dung của cột 9 -->
                                    <h4>DANH SÁCH NHÂN VIÊN</h4>
                                    <div class="card">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>

                                                        <th>Họ và tên</th>
                                                        <th>Hình</th>
                                                        <th>Email</th>
                                                        <th>Địa chỉ</th>
                                                        <th>Nhóm</th>
                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    <tr>

                                                        <td>Khanh</td>
                                                        <td>Khanh@gmail.com</td>
                                                        <td>Khanh@gmail.com</td>
                                                        <td>Nhân viên</td>
                                                        <td>mở</td>



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