
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">KIM</li>
      </ol>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-fw fa-sitemap"></i>Tambah KIM </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       
          <form action="<?php echo base_url().'index.php/KIM/tambahkim'?>" method="post" enctype="multipart/form-data">
            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="NOSK">NO SK</label>
                <input type="TEXT" class="form-control" id="SK" name="SK" placeholder="NO SK" required>
              </div>
              <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1">TENTANG</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="TENTANG" rows="3" required></textarea>
              </div>
            </div>

            <div class="form-group ">
                 <label for="Tanggal">kecamtan</label>
                <div class="col-md-3">
                    <select class="form-control" name="kecamatan">
                            <option  value="">---Select Kecamatan---</option>                    
                        <?php foreach($kecamatan as $row) { ?>
                            <option value="<?php echo $row->id_kecamatan;?>"><?php echo $row->kecamatan;?></option>
                        <?php } ?>
                    </select>    
                </div>                
            </div>    
             
              <div class="form-group col-md-6">
                <label for="Tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
              </div>

            </div>


            
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="DESA">DESA</label>
              <input type="text" class="form-control" id="DESA" name="DESA" placeholder="DESA" required>
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1">ALAMAT</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="ALAMAT" rows="3" required></textarea>
              </div>
              </div>
            <div class="form-group col-md-6">
              <label for="KETUAKIM">KETUA KIM</label>
              <input type="text" class="form-control" id="KETUA" name="KETUA" placeholder="KETUA" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
              <label for="SEKRETARIS">SEKRETARIS</label>
              <input type="text" class="form-control" id="SEKRETARIS" name="SEKRETARIS" placeholder="SEKRETARIS" required>

              </div>
              <div class="form-group col-md-6">
                <label for="BENDAHARA">BENDAHARA</label>
                <input type="text" class="form-control" id="BENDAHARA" name="BENDAHARA" placeholder="BENDAHARA" required>
              </div>
            </div>


            <div class="form-group col-md-6">
              <label for="BIDANGPENGUMPULANINFORMASI">BIDANG PENGUMPULAN INFORMASI</label>
              <input type="text" class="form-control" id="B_PENGUMPULANINFORMASI" name="B_PENGUMPULAN_INFORMASI" placeholder="BIDANG PENGUMPULAN INFORMASI" required>
            </div>
            <div class="form-group col-md-6">
              <label for="BIDANGPENGOLAHINFORMASI">BIDANG PENGOLAH INFORMASI</label>
              <input type="text" class="form-control" id="B_PENGOLAH_INFORMASI" name="B_PENGOLAH_INFORMASI" placeholder="BIDANG PENGEOLAH INFORMASI" required>
            </div>
            <div class="form-group col-md-6">
              <label for="BIDANGPENYEBARANINFORMASI">BIDANG PENYEBARAN INFORMASI</label>
              <input type="text" class="form-control" id="BIDANGPENYEBARANINFORMASI" name="B_PENYEBARAN_INFORMASI"placeholder="BIDANG PENYEBARAN INFORMASI" required>
            </div>
            <div class="form-group row">
             <div class="col-sm-10">
               <button type="submit" class="btn btn-primary">Tambah</button>
             </div>
           </div>

          </form>


      </table>
    </div>
  </div>
</div>