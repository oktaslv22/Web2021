<!doctype html>
<html lang="en">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Paris Premium</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap-4.0.0/dist/css/bootstrap.min.css')?>" rel="stylesheet">
	<style>
		body {
		background: #C5E1A5;
		}
		form {
		width: 40%;
		margin: 60px auto;
		background: #efefef;
		padding: 60px 120px 80px 120px;
		text-align: center;
		-webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
		box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
		}
		label {
		display: block;
		position: relative;
		margin: 40px 0px;
		}
		.form-group {
		position: absolute;
		top: -1.6em;
		padding: 10px;
		font-family: sans-serif;
		font-size: .8em;
		letter-spacing: 1px;
		color: rgb(120,120,120);
		transition: ease .3s;
		}
		.input {
		width: 100%;
		padding: 10px;
		background: transparent;
		border: none;
		outline: none;
		}

		.line-box {
		position: relative;
		width: 100%;
		height: 2px;
		background: #BCBCBC;
		}

		.line {
		position: absolute;
		width: 0%;
		height: 2px;
		top: 0px;
		left: 50%;
		transform: translateX(-50%);
		background: #8BC34A;
		transition: ease .6s;
		}

		.input:focus + .line-box .line {
		width: 100%;
		}

		.label-active {
		top: -3em;
		}

		button {
		display: inline-block;
		padding: 12px 24px;
		background: rgb(220,220,220);
		font-weight: bold;
		color: rgb(120,120,120);
		border: none;
		outline: none;
		border-radius: 3px;
		cursor: pointer;
		transition: ease .3s;
		}

		button:hover {
		background: #8BC34A;
		color: #ffffff;
		}
		</style>

<body>
    <?php
        $username = [
            'name' => 'username',
            'id' => 'username',
            'value' => null,
            'class' => 'form-control'
        ];
    
            $password = [
            'name' => 'password',
            'id' => 'password',
            'class' => 'form-control'
        ];
    
        $session = session();
        $errors = $session->getFlashdata('errors');
    
        ?>
    
        <?php if($errors != null): ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Terjadi Kesalahan</h4>
                <hr>
                <p class="mb-0">
                    <?php
                        foreach($errors as $err){
                            echo $err.'<br>';
                        }
                    ?>
                </p>
            </div>
            <!-- <?= form_open('Auth/register') ?>
	<h1>Register Form</h1>
            Create an account or <a href="/Auth/login">log in</a> <br><br>
    	</div>
	<label>
		<p class="form-group">Username</p>
			<input type="form_label" name="username" id="username" class="input">
			<div class="line-box">
      		<div class="line"></div>
		</div>
	</label>

	<label>
		<p class="form-group">Password</p>
		<input type="password" name="password" id="password" class="input">
			<div class="line-box">
      		<div class="line"></div>
			</div>
		</div>
	</label> -->
        <?php endif ?>
<?= form_open('Auth/login') ?>
    <div id="login">
    <h1>Login Form</h1>
             This Form is Only for Admin! <!-- <a href="<?= site_url('Auth/register')?>">here</a> to register. -->
    	</div>
        <form id="login-form" class="form" action="" method="post">
        <label>
		<p class="form-group">Username</p>
			<input type="form_label" name="username" id="username" class="input">
			<div class="line-box">
      		<div class="line"></div>
		</div>
        </label>

        <label>
		<p class="form-group">Password</p>
			<input type="password" name="password" id="password" class="input">
			<div class="line-box">
      		<div class="line"></div>
		</div>
        </label>

        <label>
		<div class="text-right">
			<?= form_submit('submit', 'Submit') ?>
		</div>
        </label>

        </form>
        <?= form_close() ?>
   
</html>