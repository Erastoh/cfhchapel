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

    </style>
  </head>

  <body>
    <div id="backimg" style="background-image: url('img/homeimage.jpeg');">
    <header>
            <div id="menu-jk" class="nav-part">
                <div class="container-xl p-0">
                    <div class="row navcol p-3">
                        <div class="col-lg-3">
                          <a href="{{ route('events.homepage') }}">
                            <img class="max-230" src="assets/images/cfhlogo1.png" alt="" width="400" 
                             height="70">
                             </a>
                             <a  data-bs-toggle="collapse" data-bs-target="#menu" class="float-end d-lg-none ps-3"><i class="bi pt-1 fs-1 cp bi-list"></i></a>
                        </div>
                        <div id="menu" class="col-lg-9 text pe-0 d-none d-lg-block">
                            <ul class="fw-bold float-end nacul fs-8 text-uppercase">
                               <li class="float-start act p-3 px-4"><a href="{{ route('events.homepage') }}" style="color:white;">Home</a></li>
                                <li class="float-start p-3 px-4"><a href="{{ route('events.eventdetails') }}" style="color:white;">News & Events</a></li>
                                <li class="float-start p-3 px-4"><a href="{{ route('events.service') }}" style="color:white;">Services</a></li>
                                <li class="float-start p-3 px-4"><a href="{{ route('events.give') }}" style="color:white;">Give</a></li>
                                <!-- <li class="float-start p-3 px-4"><a href="#blog">Gallery</a></li> -->
                                <!-- <li class="float-start p-3 px-4"><a href="#testimonial">Testimonial</a></li> -->
                                <li class="float-start p-3 px-4"><a href="{{ route('events.contactus') }}" style="color:white;">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
     
        <section id="home" class="about-us  big-padding container-fluid">
        <div id="home" class="banner big-padding container-fluid">
            <div class="container-xl p-0 max-1500">
                <div class="row">
                    <div class="col-md-6 mb-4 align-self-center" style="color:white;">
                        <h6 class="fw-bolder" style="color:white;">DELIVERING HOPE</h6>
                        <h1 class="fs-10 fw-bolder" style="color:white;">We are a family that loves Christ above all, loves each other deeply, discovers and
                           uses our gifts for God’s service.</h1>
                        <!-- <p class="fs-6 text-dark">We are a family that loves Christ above all, loves each other deeply, discovers and
                           uses our gifts for God’s service.</p> -->
                        <a href="mailto:connect@cfhchapel.org"><button style="background-color:black;color:white" class="btn  py-3 px-5 mt-4 btn-success">Contact Us <i class="bi bi-chevron-right"></i></button></a>
                    </div>
                    <!-- <div class="col-md-6">
                        <img src="assets/images/chapelhome.jpeg" alt="">
                    </div> -->
                </div>
            </div>
        </div>
       </section>

      </div>

<div id="events" class="service big-padding bg-white border-top container-fluid px-4 py-5">
            <div class="container-xl p-0">
                <div class="section-title row mb-3">
                    <h2 class="fw-bolder">Events</h2>
                    <p style="color: black; font-size: 16px;">Stay empowered by participating in, and attending church events that uplift your soul, fostering spiritual growth in your journey with Christ as you fellowship with us.</p>
                </div>
                <div class="row">
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="bg-white shadow-md">
                            <img src="img/careersday.jpeg" alt="">
                            <div class="p-3 text-center">
                                <h4 class="fs-6 fw-bold"> </h4>
                                <p>Career Day</p>
                                <a href="{{ route('events.eventdetails') }}"><button style="background-color:black;color:white" class="btn  py-3 px-5 mt-4 btn-success">View Details <i class="bi bi-chevron-right"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="bg-white shadow-md">
                            <img src="assets/images/chapelEvent.jpeg" alt="">
                            <div class="p-3 text-center">
                                <h4 class="fs-6 fw-bold">5th Anniversary</h4>
                                <p>You are cordially invited to join us in celebrating our 5th Anniversary as we express gratitude to the Almighty for the milestones we have achieved.</p>
                                <a href="{{ route('events.eventdetails') }}"><button style="background-color:black;color:white" class="btn  py-3 px-5 mt-4 btn-success">View Details <i class="bi bi-chevron-right"></i></button></a>
                            </div>
                             
                        </div>
                        
                    </div>
                </div>
            </div>   
        </div>


      <div id="services"class="padded-div inside-container contact-section">
        <div class="row sections-detail">
          <div class="col-12">
            <h2 class="section-title" style="color: black;">Church Program</h2>
            <!-- <p class="section-title-desc">At solmen li esser necessi uniform grammatica, pronunciation</p> -->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="appointment">
              <h2 class="appointment-title">Make An Appiontment</h2>
              <p class="appointment-desc">Meet with Our Pastor Livingstone T. for prayers or any Consultation</p>
              <form action="#" class="appointment-form">
                <div class="row">
                  <div class="col-lg-6 appointment-form-col-left">
                    <input type="text" class="form-control appointment-form-input" placeholder="First name*"
                      required="">
                  </div>
                  <div class="col-lg-6 appointment-form-col-right">
                    <input type="text" class="form-control appointment-form-input" placeholder="Last name*" required="">
                  </div>
                  <div class="col-lg-6 appointment-form-col-left">
                    <input type="date" class="form-control appointment-form-input data-input" required="">
                  </div>
                  <div class="col-lg-6 box-select appointment-form-col-right">
                    <select name="gender" class="form-control appointment-form-input">
                      <option value="choose-class">Choose Reason</option>
                      <option value="class-1">Prayers</option>
                      <option value="class-2">Advice</option>
                      <option value="class-3">Consultation</option>
                    </select>
                  </div>
                  <div class="col-lg-6 appointment-form-col-left">
                    <input type="tel" class="form-control appointment-form-input" placeholder="Phone" required=""
                      value="" size="10" maxlength="10">
                  </div>
                  <div class="col-lg-6 appointment-form-col-right">
                    <input type="email" class="form-control appointment-form-input" placeholder="Email" required="">
                  </div>
                  <div class="col-12 appointment-form-col-left">
                    <textarea class="form-control appointment-form-text" id="exampleFormControlTextarea1" rows="3"
                      placeholder="Message (Optional)"></textarea>
                  </div>
                  <div class="col-12 appointment-form-col-right">
                    <button type="submit" class="appointment-form-btn" value="" style="background-color: green; 
                   color: white; padding:10px;">Book An Appointment</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 open-time">
            <div class="weekdays">
              <h3 class="open-time-title">Weekdays Prayers</h3>
              <p class="open-time-course">Wednesday</p>
              <p class="open-time-clock">05.00 PM - 06.00 pM</p>
              <p class="open-time-course">Friday</p>
              <p class="open-time-course">Hope Cells</p>
              <p class="open-time-clock">07.00 PM - 08.00 PM</p>

            </div>
            <div class="weekends">
              <h3 class="open-time-title">Sundays</h3>
              <p class="open-time-course">Prayers</p>
              <p class="open-time-clock">09.30 AM - 10.30 AM</p>
              <p class="open-time-course">Main Service</p>
              <p class="open-time-clock">10.30 AM - 12.30 AM</p>
            </div>
          </div>
        </div>
      </div>

      <!--Trainers-->
      <section id="tithes" class="testimonial-container sdiv border-top pb-5 big-padding">
      <div class="trainer-section">
        <div class="row sections-detail">
          <div class="col-12">
            <h2 class="section-title" style="color: black;">FOR TITHES/OFFERINGS</h2>
            <!-- <p class="section-title-desc">At solmen li esser necessi uniform grammatica, pronunciation</p> -->
          </div>
        </div>
        <div class="center-container inside-container">
          <div class="row trainer-col">
            <div class="col-lg-12">
              <a href="">
                <h3 class="trainer-title">COOP BANK, TWO RIVERS</h3>
              </a>
              <p class="trainer-desc">ACC: 01109758062100</p>
              <p class="trainer-desc">PAYBILL: 400200</p>
            </div>
          </div>
        </div>
      </div>
      </section>
  

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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>

</html>
