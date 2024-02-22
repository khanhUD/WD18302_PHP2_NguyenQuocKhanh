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
                                    <form id="form-add-Projectparticipations" action="/phan-cong/them-xu-ly" method="POST" enctype="multipart/form-data">
                                        <div class="row">

                                            <div class="mb-3 col-md-6 form-group">
                                                <label for="project_id" class="form-label">Tên Dự án</label>
                                                <select class="form-control" name="project_id" id="project_id">
                                                    <?php foreach ($Projects as $Project) : ?>
                                                        <option value="<?= $Project['project_id'] ?>"><?= $Project['project_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <span class="form-message"></span>
                                            </div>
                                            <div class="mb-3 col-md-6 form-group">
                                                <label for="account_id" class="form-label">Tên Thành Viên</label>
                                                <select class="form-control" name="account_id" id="account_id">
                                                    <?php foreach ($Accounts as $Account) : ?>
                                                        <option value="<?= $Account['account_id'] ?>"><?= $Account['full_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <span class="form-message"></span>
                                            </div>
                                            <div class="mb-3 col-md-6 form-group">
                                                <label for="position" class="form-label">Vai trò</label>
                                                <input class="form-control" type="text" id="position" name="position" value="" placeholder="Nhập vai trò trong dự án tham gia..." />
                                                <span class="form-message" id="position-error"></span>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary">Thêm</button>
                                    </form>
                                </div>
                            </div>
                        </div>




                        <div class="row mt-3">
                            <!-- Cột chiều rộng 9 -->
                            <div class="col-md-12">
                                <div class="main-content">
                                    <!-- Nội dung của cột 9 -->
                                    <h4>Danh Sách Phân Công</h4>
                                    <div class="card">
                                        <div class="table-responsive text-nowrap p-2">
                                            <table id="example" class="table table-hover ">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Tên Dự Án</th>
                                                        <th>Tên Thành Viên</th>                                      
                                                        <th>Vai Trò</th>                                                      
                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php
                                                    $stt = 1;
                                                    foreach ($Projectparticipation as $items) : ?>
                                                        <tr>
                                                            <td><?= $stt ?></td>
                                                            <td><a href="/du-an/chi-tiet/<?= $items['project_id'] ?>" style="text-decoration: none;"><?= $items['project_name'] ?></a></td>
                                                            <td><?= $items['account_full_name'] ?></td>
                                                            <td><?= $items['position'] ?></td>
                                                            <td>
                                                                <div class="dropdown">

                                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item text-primary" href="/phan-cong/sua/<?= $items['participation_id'] ?>"><i class="bi bi-pencil-square me-1"></i></i>Sửa</a>
                                                                        <a href="javascript:void(0);" class="dropdown-item text-danger" onclick="destroy(<?= $items['participation_id'] ?>)"> <i class="bx bx-trash me-1"></i> Xóa</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        $stt += 1;
                                                    endforeach ?>

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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="../../../../public/assets/admin/js/pages/Projectparticipation.js"></script>
<?php
include './src/Views/Block/Admin/scrip.php'
?>