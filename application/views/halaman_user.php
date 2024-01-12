<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />

    <title>Halaman User</title>
  </head>
  <body style="background-image: #f8f6f4">
    <nav
      class="navbar navbar-expand-lg navbar-light"
      style="background-color: #27374d"
    >
      <img
        src="<?= base_url('/assets/SAlogo.png') ?>"
        alt=""
        class="img-fluid align-items-center"
        style="width: 10rem; height: 5rem"
      />
      <div class="container">
        <h1 class="display-4 fw-bold" style="color: #dde6ed">
          Sejahtera Abadi
        </h1>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"></li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button type="button" class="btn btn-outline-light">Cari</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container-fluid" style="background-color: #27374d">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 my-3 p-3">
            <h1
              class="text-start display-3 fw-bold"
              style="font-family: Cambria; color: #dde6ed"
            >
              Selamat Datang
            </h1>
            <p class="text-start lead font-monospace" style="color: #9db2bf">
              Platform thrifting sepatu yang mewadahi para penjual dan pembeli
              untuk berkomunikasi dan melakukan aktifitas jual beli. Diskusikan
              produk yang kamu inginkan dan temukan dealnya ! Yuk miliki sepatu
              impianmu tanpa menguras kantongmu !
            </p>
            <button type="button" class="btn btn-outline-light">
              Ayo Mulai
            </button>
          </div>
          <div class="col-5 offset-3">
            <img src="<?= base_url('/assets/Sepatunike.png') ?>" alt="" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid my-5">
      <div class="container py-4">
        <div class="row border border-dark">
          <div class="col-lg-12">
            <h1 class="text-center display-5" style="font-family: Cambria">
              Koleksi Kami
            </h1>
            <p class="text-center offset-2" style="width: 50rem">
              Koleksi sepatu Anda menonjol dengan desain yang stylish dan
              beragam gaya. Mungkin terdapat berbagai macam model, mulai dari
              sepatu casual hingga sepatu formal, yang memenuhi kebutuhan
              berbagai kesempatan.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid my-5 flex-row">
      <div class="container flex-row">
        <!--Bagian Taro php -->
        <?php foreach ($data_sepatu as $row): ?>
        <div class="row justify-content-start flex-row">
          <div class="card me-3" style="width: 18rem">
            <img
              class="card-img-top"
              src="<?php echo $row->gambar; ?>"
              alt="Card image cap"
              style="max-width: 100%; max-height: 50%"
            />
            <div class="card-body">
              <h5 class="card-title"><?php echo $row->nama ?></h5>
              <p class="card-text"><?php echo $row->Deskripsi ?></p>
              <p class="badge bg-light text-dark">Stok <?php echo $row->stok ?></p>
              <p class="badge bg-light text-dark">Rp.<?php echo $row->harga ?></p>
              <a href="#" class="btn btn-primary">Belanja</a>
              </p>
            </div>
          </div>
          <?php endforeach; ?>
          <!--Bagian Taro php -->
          
          <!--card Dibawah ini buat tes jarak antar card-->
        </div>
      </div>
    </div>

    <div class="container-fluid" style="background-color: #27374d">
      <div class="container" style="color: #dde6ed">
        <div class="row">
          <div class="col-4 my-5">
            <img
              src="<?= base_url('/assets/kakiorang.jpg') ?>"
              alt=""
              class="img-fluid border border-light"
            />
            <h2 class="fw-bold text-center">Adidas Continental 80</h2>
            <p class="text-center mt-4">
              penawaran yang tak dapat dilewatkan untuk para penggemar gaya dan
              kenyamanan. Adidas Continental 80, sepatu yang dikenal akan
              desainnya yang modern dan performa tinggi, kini dapat Anda miliki
              dengan potongan harga yang signifikan.<br />
              <a href="" class="text-decoration-none">Baca lebih banyak....</a>
            </p>
          </div>
          <div class="col-4 my-5">
            <img
              src="<?= base_url('/assets/asicslari.jpg') ?>"
              alt=""
              class="img-fluid border border-light"
              style="height: 15rem"
            />
            <h2 class="fw-bold text-center">ASICS GT-2000</h2>
            <p class="mt-4 text-center">
              sepatu lari yang menawarkan kombinasi luar biasa antara
              kenyamanan, dukungan, dan performa yang dapat diandalkan. Didesain
              khusus untuk para pelari yang mencari sepatu dengan teknologi
              canggih untuk menangani tantangan berbagai jenis lintasan.<br />
              <a href="" class="text-decoration-none">Baca lebih banyak....</a>
            </p>
          </div>
          <div class="col-4 my-5">
            <img
              src="<?= base_url('/assets/nikeb.jpg') ?>"
              alt=""
              class="img-fluid border border-light"
              style="height: 15rem; width: 50rem"
            />
            <h2 class="fw-bold text-center">Nike Air Max</h2>
            <p class="mt-4 text-center">
              Desain yang trendi dan modern menjadikan Nike Air Max sebagai
              pilihan fashion yang cocok untuk setiap aktivitas sehari-hari.
              Material berkualitas tinggi dan konstruksi yang teliti menjamin
              daya tahan yang luar biasa, menjadikannya pilihan sempurna untuk
              gaya hidup aktif dan dinamis<br />
              <a href="" class="text-decoration-none">Baca lebih banyak....</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <hr />
    <footer>
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col mt-3">
              <h4>Perusahaan</h4>
              <p>Tentang Kami</p>
              <p>Toko Kami</p>
              <p>Terbaru</p>
              <p>Pengataran</p>
            </div>
            <div class="col mt-3">
              <h4>Tolong</h4>
              <p>Kontak Kami</p>
              <p>FAQ</p>
              <p>Help</p>
              <p>Terms</p>
            </div>
            <div class="col mt-3">
              <h4>Social Media</h4>
              <p>Facebook</p>
              <p>Twitter</p>
              <p>Instagrm</p>
            </div>
            <div class="col mt-3">
              <h4>Kontak Kami</h4>
              <textarea name="" id="" cols="40" rows="7"></textarea>
              <button type="button" class="btn btn-outline-success">
                Submit
              </button>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>