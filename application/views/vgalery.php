
	<div class="container">
		<?php
			function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
			foreach ($data->result_array() as $i) :
        	$image=$i['berita_image'];
				  $judul=$i['berita_judul'];

		?>
		<div class="col-md-8 col-md-offset-2">

			<img src="<?php echo base_url().'assets/images/'.$image;?> " height="200px" >
		<p><?php echo $judul;?></p><hr/>
		</div>
		<?php endforeach;?>
	</div>

	
