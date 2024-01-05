<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Thêm link CSS của Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Danh sách Email</title>
</head>

<body class="container mt-5">

    <h1 class="mb-4">Bài 3</h1>

    <h5>Danh sách Email có trong Database</h5>
    <?php foreach ($emailUsers as $user) : ?>
        <p><?= $user['email'] ?></p>
    <?php endforeach; ?>

    <form action="" method="POST" class="mt-3 col-md-4">
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Nhập email cần tìm" required>
            <button type="submit" name="submit" class="btn btn-primary">Tìm kiếm</button>
        </div>
    </form>

    <div>
        <?= isset($users) && $users ? "<h2> {$users['first_name']} {$users['last_name']}</h2>" : "<p>Không có tài khoản cần tìm</p>" ?>
    </div>

    <h1 class="mb-4">Bài 4</h1>


    <div class="container mt-5 ">
        <h2 class="mb-4">Danh sách kế hoạch dự án</h2>

        <table class="table">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên Dự án</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projects as $project) : ?>
                    <tr>
                        <td><?= $project['plan_id'] ?></td>
                        <td><?= $project['plan_name'] ?></td>
                        <td><?= $project['start_date'] ?></td>
                        <td><?= $project['end_date'] ?></td>
                        <td><?= $project['description'] ?></td>
                        <td>
                            <?php
                            switch ($project['status']) {
                                case 0:
                            ?>
                                    <span class="text-primary">Chờ duyệt</span>
                                <?php
                                    break;
                                case 1:
                                ?>
                                    <span class="text-warning">Đang thực hiện</span>
                                <?php
                                    break;
                                case 2:
                                ?>
                                    <span class="text-success">Hoàn tất</span>
                                <?php
                                    break;
                                case -1:
                                ?>
                                    <span class="text-danger">Đã hủy</span>
                                <?php
                                    break;
                                default:
                                ?>
                                    <span class="text-muted">Trạng thái không xác định</span>
                            <?php
                                    break;
                            }
                            ?>
                        </td>

                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


</body>

</html>