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
        <div class="container-xxl flex-grow-1 container-p-y ">
          <!-- / Content -->
          <div class="px-2">
            <h4>Tạo kế hoạch dự án</h4>
            <div class="card p-3">
              <form id="form-add-products" action="/du-an/them-xu-ly" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="mb-3 col-md-6 form-group">
                    <label for="project_name" class="form-label">Tên dự án</label>
                    <input class="form-control" type="text" id="project_name" name="project_name" value="" placeholder="Nhập tên dự án" />
                    <span class="form-message" id="project_name-error"></span>
                  </div>
                  <div class="mb-3 col-md-6 form-group">
                    <label for="start_date" class="form-label">Ngày bắt đầu</label>
                    <input class="form-control" type="date" id="start_date" name="start_date" value="" placeholder="Nhập giá" />
                    <span class="form-message" id="start_date-error"></span>
                  </div>
                  <div class="mb-3 col-md-6 form-group">
                    <label for="end_date" class="form-label">Ngày kết thúc</label>
                    <input class="form-control" type="date" id="end_date" name="end_date" value="" placeholder="Nhập giá" />
                    <span class="form-message" id="end_date-error"></span>
                  </div>
                  <div class="mb-3 col-md-6 form-group">
                    <label for="project_cost" class="form-label">Chi phí</label>
                    <input class="form-control" type="number" id="project_cost" name="project_cost" value="" placeholder="Nhập chi phí dự trù dự án" />
                    <span class="form-message" id="project_cost-error"></span>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label for="description" class="form-label">Mô tả dự án</label>
                  <textarea name="description" id="editor2" cols="30" rows="10"></textarea>
                  <span class="form-message" id="description-error"></span>
                </div>


                <!-- Thêm nhiều trường hoặc tùy chỉnh theo nhu cầu -->

                <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Thêm</button>
                  <button type="reset" class="btn btn-primary">Nhập lại</button>

                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <!-- Cột chiều rộng 9 -->
            <div class="col-md-12">
              <div class="main-content">
                <!-- Nội dung của cột 9 -->
                <h4>Danh sách kế hoạch </h4>
                <div class="card">
                  <div class="table-responsive text-nowrap p-2">
                    <table id="example" class="table table-striped " style="width:100%">
                      <thead>
                        <tr>
                          <th>STT </th>
                          <th>Dự án </th>
                          <th>NGày tạo</th>
                          <th>Chi phí</th>
                          <th>Chức năng</th>
                        </tr>

                      </thead>
                      <tbody class="table-border-bottom-0">
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
                        <?php

                        $stt = 1;
                        foreach ($listProject as $items) : ?>
                          <tr>
                            <td><?= $stt  ?></td>
                            <td><?= $items['project_name'] ?></td>
                            <td><?= $items['create_at'] ?></td>

                            <td><?= formatCurrency($items['project_cost']) ?></td>

                            <td>
                              <div class="dropdown">

                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item text-primary" href="/du-an/sua/<?= $items['project_id'] ?>"><i class="bi bi-pencil-square me-1"></i></i>Sửa</a>
                                  <a class="dropdown-item text-warning" href="/du-an/chi-tiet/<?= $items['project_id'] ?>"><i class="bx bx-show me-1"></i></i>Xem chi tiết</a>
                                  <a href="javascript:void(0);" class="dropdown-item text-danger" onclick="destroy(-1, <?= $items['project_id'] ?>)"> <i class="bx bx-trash me-1"></i> Xóa</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                        <?php
                          $stt++;
                        endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
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
<script src="../../../../public/assets/admin/js/pages/Projeacts.js"></script>
<?php
include './src/Views/Block/Admin/scrip.php'
?>