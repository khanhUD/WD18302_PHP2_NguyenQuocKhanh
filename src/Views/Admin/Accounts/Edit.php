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
            <div class="row">
              <!-- Cột chiều rộng 3 -->
              <div class="col-md-6">
                <div class="sidebar">
                  <!-- Nội dung của cột 3 -->
                  <h4>SỬA TÀI KHOẢN </h4>
                  <div class="card p-3">
                    <form id="form-account" action="/tai-khoan/sua-xu-ly" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <input type="hidden" name="account_id" value="<?= $Accounts['account_id'] ?>">
                        <div class="mb-3 col-md-12 form-group">
                          <label for="full_name" class="form-label">Họ và tên</label>
                          <input class="form-control" type="text" id="full_name" name="full_name" value="<?= $Accounts['full_name'] ?>" placeholder="Nhập họ và tên..." />
                          <span class="form-message" id="full_name-error"></span>
                        </div>
                        <div class="mb-3 col-md-12 form-group">
                          <label for="email" class="form-label">Email</label>
                          <input class="form-control" type="text" id="email" name="email" value="<?= $Accounts['email'] ?>" placeholder="Nhập email..." readonly />
                          <span class="form-message" id="email-error"></span>
                        </div>
                        <div class="mb-3 col-md-12 form-group">
                          <label for="phone_number" class="form-label">Số điện thoại</label>
                          <input class="form-control" type="text" id="phone_number" name="phone_number" value="<?= $Accounts['phone_number'] ?>" placeholder="0*** *** ***" />
                          <span class="form-message" id="phone_number-error"></span>
                        </div>
                        <div class="mb-3 col-md-12 form-group">
                          <label for="image" class="form-label">Hình ảnh</label>
                          <input type="file" class="form-control" id="image" name="image">
                          <input type="hidden" value="<?= $Accounts['image'] ?>" name="imageOld">
                          <span class="form-message" id="image-error"></span>
                        </div>

                        <div class="mb-3 col-md-12 form-group">
                          <label for="role_id" class="form-label">Chức vụ</label>
                          <select class="form-control" name="role_id" id="role_id">
                            <?php foreach ($roles as $role) : ?>
                              <?php
                              $selected = ($role['role_id'] == $Accounts['role_id']) ? 'selected' : '';
                              ?>
                              <option value="<?= $role['role_id'] ?>" <?= $selected ?>><?= $role['role_name'] ?></option>
                            <?php endforeach; ?>
                          </select>
                          <span class="form-message"></span>
                        </div>
                        <div class="mb-3 col-md-12 ">
                          <label class="form-label" for="status">trạng thái</label>
                          <div class="input-group input-group-merge">
                            <div class="form-check mx-3">
                              <input class="form-check-input" type="radio" name="status" id="status1" value="-1" <?= $Accounts['status'] === '-1' ? 'checked' : '' ?>>
                              <label class="form-check-label" for="status1">
                                Khóa
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="status" id="status2" value="1" <?= $Accounts['status'] === '1' ? 'checked' : '' ?>>
                              <label class="form-check-label" for="status2">
                                Hoạt Động
                              </label>
                            </div>
                          </div>

                        </div>
                      </div>


                      <button type="submit" class="btn btn-primary">Cập nhật</button>
                      <button type="reset" class="btn btn-primary">Nhập lại</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="row">
                  <img src="../../../../public/uploads/<?= ($Accounts['image']) != '' ? $Accounts['image'] : 'no_image.png' ?>" alt="" class="img-fluid rounded">
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
<script src="../../../../public/assets/admin/js/pages/Accounts.js"></script>
<?php
include './src/Views/Block/Admin/scrip.php'
?>