  <!-- Navbar -->
  <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
          <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
          </a>
      </div>

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
          <ul class="navbar-nav flex-row align-items-center ms-auto">

              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <div class="avatar avatar-online" style="width: 40px; height: 40px; overflow: hidden;">
                          <div class="avatar avatar-online" style="width: 40px; height: 40px; overflow: hidden;">
                          <!-- <img src="../../../../public/uploads/imagenull.jpg" alt=""> -->
                       
                              <img src="../../../../public/uploads/imagenull.jpg" alt=" " class="w-100 h-100 rounded-circle" style="object-fit: cover;">
                          </div>
                      </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                      <?php if (isset($_SESSION['users'])) : ?>
                          <li>
                              <a class="dropdown-item" href="#">
                                  <div class="d-flex">
                                      <div class="flex-shrink-0 me-3">
                                          <div class="avatar avatar-online" style="width: 40px; height: 40px; overflow: hidden;">
                                              <img src="../../../../public/uploads/' . (!empty($_SESSION['users']) && ($_SESSION['users']['image'] !== '') ? $_SESSION['users']['image'] : 'imagenull.jpg'); ?>" alt class="w-100 h-100 rounded-circle" style="object-fit: cover;">
                                          </div>
                                      </div>
                                      <div class="flex-grow-1">
                                          <span class="fw-semibold d-block"><?= $_SESSION['users']['full_name'] ?></span>
                                          <small class="text-muted"><?= $_SESSION['users']['role'] === 'admin' ? 'Quản trị viên' : 'Khách hàng'; ?></small>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <div class="dropdown-divider"></div>
                          </li>
                          <li>
                              <a class="dropdown-item" href="Dang-Xuat">
                                  <i class="bx bx-power-off me-2"></i>
                                  <span class="align-middle">Đăng xuất</span>
                              </a>
                          </li>
                      <?php endif; ?>
                      <?php if (!isset($_SESSION['users'])) : ?>
                          <li>
                              <a class="dropdown-item" href="<?php WEB_ROOT?>?url=LoginController/index">
                                  <i class="bx bx-power-off me-2"></i>
                                  <span class="align-middle">Đăng nhập</span>
                              </a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="<?php WEB_ROOT?>?url=RegisterController/index">
                                  <i class="bx bx-power-off me-2"></i>
                                  <span class="align-middle">Đăng ký</span>
                              </a>
                          </li>
                      <?php endif; ?>
                  </ul>
              </li>
              <!--/ User -->
          </ul>
      </div>
  </nav>
  <!-- / Navbar -->