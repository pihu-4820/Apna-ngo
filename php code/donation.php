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
  <style>
    body {
      background-color: rgb(246, 243, 243);

    }
  </style>
  <script>
    function open()
    {
      var a=document.getElementById("t1").value;//to find an id 
      var a=p1.innerText=a
}
  </script>
  
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
          <img src="logo.avif" alt="..." class="rounded-0" height="100" width="100"> 
          <a class="navbar-brand" href="home.php">Home</a>
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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">

              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>
    </div>
    <div class="container-fluid"></div>
      <div class="row">
        <div class="col-sm-12 p-0">
          <div class="card bg-dark text-white">
            <img class="card-img" src="school.jpg" alt="Card image" height="500">
            <div class="card-img-overlay">
              <h4 class="card-title">
                <center><b>DONATE</b></center>
              </h4> <br> <br>
            </div>
          </div>
        </div>
      </div>
    </div> <br> <br>
    <div class="row">
      <div class="col-sm-12">
        <h4><b>
            <center>WE'VE HAVE REACHED SO FAR </center>
          </b></h4>
      </div>
    </div> <br>
    <div class="row">
      <div class="col-sm-12">
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0"
            aria-valuemax="100">65%</div>
        </div>
      </div>
    </div><br>
    <div class="row"><br>
      <div class="col-sm-12">
        <h4>
          <center><b>LATEST DONATIONS</b></center>
        </h4>
      </div>
    </div> <br> <br>
    <!-- donation form -->
     <div class="row">
        <div class="col-sm-12"><button onclick="open()"><h3>DONATE NOW</h3></button></div>
      <p id="p1"></p> 
     </div>
    <div class="container-fluid p-0" >
    <div class="row">
      <div class="col-sm-12" style="background-color: yellow;">
        <h2>
          <center><b>HOW CAN YOU HELP?</b></center>
        </h2> <br>
      
    
    <div class="row" style="background-color: yellow;">
      <div class="col-sm-6">
        <h5><b>HELP FOR CAUSE</b></h5> <br>
        <H6>Help your community by donating and fundraising for causes that you believe in. Volunteer your time as
          well.<br>
          Helping others allows you to connect with people and get a sense of purpose. The more you help people, the
          more accomplished you’ll feel.</H6><br>
        <img src="abb.jpg" alt="..." class="rounded-0" height="240" width="240">
        <img src="media2.jpg" alt="..." class="rounded-0">
        <img src="media5.jpg" alt="..." class="rounded-0" height="240" width="240">
      </div>
      <div class="col-sm-6"><iframe width="560" height="415"
          src="https://www.youtube.com/embed/UzaiOk7WT1I?si=A80pswtgUhnBuTXi" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div> <br> <br>
                     </div>
             <!--footer  -->
             <div class="container-fluid mt-5">
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
    </body>
    </html>
    
  
   

    
