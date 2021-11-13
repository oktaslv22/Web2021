<?= $this->extend('layout')?>
<?= $this->section('content')?>
<!-- <h1>Testing</h1>
<?= $data ?> -->
<main role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<br><br><div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Welcome To Our Website!</h1>
    <p>Happy Shopping^^.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Ini Isi Heading</p>
      <p><a class="btn btn-secondary" href="#" role="button">See Products &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading2</h2>
      <p>Ini Isi Heading</p>
      <p><a class="btn btn-secondary" href="#" role="button">See Products &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading3</h2>
      <p>Ini Isi Heading</p>
      <p><a class="btn btn-secondary" href="#" role="button">See Products &raquo;</a></p>
    </div>   
  </div>

  <hr>

</div> <!-- /container -->

</main>

<?= $this->endSection()?>
