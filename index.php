<!doctype html>
<html lang="en">
<?php include 'partials/_dbconnect.php'; ?>
<?php require 'partials/_nav.php' ?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>Home</title>
  <link rel="icon" href="img/logo.jpg" type="image/x-icon">
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .jumbotron {
      background-image: url("https://hips.hearstapps.com/hmg-prod/images/classic-cheese-pizza-recipe-2-64429a0cb408b.jpg?crop=0.8888888888888888xw:1xh;center,top&resize=1200:*");
    }

    .addcard {
      display: flex;
      border: 1px solid #ccc;
      border-radius: 8px;
      overflow: hidden;
      width: 100%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .addcard img {
      width: 30%;
      height: auto;
    }

    .addcard-content {
      width: 70%;
      padding: 16px;
    }

    .addcard-title {
      font-size: 1.5em;
      margin-bottom: 8px;
    }

    .addcard-text {
      font-size: 1em;
      color: #555;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    .slide-container {
      /* max-width: 1120px; */
      width: 100%;
      padding: 20px 0;
    }

    .slide-content {
      margin: 0 40px;
      overflow: hidden;
      border-radius: 25px;
    }

    .card {
      border-radius: 25px;
      background-color: #FFF;
    }

    .image-content,
    .card-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 10px 14px;
    }

    .image-content {
      position: relative;
      row-gap: 5px;
      padding: 25px 0;
    }



    .card-image {
      position: relative;
      height: 200px;
      width: 200px;
      /* border-radius: 50%; */
      background: #FFF;
      padding: 3px;
    }

    .card-image .card-img {
      height: 100%;
      width: 100%;
      object-fit: cover;
      /* border-radius: 50%; */
      border: 4px solid white;
    }

    .name {
      font-size: 18px;
      font-weight: 500;
      color: #333;
    }

    .description {
      font-size: 14px;
      color: #707070;
      text-align: center;
    }

    .button {
      border: none;
      font-size: 16px;
      color: #FFF;
      padding: 8px 16px;
      background-color: #4070F4;
      border-radius: 6px;
      margin: 14px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .button:hover {
      background: #265DF2;
    }

    .swiper-navBtn {
      color: #6E93f7;
      transition: color 0.3s ease;
    }

    .swiper-navBtn:hover {
      color: #4070F4;
    }

    .swiper-navBtn::before,
    .swiper-navBtn::after {
      font-size: 35px;
    }

    .swiper-button-next {
      right: 0;
    }

    .swiper-button-prev {
      left: 0;
    }

    .swiper-pagination-bullet {
      background-color: #6E93f7;
      opacity: 1;
    }

    .swiper-pagination-bullet-active {
      background-color: #4070F4;
    }

    @media screen and (max-width: 768px) {
      .slide-content {
        margin: 0 10px;
      }

      .swiper-navBtn {
        display: none;
      }
    }
  </style>

</head>

<body>



  <!-- ======= Hero Section ======= -->

  <section id="home">
    <div class="home-container">
      <div id="homeCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/slide/slide-1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Pizzalicious</span></h2>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/slide-2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown mb-0">Our Mission</h2>
                <p class="animate__animated animate__fadeInUp">To be number one</p>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown mb-0"></h2>
                <p> <a href="" target="_blank"></a></p>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>

  <section class="pt-4 pb-4">
    <!-- <div class="container">
      <div class="row"> -->
    <div class="col-6">
      <h3 class="mb-3">Recommended</h3>
    </div>
    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          <?php
          $sql = "SELECT pizza.pizzaId, pizza.pizzaName, pizza.pizzaPrice,pizza.pizzaDesc, COUNT(*) as count FROM orderitems INNER JOIN pizza ON orderitems.pizzaId=pizza.pizzaId GROUP BY pizza.pizzaId ORDER by count ASC LIMIT 8;";
          $result = mysqli_query($conn, $sql);
          $noResult = true;
          while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $pizzaId = $row['pizzaId'];
            $pizzaName = $row['pizzaName'];
            $pizzaPrice = $row['pizzaPrice'];
            $pizzaDesc = $row['pizzaDesc'];
            echo '
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="img/pizza-' . $pizzaId . '.jpg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">' . substr($pizzaName, 0, 15) . '..
            </h2>
            <p class="description">Rs. ' . $pizzaPrice . '/-</p>
            <a href="viewPizza.php?pizzaid=' . $pizzaId . '" class="btn btn-primary">View</a>
          </div>
        </div>';
          } ?>
        </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <!-- <div class="swiper-pagination"></div> -->
    </div>
    </div>
    <!-- </div>
    </div> -->
  </section>

  <section class="container-fluid">
    <div class="jumbotron text-white">
      <div class="container">
        <h1 class="display-4">Our Specials</h1>
        <p class="lead">We have some special offers for you</p>
        <hr class="my-4">
        <p>Check out our special offers</p>
        <a class="btn btn-primary btn-lg" href="specials.php" role="button">View Specials</a>
      </div>
    </div>
  </section>
  <section class="pt-1 pb-1">
    <div class="text-center image-size-small position-relative">
      <a href="#"><img src="img/menu.png" class="rounded-circle" style="width:100px; height:100px"></a>
    </div>
    <!-- <div class="container">
      <div class="row"> -->
    <!-- <div class="col-6">
          <h3 class="mb-3">Recommended</h3>
        </div> -->
    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          <?php
          $sql = "SELECT * FROM `categories`";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['categorieId'];
            $cat = $row['categorieName'];
            $desc = $row['categorieDesc'];
            echo '
              <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="img/card-' . $id . '.jpg" alt="" class="card-img">
                  </div>
                </div>

                <div class="card-content">
                  <h2 class="name">' . $cat . '</h2>
                  <p class="description">' . substr($desc, 0, 40)  . '</p>
                  <a href="viewPizzaList.php?catid=' . $id . '" class="btn btn-primary">View All</a>
                </div>
              </div>';
          } ?>
        </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <!-- <div class="swiper-pagination"></div> -->
    </div>
    </div>
    <!-- </div>
    </div> -->
  </section>
  <section class="container-fluid">
    <!-- <div class="container"> -->
    <div class="addcard">
      <img src="https://hips.hearstapps.com/hmg-prod/images/classic-cheese-pizza-recipe-2-64429a0cb408b.jpg?crop=0.8888888888888888xw:1xh;center,top&resize=1200:*" alt="Image Description">
      <div class="addcard-content">
        <div class="addcard-title">Card Title</div>
        <div class="addcard-text">This is some text within a card. You can add more content here as needed.</div>

      </div>
    </div>
  </section>


  <!-- <div class="container my-3 mb-5">
    <div class="text-center image-size-small position-relative">
      <a href="#"><img src="img/menu.png" class="rounded-circle" style="width:100px; height:100px"></a>
    </div>
    <div class="row">

      <?php
      $sql = "SELECT * FROM `categories`";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['categorieId'];
        $cat = $row['categorieName'];
        $desc = $row['categorieDesc'];
        echo '<div class="col-xs-4 col-sm-4 col-md-4 mb-4">
                  <div class="card" style="width: 22rem;">
                    <img src="img/card-' . $id . '.jpg" class="card-img-top" alt="image for this category" width="249px" height="270px">
                    <div class="card-body">
                      <h5 class="card-title"><a href="viewPizzaList.php?catid=' . $id . '">' . $cat . '</a></h5>
                      <p class="card-text">' . substr($desc, 0, 30) . '... </p>
                      <a href="viewPizzaList.php?catid=' . $id . '" class="btn btn-primary">View All</a>
                    </div>
                  </div>
                </div>';
      }
      ?>
    </div>
  </div> -->


  <section class="pt-4 pb-4">
    <!-- <div class="container">
      <div class="row"> -->
    <div class="col-6">
      <h3 class="mb-3">Veg Pizza</h3>
    </div>
    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          <?php
          $sql = "SELECT * FROM `pizza` WHERE pizzaCategorieId = '1'";
          $result = mysqli_query($conn, $sql);
          $noResult = true;
          while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $pizzaId = $row['pizzaId'];
            $pizzaName = $row['pizzaName'];
            $pizzaPrice = $row['pizzaPrice'];
            $pizzaDesc = $row['pizzaDesc'];
            echo '
            <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="img/pizza-' . $pizzaId . '.jpg" alt="" class="card-img">
              </div>
            </div>
  
            <div class="card-content">
              <h2 class="name">' . substr($pizzaName, 0, 15) . '..
              </h2>
              <p class="description">Rs. ' . $pizzaPrice . '/-</p>
              <a href="viewPizza.php?pizzaid=' . $pizzaId . '" class="btn btn-primary">View</a>
            </div>
          </div>

       ';
          } ?>
        </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <!-- <div class="swiper-pagination"></div> -->
    </div>
    </div>
    <!-- </div>
    </div> -->
  </section>
  <section class="container-fluid">
    <!-- <div class="container"> -->
    <div class="addcard">
      <div class="addcard-content">
        <div class="addcard-title">Card Title</div>
        <div class="addcard-text">This is some text within a card. You can add more content here as needed.</div>

      </div>
      <img src="https://hips.hearstapps.com/hmg-prod/images/classic-cheese-pizza-recipe-2-64429a0cb408b.jpg?crop=0.8888888888888888xw:1xh;center,top&resize=1200:*" alt="Image Description">

    </div>
  </section>
  <section class="pt-4 pb-4">
    <!-- <div class="container">
      <div class="row"> -->
    <div class="col-6">
      <h3 class="mb-3">Non-Veg Pizza</h3>
    </div>
    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          <?php
          $sql = "SELECT * FROM `pizza` WHERE pizzaCategorieId = '2'";
          $result = mysqli_query($conn, $sql);
          $noResult = true;
          while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $pizzaId = $row['pizzaId'];
            $pizzaName = $row['pizzaName'];
            $pizzaPrice = $row['pizzaPrice'];
            $pizzaDesc = $row['pizzaDesc'];
            echo '
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="img/pizza-' . $pizzaId . '.jpg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">' . substr($pizzaName, 0, 15) . '..
            </h2>
            <p class="description">Rs. ' . $pizzaPrice . '/-</p>
            <a href="viewPizza.php?pizzaid=' . $pizzaId . '" class="btn btn-primary">View</a>
          </div>
        </div>';
          } ?>
        </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <!-- <div class="swiper-pagination"></div> -->
    </div>
    </div>
    <!-- </div>
    </div> -->
  </section>
  <section class="container-fluid">
    <!-- <div class="container"> -->
    <div class="addcard">
      <img src="https://hips.hearstapps.com/hmg-prod/images/classic-cheese-pizza-recipe-2-64429a0cb408b.jpg?crop=0.8888888888888888xw:1xh;center,top&resize=1200:*" alt="Image Description">

      <div class="addcard-content">
        <div class="addcard-title">Card Title</div>
        <div class="addcard-text">This is some text within a card. You can add more content here as needed.</div>

      </div>

    </div>
  </section>
  <section class="pt-4 pb-4">

    <div class="col-6">
      <h3 class="mb-3">Sides</h3>
    </div>
    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          <?php
          $sql = "SELECT * FROM `pizza` WHERE pizzaCategorieId = '4'";
          $result = mysqli_query($conn, $sql);
          $noResult = true;
          while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $pizzaId = $row['pizzaId'];
            $pizzaName = $row['pizzaName'];
            $pizzaPrice = $row['pizzaPrice'];
            $pizzaDesc = $row['pizzaDesc'];
            echo '
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="img/pizza-' . $pizzaId . '.jpg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">' . substr($pizzaName, 0, 15) . '..
            </h2>
            <p class="description">Rs. ' . $pizzaPrice . '/-</p>
            <a href="viewPizza.php?pizzaid=' . $pizzaId . '" class="btn btn-primary">View</a>
          </div>
        </div>';
          } ?>
        </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <!-- <div class="swiper-pagination"></div> -->
    </div>
    </div>


  </section>

  <?php require 'partials/_footer.php' ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>

</body>
<script src="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".slide-content", {
    slidesPerView: 4,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    autoplay: {
      delay: 3000, // Delay between slides in milliseconds
      disableOnInteraction: false, // Continue auto-play after user interactions
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },


    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      950: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },

  });
</script>

</html>