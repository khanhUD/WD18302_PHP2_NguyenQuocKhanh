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
              <div class="col-md-12">
                <div class="sidebar">
                  <!-- Nội dung của cột 3 -->
                  <h4>SỬA TÀI KHOẢN </h4>
                  <div class="card p-3">
                    <form id="form-add-users" action="#" method="post" enctype="multipart/form-data">
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
                                           
                                                <option value="1">Giám Đốc</option>
                                                <option value="1">Giám Đốc</option>
                                                <option value="1">Giám Đốc</option>
                                          
                                        </select> 
                                        <span class="form-message"></span>
                                    </div>
                        <div class="mb-3 col-md-6 " >
                          <label class="form-label" for="status">trạng thái</label>
                          <div class="input-group input-group-merge">
                            <div class="form-check mx-3">
                              <input class="form-check-input" type="radio" name="status" id="status1" value="off">
                              <label class="form-check-label" for="status1">
                                Khóa
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="status" id="status2" value="on" checked>
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
<?php
include './src/Views/Block/Admin/scrip.php'
?>