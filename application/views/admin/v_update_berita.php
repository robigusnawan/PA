	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2>INPUT BERITA</h2><hr/>

      	<?php 	foreach ($data as $row) { ?>
			<form action="<?php echo base_url().'index.php/cvalidasi/update'?>" method="post" enctype="multipart/form-data">
				 <input type="hidden" name="berita_id" class="form-control" value="<?php echo $row->berita_id; ?>" required/><br/>
	            <input type="text" name="judul" class="form-control" value="<?php echo $row->berita_judul; ?>" required/><br/>
	            <textarea id="ckeditor" name="berita" class="form-control"  required><?php echo $row->berita_isi; ?></textarea><br/>
	            <input type="file" name="filefoto" required><br>
							<br>

						<input type="radio" name="status"value="publish" <?PHP if(!empty($status) && $status == "publish") echo 'checked'; ?> /> publish<br>
						<input type="radio" name="status" value="belum" <?PHP if(!empty($status) && $status == "belum") echo 'checked'; ?>/> belum<br>
	            <button class="btn btn-primary btn-lg" type="submit">Post Berita</button>
            </form> <?php } ?>
		</div>

	</div>
	<br>
<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('ckeditor');
      });
    </script>