<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'assets/css/half-slider.css' ?>" rel="stylesheet">
<!-- css untuk datatables -->
<link href="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.css'?>" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <?php $this->load->view($header);?>
    <header>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('http://bandungbaratkab.go.id/theme/images/placeholder.png')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://bandung.co/wp-content/uploads/2018/03/kabupaten-bandung-timur.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://s3.caradvice.com.au/thumb/960/477/wp-content/uploads/2018/02/ferrari-488-pista-official-7.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </header>




    <!-- Page Content -->
    <section class="py-5">


      <div class="container">

      


<br> <br>

        <!-- Page Heading -->

        <?php if(isset($isi)){?>
        <div class="row">

         <?php $this->load->view($isi);?>

        </div>
      <?php }else{?>
        <div class="row">

          <?php
            function limit_words($string, $word_limit){
                      $words = explode(" ",$string);
                      return implode(" ",array_splice($words,0,$word_limit));
                  }
            foreach ($data->result_array() as $i) :
              	$id=$i['berita_id'];
                $image=$i['berita_image'];
                $judul=$i['berita_judul'];
                $isi=$i['berita_isi'];

          ?>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?php echo base_url().'assets/images/'.$image;?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $judul;?></a>
                </h4>
                <p class="card-text"><?php echo limit_words($isi,30);?> <a href="<?php echo base_url().'index.php/post_berita/view/'.$id;?>"> Selengkapnya ></a></p>
              </div>
            </div>
          </div>

            <?php endforeach;?>
        </div>

      <?php  }?>

    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; RI.GN</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.js'?>"></script>

    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('ckeditor');
      });
    </script>



  </body>

</html>
