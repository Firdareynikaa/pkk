<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?= base_url(); ?>/assets/login/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?= base_url(); ?>/assets/login/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url(); ?>/assets/login/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?= base_url(); ?>/assets/login/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url(); ?>/assets/login/js/bootstrap.min.js"></script>
</head>
<body id="register">
  <form class="form-signin app-cam" method="post" action="<?=base_url('register/tambah')?>" enctype="multipart/form-data">
    <h2 class="form-heading">Register</h2>
    <input type="text" class="form-control1" placeholder="Nama Lengkap" name="nama" required>
    <input type="text" class="form-control1" placeholder="E-mail address" name="email" required>
    <input type="password" class="form-control1" placeholder="Password" name="password" required>
      <div class="radios">
        <label for="level" class="label_radio">
          <input type="radio" name="id_level" value="2" checked> Pembeli 
        </label>
        <label for="level" class="label_radio">
          <input type="radio" name="id_level" value="3"> Penjual 
        </label>
	    </div>
      <button class="btn btn-lg btn-success1 btn-block" type="submit">Submit</button>
      <ul class="new">
		    <li style="margin-left:90px;"><p class="sign">Already registered ?<a href="<?= base_url(); ?>login"> Login</a></p></li>
	      <div class="clearfix"></div>
	    </ul>
  </form>
</body>
</html>
