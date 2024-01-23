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
                        <div class="row">
                            <!-- Cột chiều rộng 3 -->
                            <div class="col-md-12">
                                <div class="sidebar">
                                    <!-- Nội dung của cột 3 -->
                                    <h4>SỬA NHÂN VIÊN</h4>
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


                                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                                            <button type="reset" class="btn btn-primary">Nhập lại</button>
                                        </form>
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