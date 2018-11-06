<div class="table-responsive">
<table class="table" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <br><br>
    <tr>
      <th scope="col">SURAT KEPUTASAN</th>
      <th scope="col">Tanggal</th>
      <th scope="col">DESA</th>
      <th scope="col">KECAMATAN</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">KETUA</th>
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
         <a href="#myprofile<?php echo $row->id_kim ?>" class="btn btn-info"data-toggle="modal"> <i class="icon-remove"></i>Profile</a>

      </td>

  </tr>
  <?php } ?>

  </tbody>
</table>
</div>
<div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>

    <?php foreach ($data->result() as $row) { ?>
  <div id="myprofile<?php echo $row->id_kim ?>" class="modal fade" role="dialog">
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


                      <div class="form-group col-md-6">
                        <label for="NOSK">NO SK</label>
                        <input type="TEXT" class="form-control" id="SK" name="SK" value="<?php echo $row->sk; ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleFormControlTextarea1">TENTANG</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="TENTANG" rows="3"> <?php echo $row->tentang; ?></textarea>
                      </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="KECAMATAN">KECAMATAN</label>
                        <input type="text" class="form-control" id="KECAMATAN" name="KECAMATAN" value="<?php echo $row->kecamatan; ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="Tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $row->tanggal; ?>">
                      </div>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="DESA">DESA</label>
                      <input type="text" class="form-control" id="DESA" name="DESA" value="<?php echo $row->desa; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlTextarea1">ALAMAT</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="ALAMAT" value="" rows="3"><?php echo $row->alamat; ?></textarea>
                      </div>
                    <div class="form-group">
                      <label for="KETUAKIM">KETUA KIM</label>
                      <input type="text" class="form-control" id="KETUA" name="KETUA" value="<?php echo $row->ketua; ?>">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="SEKRETARIS">SEKRETARIS</label>
                      <input type="text" class="form-control" id="SEKRETARIS" name="SEKRETARIS" value="<?php echo $row->sekretaris; ?>">

                      </div>
                      <div class="form-group col-md-6">
                        <label for="BENDAHARA">BENDAHARA</label>
                        <input type="text" class="form-control" id="BENDAHARA" name="BENDAHARA" value="<?php echo $row->bendahara; ?>">
                      </div>
                    </div>


                    <div class="form-group col-md-6">
                      <label for="BIDANGPENGUMPULANINFORMASI">BIDANG PENGUMPULAN INFORMASI</label>
                      <input type="text" class="form-control" id="B_PENGUMPULANINFORMASI" name="B_PENGUMPULAN_INFORMASI" value="<?php echo $row->b_pengumpulan_informasi; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="BIDANGPENGOLAHINFORMASI">BIDANG PENGOLAH INFORMASI</label>
                      <input type="text" class="form-control" id="B_PENGOLAH_INFORMASI" name="B_PENGOLAH_INFORMASI" value="<?php echo $row->b_pengelola_informasi; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="BIDANGPENYEBARANINFORMASI">BIDANG PENYEBARAN INFORMASI</label>
                      <input type="text" class="form-control" id="BIDANGPENYEBARANINFORMASI" name="B_PENYEBARAN_INFORMASI" value="<?php echo $row->b_penyebaran_informasi; ?>">
                    </div>

                  </form>

        <!-- footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
