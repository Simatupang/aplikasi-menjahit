<!DOCTYPE html>
<html>
<head>
	<title>Home Member</title>
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="assets/css/all.css">
	 <script src="assets/js/jquery.min.js"></script>
	 <script src="assets/js/popper.min.js"> </script>
	 <script src="assets/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="assets/css/style/theme.css">
	 <style>
.grid-container {
  display: grid;
  grid-gap: 10px;
  background-color: black;
  padding: 10px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px;
  font-size: 30px;
}
.item1 {
  grid-column: 1 / span 2;
  grid-row: 1;
}
.item2 {
  grid-column: 3;
  grid-row: 1 / span 2;
}
.item5 {
  grid-column: 1 / span 3;
  grid-row: 3;
}
</style>
</head>

<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  	<a class="navbar-brand" href="member/profil" >
		    <img src="assets/img/user.jpg" alt="logo" class="logo-circle">
	  	</a>
 		 <ul class="navbar-nav">
    		<li class="nav-item">
     	 		<a class="nav-link" href="">Home</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="member/pesanPakaian">Pesan Pakaian</a>
    		</li>
    		<li class="nav-item">
     			 <a class="nav-link" href="member/lihatPesanan">Lihat Pesanan</a>
    		</li>
    		<li class="nav-item">
     			 <a class="nav-link" href="member/logout">Logout</a>
    		</li>
  		</ul>
	</nav>
	<div class="container">
		<div class="row">
			<div class="promo col-sm-4">
				<img src="assets/img/promoup.png" class="img-promo">
			</div>
			<div class="promo col-sm-4">
				<img src="assets/img/promo1.png" class="img-promo">
			</div>
			<div class="promo col-sm-4">
				<img src="assets/img/promo3.png" class="img-promo">
			</div>
		</div>
		<br>
		<br>
		<div>
			<h1> DISKON HINGGA &nbsp; &nbsp;<img src="assets/img/Discount.png" class="logo-circle"> <img src="assets/img/34093-200.png" class="logo-circle"><img src="assets/img/34093-200.png" class="logo-circle"><img src="assets/img/34093-200.png" class="logo-circle"></h1>
			<img src="assets/img/Grab-logo-social.png" class="img-promo">
		</div>
	</div>
	<h1>PESAN DI KAMI DAN RAIH HADIAH NYA!!!</h1>

<div class="grid-container">
  <div class="grid-item item1"><img src="assets/img/steam-logo-816x459.jpg" style="width:30%"></div>
  <div class="grid-item item2"><img src="assets/img/tsb-border.png" style="width:80%""></div>
  <div class="grid-item item3"><img src="assets/img/voucher.png" style="width:55%""></div>  
  <div class="grid-item item4"><img src="assets/img/voucher hadiah.png" style="width:55%""></div>
  <div class="grid-item item5"><img src="assets/img/Universal_Studios_Singapore_Logo.png" style="width:50%"></div>
</div>

<p>Ketentuan berlaku.</p>
<p>Hati-hati terhadap penipuan, hadiah tidak dipungut biaya.</p>
</body>
</html>