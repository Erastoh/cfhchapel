    <!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free Template">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
    <link rel="icon" href="assets/images/cfhlogo1.png" type="image/png">
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/normailze.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!--Font-->
    <link rel="stylesheet" type="text/css" href="font/web-font.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>CfhChapel</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <title>CFHCHAPEL</title>

     <style>
        /* Style for the container div */
        .center-container {
            display: flex;
            align-items: center;
            justify-content: center;
            /* height: 100vh; Optional: Set the height of the container */
        }
        .padded-div {
            padding: 20px;
             /* Adjust the value as needed */
            /* background-color: #f0f0f0; Optional: Set a background color for better visualization */
        }
        .padding_div{
          
        }

        /* Style for the centered text */
        .centered-text {
            text-align: center;
        }
         #home {
          flex: 1;
          height: 800px; 
          color:white;/* This will make it fill the remaining space */
          /* background-color: lightgreen; */
      /* Your content styles */
    }

    #backimg{
      
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-image: url('your-image-url.jpg'); /* Replace with your image URL */
      background-size: cover; /* This will cover the entire container */
      background-position: center; /* Center the background image */
      background-repeat: no-repeat; /* Prevent the background image from repeating */
    

    }
        header {
            background-color: #F6CF11; /* Set the background color */
            color: white; /* Set the text color */
            padding: 20px; /* Add padding for spacing */
            text-align: center; /* Center-align text */
        }

		footer {
            
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f8f9fa; /* Adjust background color as needed */
            padding: 20px; /* Add padding for spacing */
            text-align: center; /* Center-align text */
        }


    </style>
  </head>

  <body>
	<header>
            <div id="menu-jk" class="nav-part">
                <div class="container-xl p-0">
                    <div class="row navcol p-3">
                        <div class="col-lg-3">
                            <img class="max-230" src="assets/images/cfhlogo1.png" alt="" width="400" 
                             height="70">
                             <a  data-bs-toggle="collapse" data-bs-target="#menu" class="float-end d-lg-none ps-3"><i class="bi pt-1 fs-1 cp bi-list"></i></a>
                        </div>
                        <div id="menu" class="col-lg-9 text pe-0 d-none d-lg-block">
                            <ul class="fw-bold float-end nacul fs-8 text-uppercase">
                                <li class="float-start act p-3 px-4"><a href="{{ route('events.homepage') }}" style="color:white;">Home</a></li>
                                <li class="float-start p-3 px-4"><a href="#events" style="color:white;">News & Events</a></li>
                                <li class="float-start p-3 px-4"><a href="#services" style="color:white;">Services</a></li>
                                <li class="float-start p-3 px-4"><a href="#tithes" style="color:white;">Give</a></li>
                                <!-- <li class="float-start p-3 px-4"><a href="#blog">Gallery</a></li> -->
                                <!-- <li class="float-start p-3 px-4"><a href="#testimonial">Testimonial</a></li> -->
                                <li class="float-start p-3 px-4"><a href="#contact" style="color:white;">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

@yield('content')

      <footer id="contact" class="bg-dark text-white big-padding pb-0">
            <div class="container-xl ">
                <div class="row">
                    <div class="col-md-4">
                        <div class="aboutcol bg-gray fs-7 bg-dark shadow-lg p-5">
                            <!-- <p class="mb-2">Girls in aviation day</p> -->
                            <p class="mb-2">We exist with a single focus on Christ. 
                            </p>
                            <p>Join us every Sunday from 10:30 a.m. to 12:30 p.m. (EAT) in our sanctuary at Mugutha, Ruiru,
                               Kenya to experience worship, the message, and the warmth of our church family.</p>
                             </br>
                            <p class="mb-2">CFH Chapel is a disciple-making church
                            emphasizing allegiance to Christ and making discipleship demands on those that it reaches. This
                            is our approach to bearing fruits/disciple-making.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 text-center text-primary">
                                        <i class="bi fs-1  bi-geo-alt"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <h5 class="text-light fw-bolder fs-3">Mugutha, Ruiru.</h5>
                                        <p class="fs-6">28973 – 00100</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 text-center text-primary">
                                        <i class="bi fs-1 bi-telephone-inbound"></i>
                                    </div>
                                    <div class="col-md-10">
                                      <a href="mailto:connect@cfhchapel.org/"><h5 class="text-light fw-bolder fs-3">connect@cfhchapel.org</h5></a>
                                        <h5 class="text-light fw-bolder fs-3">+254 720 950828</h5>
                                        <p class="fs-6">Give us Call</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pt-5">
                                <h4 class="fs-5 fw-bolder text-white">Useful Links</h4>
                                <ul class="row">
                                    <li class="float-start col-md-6 p-2"><a class="text-white fw-bolder" href="#">Home</a></li>
                                    <li class="float-start col-md-6 p-2"><a class="text-white fw-bolder" href="#events">Events</a></li>
                                    <li class="float-start col-md-6 p-2"><a class="text-white fw-bolder" href="#services">Services</a></li>
                                    <li class="float-start col-md-6 p-2"><a class="text-white fw-bolder" href="#tithes">Give</a></li>
                                    <li class="float-start col-md-6 p-2"><a class="text-white fw-bolder" href=""> Contact Us</a></li>
                                    <!-- <li class="float-start col-md-6 p-2"><a class="text-white fw-bolder" href="#testimonial">Testimonial</a></li> -->
                                    <!-- <li class="float-start col-md-6 p-2"><a class="text-white fw-bolder" href="#blog">Gallery</a></li> -->
                                    <!-- <li class="float-start col-md-6 p-2"><a class="text-white fw-bolder" href="#contact">Contact Us</a></li> -->
                                </ul>
                            </div>
                            <div class="col-md-6  pt-5">
                                

                                <!-- <p class="mb-5">Where dreams take flight and women soar beyond boundaries in aviation maintenance. </p>
     -->
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control mb-0" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-primary" id="basic-addon2"><i class="bi text-white bi-send"></i></span>
                                    </div>
                                </div>
                                 </br>

                            <h4 class="fs-5 fw-bolder text-white">Follow Us</h4>
                               
                                <ul class="text-white pt-1 float-start">
                                    <li class="text-light float-start  fs-6 p-3 py-2"><a href="https://www.facebook.com/cfhchapel">
                                      <span style ="color: blue;
                                      font-size: 24px;"><i class="bi bi-facebook"></span></i></a></li>
                                    <!-- <li class="float-start text-light fs-6 p-3 py-2"><i class="bi bi-twitter"></i></li>
                                    <li class="float-start fs-6 p-3 py-2"><i class="bi bi-instagram"></i></li> -->
                                    <li class="float-start fs-6 p-3 py-2"><a href="https://www.youtube.com/@cfhchapel708" target="_blank">
                                      <span style ="color: red;
                                      font-size: 24px;"><i class="bi bi-youtube"></span></i><a/></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>

</html>




		