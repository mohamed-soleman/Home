<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@300&family=Kufam:ital,wght@1,500&family=Marhey&family=Reem+Kufi:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title> Petco </title>
</head>
<body>
  <!--_______header_______________-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
    <a class="navbar-brand" href="#"> <span>Pet</span>co </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span><i class="fa-solid fa-bars-staggered"></i></span>
    </button>
  </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <!--__________dropdown____________-->
        <div class="dropdown">
          <li class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            services
          </li>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Apartments</a></li>
            <li><a class="dropdown-item" href="#">Rooms</a></li>
            <li><a class="dropdown-item" href="#">Beds</a></li>
            <li><a class="dropdown-item" href="services.html">All</a></li>
          </ul>
        </div>
         <!--__________dropdown____________-->
        <li class="nav-item">
          <a class="nav-link" href="#">about us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">login</a>
        </li>
      </ul>
  </div>
  <a href="login.php" class="c-button c-button--gooey"> sign in <i class="fa-solid fa-right-to-bracket fa-fade"></i><div class="c-button__blobs"><div></div><div></div><div></div></div></a>
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: block; height: 0; width: 0;">
    <defs>
      <filter id="goo">
        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></feColorMatrix>
        <feBlend in="SourceGraphic" in2="goo"></feBlend>
      </filter>
    </defs>
  </svg>
</nav>
</header>
<!--_______header_______________-->

<!--________________main section__________________-->
<section id="main">
  <div class="container">
    <div class="row">
    <div class="col-md-6 content_main">
      <p class="main_title"> Welcome <span>to</span> our website <span>Petco</span></p>
      <p class="text_main">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum velit qui accusamus
         Autem obcaecati doloremque vero dolor non recusandae harum in molestiae, alias consequatur!</p>
   <span class="btn_container"> 
     <button> <span class="box"> student </span></button>
    <button class="c-button c-button--gooey"> property owner <div class="c-button__blobs"><div></div><div></div><div></div></div></button>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: block; height: 0; width: 0;">
      <defs>
        <filter id="goo">
          <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></feColorMatrix>
          <feBlend in="SourceGraphic" in2="goo"></feBlend>
        </filter>
      </defs>
    </svg>
  </span>
</div>
    <div class="col-md-6 text-center">
      <div class="animation_main">
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
        <dotlottie-player src="https://lottie.host/545be638-f2d8-4f0d-a201-ee0625a7c03b/lwo89a0Kfz.json" background="transparent" style="  width: 600;  height: 600;" speed="1"  loop autoplay></dotlottie-player>
    </div>
    </div>
  </div>
</div>
  <img src="images/wave1.png" class="bottom-img" alt="">
</section>
<!--________________main section__________________-->

  <!-- _________________About Start_____________ --> 
  <section class="about">
    <span class="head_title">about us</span> 
    <div class="container_about">
      <div class="row">
          <div class="col-md-6 text-center">
           <img src="images/about.png" class="img-fluid" alt=""> 
         </div>
      <div class="col-md-6 content_main">
        <p class="main_title"> What is Petco website and what does it offer? </p>
        <p class="text_main">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum velit qui accusamus
           Autem obcaecati doloremque vero dolor non recusandae harum in molestiae, alias consequatur!</p>
           <button class="c-button c-button--gooey"> learn more <i class="fa-solid fa-arrow-right fa-fade"></i>
            <div class="c-button__blobs">
            <div></div>
            <div></div>
            <div></div>
            </div>
          </button>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: block; height: 0; width: 0;">
            <defs>
              <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></feColorMatrix>
                <feBlend in="SourceGraphic" in2="goo"></feBlend>
              </filter>
            </defs>
          </svg>
      </div>
      </div>
    </div>
  </div>
  </section>
  <!-- _________________About Start_____________ --> 

   <!--_____________services_section_____________-->
   <section class="services">
    <span class="head_title">Services</span> 
    <div class="container">
      <div class="row">
        <div class="col-md-4 product">
          <div class="book">
            <div class="cover_content">
              <h4> Rooms </h4>
              <p id="promo_text">To see everything related to this media, go to the advertisements page using the button below</p>
              <button> <a  href="#" alt="#" class="box"> show all </a></button>
             </div>
             <div class="cover">
                <img src="images/s1.jpg" alt="">
           </div>
         </div>
        </div>
        <div class="col-md-4 product">
          <div class="book">
            <div class="cover_content">
              <h4> Bads </h4>
              <p id="promo_text">To see everything related to this media, go to the advertisements page using the button below</p>
              <button> <a  href="#" alt="#" class="box"> show all </a></button>
             </div>
             <div class="cover">
                <img src="images/s2.jpg" alt="">
           </div>
         </div>
        </div>
        <div class="col-md-4 product">
          <div class="book">
            <div class="cover_content">
              <h4> Apartments</h4>
              <p id="promo_text">To see everything related to this media, go to the advertisements page using the button below</p>
              <button> <a  href="#" alt="#" class="box"> show all </a></button>
             </div>
             <div class="cover">
                <img src="images/s3.jpg" alt="">
           </div>
         </div>
        </div>
         <span class="all_ads">All ads <i class="fa-solid fa-arrow-right"></i></span>
      </div>
    </div>
  </section>
  <!--_____________services_section_____________-->
 
       <!--________________Banner__________________-->
       <div class="banner">
        <div class="animation_banner">
           <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
           <dotlottie-player src="https://lottie.host/6d16bbb8-11ca-4596-9d4d-4fc7e9d3d547/1rbCDd8HgO.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></dotlottie-player>
        </div>
        <div class="content_banner">
           <h2>How the site works</h2>
           <p>The data is reviewed before it is displayed on our website and Securing the communication process between the facility owner and the student</p>
           <a src="#" alt="#" class="banner_link"> learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
       <!--________________Banner__________________-->
  
         
       <!--_____________our-services____________-->
       <div id="Services" class="our-services section">
        <span class="head_title">Available cities</span> 
        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
              <div class="left-image">
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
                <dotlottie-player src="https://lottie.host/09c88abe-3fd7-43a7-8e61-88a1cd4eb0ce/nKNNr0pqgc.json" background="transparent" speed="1" style="width: 700px; height: 400px;" loop autoplay></dotlottie-player>
              </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
              <div class="section-heading">
                <h2>The <em>supported</em> governorates by the website <span>until now</span> :</h2>
                <p>The website currently supports three cities With comprehensive support in terms of apartments, rooms, beds, general facilities, and support in case of any issues.</p>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="first-bar progress-skill-bar">
                    <h4>Cairo</h4>
                    <span>84%</span>
                    <div class="filled-bar"></div>
                    <div class="full-bar"></div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="second-bar progress-skill-bar">
                    <h4>Assiut</h4>
                    <span>70%</span>
                    <div class="filled-bar"></div>
                    <div class="full-bar"></div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="third-bar progress-skill-bar">
                    <h4>Ismailia</h4>
                    <span>94%</span>
                    <div class="filled-bar"></div>
                    <div class="full-bar"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!--_____________our-services____________-->

       <!--____________portfolio___________-->

       <div id="portfolio" class="our-portfolio section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <h2>Important guidelines</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <a href="#">
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                  <div class="hidden-content">
                    <h4>SEO Analysis</h4>
                    <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                  </div>
                  <div class="showed-content">
                    <i class="fa-solid fa-handshake-angle"></i>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="#">
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="hidden-content">
                    <h4>Website Reporting</h4>
                    <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                  </div>
                  <div class="showed-content">
                    <i class="fa-solid fa-person-shelter"></i>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="#">
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="hidden-content">
                    <h4>Performance Tests</h4>
                    <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                  </div>
                  <div class="showed-content">
                    <i class="fa-solid fa-circle-info"></i>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="#">
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="hidden-content">
                    <h4>Data Analysis</h4>
                    <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                  </div>
                  <div class="showed-content">
                    <i class="fa-solid fa-shield-halved"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
       <!--____________portfolio___________-->

      <!--______________contact & footer___________-->

      <div id="contact" class="contact-us section" id="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
              <div class="section-heading">
                <h2>Feel free to contact us if you encounter any issues</h2>
                <p>The team reviews these messages and issues, responding to them as soon as possible</p>
                <div class="phone-info">
                  <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="#">+20 1211346257</a></span></h4>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                    </fieldset>
                  </div>
                </div>
                <div class="contact-dec">
                  <img src="assets/images/contact-decoration.png" alt="">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
              <p>© Copyright 2021 Space Dynamic Co. All Rights Reserved. 
              
              <br>Design: <a rel="follow" href="#">abdallah samir</a></p>
            </div>
          </div>
        </div>
      </footer>

      <!--______________contact & footer___________-->

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/jquery-1.12.4.min.js" ></script>
<script src="js/main.js" ></script>


</body>
</html>