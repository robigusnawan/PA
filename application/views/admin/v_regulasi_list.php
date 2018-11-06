
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Regulasi</li>
      </ol>
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-fw fa-sitemap"></i> Regulasi  </div>
        <div class="card-body">
          <div class="table-responsive">
          
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                   <th>Id Regulasi</th>
                  <th>Judul Regulasi</th>
                  <th>Isi Regulasi</th>
                  <th>Aksi</th>
                  
                  
                </tr>
              </thead>
              <tbody>
               <?php foreach ($data->result() as $row) { ?>
    <tr>
      <td><?php echo $row->id_regulasi; ?></td>
      <td><?php echo $row->judul_regulasi; ?></td>
      <td><?php echo $row->isi_regulasi; ?></td>
      <td>
        <a href="<?php echo base_url(); ?>index.php/regulasi/hapus_regulasi/<?php echo $row->id_regulasi?>" class="btn btn-danger"><i class="fa fa-archive"></i></a>

      <br></br> 
    </td>
  </tr>
  <?php } ?>
              </tbody>

              <tfoot>
                <tr>
                  <<th>Id Regulasi</th>
                  <th>Judul Regulasi</th>
                  <th>Isi Regulasi</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
