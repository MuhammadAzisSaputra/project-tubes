<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--========== Boostrap ==========-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--========== CSS ==========-->
    <link rel="stylesheet" href="index.css">
    <!-- ============== Bar Icon ================= -->
    <link rel="shortcut icon" href="asset/gambar/iconbuku-removebg-preview.png" type="image/x-icon">
    <title>Index</title>
    <!-- ================ Font ================= -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <!-- ================ JS ================== -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: burlywood;">
            <a class="navbar-brand ml-5">
                <img src="asset/gambar/iconbuku-removebg-preview.png" width="40px">
              </a>
            <a class="navbar-brand mr-5">xxxx Library</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="user.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Books
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: burlywood;">
                            <a class="nav-link" href="borrow.php">Borrow</a>
                            <a class="nav-link" href="#">Buy</a>
                        </div>
                    </li>
                    
                  <li class="nav-item active">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                  </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Main Content -->
  <div class="main">
   <table  style="background-color: transparent;">
       <tr>
           <td>
               <div class="card m-3" style="width: 18.3rem; box-shadow: none;">
            <img class="card-img-top" src="asset/gambar/buku5.jpg" alt="Card image cap">
          </div>
        </td>
           <td>
               <div class="text" style="width: 622px;">
               <h1>Berani Tidak Disukai</h1>
               <h3>Penulis : Ichiro Kishimi & Fumitake Koga</h3>
               <h4>Language : English</h4>
               <p>Berani tidak disukai adalah sebuah buku tentang dialog naratif lima malam antara seorang filsuf yang 
                   meyakini bahwa dunia ini sederhana – sehingga kebahagiaan dapat diraih sekejap mata, dengan seorang 
                   pemuda yang merasa tidak puas dengan hidupnya – memandang dunia ini sebagai gumpalan kontradiksi 
                   sehingga gagasan apapun tentang kebahagiaan adalah hal yang tidak masuk akal baginya.

                Dialog dua karakter pada buku ini berlangsung seperti dialog Socrates dengan murid-muridnya. Sang filsuf 
                tidak berlagak seperti guru dogmatis yang terburu-buru untuk menghantarkan jawaban dan kepastian sebuah 
                pemahman kepada sang pemuda. Sebagai gantinya dia memberikan ruang yang lebar dan terbuka sehingga pemuda 
                tersebut sampai pada jawaban yang ingin dia cari melalui usahanya sendiri.
                
                Sang pemuda juga tidak berlagak seperti murid (atau bawahan) baik-baik yang merasa “membantah” bukanlah 
                sikap pelanggaran terhadap etika. Alih-alih, ia lebih menyerupai kaum Bani Israil yang terus mengganti 
                pernyataan atau perintah Musa dengan pertanyaan, berulang-ulang.
                </p>
                </div>
           </td>
          
       </tr>
   </table>
   <a class="btn ml-3 mr-2 mt-2" href="borrow.php" style="border-radius: 50px; background-color: rgb(221, 171, 105); color: black; width: 175px;"><h4>Borrow</h4></a>&emsp;
   <a class="btn mt-2" href="buy.html" style="border-radius: 50px; background-color: rgb(221, 171, 105); color: black; width: 175px;"><h4>Buy</h4></a>
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
                    <a class="btn btn-danger" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="foot text-center" style="background-color: rgb(220, 164, 91); color: black;">
        <p>Copyright &copy; Kelompok 6 - TI USU 21</p>
      </footer>
</body>
</html>