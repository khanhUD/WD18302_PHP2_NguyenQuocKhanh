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


                        <div class="mt-3">
                            <div class="row">
                                <!-- Cột chiều rộng 3 -->
                                <div class="col-md-6">
                                    <div class="sidebar">
                                        <!-- Nội dung của cột 3 -->
                                        <h4>SỬA NHÓM </h4>
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
                                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                                            </form>
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