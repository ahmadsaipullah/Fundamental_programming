<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php
        @include("konek.php");
        $sepatu = mysqli_query($sqli, "SELECT id, nama, gambar, harga, qty FROM stock ");
    ?>


<!-- awal navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand text-white" href="#">  <img src="../tugas/img/logo.png" class="mx-4 mb-2"width="50px" alt="logo"> ADIDAS STORE</a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation ">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">About</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- akhir navbar -->
<!-- awal header -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="../tugas/img/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="../tugas/img/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../tugas/img/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- akhir header -->
<!-- awal content -->
<div class="container mt-5">
    <h3 class="text-center mb-5">KATALOG</h3>
</div>
<div class="container-fluid">
  <a href="add.php" class="btn btn-primary mb-3">Add New Item</a>
</div>

 

<div class="container-fluid">
<div class="row justify-content-around">

<?php while($patu = mysqli_fetch_array($sepatu)) {
  
  
  ?>

  <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-4">
    <div class="card">
      <img src="img/<?php echo htmlspecialchars($patu['gambar'])?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center"><?php echo htmlspecialchars($patu['nama'])?></h5>
        <p class="card-text  text-center">Rp. <?php echo htmlspecialchars($patu['harga'])?></p>
        <p class="card-text  text-center">Stock <?php echo htmlspecialchars($patu['qty'])?></p>
        <div class=" text-center"> 
        <a href="edit.php?n=<?php echo $patu['id'] ?>" class='btn btn-warning'>Edit</a>
        <a href="delete.php?d=<?php echo $patu['id']?>"onclick='return confirm(`Yakin Hapus Item?`)' class=' btn btn-danger'>Delete</a> 
        </div> 
      </div>
    </div>
  </div>

  <?php } ?>

<footer class="container-fluid bg-dark" style="margin-top: 300px;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">
    <div class="row">
      <!-- Grid column -->
      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4 text-white">About</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!" class="text-white text-decoration-none">PROJECTS</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!" class="text-white text-decoration-none">ABOUT US</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!" class="text-white text-decoration-none">BLOG</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!" class="text-white text-decoration-none">AWARDS</a>
            </p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4 text-white">Address</h5>

        <ul class="list-unstyled text-white">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> info@example.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          </li>
          <li>
            <p>
              <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->

  <!-- Social media-->
      <div class="col-md-4 col-lg-2 text-center mx-auto my-4">
         <ul class="text-center">
      
          <h5 class="font-weight-bold text-uppercase mb-4 text-white d-block">Follow Us</h5>
        <li><a type="button" class="btn-floating btn-dribbble text-white text-decoration-none ">
        <i class="fa-brands fa-instagram"> </i> instagram
        </a>
        </li>
        <li><a type="button" class="btn-floating btn-fb text-white text-decoration-none pt-4 ">
          <i class="fab fa-facebook-f"> </i> Facebook
        </a>
        </li>  
        <li><a type="button" class="btn-floating btn-gplus text-white text-decoration-none pt-4">
          <i class="fab fa-google-plus-g"> </i> Google
         </a>
        </li> 
          <li><a type="button" class="btn-floating btn-tw text-white text-decoration-none pt-4">
          <i class="fab fa-twitter"> </i> Twitter
        </a>
    </li>
     </ul>
        </div>
    </div>
</div>
 <!-- sosial media-->
 
  <!-- Copyright -->
  <div class="footer-copyright text-center py-4 text-white"><b> © 2022 Copyright</b>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   


</script>
</body>
</html>