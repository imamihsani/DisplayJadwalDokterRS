<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="aset/css/bootstrap.min.css" />
    <title>Display Pendaftaran | RSU Amanah Sumpiuh</title>
    <!--DI BAWAH INI HUKUMNYA WAJIB DICANTUMKAN UNTUK MEMANGGIL JQUERYNYA-->
      <script src="aset/jquery/dist/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <!--DI ATAS INI HUKUMNYA WAJIB DICANTUMKAN UNTUK MEMANGGIL JQUERYNYA-->
  </head>
  <body>
    <!--DI BAWAH INI ADALAH SKRIP CSS UNTUK MENGATUR JENIS FONT-->
      <style>
        @import url("https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap"); 
        body {
          font-family: "Comfortaa", cursive;
          width: 1366px;
          height: 760px;
        }
      </style>
    <!--DI ATAS ADALAH SKRIP CSS UNTUK MENGATUR JENIS FONT-->

    <!--SKRIP DI BAWAH INI UNTUK MEMBUAT AUTOREFRESH PADA DIV TERTENTU SAJA, BUKAN SATU HALAMAN PENUH DI REFRESH OTOMATIS-->
      <script>
      $(document).ready(function(){
          setInterval(function(){
            $('#autorefreshloket1').load(window.location.href + " #autorefreshloket1");
          } , 1000);
      });
      $(document).ready(function(){
          setInterval(function(){
            $('#autorefreshloket2').load(window.location.href + " #autorefreshloket2");
          } , 1000);
      });
      </script>
    <!--DI ATAS ADALAH SKRIP UNTUK MEMBUAT AUTOREFRESH PADA DIV TERTENTU SAJA, BUKAN SATU HALAMAN PENUH DI REFRESH OTOMATIS-->

    <div class="container-fluid">
      <div class="row mt-2" style="height: 200px">
        <div class="col-9">
          <div class="card">
            <div
              id="carouselExampleFade"
              class="carousel slide carousel-fade"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="aset/gambar/carousl1.png"
                    class="d-block w-100"
                    alt="..."
                    style="height: 210px"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="aset/gambar/BG TV IGD1.jpg"
                    class="d-block w-100"
                    alt="..."
                    style="height: 210px"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="aset/gambar/IGD22.jpg"
                    class="d-block w-100"
                    alt="..."
                    style="height: 210px"
                  />
                </div>
				<div class="carousel-item">
                  <img
                    src="aset/gambar/hotlinenomor.jpg"
                    class="d-block w-100"
                    alt="..."
                    style="height: 210px"
                  />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleFade"
                data-bs-slide="prev"
                style="visibility: hidden"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleFade"
                data-bs-slide="next"
                style="visibility: hidden"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-3" style="height: 200px">
          <div class="card">
            <!--DI BAWAH ADALAH OPSI JIKA PERLU DITAMPILKAN QRCODE KEPUASAN PASIEN-->
              <!-- <p style="font-size: 10px" class="text-center">
                Scan/masuk ke link berikut untuk survey kepuasan anda atas
                pelayanan kami
              </p>
              <center>
                <img
                  src="aset/gambar/barcode.gif"
                  style="width: 120px; height: 120px"
                  class="mb-1"
                />
              </center> -->
            <!--DI ATAS ADALAH OPSI JIKA PERLU DITAMPILKAN QRCODE KEPUASAN PASIEN-->
            <div class="row">
              <h4 class="text-center mt-1">ANTRIAN PASIEN</h4>
                  <div class="col-6">
                    <div class="card" style="background-color:mediumseagreen" id="autorefreshloket1">
                     <?php
                      include "connection.php";
                      $tampilantrian = mysqli_query($connection, "SELECT POS, CARA_BAYAR, NOMOR FROM panggil_antrian WHERE STATUS = 1 AND LOKET = 1 ORDER BY TANGGAL DESC LIMIT 1");
                      while ($antrian = mysqli_fetch_array($tampilantrian)) {
                      ?>
                      <h1 class="text-center"><?php echo $antrian['POS'];?><?php echo $antrian['CARA_BAYAR'];?>
                      <hr>
                      <?php echo $antrian['NOMOR'];?></h1>
                      <?php } ?>
                      <h5 class="text-center text-dark">
                        <b>KE LOKET 1</b>
                      </h5>
                    </div>
              </div>
              <div class="col-6">
                <div class="card bg-info" id="autorefreshloket2">
                  <?php
                  include "connection.php";
                  $tampilantrian = mysqli_query($connection, "SELECT POS, CARA_BAYAR, NOMOR FROM panggil_antrian WHERE STATUS = 1 AND LOKET = 2 ORDER BY TANGGAL DESC LIMIT 1");
                  while ($antrian = mysqli_fetch_array($tampilantrian)) {
                  ?>
                  <h1 class="text-center"><?php echo $antrian['POS'];?><?php echo $antrian['CARA_BAYAR'];?>
                  <hr>
                  <?php echo $antrian['NOMOR'];?></h1>
                  <?php } ?>
                  <b><h5 class="text-center text-dark">
                    KE LOKET 2
                  </h5></b>
                </div>
                  <!--OPSI JIKA PERLU DITAMPILKAN LINK KEPUASAN PASIEN-->
                    <!-- <p class="text-center text-dark">
                      bit.ly/KuesionerSKM_RSUAmanah
                    </p> -->
                  <!--DI ATAS ADALAH OPSI JIKA PERLU DITAMPILKAN LINK KEPUASAN PASIEN-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-3">
          <div class="card">
            <div class="card-body" style="background-color: mediumseagreen">
              <p class="text-white">
                Cara daftar secara online dapat melalui 3 cara:
              </p>
              <div class="card mb-1">
                1. Melalui aplikasi Mobile JKN dari Playstore/Appstore anda
                <img
                  src="aset/gambar/store.png"
                  style="width: 120px; height: 60px"
                />
              </div>
              <div class="card mb-1">
                2. Melalui aplikasi Regonline RSU Amanah dari Playstore/Appstore
                anda
                <img
                  src="aset/gambar/store.png"
                  style="width: 120px; height: 60px"
                />
              </div>
              <div class="card">
                3. Melalui website Regonline RSU Amanah pada link berikut<br />
                <a
                  href="https://regonline.rsuamanah.com/"
                  style="text-decoration: none"
                  target="_blank"
                  >regonline.rsuamanah.com</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <video
              video
              playsinline
              autoplay
              muted
              loop
              width="100%"
              height="400px"
              src="aset/gambar/video.mp4"
              controls
            >
              <p>Maaf..</p>
            </video>
          </div>
        </div>
        <div class="col-3">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="aset/gambar/a.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/b.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/c.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/d.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/e.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/f.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/g.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/h.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/i.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/j.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/k.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/l.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/m.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/n.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/o.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/p.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/q.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <!-- <div class="carousel-item">
                <img src="aset/gambar/r.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div> -->
              <div class="carousel-item">
                <img src="aset/gambar/s.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/t.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/u.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/v.jpeg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/w.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="aset/gambar/x.jpeg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
			  <div class="carousel-item">
                <img src="aset/gambar/y.jpg" style="height:420px; width:350px" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid mt-1">
        <div class="row">
          <div class="card" style="background-color: mediumseagreen">
            <marquee class="mt-1"
              ><h1 class="text-white">
                <b
                  >SELAMAT DATANG DI RSU AMANAH SUMPIUH | Jl. Kebokura No. 37
                  Sumpiuh 53195</b
                >
              </h1></marquee
            >
          </div>
          <div class="card" style="background-color: #63c5da">
            <marquee class="mt-1">
              <p class="text-white" style="font-size:x-large;">MASUK LINK BERIKUT UNTUK MEMBERI NILAI KEPUASAN ANDA TERHADAP PELAYANAN KAMI: <u>bit.ly/KuesionerSKM_RSUAmanah</u></p>
            </marquee>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="aset/js/bootstrap.min.js"></script>
</html>