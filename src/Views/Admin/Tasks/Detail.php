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
                        <h4 class="mt-5">Chi Tiết Nhiệm Vụ Dự Án</h4>
                        <div class=" text-end ">
                            <a class="btn btn-primary" href="/nhiem-vu/sua/<?= $task['task_id'] ?>"><i class="bi bi-pencil-square me-1"></i>Sửa</a>
                    
                        </div>
                        <div class="card  mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Tên Nhiệm Vụ: <?= $task['task_name'] ?></h5>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <p class="card-text"><strong>Dự Án:</strong> <a href="/du-an/chi-tiet/<?= $task['projects_projects_id'] ?>" style="text-decoration: none;"><?= $task['projects_projects_name'] ?></a>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="card-text"><strong>Người Thực Hiện:</strong> <?= $task['account_full_name'] ?></p>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <p class="card-text"><strong>Ngày Bắt Đầu:</strong> <?= $task['start_date'] ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="card-text"><strong>Ngày Kết Thúc:</strong> <?= $task['end_date'] ?></p>
                                    </div>
                                </div>
                                <p class="card-text mt-4"><strong>Nội Dung Nhiệm Vụ:</strong> <?= $task['task_content'] ?></p>
                                <p class="card-text "><strong>Mô Tả:</strong> <?= htmlspecialchars_decode($task['description']) ?></p>

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