	<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Berita</li>
      </ol>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i>Tambah Berita</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <form action="<?php echo base_url().'index.php/post_berita/simpan_post'?>" method="post" enctype="multipart/form-data">
	            <input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>
	            <textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
	            <input type="file" name="filefoto" required><br>
							<br>

						<input type="hidden" name="status" value="publish" <?PHP if(!empty($status) && $status == "publish") echo 'checked'; ?> /> publish<br>
						<input type="radio" name="status" value="belum"<?PHP if(!empty($status) && $status == "belum") echo 'checked'; ?>/> belum<br>
	            <button class="btn btn-primary btn-lg" type="submit">Post Berita</button>
            </form>
      </table>
    </div>
  </div>
</div>
<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('ckeditor');
      });
    </script>
