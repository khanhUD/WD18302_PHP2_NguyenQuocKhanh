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
                        <h1 class="">Chi Tiết Dự Án</h1>
                        <div class=" text-end ">
                            <a class="btn btn-primary" href="/du-an/sua/<?= $project['project_id'] ?>"><i class="bi bi-pencil-square me-1"></i>Sửa</a>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="card-title">Tên Dự Án: <?= $project['project_name'] ?></h5>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-md-right"><strong>Chi Phí:</strong> <?= $project['project_cost'] ?> </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Ngày Bắt Đầu:</strong> <?= $project['start_date'] ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-md-right"><strong>Ngày Kết Thúc:</strong> <?= $project['end_date'] ?></p>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <p class="text-md-right"><strong>Số nhân sự:</strong> <?= $count ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><strong>Mô Tả Dự Án:</strong> <?= $project['description'] ?></p>
                                    </div>

                                </div>

                                <h5>Danh Sách Nhiệm Vụ:</h5>
                                <?php if (empty($tasks)) : ?>
                                    <p>Chưa có danh sách phân công nhiệm vụ.</p>
                                <?php else : ?>
                                    <div class="card">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="col-md-2">stt</th>
                                                        <th class="col-md-8">Tên dự án</th>
                                                        <th></th>

                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php foreach ($tasks as $task) :  ?>
                                                        <tr>
                                                            <td>1</td>
                                                            <td><?= $task['task_name'] ?></td>
                                                            <td>
                                                                <div class="text-right">
                                                                    <a href="/nhiem-vu/chi-tiet/<?= $task['task_id'] ?>" class="btn btn-primary btn-sm">Xem chi tiết</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <h5 class="mt-3">Danh Sách Nhân Viên tham gia:</h5>
                                <?php if (empty($accounts)) : ?>
                                    <p>Chưa có danh sách nhân viên tham gia.</p>
                                <?php else : ?>
                                    <div class="card">
                                        <div class="table-responsive text-nowrap p-2">
                                            <table id="example" class="table table-striped " style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>stt</th>
                                                        <th>Họ và tên</th>
                                                        <th>Hình</th>
                                                        <th>Email</th>
                                                        <th>Chức vụ</th>
                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php $stt = 1;
                                                    foreach ($accounts as $account) : ?>

                                                        <tr>
                                                            <td><?= $stt += $stt ?></td>
                                                            <td><?= $account['full_name'] ?></td>
                                                            <td><?= $account['image'] ?></td>
                                                            <td><?= $account['email'] ?></td>
                                                            <td><?= $account['position'] ?></td>
                                                            <td>
                                                                <div class="dropdown">

                                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt me-1"></i> Xem chi tiết</a>
                                                                        <form method="post" action="#">
                                                                            <input type="hidden" name="id" value="<?= $items['id'] ?>">
                                                                            <button class="dropdown-item" type="submit">
                                                                                <i class="bx bx-trash me-1"></i>Xóa</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
<?php
include './src/Views/Block/Admin/scrip.php'
?>