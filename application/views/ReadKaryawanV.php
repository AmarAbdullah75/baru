<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/feather/feather.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/ti-icons/css/themify-icons.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css')?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/ti-icons/css/themify-icons.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/select.dataTables.min.css')?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo base_url('assets/css/vertical-layout-light/style.css')?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png')?>" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="<?php echo base_url("DashController")?>"><img src="<?php echo base_url('assets/images/logo.svg')?>" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo base_url("DashController")?>"><img src="<?php echo base_url('assets/images/logo-mini.svg')?>" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?php echo base_url('assets/images/faces/face28.jpg')?>" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="<?php echo base_url('assets/images/faces/face1.jpg')?>" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url('assets/images/faces/face2.jpg')?>" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url('assets/images/faces/face3.jpg')?>" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url('assets/images/faces/face4.jpg')?>" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url('assets/images/faces/face5.jpg')?>" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url('assets/images/faces/face6.jpg')?>" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('DashController')?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('KaryawanC')?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Karyawan</span>
            </a>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="card-body">
                <h4 class="card-title">Tabel Karyawan</h4>
                  <button class="btn btn-primary"><a href="<?php echo base_url("KaryawanC/AddData")?>" style="text-decoration:none;color:white;">Tambah Data</a></button>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Karyawan</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>Jabatan</th>
                          <th>Tanggal Bergabung</th>
                          <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $baris = 1;
                        foreach ($karyawan as $staf):?>
                            <tr>
                                <td><?php echo $baris?></td>
                                <td><?php echo $staf->nama?></td>
                                <td><?php echo $staf->jenis_kelamin?></td>
                                <td><?php echo $staf->alamat?></td>
                                <td><?php echo $staf->jabatan?></td>
                                <td><?php echo $staf->tanggal_bergabung?></td>
                                <td>
                                    <button type="button" style="width:50px; height:30px; border-radius:8px;border:none;background-color: blue;color:white" onclick="confirmDelete(<?php echo $staf->id; ?>)">
                                      <i class="bi bi-trash-fill"></i>
                                    </button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $staf->id; ?>" style="width:50px; height:30px; border-radius:8px;border:none;background-color: red; color:white;">
                                      <i class="bi-pencil-square"></i>
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="staticBackdrop<?php echo $staf->id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                             <div class="modal-dialog">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                <form action="<?php echo site_url('KaryawanC/update')?>" method="post">
                                  <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                      <input hidden type="text" class="form-control" id="id" name="id" value="<?php echo $staf->id?>">
                                      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $staf->nama?>">
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                      <option disabled>Pilih Jenis Kelamin</option>
                                      <option value="Pria" <?php echo ($staf->jenis_kelamin == 'Pria') ? 'selected' : ''; ?>>Pria</option>
                                      <option value="Wanita" <?php echo ($staf->jenis_kelamin == 'Wanita') ? 'selected' : ''; ?>>Wanita</option>
                                    </select>
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $staf->alamat?>">
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                    <select class="form-control" name="jabatan" id="jabatan">
                                      <option disabled >Pilih Jabatan</option>
                                      <option value="Manajer" <?php echo ($staf->jabatan =="Manajer") ? "selected":"" ?>>Manajer</option>
                                      <option value="Pegawai" <?php echo ($staf->jabatan =="Pegawai") ? "selected":"" ?>>Pegawai</option>
                                    </select>
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Bergabung</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="tanggal_bergabung" name="tanggal_bergabung" value="<?php echo $staf->tanggal_bergabung?>">
                                    </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Ubah</button>
                                </form>
                              </div>
                              </div>
                             </div>
                           </div>
                        <?php 
                        $baris++;
                        endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>  
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <script>
    function confirmDelete(id) {
      if (confirm('Apakah Anda yakin ingin menghapus karyawan ini?')) {
        window.location.href = '<?php echo site_url('KaryawanC/delete/'); ?>' + id;
      }
    }
  </script>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js')?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo base_url('assets/vendors/chart.js/Chart.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendors/datatables.net/jquery.dataTables.js')?>"></script>
  <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')?>"></script>
  <script src="<?php echo base_url('assets/js/dataTables.select.min.js')?>"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url('assets/js/off-canvas.js')?>"></script>
  <script src="<?php echo base_url('assets/js/hoverable-collapse.js')?>"></script>
  <script src="<?php echo base_url('assets/js/template.js')?>"></script>
  <script src="<?php echo base_url('assets/js/settings.js')?>"></script>
  <script src="<?php echo base_url('assets/js/todolist.js')?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url('assets/js/dashboard.js')?>"></script>
  <script src="<?php echo base_url('assets/js/Chart.roundedBarCharts.js')?>"></script>
  <!-- End custom js for this page-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>