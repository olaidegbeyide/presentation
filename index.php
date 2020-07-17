<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap-css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom-css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <title>Presentation</title>
</head>
<body>
    <section class="container-fluid big-banner">
        <div class="container">
            <div class="row first-row">
                <div class="col-lg-6 col-md-6 col-sm-12 intro">
                    <h3 class="intro-title">Introducing the first ever 3d presentation software</h3>
                    <p class="intro-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Amet, enim enim varius vitae aliquam dolor. 
                         Integer dignissim ullamcorper eu magna.
                          Viverra facilisis vitae, vel volutpat tempor.
                           Laoreet pulvinar porttitor ac lectus fermentum,
                         dignissim sed facilisis etiam.</p>
                    <p class="intro-para">Sign Up with your email to get notified 
                        to get on early access list to get access to
                         in app perks only available to our early subscribers.</p>
                    <div class= "first-form">
                        <form action="process.php" method="POST">
                            <input type="email" name="email" class="form-input email-input" placeholder="Email Address..." >
                            <button type="submit" class="btn email-btn mt-sm-3 mt-lg-3 mt-xl-0" name="submit">Join Waiting List</button>
                        </form>
                    </div>
                    
                </div>
                <div class="col">
                    <img class="header-img"src="assets/img/Telecommuting-rafiki 1.png" alt="">
                </div>
            </div>
        </div>

        <div class="container">
            <p class="text-center timer-title pt-5" > GET EXCLUSIVE IN APP PERKS BY SIGNING UP BEFORE OUR OFFICIAL LAUNCH!</p>
            <div class="row timer-row ">
                <div class=" col timer no-gutters">
                    <h1>07 </h1>
                    <p>days</p>
                </div>
                <div class=" col timer">
                    <h1>20 </h1>
                    <p>hours</p>
                </div>
                <div class=" col timer">
                    <h1>29 </h1>
                    <p>minutes</p>
                </div>
                <div class=" col timer">
                    <h1>09 </h1>
                    <p>seconds</p>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <h3 class="text-center pt-5 font-weight-bold">Software Features Include</h3>
            <div class="row pt-5">
                <div class="col-lg-4 col-sm-12">
                    <p class="features-title">Present everywhere, online</p>
                    <p class="features-para">cloud-based software lets you create, collaborate, and share around the world.</p>
                    
                    <p class="features-title pt-md-5">3d presentation</p>
                    <p class="features-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Tristique eleifend viverra at mattis.</p>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <img src="assets/img/Usability testing-pana 1.png" alt="" class="features-img">
                </div>
                <div class="col-lg-4 col-sm-12">
                    <p class="features-title">Hologram interaction </p>
                    <p class="features-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique eleifend viverra at mattis.</p>
                    
                    <p class="features-title pt-md-5">Ease of Use</p>
                    <p class="features-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Tristique eleifend viverra at mattis. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section pt-5" >
        <!-- Slider main container -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="assets/img/iphone.png" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen.png" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/iphone.png" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen.png" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/iphone.png" alt=""></div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
       
    </div>
    </section>

    <section class="page-section" style=" background-color: #407BFF;">
        <div class="container">
            <h2 class="text-center pt-5 text-white font-size-16px">Watch The Overview</h2>
            <div class="row overview">
                <div class="col">
                     <img class="pt-4"src="assets/img/model.jpg" alt="" style=" width:90%; height:500px">
                </div>
            </div>
        </div>
    </section>

    <section class="page-section footer">
        <div class="container notif">
            <div class="row notify">
                <div class="col">
                    <h3 class="text-center pt-5">Get Notified</h3>
                    <p class="text-center second-form">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Ipsum donec risus pellentesque sed elementum sed nisi nec a.</p>
                         <div>
                        <form action="process.php" method="POST">
                            <input type="email" name="email" class="form-input email-input" placeholder="Email Address..." style="border:1px solid #1E55EB;">
                            <button type="submit" class="btn email-btn mt-sm-3 mt-lg-3 mt-xl-0 bg-primary text-white" name="submit">Join Waiting List</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/popper.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
    var mySwiper = new Swiper('.swiper-container', {
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }

})

    </script>
   </body>
</html>