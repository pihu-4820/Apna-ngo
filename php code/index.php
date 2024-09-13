<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


  <style>
    body {
      background-color: rgb(246, 243, 243);

    }

    .zoom {
      overflow: hidden;
    }

    .zoom img {
      cursor: pointer;
      transition: transform 0.8s;

    }

    .zoom:hover img {
      transform: scale(1.1);
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
          <img src="logo.avif" alt="..." class="rounded-0" height="100" width="100">
          <a class="navbar-brand" href="index.php">Home</a>
          <a class="navbar-brand" href="about.php">About us</a>
          <a class="navbar-brand" href="event.php">Event</a>
          <a class="navbar-brand" href="service.php">Service</a>
          <a class="navbar-brand" href="goal.php">Goal</a>
          <a class="navbar-brand" href="program.php">Program</a>
          <a class="navbar-brand" href="donation.php">Donation</a>
          <a class="navbar-brand" href="contact.php">Contact Us</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="slide1.avif" alt="First slide" height="500">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="slideyoo.avif" alt="Second slide" height="500">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="slide1.jpg" alt="Third slide" height="500">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <br> <br> <br>
    <div class="row mb-3">
      <div class="col-lg-4">
        <div class="card text-center zoom">
          <img class="card-img-top" src="slide7.jpg" alt="Card image cap" height="330" width="330">
          <div class="card-body">
            <h5 class="card-title">HELP US TO BUILD A SECURE LIFE
              OF A POOR CHILDREN.</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-danger">EDUCATION</a>
            <a href="#" class="btn btn-success">DONATE NOW</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card text-center zoom">
          <img class="card-img-top" src="slide6.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">
              <h5>FOR ITS IN GIVING THAT<br> WE RECEIVE.</h5>

              <p class="card-text"></p>
              <a href="#" class="btn btn-danger">SANITATION</a>
              <a href="#" class="btn btn-success">DONATE NOW</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card text-center zoom">
          <img class="card-img-top" src="slide5.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">
              <h5>WE MAKE A LIVING BY WHAT <br> WE GET.</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-danger">MALNUTRITION</a>
              <a href="#" class="btn btn-success">DONATE NOW</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-sm-3 text-center">
        <img src="c1.jpg" class="rounded" height="200" width="200"><br>
        <h5>HAPPY CLIENTS</h5>
        <span>237</span>
      </div>

      <div class="col-sm-3 text-center">
        <img src="c5.jpg" class="rounded" height="200" width="200"><br>
        <h5>HAPPY CLIENTS</h5>
        <span>290</span>
      </div>

      <div class="col-sm-3 text-center">
        <img src="c6.jpg" class="rounded" height="200" width="200"><br>
        <h5>HAPPY CLIENTS</h5>
        <span>467</span>
      </div>

      <div class="col-sm-3 text-center">
        <img src="c3.jpg" class="rounded" height="200" width="200"><br>
        <h5>HAPPY CLIENTS</h5>
        <span>467</span>
      </div> <br>
    </div>
    <div class="row">
      <div class="col-sm-6 my-auto">
        <marquee behavior="alternate" height="300px" width="300px" direction="up" onmouseover="this.stop()"
          onmouseleave="this.start()" style="color:black" scroll="1s">
          <h2><b>We all have the same Smile.</b></h2><br>
          <h5 style="color:blue">We make it a priority to offer flexibile <br> service to accomodate your need.</h5>
        </marquee>
      </div>
      <div class="col-sm-6"><img src="smile.jpg" alt="..." class="rounded-0" height="500" width="500">
      </div>
    </div>
    <!-- footer -->
    <div class="mt-5">
      <div class="row py-3 text-light" style="background-color: black;">
        <div class="col-sm-4 text-center">
          <img src="logo.avif" alt="logo" class="img-fluid w-25">
          <h4>We all have the same Smile.</h4>
        </div>
        <div class="col-sm-4 text-center">
          <h4><b style="color:white">INFORMATION</b></h4>
          <ul type="none" class="text-left">
            <li><a href="about.html" class="text-light font-weight-bold">About us</a></li>
            <li><a href="service.html" class="text-light font-weight-bold">Service</a></li>
            <li><a href="program.html" class="text-light font-weight-bold">Program</a></li>
            <li><a href="donation.html" class="text-light font-weight-bold">Donation</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h4 class="text-center"><b style="color:white">SUPPORT</b></h4>
          <ul type="none" class="text-left">
            <li><a href="contact.html" class="text-light font-weight-bold">Contact Us</a></li>
            <li><span class="material-symbols-outlined">
                call
              </span> <a href="tel:7521878485" class="text-light font-weight-bold">7521878485</a></li>
            <li><span class="material-symbols-outlined">
                mail
              </span> <a href="mailto:abc@gmail.com" class="text-light font-weight-bold">abc@gmail.com</a></li>
          </ul>
        </div>

        <div class="col-sm-12">
          <p class="text-center text-light">Made By @Chestha</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>