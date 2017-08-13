<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simpanse</title>

    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=AIzaSyCAoovG6d7Kj8ayIPdO0NOlqestjqrys-w" type="text/javascript"></script>
    
    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/datatables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css') ?>" rel="stylesheet">
  </head>

<body class="nav-md">
<section class="container body">
<!-- Start Header --> 
<div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <br/>
            <br/>
            <div>
              <center>
              <img src="<?php echo base_url() ?>assets/images/img.png" alt="Logo Simpanse" width="60%" height="60%">
              </center>
            </div>
            <div class="navbar nav_title" style="border: 0;">
            <div class="navbar nav_title" style="border: 0;">
	<center>              	
<a href="#" class="site_title"> 						<span>Simpanse</span></a>
	</center>
            </div>
            </div>

            <div class="clearfix"></div>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="#"><i class="fa fa-home"></i>Beranda</a></li>
                  <li><a><i class="fa fa-map-marker"></i>Wilayah<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Taman Sekar Taji</a></li>
                      <li><a href="#">Taman Balekambang</a></li>
                      <li><a href="#">Kebun Binatang Taru Jurug</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-tasks"></i>Genus<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Tectona</a></li>
                      <li><a href="#">Hibiscus</a></li>
                      <li><a href="#">Erythrina</a></li>
                      <li><a href="#">Artocarpus</a></li>
                      <li><a href="#">Mangifera</a></li>
                    </ul>
                  </li>
                  <li><a href="http://blog.simpanse.id/"><i class="fa fa-newspaper-o"></i>Blog</a></li>
                  <li><a href="#"><i class="fa fa-info-circle"></i>About</a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->


          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        
        <!-- page content -->
      <div class="right_col" role="main">

      <div class="col-sm-6">
          <?php include ($_SERVER['DOCUMENT_ROOT'].'/pohonmap.php');?>
      </div>

      <div class="col-sm-3 right_col">
        <table class="table table-bordered">
        <thead>
        <tr>
          <th>Surakarta</th>
        </tr>
       </thead>
        <tbody>
       <tr>
        <td>Kota Surakarta (Hanacaraka: ꦑꦸꦛꦯꦸꦫꦏꦂꦠ), juga disebut Solo atau Sala, adalah wilayah otonom dengan status kota di bawah Provinsi Jawa Tengah, Indonesia, dengan penduduk 503.421 jiwa (2010) dan kepadatan 13.636/km2. Kota dengan luas 44 km2, ini berbatasan dengan Kabupaten Karanganyar dan Kabupaten Boyolali di sebelah utara, Kabupaten Karanganyar dan Kabupaten Sukoharjo di sebelah timur dan barat, dan Kabupaten Sukoharjo di sebelah selatan. Sisi timur kota ini dilewati sungai yang terabadikan dalam salah satu lagu keroncong, Bengawan Solo. Bersama dengan Yogyakarta, Surakarta merupakan pewaris Kesultanan Mataram yang dipecah melalui Perjanjian Giyanti, pada tahun 1755.</td>
        </tr>
        </tbody>
        </table>
      </div>

      <div>           
          <?php echo $_content?>
      </div>

      </div>
      <!-- /page content -->
      
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Simpanse Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>

        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>

  </body>
</html>