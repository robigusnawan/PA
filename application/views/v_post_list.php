
	<div class="container">
		<?php
			function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
			foreach ($data->result_array() as $i) :
				$id=$i['berita_id'];
				$judul=$i['berita_judul'];
				$image=$i['berita_image'];
				$isi=$i['berita_isi'];
		?>
		<div class="col-md-8 col-md-offset-2">
			<h2><?php echo $judul;?></h2><hr/>
			<img src="<?php echo base_url().'assets/images/'.$image;?>">
			<?php echo limit_words($isi,30);?><a href="<?php echo base_url().'index.php/post_berita/view/'.$id;?>"> Selengkapnya ></a>
		</div>
		<?php endforeach;?>
	</div>
