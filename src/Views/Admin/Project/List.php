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


            <div class="card p-3">
              <h4>TẠO KẾ HOẠCH DỰ ÁN</h4>
              <form id="form-add-products" action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="mb-3 col-md-6 form-group">
                    <label for="name" class="form-label">Tên dự án</label>
                    <input class="form-control" type="text" id="name" name="name" value="" placeholder="Nhập tiêu đề bài viết" />
                    <span class="form-message" id="name-error"></span>
                  </div>
                  <div class="mb-3 col-md-6 form-group">
                    <label for="price" class="form-label">Ngày bắt đầu</label>
                    <input class="form-control" type="date" id="price" name="price" value="" placeholder="Nhập giá" />
                    <span class="form-message" id="price-error"></span>
                  </div>
                  <div class="mb-3 col-md-6 form-group">
                    <label for="price" class="form-label">Ngày kết thúc</label>
                    <input class="form-control" type="date" id="price" name="price" value="" placeholder="Nhập giá" />
                    <span class="form-message" id="price-error"></span>
                  </div>
                  <div class="mb-3 col-md-6 form-group">
                    <label for="price" class="form-label">Chi phí</label>
                    <input class="form-control" type="number" id="price" name="price" value="" placeholder="Nhập chi phí dự trù dự án" />
                    <span class="form-message" id="price-error"></span>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label for="content" class="form-label">Mô tả dự án</label>
                  <textarea name="short_description" id="editor2" cols="30" rows="10"></textarea>
                  <span class="form-message" id="content-error"></span>
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
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>

                          <th>Dự án </th>
                          <th>NGày bắt đầu</th>
                          <th>Ngày kế thúc</th>
                          <th>Chi phí</th>
                          <th>Trạng thái</th>
                          <th>Chức năng</th>
                        </tr>

                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td>Dự án 1</td>
                          <td>11/11/2024</td>
                          <td>12/12/2024</td>
                          <td>1.000.000.000</td>
                          <th>chờ duyệt</th>
                          <td>
                            <a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1"></i></i>Sửa</a>
                            <a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1"></i></i>Xem chi tiết</a>
                            <form method="post" action="#">
                              <input type="hidden" name="id" value="<?= $banner['id'] ?>">
                              <button class="dropdown-item" type="submit">
                                <i class="bx bx-trash me-1"></i>Xoa</button>
                            </form>
                        
                          </td>
                        </tr>
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
<?php
include './src/Views/Block/Admin/scrip.php'
?>