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
                    <div class="row px-2">
                        <!-- Cột chiều rộng 3 -->
                        <div class="col-md-12">
                            <div class="sidebar">
                                <!-- Nội dung của cột 3 -->
                                <h4>Phân Công Thành Viên </h4>
                                <div class="card p-3">
                                    <form id="form-add-Projectparticipations" action="/phan-cong/sua-xu-ly" method="POST" enctype="multipart/form-data">
                                        <div class="row">

                                            <div class="mb-3 col-md-6 form-group">
                                                <label for="project_id" class="form-label">Tên Dự án</label>
                                                <select class="form-control" name="project_id" id="project_id">
                                                    <?php foreach ($Projects as $Project) : ?>
                                                        <?php
                                                        $selected = ($Projectparticipation['project_id'] == $Project['project_id']) ? 'selected' : '';
                                                        ?>
                                                        <option value="<?= $Project['project_id'] ?>" <?= $selected ?>><?= $Project['project_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <span class="form-message"></span>
                                            </div>
                                            <div class="mb-3 col-md-6 form-group">
                                                <label for="account_id" class="form-label">Tên Thành Viên</label>
                                                <select class="form-control" name="account_id" id="account_id">
                                                    <?php foreach ($Accounts as $Account) : ?>
                                                        <?php
                                                        $selected = ($Projectparticipation['account_id'] == $Account['account_id']) ? 'selected' : '';
                                                        ?>
                                                        <option value="<?= $Account['account_id'] ?>" <?= $selected ?>><?= $Account['full_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <span class="form-message"></span>
                                            </div>
                                            <div class="mb-3 col-md-6 form-group">
                                                <label for="position" class="form-label">Vai trò</label>
                                                <input class="form-control" type="text" id="position" name="position" value="<?= $Projectparticipation['position'] ?>" placeholder="Nhập vai trò trong dự án tham gia..." />
                                                <span class="form-message" id="position-error"></span>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    </form>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="../../../../public/assets/admin/js/pages/Projectparticipation.js"></script>
<?php
include './src/Views/Block/Admin/scrip.php'
?>