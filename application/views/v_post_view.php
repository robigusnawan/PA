<?php
	$b=$data->row_array();
?>

	<title><?php echo $b['berita_judul'];?></title>


	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2><?php echo $b['berita_judul'];?></h2><hr/>
			<img src="<?php echo base_url().'assets/images/'.$b['berita_image'];?>">
			<?php echo $b['berita_isi'];?>
		</div>

	</div>
