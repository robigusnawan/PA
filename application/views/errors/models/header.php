<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">KIM Kabupaten Bandung </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('index.php/home'); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/post_berita/lists'); ?>">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/galery/melihatfoto'); ?>">Galery</a>
        </li>
        <li class="nav-item dropdown show">
   <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">KIM</a>
   <div class="dropdown-menu show" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
     <a class="dropdown-item" href="#">Soreang</a>
     <a class="dropdown-item" href="#">Baleendah</a>
     <a class="dropdown-item" href="#">dayeuh kolot</a>
     <div class="dropdown-divider"></div>
   </div>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="<?php echo base_url('index.php/post_berita/index'); ?>">post berita</a>
 </li>
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
