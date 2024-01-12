<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama Website</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
<style>@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');

body {

background-color: black;


}

h1{
  font-family: 'Righteous', sans-serif;
  color: rgba(255,255,255,0.98);
  text-transform: uppercase;
  font-size: 2.4rem;
}

p {
  color: #fff;
  font-family: 'Lato', sans-serif;
  text-align: center;
  font-size: 0.8rem;
  line-height: 150%;
  letter-spacing: 2px;
  text-transform: uppercase;
}

.button-wrapper{
  margin-top: 18px;
  display:flex;
}

.btn {
  border: none;
  padding: 12px 24px;
  border-radius: 24px;
  font-size: 12px;
  font-size: 0.8rem;  
  letter-spacing: 2px;  
  cursor: pointer;
}

.btn + .btn {
  margin-left: 10px;
}

.outline {
  background: transparent;
  color: rgba(0, 212, 255, 0.9);
  border: 1px solid rgba(0, 212, 255, 0.6);
  transition: all .3s ease;
  
}

.outline:hover{
  transform: scale(1.125);
  color: rgba(255, 255, 255, 0.9);
  border-color: rgba(255, 255, 255, 0.9);
  transition: all .3s ease;  
}

.fill {
  background: rgba(0, 212, 255, 0.9);
  color: rgba(255,255,255,0.95);
  filter: drop-shadow(0);
  font-weight: bold;
  transition: all .3s ease; 
}

.fill:hover{
  transform: scale(1.125);  
  border-color: rgba(255, 255, 255, 0.9);
  filter: drop-shadow(0 10px 5px rgba(0,0,0,0.125));
  transition: all .3s ease;    
}</style>

</head>
<body>   
<nav class="navbar navbar-expand-lg navbar-light  px-3  bg-transparent">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="min-width:180px">
        <img style="height:64px" src="<?= base_url('/assets/SA.jpeg') ?>" alt="new logo" />
      </a>
      <h2 class="text-white bold">Sejahtera Abadi</h2>
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        
        <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
          <li class="nav-item mx-2 btn btn-transparent">
            <a class="nav-link text-white " href="<?php echo base_url('index.php/Welcome/forminput'); ?>" >
              <span class="ms-1 align-middle">Tambah</cart>
            </a>
          </li>
          <li class="nav-item mx-1 btn bg-transparent">
            <a class="nav-link text-white" href="<?php echo base_url('Welcome/logout') ?>" >
              <span class="ms-1 align-texttop">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-5 d-flex">  
  <?php foreach ($data_sepatu as $row): ?>
    <div class="card m-4 p-3" style="width: 18rem; backdrop-filter: blur(16px) saturate(180%);
  -webkit-backdrop-filter: blur(16px) saturate(180%);
  background-color: rgba(17, 25, 40, 0.25);
  border-radius: 12px;
  border: 1px solid rgba(255, 255, 255, 0.125);">

<img src="<?php echo $row->gambar; ?>" class="card-img-top">
  
  <div class="card-body">
    <h5 class="card-title text-white text-center"><?php echo $row->nama ?></h5>
    <p class="card-text"><?php echo $row->Deskripsi ?></p>
    <p class="m-1">Rp.<?php echo $row->harga ?></p>
    <p class="m-1">Stok <?php echo $row->stok ?></p>
    <div class="button-wrapper justify-content-center"> 
  <button class="btn outline"><a class="text-decoration-none text-white" href="<?php echo base_url('index.php/Welcome/formedit/').$row->kode_produk ?>">Edit</a></button>
    <button class="btn fill"><a class="text-decoration-none text-white" href="<?php echo base_url('index.php/Welcome/AksiHapus/').$row->kode_produk ?>">Hapus</a></button>
  </div>
  </div>
  </div>
  <?php endforeach; ?>

</div>




    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
    ></script>
</body>
</html>
