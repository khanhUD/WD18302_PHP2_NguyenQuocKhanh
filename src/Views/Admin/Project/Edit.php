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
                    <div class="px-2">
                    <h4>SỬA KẾ HOẠCH DỰ ÁN</h4>
                        <div class="card p-3">                          
                            <form id="form-add-products" action="/du-an/sua-xu-ly" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <input class="form-control" type="hidden" id="project_id" name="project_id" value="<?= $project['project_id']  ?>" />
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="project_name" class="form-label">Tên dự án</label>
                                        <input class="form-control" type="text" id="project_name" name="project_name" value="<?= $project['project_name']  ?>" placeholder="Nhập tên dự án" />
                                        <span class="form-message" id="project_name-error"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="start_date" class="form-label">Ngày bắt đầu</label>
                                        <input class="form-control" type="date" id="start_date" name="start_date" value="<?= $project['start_date']  ?>" />
                                        <span class="form-message" id="start_date-error"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="end_date" class="form-label">Ngày kết thúc</label>
                                        <input class="form-control" type="date" id="end_date" name="end_date" value="<?= $project['end_date']  ?>" />
                                        <span class="form-message" id="end_date-error"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="project_cost" class="form-label">Chi phí</label>
                                        <input class="form-control" type="number" id="project_cost" name="project_cost" value="<?= $project['project_cost']  ?>" placeholder="Nhập chi phí dự trù dự án" />
                                        <span class="form-message" id="project_cost-error"></span>
                                    </div>
                                </div>
                                <div class="mb-3 form-group">
                                    <label for="description" class="form-label">Mô tả dự án</label>
                                    <textarea name="description" id="editor2" cols="30" rows="10"><?= $project['description']  ?></textarea>
                                    <span class="form-message" id="description-error"></span>
                                </div>


                                <!-- Thêm nhiều trường hoặc tùy chỉnh theo nhu cầu -->

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    <button type="reset" class="btn btn-primary">Nhập lại</button>

                                </div>
                            </form>
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
<script src="../../../../public/assets/admin/js/pages/Projeacts.js"></script>
<?php
include './src/Views/Block/Admin/scrip.php'
?>