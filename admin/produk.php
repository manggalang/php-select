<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Kategori</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Harga</th>
      <th scope="col">Gambar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $que = "SELECT * FROM produk JOIN kategori ON produk.id_produk=kategori.id_kategori";
      $select = mysqli_query($con,$que);
      
      while($data = mysqli_fetch_array($select)) {
    ?>
    <tr>
      <th scope="row"><?php echo $data['id_produk']; ?></th>
      <td><?php echo $data['nama_produk']; ?></td>
      <td><?php echo $data['nama_kategori']; ?></td>
      <td><?php echo "Rp" . number_format($data['harga'],2,',','.'); ?></td>
      <td><?php echo $data['gambar']; ?></td>
      <td>
        <button type="button" class="btn btn-info">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>
</body>
</html>