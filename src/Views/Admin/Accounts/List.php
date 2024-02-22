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
          <div class="row px-2">
            <!-- Cột chiều rộng 3 -->
            <div class="col-md-12">
              <div class="sidebar">
                <!-- Nội dung của cột 3 -->
                <h4>TẠO TÀI KHOẢN </h4>
                <div class="card p-3">
                  <form id="form-account" action="/tai-khoan/them-xu-ly" method="post" enctype="multipart/form-data">
                    <div class="row">

                      <div class="mb-3 col-md-6 form-group">
                        <label for="full_name" class="form-label">Họ và tên</label>
                        <input class="form-control" type="text" id="full_name" name="full_name" value="" placeholder="Nhập họ và tên..." />
                        <span class="form-message" id="full_name-error"></span>
                      </div>
                      <div class="mb-3 col-md-6 form-group">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="text" id="email" name="email" value="" placeholder="Nhập email..." />
                        <span class="form-message" id="email-error"></span>
                      </div>
                      <div class="mb-3 col-md-6 form-group">
                        <label for="phone_number" class="form-label">Số điện thoại</label>
                        <input class="form-control" type="text" id="phone_number" name="phone_number" value="" placeholder="0*** *** ***" />
                        <span class="form-message" id="phone_number-error"></span>
                      </div>

                      <div class="mb-3 col-md-6 form-group">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input class="form-control" type="password" id="password" name="password" value="" placeholder="Tối thiểu 8 ký tự..." />
                        <span class="form-message" id="password-error"></span>
                      </div>

                      <div class="mb-3 col-md-6 form-group">
                        <label for="image" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <span class="form-message" id="image-error"></span>
                      </div>

                      <div class="mb-3 col-md-6 form-group">
                        <label for="role_id" class="form-label">Chức vụ</label>
                        <select class="form-control" name="role_id" id="role_id">
                          <?php foreach ($roles as $role) : ?>
                            <option value="<?= $role['role_id'] ?>"><?= $role['role_name'] ?></option>
                          <?php endforeach; ?>
                        </select>
                        <span class="form-message"></span>
                      </div>
                      <input class="form-control" type="hidden" id="status" name="status" value="1" />
                    </div>
                    <?php echo isset($error_message) ? '<span style="color: red;">' . $error_message . '</span>' : ''; ?>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-3">
            <div class="row mt-3">
              <!-- Cột chiều rộng 9 -->
              <div class="col-md-12">
                <div class="main-content">
                  <!-- Nội dung của cột 9 -->
                  <h4>DANH SÁCH TÀI KHOẢN</h4>
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
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <?php $stt = 1;
                          foreach ($Accounts as $items) : ?>
                            <tr>
                              <td><?= $stt ?></td>
                              <td><?= $items['full_name'] ?></td>
                              <td><?= $items['email'] ?></td>
                              <td>
                                <?php $imagePath = !empty($items['image']) ? $items['image'] : 'no_image.png'; ?>
                                <div style="width: 50px; height: 50px; overflow: hidden; border-radius: 50%;">
                                  <img src="../../../../public/uploads/<?= $imagePath ?>" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                                </div>
                              </td>
                              <td><?= $items['role_name'] ?></td>
                              <td>
                                <?= $items['status'] == 1 ? 'Đang Mở' : ($items['status'] == -1 ? 'Đang khóa' : 'Trạng thái không xác định') ?>
                              </td>
                              <td>
                                <div class="dropdown">

                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item text-primary" href="/tai-khoan/sua/<?= $items['account_id'] ?>"><i class="bi bi-pencil-square me-1"></i></i>Sửa</a>
                                    <a class="dropdown-item text-warning" href="/tai-khoan/chi-tiet/<?= $items['account_id'] ?>"><i class="bx bx-show me-1"></i></i>Xem chi tiết</a>
                                    <a href="javascript:void(0);" class="dropdown-item text-danger" onclick="destroy(<?= $items['account_id'] ?>)"> <i class="bx bx-trash me-1"></i> Xóa</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          <?php $stt += 1;
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
<script src="../../../../public/assets/admin/js/pages/Tasks.js"></script>
<script src="../../../../public/assets/admin/js/pages/Accounts.js"></script>

<?php
include './src/Views/Block/Admin/scrip.php'
?>