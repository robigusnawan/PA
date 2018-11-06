<?php echo form_open('regulasi/cari') ?>
<input type="text" name="cari" placeholder="search">
<input type="submit" name="search_submit" value="Cari">
<?php echo form_close() ?>

<table class="table">
  <thead>
    <br><br>
    <tr>
      <th scope="col">id regulasi</th>
      <th scope="col">judul regulasi</th>

      <th scope="col">isi regulasi</th>

    </tr>
  </thead>
  <tbody>

      <?php foreach ($data->result_array() as $row) { ?>
    <tr>
      <td><?php echo $row['id_regulasi']; ?></td>
      <td><?php echo $row['judul_regulasi']; ?></td>
      <td><?php echo $row['isi_regulasi']; ?></td>

    </tr>
  <?php } ?>

  </tbody>
</table>
