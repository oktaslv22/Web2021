<?= $this->extend('layout')?>
<?= $this->section('content')?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en">
<head>
<style>
div{
    font-family:open sans;
}
.block{
    border:1px solid black;
    border-radius: 5px;
    font-size:17px;
}
/* hover on blocks*/
.block:hover{
    background-color:#337ab7;
    color:white;
}
img:hover{
    border:1px solid white;
}
/*background color*/
.block2{
    background-color:#084035;
}
/*texy size and color*/
h4{
    color:white;
}
</style>
</head>
<body>
<section id="product">
    <h3 class="text-center text-uppercase">Products</h3>
<div class="container-fluid">
    <div class="row">
   
        <div class="col-lg-12 col- md-12 col-sm-12">
            <div class="row">
            <!--1 card-->
                <div class="col-lg-4 col-md-4 col-sm-12 order-md-1">
                    <div class="container block rounded-lg rounded-sm ">
                                                <!--1st row--->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <a href=""><img style="max-width: 100%;" src="/assets/army.jpg" alt="placeholder image" class="img-fluid"/></a>
                                 <p><center class="mb-3" style="text-align:justify;">Bahan:paris <br> Ukuran : 110cmx110cm <br> Harga : Only 20k</center></p>
                            </div>
                        </div>
                        <!--2nd row--->
                        <div class="row" >
                            <div class="col-lg-12 col-md-12 col-sm-12 block2">
                                <p><h4 class="mb-3"><i class="fa fa-flask"></i> Army </h4></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2nd card--->
                <div class="col-lg-4 col-md-4 col-sm-12 order-md-2">
                    <div class="container block rounded-lg rounded-sm">
                     <!--1st row--->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <a href=""><img style="max-width: 100%;" src="/assets/sagegreen.jpg" alt="placeholder image" class="img-fluid"/></a>
                                 <p><center class="mb-3" style="text-align:justify;">Bahan:paris <br> Ukuran : 110cmx110cm <br> Harga : Only 20k</center></p>
                            </div>
                        </div>
                        <!--2nd row--->
                        <div class="row" >
                            <div class="col-lg-12 col-md-12 col-sm-12 block2">
                                <p><h4 class="mb-3"><i class="fa fa-flask"></i> Sage Green </h4></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3rd card-->
                 <div class="col-lg-4 col-md-4 col-sm-12 order-md-3">
                    <div class="container block rounded-lg rounded-sm">
                                                <!--1st row--->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <a href=""><img style="max-width: 100%;" src="/assets/coral.jpg" alt="placeholder image" class="img-fluid"/></a>
                                 <p><center class="mb-3" style="text-align:justify;">Bahan:paris <br> Ukuran : 110cmx110cm <br> Harga : Only 20k</center></p>
                            </div>
                        </div>
                        <!--2nd row--->
                        <div class="row" >
                            <div class="col-lg-12 col-md-12 col-sm-12 block2">
                                <p><h4 class="mb-3"><i class="fa fa-flask"></i>Coral</h4></p>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</div>

<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col- md-12 col-sm-12">
            <div class="row">
            <!--1 card-->
                <div class="col=lg-4 col-md-4 col-sm-12 order-md-1">
                    <div class="container block rounded-lg rounded-sm ">
                                                <!--1st row--->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a href=""><img style="max-width: 100%;" src="/assets/stone.jpg" alt="placeholder image" class="img-fluid"/></a>
                                 <p><center class="mb-3" style="text-align:justify;">Bahan:paris <br> Ukuran : 110cmx110cm <br> Harga : Only 20k</center></p>
                            </div>
                        </div>
                        <!--2nd row--->
                        <div class="row" >
                            <div class="col-lg-12 col-md-12 col-sm-12 block2">
                                <p><h4 class="mb-3"><i class="fa fa-flask"></i> Stone </h4></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2nd card--->
                <div class="col=lg-4 col-md-4 col-sm-12 order-md-2">
                    <div class="container block rounded-lg rounded-sm">
                     <!--1st row--->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a href=""><img style="max-width: 100%;" src="/assets/milo.jpg" alt="placeholder image" class="img-fluid"/></a>
                                 <p><center class="mb-3" style="text-align:justify;">Bahan:paris <br> Ukuran : 110cmx110cm <br> Harga : Only 20k</center></p>
                            </div>
                        </div>
                        <!--2nd row--->
                        <div class="row" >
                            <div class="col-lg-12 col-md-12 col-sm-12 block2">
                                <p><h4 class="mb-3"><i class="fa fa-flask"></i> Milo Muda </h4></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3rd card-->
                 <div class="col=lg-4 col-md-4 col-sm-12 order-md-3">
                    <div class="container block rounded-lg rounded-sm">
                                                <!--1st row--->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <a href=""><img style="max-width: 100%;" src="/assets/maroon.jpg" alt="placeholder image" class="img-fluid"/></a>
                                 <p><center class="mb-3" style="text-align:justify;">Bahan:paris <br> Ukuran : 110cmx110cm <br> Harga : Only 20k</center></p>
                            </div>
                        </div>
                        <!--2nd row--->
                        <div class="row" >
                            <div class="col-lg-12 col-md-12 col-sm-12 block2">
                                <p><h4 class="mb-3"><i class="fa fa-flask"></i> Maroon </h4></p>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</div>
</section>
</body>
</html>


<?= $this->endSection()?>