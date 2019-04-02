<!DOCTYPE html>
<html>
<head>
	<title>Profil Anda</title>
	 <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="../assets/css/all.css">
   <script src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/popper.min.js"> </script>
   <script src="../assets/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../assets/css/style/theme.css">
</head>

<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <a class="navbar-brand" href="member/profil" >
        <img src="../assets/img/user.jpg" alt="logo" class="logo-circle">
      </a>
 		 <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../member">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../member/pesanPakaian">Pesan Pakaian</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="../member/lihatPesanan">Lihat Pesanan</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="../member/logout">Logout</a>
        </li>
      </ul>
	</nav>
  <div class="container modal-content" style="margin-top: 50px; padding-top: 30px; background-color: white">
    <form action="register/register" method="post" class="col-12">
          <div class="form-group">
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="true">
          </div>
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required="true">
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="true">
          </div>
        </form>
  </div>
</body>
</html>