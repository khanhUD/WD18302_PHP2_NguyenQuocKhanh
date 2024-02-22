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
                        <div class="row mt-3">
                            <!-- Cột chiều rộng 9 -->
                            <div class="col-md-12">
                                <div class="main-content">
                                    <!-- Nội dung của cột 9 -->
                                    <h4>Danh Sách Tài Khoản Chờ Duyệt</h4>
                                    <?php if ($Account) : ?>
                                        <div class="card">
                                            <div class="table-responsive text-nowrap p-2">
                                                <table id="example" class="table table-striped " style="width:100%">
                                                    <thead>
                                                        <tr>

                                                            <th>STT</th>
                                                            <th>Tên</th>
                                                            <th>Email</th>
                                                            <th>Hình</th>
                                                            <th>Chức vụ</th>
                                                            <th>Duyệt</th>
                                                            <th>Chức Năng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                        <?php $stt = 1;
                                                        foreach ($Account as $items) : ?>

                                                            <tr>
                                                                <td class="align-middle"><?= $stt ?></td>
                                                                <td class="align-middle"><?= $items['full_name'] ?></td>
                                                                <td class="align-middle"><?= $items['email'] ?></td>
                                                                <td class="align-middle">
                                                                    <?php if (!empty($items['image'])) : ?>
                                                                        <img style="height: 70px; width: 70px;" src="../../../../public/uploads/<?= $items['image'] ?>" alt="">
                                                                    <?php else : ?>
                                                                        <img style="height: 70px; width: 70px;" src="../../../../public/uploads/no_image.png" alt="">
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td class="align-middle"><?= $items['role_name'] ?></td>
                                                                <td class="align-middle">
                                                                    <a href="javascript:void(0);" class="btn btn-success" onclick="updateStatus(1, <?= $items['account_id'] ?>)">Chấp nhận</a>
                                                                    <a href="javascript:void(0);" class="btn btn-danger" onclick="updateStatus(-1, <?= $items['account_id'] ?>)">Từ chối</a>
                                                                </td>
                                                                <td class="align-middle">
                                                                    <a href="/tai-khoan/chi-tiet/<?= $items['account_id'] ?>" class="btn btn-primary">Xem chi tiết</a>
                                                                </td>

                                                            </tr>
                                                        <?php $stt += 1;
                                                        endforeach ?>

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
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="../../../../public/assets/admin/js/pages/WaitingListAccounts.js"></script>
<?php
include './src/Views/Block/Admin/scrip.php'
?>