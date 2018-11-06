<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">User Activation</li>
      </ol>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Registration </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <form action="<?php echo base_url().'index.php/registrasi/tambahuser'?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
     <label for="exampleInputEmail1">username</label>
     <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="username">
     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
   </div>

   <div class="form-group">
     <label for="exampleInputPassword1">Password</label>
     <input type="password" class="form-control" id="password" name="password" placeholder="Password">
   </div>

<br>
   <div class="form-group">
   <div class="custom-control custom-radio">
     <input type="radio" name="level" value="ADMIN" <?PHP if(!empty($level) && $level == "ADMIN") echo 'checked'; ?> /> ADMIN<br>
</div>
   <div class="form-group">
   <div class="custom-control custom-radio">
     <input type="radio" name="level" value="koordinator"<?PHP if(!empty($level) && $status == "koordinator") echo 'checked'; ?>/> koordinator<br>
   </div>
   </div>
   </div>
   <br><br>
<button class="btn btn-primary btn-lg" type="submit">submit</button>
   <br><br>


   </div>
 </form>
      </table>
    </div>
  </div>
</div>