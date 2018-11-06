<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>koordinator</title>
  <!-- Bootstrap core CSS-->
 <link href="<?php echo base_url('assets/new/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <link href="<?php echo base_url('assets/new/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
  
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/new/vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">
  <!-- Page level plugin CSS-->
 <link href="<?php echo base_url('assets/new/css/sb-admin.css')?>" rel="stylesheet">
  <!-- Custom styles for this template-->

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
    <?php $this->load->view($header);?>



  <div class="content-wrapper">
    <div class="container-fluid">


      <?php $this->load->view($isi);?>
      <!-- Breadcrumbs-->
<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
      
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url()."assets/new/";?>login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>

    <script src="<?php echo base_url().'assets/new/vendor/jquery/jquery.min.js'?>"></script>

    <script src="<?php echo base_url().'assets/new/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url().'assets/new/vendor/jquery-easing/jquery.easing.min.js'?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url().'assets/new/vendor/chart.js/Chart.min.js'?>"> </script>
    <script src="<?php echo base_url().'assets/new/vendor/datatables/jquery.dataTables.js'?>"> </script>
    <script src="<?php echo base_url().'assets/new/vendor/datatables/dataTables.bootstrap4.js'?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url().'assets/new/js/sb-admin.min.js'?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url().'assets/new/js/sb-admin-datatables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/new/js/sb-admin-charts.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('ckeditor');
      });
    </script>
  </div>
</div>
</body>

</html>
