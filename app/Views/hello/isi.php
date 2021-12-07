<?= $this->extend('layout')?>
<?= $this->section('content')?>

<main role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<br><br><div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
  <div class="container ">
    <h1 class="display-3">Welcome To Our Website!</h1>
    <?php
			echo "Hello, " .session()->get('username') ."!";
		?>
    <p>Happy Shopping^^.</p>
    <p><a class="btn btn-primary btn-lg" href="/Home/products" role="button">Learn more &raquo;</a></p>
  </div>
</div>

<div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="/assets/images/Gambar1.jpeg" alt="Generic placeholder image" width="140" height="140">
            <h2>Milo Muda</h2>
            <!-- <p>Penjelasan</p> -->
            <p><a class="btn btn-secondary" href="/Home/products" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="/assets/images/Gambar2.jpeg" alt="Generic placeholder image" width="140" height="140">
            <h2>Army</h2>
            <!-- <p>Penjelasan</p> -->
            <p><a class="btn btn-secondary" href="/Home/products" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="/assets/images/Gambar3.jpeg" alt="Generic placeholder image" width="140" height="140">
            <h2>Coral</h2>
            <!-- <p>Penjelasan</p> -->
            <p><a class="btn btn-secondary" href="/Home/products" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

  <hr>

</main>

<?= $this->endSection()?>
