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


                        <div class="card p-3">
                            <h4>SỬA KẾ HOẠCH DỰ ÁN</h4>
                            <form id="form-add-products" action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="name" class="form-label">Tên dự án</label>
                                        <input class="form-control" type="text" id="name" name="name" value="" placeholder="Nhập tiêu đề bài viết" />
                                        <span class="form-message" id="name-error"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="price" class="form-label">Ngày bắt đầu</label>
                                        <input class="form-control" type="date" id="price" name="price" value="" placeholder="Nhập giá" />
                                        <span class="form-message" id="price-error"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="price" class="form-label">Ngày kết thúc</label>
                                        <input class="form-control" type="date" id="price" name="price" value="" placeholder="Nhập giá" />
                                        <span class="form-message" id="price-error"></span>
                                    </div>
                                    <div class="mb-3 col-md-6 form-group">
                                        <label for="price" class="form-label">Chi phí</label>
                                        <input class="form-control" type="number" id="price" name="price" value="" placeholder="Nhập chi phí dự trù dự án" />
                                        <span class="form-message" id="price-error"></span>
                                    </div>
                                </div>
                                <div class="mb-3 form-group">
                                    <label for="content" class="form-label">Mô tả dự án</label>
                                    <textarea name="short_description" id="editor2" cols="30" rows="10"></textarea>
                                    <span class="form-message" id="content-error"></span>
                                </div>


                                <!-- Thêm nhiều trường hoặc tùy chỉnh theo nhu cầu -->

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Thêm</button>
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
<?php
include './src/Views/Block/Admin/scrip.php'
?>