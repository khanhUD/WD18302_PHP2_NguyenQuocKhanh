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
                    <div class="row mt-3">
                        <!-- Cột chiều rộng 9 -->
                        <div class="col-md-12">
                            <div class="main-content">
                                <!-- Nội dung của cột 9 -->
                                <h4>Danh sách kế hoạch chờ duyệt </h4>
                                <?php if ($listProject) : ?>
                                    <div class="card">
                                        <div class="table-responsive text-nowrap p-2">
                                            <table id="example" class="table table-striped " style="width:100%">
                                                <thead>
                                                    <tr>

                                                        <th>Dự án </th>
                                                        <th>NGày bắt đầu</th>
                                                        <th>Ngày kế thúc</th>
                                                        <th>Chi phí</th>
                                                        <th>Duyệt</th>
                                                        <th>Chức năng</th>

                                                    </tr>

                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php foreach ($listProject as $items) : ?>
                                                        <tr>
                                                            <td><?= $items['project_name'] ?></td>
                                                            <td><?= $items['start_date'] ?></td>
                                                            <td><?= $items['end_date'] ?></td>
                                                            <td><?= $items['project_cost'] ?></td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="btn btn-success" onclick="updateStatus(1, <?= $items['project_id'] ?>)">Chấp nhận</a>
                                                                <a href="javascript:void(0);" class="btn btn-danger" onclick="updateStatus(-1, <?= $items['project_id'] ?>)">Từ chối</a>
                                                            </td>

                                                            <td>
                                                                <div class="dropdown">

                                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="/du-an/sua/<?= $items['project_id'] ?>"><i class="bi bi-pencil-square me-1"></i></i>Sửa</a>
                                                                        <a class="dropdown-item" href="/du-an/chi-tiet/<?= $items['project_id'] ?>"><i class="bx bx-show me-1"></i></i>Xem chi tiết</a>
                                                                        <form method="post" action="/du-an/xoa">
                                                                            <input type="hidden" name="project_id" value="<?= $items['project_id'] ?>">
                                                                            <button class="dropdown-item" type="submit">
                                                                                <i class="bx bx-trash me-1"></i>Xóa</button>
                                                                        </form>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                    <?php

                                                    endforeach; ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <?php else : ?>

                                    <p>Hiện tại không có danh sách chờ duyệt.</p>
                                <?php endif; ?>
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
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="../../../../public/assets/admin/js/pages/chuDuyet.js"></script>


<style>
    .small-dialog {
        width: 500px !important;

    }
</style>
<?php
include './src/Views/Block/Admin/scrip.php'
?>