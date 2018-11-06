
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Kelola Koordinator</li>
      </ol>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Daftar User</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id user</th>
            <th>username</th>
            <th>password</th>
            <th>level</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>

        </tfoot>
        <tbody>
         
      <?php foreach ($data->result() as $row) { ?>
    <tr>
      <td><?php echo $row->id_akun; ?></td>
      <td><?php echo $row->username; ?></td>
      <td><?php echo $row->password; ?></td>

    <td><?php echo $row->level; ?></td>
    <td>
    <a href="<?php echo base_url();?>index.php/registrasi/hapus_user/<?php echo $row->id_akun ?>" class="btn btn-danger"> <i class="fa fa-archive"></i></a>

    <br></br>
    <a href="#myedit<?php echo $row->id_akun ?>" class="btn btn-success"data-toggle="modal"><i class="fa fa-pencil-square"></i></a>

   </td>
   
    </tr>
  <?php } ?>

        </tbody>
      </table>
    </div>
  </div>
</div>



<?php foreach ($data->result() as $row) { ?>
<div id="myedit<?php echo $row->id_akun ?>" class="modal fade" role="dialog">
<div class="modal-dialog">
  <!-- konten modal-->
  <div class="modal-content">
    <!-- heading modal -->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- body modal -->



        <form action="<?php echo base_url().'index.php/registrasi/update_user'?>" method="post" enctype="multipart/form-data">
           <input type="hidden" name="id_akun" class="form-control col-md-6" value="<?php echo $row->id_akun; ?>" required/><br/>
           <div class="form-group col-md-6" >
          <label for="exampleInputEmail1">username</label>
          <input type="text" class="form-control" id="username" name="username"  value="<?php echo $row->username; ?>">
        </div>

        <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control col-md-6" id="password" name="password" value="<?php echo $row->password; ?>">
        </div>

        <br>
           <div class="form-group">
           <div class="custom-control custom-radio">
             <input type="radio" name="level" value="ADMIN" <?PHP if(!empty($level) && $level == "ADMIN") echo 'checked'; ?> /> ADMIN<br>
        </div>
           <div class="form-group ">
           <div class="custom-control custom-radio">
             <input type="radio" name="level" value="koordinator"<?PHP if(!empty($level) && $status == "koordinator") echo 'checked'; ?>/> koordinator<br>
           </div>
           </div>
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
