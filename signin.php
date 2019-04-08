<!DOCTYPE html>
<html>
    <head> 

    <center>

	</center>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bahan/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bahan/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bahan/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="default.css">
	<link rel="stylesheet" type="text/css" href="text/javascript" href="<?php echo base_url(); ?>/bahan/js/default.js">
	<script type="text/javascript" src="<?php echo base_url(); ?>/bahan/js/bootstrap.bundle.js"></script>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		<!-- Website CSS style -->
		<link href="<?php echo base_url(); ?>/bahan/css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>/bahan/css/style.css">
		<!-- Google Fonts -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		<title>login</title>
		<style type="text/css">
			
			body, html{
			     height: 100%;
			 	background-repeat: no-repeat;
			 	background-image: url("bahan/background.png");
			 	font-family: sans-serif;
				background-size: cover;
			}

			.main{
			 	margin:50px 15px;
			}

			.home{
			font-family: sans-serif;
			font-size: 30px;
			font-style: normal;

			}

			h1.title { 
				font-size: 50px;
				font-family: sans-serif;
				font-weight: 400; 
			}
			hr{
				width: 10%;
				color: #fff;
			}

			.form-group{
				margin-bottom: 15px;
			}

			label{
				margin-bottom: 15px;
			}

			input,
			input::-webkit-input-placeholder {
			    font-size: 11px;
			    padding-top: 3px;
			}

			.main-login{
			 	background-color: black;
			    /* shadows and rounded borders */
			    border-radius: 2px;
			    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			}
			.form-control {
		    height: auto!important;
			padding: 8px 70px !important;
			}
			#button {
			    border: 1px solid #ccc;
			    margin-top: 28px;
			    padding: 6px 12px;
			    color: black;
			    text-shadow: 0 1px #fff;
			    cursor: pointer;
			    -moz-border-radius: 3px 3px;
			    -webkit-border-radius: 3px 3px;
			    border-radius: 3px 3px;
			    -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
			    -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
			    box-shadow: 0 1px #fff inset, 0 1px #ddd;
			    background: #f5f5f5;
		    }
			.main-center{
			 	margin-top: 30px;
			 	margin: 0 auto;
			 	width: 400px;
			 	height : 475px;
			    padding: 20px 40px;
				background: white;
				color: black;
			    text-shadow: none;

			}
			.login-button{
				margin-top: 5px;
				height: 50px;
				width : 300px;
				text-align: center;
			}
			.login-register{
				font-size: 11px;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="menu-wrap" style="background-color: white">
			<table>
				<tr>
					<th style="text-align: center" width="50px" height="50px">
					<div class="search" style="text-align: center;">
					<img src="<?php echo base_url('bahan/menu.png'); ?>"/>
					</div>
					</th>
					<th style="text-align: center" width="515px" height="50px">
					<div class="search" style="text-align: left">
					<img src="<?php echo base_url('bahan/search.png'); ?>"/>
					<input type="text" class="search" placeholder="search">
					</div>
					</th>
					<th style="text-align: center" width="515px" height="25px">
						<div class="search" style="text-align: center">
							<H1>GREAT CLOTH INDONESIA</H1>
					</th>
					<th style="text-align: right" width="515px" height="50px">
						<button style="background-color: white; width: 75px; height: 30px" type="button" class="login-button">Sign In</button>
					</th>
					<th>
						<img src="<?php echo base_url('bahan/user.png'); ?>"/>
					</th>
					<th style="text-align: center" width="50px" height="50px">
						<img src="<?php echo base_url('bahan/icon.png'); ?>"/>
					</th>
				</tr>
			</table>
			</div>
		</div>

		
	<br>
	<?php // Membuat Login Pengguna
		if ($this->session->flashdata('alert')=='sukses_login'){
    		echo "<script>alert('Sukses Login');</script>";
		}
	?>



		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h1 style="font-family: sans-serif; color: black; text-align: center">Sign In</h1>
				
					<?php echo form_open("akun_c/cek_login"); ?>
						<div style="width: 320px; height: 0px; border: 1px #000 solid;" align="center" >
						</div>
						<div class="form-group" style="margin-top: 50px">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
									<input type="text" class="form-control" required name="email" id="email"  placeholder="email@pixelcorp.com"/>
							</div>
						</div>

						<div class="form-group" style="text-align: left;">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
									<input type="password" class="form-control" required name="password" id="password"/>
							</div>
						</div>

						<div class="form-group " align="center" style="margin-top: 50px" >
							<button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" style="background-color: red; color: white">Login</button>
						</div>

						<div style="text-align: center;"><span style="font-weight: bold;">Don't have an account?<a href="<?php echo site_url(); ?>/akun_c/daftar_view" style="color: red;">Create one here</a></span></div>
						
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</body>
	</html>
