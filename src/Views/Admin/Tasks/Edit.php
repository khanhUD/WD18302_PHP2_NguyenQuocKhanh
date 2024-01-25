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
                        <div class="card p-3">
                            <h4>SỬA NHIỆM VỤ</h4>
                            <form id="form-add-products" action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="task_name" class="form-label">Tên nhiệm vụ</label>
                                        <input class="form-control" type="text" id="task_name" name="task_name" value="" placeholder="Nhập tiêu đề bài viết" />
                                        <span class="form-message" id="task_name-error"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="task_content" class="form-label">Nội dung nhiệm vụ</label>
                                        <input class="form-control" type="text" id="task_content" name="task_content" value="" placeholder="Nhập tiêu đề bài viết" />
                                        <span class="form-message" id="task_content-error"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="project_id" class="form-label">Thuộc Dự án</label>
                                        <select class="form-control" name="project_id" id="project_id">
                                            <?php foreach ($productCategories as $productCategories) : ?>
                                                <option value="<?= $productCategories['id'] ?>"><?= $productCategories['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="team_id" class="form-label">NHóm thực hiện</label>
                                        <select class="form-control" name="team_id" id="team_id">
                                            <?php foreach ($productCategories as $productCategories) : ?>
                                                <option value="<?= $productCategories['id'] ?>"><?= $productCategories['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="start_date" class="form-label">Ngày bắt đầu</label>
                                        <input class="form-control" type="date" id="start_date" name="start_date" value="" placeholder="Nhập giá" />
                                        <span class="form-message" id="start_date-error"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="end_date" class="form-label">Ngày kết thúc</label>
                                        <input class="form-control" type="date" id="end_date" name="end_date" value="" placeholder="Nhập giá" />
                                        <span class="form-message" id="end_date-error"></span>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="content" class="form-label">Mô tả nhiệm vụ</label>
                                        <textarea name="short_description" id="editor2" cols="30" rows="10"></textarea>
                                        <span class="form-message" id="content-error"></span>
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