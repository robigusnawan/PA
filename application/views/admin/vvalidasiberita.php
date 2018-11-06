 <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Validasi Berita</li>
      </ol>
<div class="card mb-1">
  <div class="card-header">
    <i class="fa fa-table"></i> Data Berita </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id berita</th>
            <th>Judul berita</th>
            <th>Isi berita</th>
            <th>Status</th>
            <th>Gambar</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tfoot>

        </tfoot>
        <tbody>
          <?php foreach ($data->result() as $row) { ?>
          <tr>
            <td><?php echo $row->berita_id; ?></td>
        		<td><?php echo $row->berita_judul; ?></td>
        		<td><?php echo $row->berita_isi; ?></td>
            <td><?php echo $row->status; ?></td>
        		<?php $image = base_url().$row->berita_image ?>
        		<td><?php echo anchor($image, 'Link Foto'); ?></td>
            <td><a href="<?php echo base_url(); ?>index.php/cvalidasi/hapus_berita/<?php echo $row->berita_id ?>" class="btn btn-danger"><i class="fa fa-archive"></i></a>

            <br></br>
            
            <a href="<?php echo base_url(); ?>index.php/cvalidasi/ubah_berita/<?php echo $row->berita_id ?>" class="btn btn-success"><i class="fa fa-pencil-square"></i></a>
           </td>
           <td> 
           </td>
          </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
  </div>
</div>


