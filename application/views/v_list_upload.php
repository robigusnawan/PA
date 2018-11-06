
<table class="table" id="dataTables">
  <thead>
    <tr>
      <th scope="col">id berita</th>
      <th scope="col">judul berita</th>

      <th scope="col">isi berita</th>
      <th scope="col">status</th>
        <th scope="col">gambar</th>
        <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>

      <?php foreach ($data->result() as $row) { ?>
  	<tr>
  		<td><?php echo $row->berita_id; ?></td>
  		<td><?php echo $row->berita_judul; ?></td>
  		<td><?php echo $row->berita_isi; ?></td>
      <td><?php echo $row->status; ?></td>

  		<?php $image = base_url().$row->berita_image ?>
  		<td><?php echo anchor($image, 'Link Foto'); ?></td>

  	</tr>
  <?php } ?>

  </tbody>
</table>
<div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
