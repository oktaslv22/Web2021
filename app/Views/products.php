<?= $this->extend('layout')?>
<?= $this->section('content')?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<head>

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<section id="product">
    <h3 class="text-center text-uppercase">Products</h3>
<div class="container-fluid">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Gambar</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach($barangs as $index=>$barang): ?>

      <td><center><img src="/uploads/<?= $barang->gambar ?>" width="200" height="200"></td></center>
      <td>
          <ul>
          <li>Nama Barang  : <?= $barang->nama ?></li>
          <li>Stok Barang  : <?= $barang->stok ?></li>
          <li>Harga Barang : <?= $barang->harga ?></li>
          </ul>
      </td>
      
    </tr>

    
      <?php endforeach ?>
   
  </tbody>
</table>
</div>
</section>
</body>
</html>


<?= $this->endSection()?>

