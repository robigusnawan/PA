 <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">KIM</li>
      </ol>
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-fw fa-sitemap"></i> Data Kelompok Informasi Masyarakat  </div>
        <div class="card-body">
          <div class="table-responsive">
                
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>SURAT KEPUTASAN</th>
                  <th>Tanggal</th>
                  <th>DESA</th>
                  <th>KECAMATAN</th>
                  <th>ALAMAT</th>
                  <th>KETUA</th>
                  <th>HAPUS</th>
                   <th>EDIT</th>
                </tr>
              </thead>
              <tbody>
               <?php foreach ($data->result() as $row) { ?>
    <tr>
      <td><?php echo $row->sk; ?></td>
      <td><?php echo $row->tanggal; ?></td>
      <td><?php echo $row->desa; ?></td>
      <td><?php echo $row->kecamatan; ?></td>
      <td><?php echo $row->alamat; ?></td>
      <td><?php echo $row->ketua; ?></td>
      <td>
     <a href="<?php echo base_url();?>index.php/kim/hapus_kim<?php echo $row->id_kim ?>" class="btn btn-danger"> <i class="icon-remove"></i> Hapus </a>
    </td>
    <td>
       <a href="#myedit<?php echo $row->id_kim ?>" class="btn btn-success"data-toggle="modal"> <i class="icon-remove"></i> edit </a>

    </td>
  </tr>
  <?php } ?>
              </tbody>

              <tfoot>
                <tr>
                  <th>SURAT KEPUTASAN</th>
                  <th>Tanggal</th>
                  <th>DESA</th>
                  <th>KECAMATAN</th>
                  <th>ALAMAT</th>
                  <th>KETUA</th>
                  <th>HAPUS</th>
                   <th>EDIT</th>
                </tr>
              </tfoot>
              
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
<!-- modal edit kim -->
  <?php foreach ($data->result() as $row) { ?>
<div id="myedit<?php echo $row->id_kim ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- konten modal-->
    <div class="modal-content">
      <!-- heading modal -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- body modal -->



          <form action="<?php echo base_url().'index.php/kim/update_kim'?>" method="post" enctype="multipart/form-data">
             <input type="hidden" name="id_kim" class="form-control" value="<?php echo $row->id_kim; ?>" required/><br/>


                    <div class="form-group col-md-7">
                      <label for="NOSK">NO SK</label>
                      <input type="TEXT" class="form-control" id="SK" name="SK" value="<?php echo $row->sk; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleFormControlTextarea1">TENTANG</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" name="TENTANG" rows="3" required> <?php echo $row->tentang; ?></textarea>
                    </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="KECAMATAN">KECAMATAN</label>
                      <input type="text" class="form-control" id="KECAMATAN" name="KECAMATAN" value="<?php echo $row->kecamatan; ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Tanggal">Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $row->tanggal; ?>" required>
                    </div>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="DESA">DESA</label>
                    <input type="text" class="form-control" id="DESA" name="DESA" value="<?php echo $row->desa; ?>" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label for="exampleFormControlTextarea1">ALAMAT</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" name="ALAMAT" value="" rows="3" required><?php echo $row->alamat; ?></textarea>
                    </div>
                  <div class="form-group">
                    <label for="KETUAKIM">KETUA KIM</label>
                    <input type="text" class="form-control" id="KETUA" name="KETUA" value="<?php echo $row->ketua; ?>" required>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="SEKRETARIS">SEKRETARIS</label>
                    <input type="text" class="form-control" id="SEKRETARIS" name="SEKRETARIS" value="<?php echo $row->sekretaris; ?>" required>

                    </div>
                    <div class="form-group col-md-6">
                      <label for="BENDAHARA">BENDAHARA</label>
                      <input type="text" class="form-control" id="BENDAHARA" name="BENDAHARA" value="<?php echo $row->bendahara; ?>" required>
                    </div>
                  </div>


                  <div class="form-group col-md-6">
                    <label for="BIDANGPENGUMPULANINFORMASI">BIDANG PENGUMPULAN INFORMASI</label>
                    <input type="text" class="form-control" id="B_PENGUMPULANINFORMASI" name="B_PENGUMPULAN_INFORMASI" value="<?php echo $row->b_pengumpulan_informasi; ?>"required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="BIDANGPENGOLAHINFORMASI">BIDANG PENGOLAH INFORMASI</label>
                    <input type="text" class="form-control" id="B_PENGOLAH_INFORMASI" name="B_PENGOLAH_INFORMASI" value="<?php echo $row->b_pengelola_informasi; ?>" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="BIDANGPENYEBARANINFORMASI">BIDANG PENYEBARAN INFORMASI</label>
                    <input type="text" class="form-control" id="BIDANGPENYEBARANINFORMASI" name="B_PENYEBARAN_INFORMASI" value="<?php echo $row->b_penyebaran_informasi; ?>" required>
                  </div>
                  <div class="form-group col-md-6">
                   <div class="col-sm-10">
                     <button type="submit" class="btn btn-primary">save</button>
                   </div>
                 </div>
                </form>

      <!-- footer modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!-- akhir modal edit kim -->
