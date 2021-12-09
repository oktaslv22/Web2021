<?= $this->extend('layout')?>
<?= $this->section('content')?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<head>

</head>
<body>

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

