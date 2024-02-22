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
                    <h4>Sửa Nhiệm Vụ</h4>
                        <div class="card p-3">
                         
                            <form id="form-add-tasks" action="/nhiem-vu/sua-xu-ly" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <input type="hidden" name="task_id" value="<?= $task['task_id'] ?>">
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="task_name" class="form-label">Tên nhiệm vụ</label>
                                        <input class="form-control" type="text" id="task_name" name="task_name" value="<?= $task['task_name'] ?>" placeholder="Nhập tiêu đề bài viết" />
                                        <span class="form-message" id="task_name-error"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="task_content" class="form-label">Nội dung nhiệm vụ</label>
                                        <input class="form-control" type="text" id="task_content" name="task_content" value="<?= $task['task_content'] ?>" placeholder="Nhập tiêu đề bài viết" />
                                        <span class="form-message" id="task_content-error"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="project_id" class="form-label">Thuộc Dự án</label>
                                        <select class="form-control" name="project_id" id="project_id">
                                            <?php foreach ($Projects as $Project) : ?>
                                                <?php
                                                $selected = ($task['project_id'] == $Project['project_id']) ? 'selected' : '';
                                                ?>
                                                <option value="<?= $Project['project_id'] ?>" <?= $selected ?>><?= $Project['project_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="account_id" class="form-label">Người thực hiện</label>
                                        <select class="form-control" name="account_id" id="account_id">
                                            <?php foreach ($Accounts as $Account) : ?>
                                                <?php
                                                $selected = ($task['account_id'] == $Account['account_id']) ? 'selected' : '';
                                                ?>
                                                <option value="<?= $Account['account_id'] ?>" <?= $selected ?>><?= $Account['full_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="start_date" class="form-label">Ngày bắt đầu</label>
                                        <input class="form-control" type="date" id="start_date" name="start_date" value="<?= $task['start_date'] ?>" placeholder="Nhập giá" />
                                        <span class="form-message" id="start_date-error"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="end_date" class="form-label">Ngày kết thúc</label>
                                        <input class="form-control" type="date" id="end_date" name="end_date" value="<?= $task['end_date'] ?>" placeholder="Nhập giá" />
                                        <span class="form-message" id="end_date-error"></span>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="content" class="form-label">Mô tả nhiệm vụ</label>
                                        <textarea name="description" id="editor2" cols="30" rows="10"><?= $task['description'] ?></textarea>
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
<script src="../../../../public/assets/admin/js/pages/Tasks.js"></script>
<?php
include './src/Views/Block/Admin/scrip.php'
?>