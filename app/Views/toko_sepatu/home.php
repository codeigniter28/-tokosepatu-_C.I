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
        <a>YRO.SPORT  </a>  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('/'); ?>">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
            <li class="nav-item">
            <a class="nav-link" href="services.html">NIKE</a>
        </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">ADIDAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">PUMA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
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

      


     <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
          <img class="rounded-circle" src="<?= base_url('uploads/img/niki.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>NIKE</h2>
            <p>Material berkualitas Sepatu Nike terbuat dari material sintetis yang kuat,fleksibel,dan nyaman</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          <img class="rounded-circle" src="<?= base_url('uploads/img/bulet.webp'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>ADIDAS</h2>
            <p>Sepatu Adidas menggunakan teknologi canggih seperti Boost dan Lightstrike untuk memberikan bantalan ringan dan responsif. </p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          <img class="rounded-circle" src="<?= base_url('uploads/img/mael.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>PUMA</h2>
            <p>Tahan lama Sepatu Puma mampu digunakan untuk berbagai kegiatan olahraga maupun sehari-hari</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


      <div class="album py-5 bg-light">
        <h2><center></center></h2>  
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/81eRMJx+XqL._AC_SL1500_.jpg" alt="Card image cap" width="100px" height="255"> 
                <div class="card-body">
                  <h3>Air Jordan 1 Retro High</h3>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success">Buy</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?= base_url('uploads/img/asri.jpg'); ?>" alt="Card image cap" width="100px" height="255">
                <div class="card-body">
                  <h3>Air Jordan High</h3>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success">Buy</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?= base_url('uploads/img/fatan.jpg'); ?>" alt="Card image cap" width="100px" height="255"> 
                <div class="card-body">
                  <h3>Air Jordan Travis Scott</h3>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success">Buy</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?= base_url('uploads/img/casual.jpg'); ?>" alt="Card image cap" width="100px" height="255"> 
                <div class="card-body">
                  <h3>Adidas Gazelle Suede</h3>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success">Buy</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?= base_url('uploads/img/sumbu.jpg'); ?>" alt="Card image cap" width="100px" height="255">
                <div class="card-body">
                  <h3>Adidas Samba </h3>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success">Buy</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?= base_url('uploads/img/adidas.jpg'); ?>" alt="Card image cap" width="100px" height="255">
                <div class="card-body">
                  <h3>Adidas Campus</h3>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success">Buy</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?= base_url('uploads/img/puma.jpg'); ?>" alt="Card image cap" width="100px" height="255">
                <div class="card-body">
                  <h3>Puma Suede</h3>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success">Buy</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?= base_url('uploads/img/pumi.jpg'); ?>" alt="Card image cap" width="100px" height="255">
                <div class="card-body">
                  <h3>Puma Suede Otherside</h3>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success">Buy</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?= base_url('uploads/img/pimi.jpg'); ?>" alt="Card image cap" width="100px" height="255">
                <div class="card-body">
                  <h3>Puma Speedcat</h3>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted"></small>
                    <button type="button" class="btn btn-success">Buy</button>
                  </div>
                </div>
              </div>
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
     </main>


</body>
<!-- Load JavaScript Jquery -->
<script src="<?= base_url('assets/jquery aja/external/jquery.js'); ?>" type="text/javascript"></script>
<!-- poper -->
<script src="<?= base_url('bootstrap aja/assets/js/vendor/popper.min.js'); ?>"></script>
<!-- Load JavaScript bootstrap -->
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
</html>

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
</style>