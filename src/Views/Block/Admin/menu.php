  <!-- Menu -->
  <style>
    .menu-link {
      text-decoration: none;
      /* Vô hiệu hóa đường gạch chân */
    }
  </style>
  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/" class="app-brand-link">
        <span class="app-brand-logo demo">

        </span>
        <h3 class="demo menu-text fw-bolder ms-2">Easy Project</h3>

      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Bảng điều khiển -->
      <li class="menu-item">
        <a href="/" class="menu-link">
          <i class='menu-icon tf-icons bx bx-bar-chart'></i>
          <div data-i18n="Analytics">THỐNG KÊ / BÁO CÁO</div>
        </a>
      </li>



      <!-- Tài khoản  -->
      <?php
      if (isset($_SESSION['users']) && (($_SESSION['users']['role_id']) == 1 )) :
      ?>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">

            <i class='menu-icon tf-icons bx bxs-user'></i>
            <div data-i18n="Form Elements">Tài khoản</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="/tai-khoan/cho-duyet" class="menu-link">
                <div data-i18n="Basic Inputs">Danh sách chờ duyệt</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/tai-khoan" class="menu-link">
                <div data-i18n="Basic Inputs">Danh sách và tạo tài khoản</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="/chuc-vu" class="menu-link">
                <div data-i18n="Input groups">Danh sách và tạo loại chức vụ</div>
              </a>
            </li>

          </ul>
        </li>
      <?php endif; ?>
      <!-- Tài khoản  -->


      <!-- Duyệt kế hoạch  -->
      <?php
      if (isset($_SESSION['users']) && (($_SESSION['users']['role_id']) == 1 || ($_SESSION['users']['role_id']) == 2)) :
      ?>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon tf-icons bx bx-check'></i>
            <div data-i18n="Form Elements">Kế hoạch dự án </div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="/du-an" class="menu-link">
                <div data-i18n="Input groups">Danh sách kế hoạch</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/du-an/cho-duyet" class="menu-link">
                <div data-i18n="Input groups">Danh sách chờ duyệt</div>
              </a>
            </li>
          </ul>
        </li>
      <?php endif; ?>

      <!-- Duyệt kế hoạch  -->
      <!-- kế hoạch   -->

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class='menu-icon tf-icons bx bxs-calendar'></i>
          <div data-i18n="Form Elements">Lập kế hoạch </div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="/du-an/them" class="menu-link">
              <div data-i18n="Input groups">Danh sách và tạo kế hoạch</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/du-an/cho-duyet" class="menu-link">
              <div data-i18n="Input groups">Danh sách kế hoạch chờ duyệt</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/nhiem-vu/them" class="menu-link">
              <div data-i18n="Input groups">Danh sách và tạo nhiệm vụ</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/nhiem-vu/phan-cong" class="menu-link">
              <div data-i18n="Input groups">Danh sách phân công</div>
            </a>
          </li>

        </ul>
      </li>

      <!-- kế hoạch   -->
      <!-- Nhóm thực hiện  -->

      <!-- <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">

          <i class='menu-icon tf-icons bx bxs-user'></i>
          <div data-i18n="Form Elements">Nhân sự</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="<?= WEB_ROOT ?>?url=TeamsController/Index" class="menu-link">
              <div data-i18n="Basic Inputs">Danh sách và tạo nhóm </div>
            </a>
          </li>

          <li class="menu-item">
            <a href="<?= WEB_ROOT ?>?url=TeammembersController/Index" class="menu-link">
              <div data-i18n="Basic Inputs">Danh sách và tạo nhân viên</div>
            </a>
          </li>

        </ul>
      </li> -->

      <!-- Nhóm thực hiện  -->
    </ul>

  </aside>
  <!-- / Menu -->