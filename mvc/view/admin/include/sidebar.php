
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.html" class="nav-link">Trang chủ</a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="public/admin/dist/img/Was.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WAS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="public/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
            <a href="loginadmin/logout">Đăng xuất</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Bảng điều khiển
                </p>
              </a>
            <li class="nav-header">QUẢN LÍ HÀNG HÓA</li>
            <!-- loại hàng -->
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Loại hàng

                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="loai/insert" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm mới</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="loai/show" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách</p>
                  </a>
                </li>

              </ul>
            </li>
            <!-- end -->

            <!-- san pham -->
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Sản phẩm

                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="san_pham/insert" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm mới</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="san_pham/show" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="san_pham/thongke" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thống kê</p>
                  </a>
                </li>

              </ul>
            </li>
            <!-- end -->


            <!-- khách hàng -->
            <li class="nav-header">QUẢN LÍ KHÁCH HÀNG</li>

            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Khách Hàng</p>
              </a>
              <ul class="nav nav-treeview">
              
                <li class="nav-item">
                  <a href="khach_hang/show" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Người Dùng

                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="nguoi_dung/show" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- end -->

            <!-- đơn hàng -->
            <li class="nav-header">QUẢN LÝ ĐƠN HÀNG</li>
            <li class="nav-item">
              <a href="don_hang/tongquan" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Tổng quan đơn hàng
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="don_hang/choxacnhan" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Đơn hàng chờ xác nhận
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="don_hang/daxacnhan" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Đơn hàng đã xác nhận
                </p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="don_hang/danggiao" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Đơn hàng đang giao
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="don_hang/dagiao" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Đơn hàng giao thành công
                </p>
              </a>
            </li>
            <!-- end -->
            <li class="nav-header">QUẢN LÝ HÓA ĐƠN</li>
            <li class="nav-item">
              <a href="hoa_don/show" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Danh sách hóa đơn
                </p>
              </a>
            </li>
          




            <!-- binh luan -->
            <li class="nav-header">QUẢN LÍ BÌNH LUẬN</li>
            <li class="nav-item">
              <a href="binh_luan/home" class="nav-link">
                <i class="nav-icon fas fa-ellipsis-h"></i>
                <p>Xem bình luận</p>
              </a>
            </li>
            <!-- end -->
            <li class="nav-header">QUẢN LÍ DANH THU</li>
            <li class="nav-item">
              <a href="danh_thu/danhthu" class="nav-link">
                <i class="nav-icon fas fa-ellipsis-h"></i>
                <p>Xem danh thu</p>
              </a>
            </li>
            <li class="nav-header">QUẢN LÍ SLIDER</li>
            <li class="nav-item">
              <a href="slider/show" class="nav-link">
                <i class="nav-icon fas fa-ellipsis-h"></i>
                <p>Xem Slider</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
  
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Bảng điều khiển</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid table-responsive">
        <!-- Small boxes (Stat box) -->
        <!-- Xử lý view controller -->
       
      