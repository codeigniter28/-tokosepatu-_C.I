<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toko Sepatu</title>
  <!-- icon -->
  <link rel="shortcut icon" type="text/css" href="images/icon.webp">
  <!-- Description -->
  <meta name="description" content="Web RPL - Jurusan Programmer Web">
  <!-- keyword -->
  <meta name="keyword" content="Web RPL - Jurusan Programmer Web">
  <!-- Author -->
  <meta name="author" content="Web RPL">
  <!-- css bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
   <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="<?php echo base_url('uploads/img/logo.jpeg'); ?>" height="30px" width="30px" alt="">YRO.SPORT</a>  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('/'); ?>">BERANDA <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/pria'); ?>">PRIA</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/Wanita'); ?>">WANITA</a>      
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="contact.html">CONTACT</a>
              </li>
            </ul>
            
            <!-- Input Pencarian -->
            <form class="form-inline my-2 my-lg-0" onsubmit="return handleSearch(event)">
              <input class="form-control mr-sm-2" type="search" id="searchInput" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>

            <!-- Button Keranjang Cekout -->
            <div class="ml-auto">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkoutModal">
                KERANJANG CEKOUT
              </button>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="<?= base_url('uploads/img/model2.jpg'); ?>" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1></h1> 
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="<?= base_url('uploads/img/vektor.png'); ?>" alt="Second slide">
            <div class="container">
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?= base_url('uploads/img/model3.jpg'); ?>" alt="Third slide">
            <div class="container">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="album py-5 bg-light">
        <h2><center></center></h2>  
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?= base_url('uploads/img/abu.jpg'); ?>" alt="Card image cap" width="100px" height="255">
                <div class="card-body">
                  <h3>Nike Air Jordan</h3>
                  <p class="card-price">Harga: Rp 2.500.000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success" onclick="addToCart('Air Jordan 1 Retro High')">Buy</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?= base_url('uploads/img/gbr6.jpg'); ?>" alt="Card image cap" width="100px" height="255">
                <div class="card-body">
                  <h3>Nike Air Jordan 1 </h3>
                  <p class="card-price">Harga: Rp 2.000.000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success" onclick="addToCart('Air Jordan High')">Buy</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?= base_url('uploads/img/tn.webp'); ?>" alt="Card image cap" width="100px" height="255"> 
                <div class="card-body">
                  <h3>Nike TN AIRMAX</h3>
                  <p class="card-price">Harga: Rp 3.000.000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success" onclick="addToCart('Air Jordan Travis Scott')">Buy</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?= base_url('uploads/img/adidas1.webp'); ?>" alt="Card image cap" width="100px" height="255"> 
                <div class="card-body">
                  <h3>Adidas Run 60s</h3>
                  <p class="card-price">Harga: Rp 1.800.000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success" onclick="addToCart('Adidas Gazelle Suede')">Buy</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?= base_url('uploads/img/samba1.jpg'); ?>" alt="Card image cap" width="100px" height="255"> 
                <div class="card-body">
                  <h3>Adidas Samba Original</h3>
                  <p class="card-price">Harga: Rp 1.500.000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success" onclick="addToCart('Adidas Samba')">Buy</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?= base_url('uploads/img/superstar.jpg'); ?>" alt="Card image cap" width="100px" height="255">
                <div class="card-body">
                  <h3>Adidas SuperStar</h3>
                  <p class="card-price">Harga: Rp 1.700.000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success" onclick="addToCart('Adidas Campus')">Buy</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?= base_url('uploads/img/puma.jpg'); ?>" alt="Card image cap" width="100px" height="255">
                <div class="card-body">
                  <h3>Puma Suede</h3>
                  <p class="card-price">Harga: Rp 2.200.000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success" onclick="addToCart('Puma Suede')">Buy</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?= base_url('uploads/img/pumi.jpg'); ?>" alt="Card image cap" width="100px" height="255">
                <div class="card-body">
                  <h3>Puma Suede Otherside</h3>
                  <p class="card-price">Harga: Rp 2.300.000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success" onclick="addToCart('Puma Suede Otherside')">Buy</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?= base_url('uploads/img/pumaitem.webp'); ?>" alt="Card image cap" width="100px" height="255">
                <div class="card-body">
                  <h3>Puma Suede XLt</h3>
                  <p class="card-price">Harga: Rp 2.400.000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success" onclick="addToCart('Puma Speedcat')">Buy</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Checkout Modal -->
      <div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="checkoutModalLabel">Keranjang Cekout</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Daftar barang yang akan dibeli:</p>
              <ul id="cartItems">
                <!-- Items will be dynamically added here -->
              </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary">Proses Pembayaran</button>
            </div>
          </div>
        </div>
      </div>

    </main>

    <!-- FOOTER -->
    <footer class="footer footer-expand-md footer-dark fixed-bottom bg-dark">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2025 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

    <!-- Load JavaScript Jquery -->
    <script src="<?= base_url('assets/jquery aja/external/jquery.js'); ?>" type="text/javascript"></script>
    <!-- poper -->
    <script src="<?= base_url('bootstrap aja/assets/js/vendor/popper.min.js'); ?>"></script>
    <!-- Load JavaScript bootstrap -->
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

    <script>
      // Sample cart items array
      let cartItems = [];

      // Function to add item to cart
      function addToCart(itemName) {
        cartItems.push(itemName);
        updateCart();
        $('#checkoutModal').modal('show'); // Show the checkout modal after adding an item
      }

      // Function to update cart display
      function updateCart() {
        const cartItemsList = document.getElementById('cartItems');
        cartItemsList.innerHTML = ''; // Clear existing items
        cartItems.forEach(item => {
          const li = document.createElement('li');
          li.textContent = item;
          cartItemsList.appendChild(li);
        });
      }

      // Function to handle search
      function handleSearch(event) {
        event.preventDefault(); // Prevent form submission
        const query = document.getElementById('searchInput').value.toLowerCase();

        // Redirect based on search query
        if (query === 'nike') {
          window.location.href = 'services.html'; // Ganti dengan URL halaman Nike
        } else if (query === 'adidas') {
          window.location.href = 'services.html'; // Ganti dengan URL halaman Adidas
        } else if (query === 'puma') {
          window.location.href = 'profile.html'; // Ganti dengan URL halaman Puma
        } else {
          alert('Merek tidak ditemukan!'); // Pesan jika merek tidak ditemukan
        }
      }
    </script>

    <style>
      /* STYLES CSS
      -------------------------------------------------- */
      /* Padding below the footer and lighter body text */
      body {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #5a5a5a;
      }

      /* ANIMASI WARNA UNTUK HEADER */
      @keyframes rainbow {
        100% { color: black; }
      }

      /* TAG h2 */
      h2 {
        font-size: 48px;
        font-weight: bold;
        color: #4d4d4d;
        text-shadow: 2px 2px gray;
        animation: rainbow 1s infinite;
      }

      iframe {
        width: 100%;
        height: auto;
        min-height: 400px;
      }

      /* CUSTOMIZE THE CAROUSEL
      -------------------------------------------------- */
      /* Carousel base class */
      .carousel {
        margin-bottom: 4rem;
      }

      /* Since positioning the image, we need to help out the caption */
      .carousel-caption {
        bottom: 3rem;
        z-index: 10;
      }

      /* Declare heights because of positioning of img element */
      .carousel-item {
        height: auto; /* Change fixed height to auto */
        min-height: 32rem;
        background-color: #777;
      }

      .carousel-item > img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 100%; /* Make image height fill the container */
      }

      /* Navbar Styles */
      .navbar-dark, .navbar {
        min-height: 100px;
        font-weight: bold;
        font-size: 20px;
      }

      .navbar ul li a, a.navlink {
        color: #fff !important;
      }

      .navbar ul li a:hover {
        color: red !important;
      }

      .dropdown-menu {
        background-color: #000 !important;
      }

      .dropdown-menu a:hover {
        background-color: #999 !important;
      }

      .footer-dark, .navbar {
        font-weight: bold;
        font-size: 18px;
        color: white;
        text-align: left;
        padding-bottom: 10px;
        padding: 9px;
        align-items: center;
        height: auto; /* Allow footer height to be determined by content */
      }

      /* MARKETING CONTENT
      -------------------------------------------------- */
      /* Center align the text within the three columns below the carousel */
      .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
      }

      .marketing h2 {
        font-weight: 400;
      }

      .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
      }

      /* Featurettes
      ------------------------- */
      .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
      }

      /* Thin out the marketing headings */
      .featurette-heading {
        font-weight: 300;
        line-height: 1;
        letter-spacing: -.05rem;
      }

      /* RESPONSIVE CSS
      -------------------------------------------------- */
      @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
          margin-bottom: 1.25rem;
          font-size: 1.25rem;
          line-height: 1.4;
        }

        .featurette-heading {
          font-size: 50px;
        }
      }

      @media (min-width: 62em) {
        .featurette-heading {
          margin-top: 7rem;
        }
      }

      /* Custom styles for the button alignment */
      .ml-auto {
        margin-left: auto; /* Menggeser elemen ke kanan */
      }
    </style>
</body>
</html>
