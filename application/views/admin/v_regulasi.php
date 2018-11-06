
<br>
    <form action="<?php echo base_url().'index.php/regulasi/tambahregulasi'?>" method="post" enctype="multipart/form-data">
      
      <div class="form-group col-md-6">
                <label for="Tanggal">Judul Regulasi</label>
                <input type="text" class="form-control" id="judul_regulasi" name="judul_regulasi" required>
      </div>
         <br>

      <div class="form-group">
           <label for="exampleFormControlTextarea1">Isi Regulasi</label>
           <textarea class="form-control" id="ckeditor" name="isi_regulasi" rows="3"></textarea>
      </div>
  
        <br> <br>
          <button class="btn btn-primary btn-lg" type="submit">submit</button>
        <br> <br>



  </form>




  
