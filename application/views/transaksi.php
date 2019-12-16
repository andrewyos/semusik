<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard PRO - Premium Bootstrap 4 Admin Template</title>
  <!-- Favicon -->
  <link rel="icon" href="<?=base_url()?>assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?=base_url()?>https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?=base_url()?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/argon.css?v=1.1.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
              
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <a href="<?= base_url('transaksi/clear') ?>" class="btn btn-danger"><span class="ni ni-fat-add text-black"></span>Checkout</a>
            </div>
            
        </button>
          </div>
          


          <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <!-- <th>NO</th> -->
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Subtotal</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php $totalSeluruh = 0; ?>
              <?php $no=00; ?>
              <?php foreach ($this->cart->contents() as $d) : ?>
                <td class="table-user"><b><?= $d['name'] ?></b></td>
                <td class="table-user"><b><?= $d['price'] ?></b></td>
                <td class="table-user"><b><?= $d['qty'] ?></b></td>
                <td class="table-user"><b><?= $d['subtotal'] ?></b></td>
                <?php $totalSeluruh += $d['subtotal'];  ?>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <p>Total = <?= $totalSeluruh ?></p>
          <?php if($this->session->flashdata('pesan')!=null): ?>
          <div class= "alert alert-danger"><?= $this->session->flashdata('pesan');?></div>
          <?php endif?>
        </div>
          
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambah">Tambah Data Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?=base_url('index.php/Transaksi/simpan_transaksi')?>" method="post">
  <div class="row">
    <div class="col-md-10">
      <div class="form-group">
        <input type="text" class="form-control form-control-alternative" name="nama_barang" placeholder="Nama Barang"><br>
      
        <input type="text" class="form-control form-control-alternative" name="jumlah_barang" placeholder="Jumlah Barang"><br>
      
        <input type="text" class="form-control form-control-alternative" name="tarif" placeholder="Tarif"><br>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
      </div>
    </div>
    
  </div>
    </form>

      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="update_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update_barang">Update Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="<?=base_url('index.php/Barang/update_barang')?>" method="post">
  <div class="row">
    <div class="col-md-10">
      <div class="form-group">
        <input type="hidden" class="form-control form-control-alternative" name="id_barang" id="id_barang" placeholder="Id">
        <input type="text" class="form-control form-control-alternative" name="nama_barang" id="nama_barang" placeholder="Nama Barang">
      </div>
      <div class="form-group">
        <input type="text" class="form-control form-control-alternative" name="jumlah_barang" id="jumlah_barang" placeholder="Jumlah Barang">
      </div>
      <div class="form-group">
        <input type="text" class="form-control form-control-alternative" name="tarif" id="tarif" placeholder="Tarif Perhari">
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" id="simpan" name="simpan">Simpan</button>
      </div>
    </div>
  </div>
    </div>

    </form>

      </div>
      
    </div>
  </div>

<script>

function tm_detail(id_barang) {
  $.getJSON("<?=base_url()?>index.php/Barang/get_detail_barang/"+id_barang,function(data){
    $("#id_barang").val(data['id_barang']);
    $("#nama_barang").val(data['nama_barang']);
    $("#jumlah_barang").val(data['jumlah_barang']);
    $("#tarif").val(data['tarif']);
    


  });
}

</script>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?=base_url()?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?=base_url()?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?=base_url()?>assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?=base_url()?>assets/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?=base_url()?>assets/js/demo.min.js"></script>
</body>

</html>