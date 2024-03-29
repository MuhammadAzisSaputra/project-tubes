<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--========== Boostrap ==========-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!--========== CSS ==========-->
  <link rel="stylesheet" href="asset/css/all_in_one.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- ============== Bar Icon ================= -->
  <link rel="shortcut icon" href="asset/gambar/logo.png" type="image/x-icon">
  <title>Top Books</title>
  <!-- ================ Font ================= -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
  <!-- ================ JS ================== -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>

</head>

<body>
  <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: burlywood;">
      <a class="navbar-brand ml-5">
        <img src="asset/gambar/logo.png" width="40px">
      </a>
      <a class="navbar-brand mr-5">MyLibrary</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Books
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: burlywood;">
          <a class="nav-link" href="borrow.php">Borrow</a>
          <a class="nav-link" href="buy.php">Buy</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="profil.php">Profile</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<!-- Main Content -->
<div class="main">
  <div class="carousel-inner mt-4 ml-auto mr-auto mb-5 w-100">
    <div class="carousel-item active">
      <img class="d-block" width="93%" height="400px"
      style="margin-top: 15px; margin-left: 50px; margin-right: 50px; position: relative; border-radius: 25px;"
      src="asset/gambar/top books.png" alt="First slide">
      <div class="card-img-overlay mt-auto ml-auto">
      </div>
    </div>
  </div>

  <center>
    <div class="card-deck mt-lg-3 mb-4 w-100">
      <div class="card" data-aos="flip-left" data-aos-duration="750" data-aos-delay="100"><a href="buku1.php"
        style="color: black;">
        <img class="card-img-top" width="10px" src="asset/gambar/buku1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Dikta & Hukum</h5>
          <p class="card-text">Penulis : Dhia'an Farah</p>
        </div>
      </a>
    </div>
    <div class="card" data-aos="flip-left" data-aos-duration="750" data-aos-delay="200"><a href="buku2.php"
      style="color: black;">
      <img class="card-img-top" src="asset/gambar/buku2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Laut Bercerita</h5>
        <p class="card-text">Penulis : Leila S. Chudori</p>
      </div>
    </a>
  </div>
  <div class="card" data-aos="flip-left" data-aos-duration="750" data-aos-delay="300"><a href="buku3.php"
    style="color: black;">
    <img class="card-img-top" src="asset/gambar/buku3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">She Smells of Turmeric</h5>
      <p class="card-text">Penulis : Natasha Sondakh</p>
    </div>
  </a>
</div>
<div class="card" data-aos="flip-left" data-aos-duration="750" data-aos-delay="400"><a href="buku4.php"
  style="color: black;">
  <img class="card-img-top" src="asset/gambar/buku4.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Taipan</h5>
    <p class="card-text">Penulis : William Yang</p>
  </div>
</a>
</div>
<div class="card" data-aos="flip-left" data-aos-duration="750" data-aos-delay="500"><a href="buku5.php"
  style="color: black;">
  <img class="card-img-top" src="asset/gambar/buku5.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Berani Tidak Disukai</h5>
    <p class="card-text">Penulis : Ichiro Kishimi & Fumitake Koga</p>
  </div>
</a>
</div>
</div>
<div class="card-deck mt-lg-3 mb-4 w-100">
  <div class="card" data-aos="flip-right" data-aos-duration="750" data-aos-delay="500"><a href="buku6.php"
    style="color: black;">
    <img class="card-img-top" width="10px" src="asset/gambar/buku6.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Six Crimson Cranes</h5>
      <p class="card-text">Penulis : Elizabeth Lim</p>
    </div>
  </a>
</div>
<div class="card" data-aos="flip-right" data-aos-duration="750" data-aos-delay="400"><a href="buku7.php"
  style="color: black;">
  <img class="card-img-top" src="asset/gambar/buku7.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Filosofi Teras</h5>
    <p class="card-text">Penulis : Dr. A. Setyo Wibowo</p>
  </div>
</a>
</div>
<div class="card" data-aos="flip-right" data-aos-duration="750" data-aos-delay="300"><a href="buku8.php"
  style="color: black;">
  <img class="card-img-top" src="asset/gambar/buku8.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Hujan</h5>
    <p class="card-text">Penulis : Tere Liye</p>
  </div>
</a>
</div>
<div class="card" data-aos="flip-right" data-aos-duration="750" data-aos-delay="200"><a href="buku9.php"
  style="color: black;">
  <img class="card-img-top" src="asset/gambar/buku9.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">I Want to Die but I Want to Eat Tteokpokki</h5>
    <p class="card-text">Penulis : Baek Se Hee</p>
  </div>
</a>
</div>
<div class="card" data-aos="flip-right" data-aos-duration="750" data-aos-delay="100"><a href="buku11.php"
  style="color: black;">
  <img class="card-img-top" src="asset/gambar/buku11.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Bumi</h5>
    <p class="card-text">Penulis : Tere Liye</p>
  </div>
</a>
</div>
</div>
</center>
</div>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin logout?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">Klik "Logout" untuk mengakhiri sesi.</div>
    <div class="modal-footer">
      <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>
      <a class="btn btn-danger" href="logout.php">Logout</a>
    </div>
  </div>
</div>
</div>

<!-- Footer -->
<footer class="footer text-center">
  <p>Copyright &copy; Kelompok 6 - TI USU 21</p>
</footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>

</html>