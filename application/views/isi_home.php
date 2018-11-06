

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
<div class="row">
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

<?php endforeach; ?>
</div>
