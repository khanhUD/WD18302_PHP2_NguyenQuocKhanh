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

                    <div class="container ">
                        <h4 class="">Chi Tiết Dự Án</h4>
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
                                        <?php
                                        function formatCurrency($amount)
                                        {
                                            $result = '';
                                            $units = ["tỷ", "triệu", "nghìn"];
                                            $divisors = [1000000000, 1000000, 1000];

                                            for ($i = 0; $i < count($units); $i++) {
                                                if ($amount >= $divisors[$i]) {
                                                    $number = floor($amount / $divisors[$i]);
                                                    $amount -= $number * $divisors[$i];
                                                    $result .= $number . ' ' . $units[$i] . ' ';
                                                }
                                            }

                                            // Thêm số tiền cuối cùng (nếu cần)
                                            if ($amount > 0) {
                                                // Nếu số tiền dưới 1 triệu, không cần thêm "0 triệu"
                                                if ($result !== '') {
                                                    $result .= $amount . ' ';
                                                } else {
                                                    $result .= $amount;
                                                }
                                            } else if ($result === '') {
                                                // Nếu số tiền ban đầu là 0, trả về chuỗi '0'
                                                $result = '0';
                                            }

                                            // Thêm chữ "VND" vào cuối chuỗi kết quả
                                            $result .= 'VND';

                                            return $result;
                                        }
                                        ?>
                                        <p class="text-md-right"><strong>Chi Phí:</strong> <?= formatCurrency($project['project_cost']) ?> </p>
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
                                        <p><strong>Mô Tả Dự Án:</strong> <?= htmlspecialchars_decode($project['description']) ?></p>
                                    </div>

                                </div>
                                <h5>Danh Sách Nhiệm Vụ:</h5>
                                <?php if (empty($tasks)) : ?>
                                    <p>Chưa có danh sách phân công nhiệm vụ.</p>
                                <?php else : ?>
                                    <div class="card">
                                        <div class="table-responsive text-nowrap p-2">
                                            <table id="example" class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>stt</th>
                                                        <th>Tên nhiệm vụ</th>
                                                        <th>Ngày bắt đầu</th>
                                                        <th>Ngày kết thúc</th>
                                                        <th>Nội dung</th>
                                                        <th></th>

                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    <?php $stt = 1;
                                                    foreach ($tasks as $task) :  ?>
                                                        <tr>
                                                            <td><?= $stt ?></td>
                                                            <td><?= $task['task_name'] ?></td>
                                                            <td><?= $task['start_date'] ?></td>
                                                            <td><?= $task['end_date'] ?></td>
                                                            <td class="col-2 text-truncate" style="max-width: 150px;">
                                                                <?= htmlspecialchars($task['task_content']) ?>
                                                            <td>
                                                                <div class="text-right">
                                                                    <a href="/nhiem-vu/chi-tiet/<?= $task['task_id'] ?>" class="btn btn-primary btn-sm">Xem chi tiết</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php $stt += 1;
                                                    endforeach ?>

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
                                            <table id="example2" class="table table-striped " style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>stt</th>
                                                        <th>Họ và tên</th>
                                                        <th>Hình</th>
                                                        <th>Email</th>
                                                        <th>Vai trò</th>
                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php $stt = 1;
                                                    foreach ($accounts as $account) : ?>

                                                        <tr>
                                                            <td><?= $stt  ?></td>
                                                            <td><?= $account['full_name'] ?></td>
                                                            <td>
                                                                <?php $imagePath = !empty($account['image']) ? $account['image'] : 'no_image.png'; ?>
                                                                <div style="width: 50px; height: 50px; overflow: hidden; border-radius: 50%;">
                                                                    <img src="../../../../public/uploads/<?= $imagePath ?>" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                                                                </div>
                                                            </td>
                                                            <td><?= $account['email'] ?></td>
                                                            <td><?= $account['position'] ?></td>
                                                            <td>
                                                                <div class="dropdown">

                                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item text-warning" href="/tai-khoan/chi-tiet/<?= $account['account_id'] ?>"><i class="bx bx-show me-1"></i></i>Xem chi tiết</a>
                                                                       <a href="javascript:void(0);" class="dropdown-item text-danger" onclick="destroy(<?= $account['participation_id'] ?>)"> <i class="bx bx-trash me-1"></i> Xóa</a>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="../../../../public/assets/admin/js/pages/Projectparticipation.js"></script>
<?php
include './src/Views/Block/Admin/scrip.php'
?>