<?= $this->extend('layout')?>
<?= $this->section('content')?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    
  </head>
  <style>
      #contact .card:hover i,#contact .card:hover h4{
	color: #87d37c;
}
  </style>
  <body>
   <section id="aboutus">
       <div class="container mb-5">
           <h3 class="text-center text-uppercase">About us</h3><br>
           <div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
                    <center>
					<a href=""><img style="max-width: 40%;" src="/assets/paris.jpg" alt="placeholder image" class="img-fluid"/></a><br><br><br>
                    <!-- <video class="paris"  loop autoplay muted width="100%" height="100%" controls>
                        <source src="paris.mp4" type="video/mp4" class="test" />
                        <source src="paris.ogg" type="video/ogg" />
                    </video> -->
						<p>Paris Premium Hijab didirikan pada tahun 2021, kami menawarkan hijab dengan warna yang sangat variatif. <br> Kami menekankan kualitas, dengan harga yang terjangkau. Dengan pemilihan bahan baku terbaik dan juga kulitas jahitan yang rapih.</p>
                    </center>
                    </div>
				</div>
			</div>
		</div>

    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
<?= $this->endSection()?>