<?php
    if(isset($_COOKIE["user_name"]) || isset($_COOKIE["admin_name"])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/new_services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
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
  <!--__________dropdown____________-->
  <div class="dropdown">
    <li class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      cities
    </li>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="services.php?cities=Cairo">Cairo</a></li>
      <li><a class="dropdown-item" href="services.php?cities=Ismailia">Ismailia </a></li>
      <li><a class="dropdown-item" href="services.php?cities=Asyut">Asyut</a></li>
    </ul>
  </div>
   <!--__________dropdown____________-->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <?php if(isset($_COOKIE["admin_name"])){?>
      <li class="nav-item">
          <a class="nav-link" href="../admin/index.php">Dashboard</a>
        </li>
          <?php }?>
        <li class="nav-item">
          <a class="nav-link" href="#">about us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../index.php">home</a>
        </li>
      </ul>
  </div>
  <div class="btn_login">
      <?PHP if(!isset($_COOKIE["admin_name"])) {?>
  <a href="out.php" class="c-button c-button--gooey"> sign in <i class="fa-solid fa-right-to-bracket fa-fade"></i><div class="c-button__blobs"><div></div><div></div><div></div></div></a>
      <?php }?>
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
</nav>
</header>
<!--_______header_______________-->

<div class = "wrapper">
  <div class = "category-filter">
      <div class = "container">
          <div class = "title">
              <h1>Advertisement display page</h1>
          </div>
           <!--_________________________________btn-filter_____________________-->
           <div class = "filter-btns">
               <button type = "button" class = "filter-btn"><a href="services.php?type=all" class="link">all</a></button>
               <button type = "button" class = "filter-btn"><a href="services.php?type=apartment" class="link">apartment</a></button>
               <button type = "button" class = "filter-btn"><a href="services.php?type=rooms" class="link">rooms</a></button>
               <button type = "button" class = "filter-btn"><a href="services.php?type=beds" class="link">beds</a></button>
            </div>
            <!--_________________________________btn-filter_____________________-->

          <div class = "filter-items">
            <!--________________product-card__________________-->
            <div class = "filter-item">
                <div class = "item-img" id="item-img">
                    <img src = "img/s1.jpg" alt = "Item image">
                    <span class = "discount">Ismailia</span>
                </div>
                <div class = "item-info">
                    <p>Apartment  </p>
                    <div>
                        <span class = "old-price">$20.50</span>
                        <span class = "apartment-price">$16.70</span>
                    </div>
                    <a href = "#" class ="add-btn">more details</a>
                </div>
            </div>
            <!--________________product-card__________________-->

              <div class = "filter-item all rooms">
                  <div class = "item-img">
                      <img src = "img/s2.jpg" alt = "Item image">
                      <span class = "discount">Ismailia</span>
                  </div>
                  <div class = "item-info">
                      <p> room </p>
                      <div>
                          <span class = "old-price">$40.50</span>
                          <span class = "apartment-price">$31.70</span>
                      </div>
                      <a href = "#" class ="add-btn">more details</a>
                  </div>
              </div>

              <div class = "filter-item all beds">
                  <div class = "item-img">
                      <img src = "img/s3.jpg" alt = "Item image">
                      <span class = "discount">Cairo</span>
                  </div>
                  <div class = "item-info">
                      <p>bed</p>
                      <div>
                          <span class = "old-price">$100.50</span>
                          <span class = "apartment-price">$67.70</span>
                      </div>
                      <a href = "#" class ="add-btn">more details</a>
                  </div>
              </div>

              <div class = "filter-item all apartment">
                  <div class = "item-img">
                      <img src = "img/s4.jpg" alt = "Item image">
                      <span class = "discount">Asyut</span>
                  </div>
                  <div class = "item-info">
                      <p>Room</p>
                      <div>
                          <span class = "old-price">$30.50</span>
                          <span class = "apartment-price">$20.70</span>
                      </div>
                      <a href = "#" class ="add-btn">more details</a>
                  </div>
              </div>

              <div class = "filter-item all rooms">
                  <div class = "item-img">
                      <img src = "img/s5.jpg" alt = "Item image">
                      <span class = "discount">ismailia</span>
                  </div>
                  <div class = "item-info">
                      <p>Beds</p>
                      <div>
                          <span class = "old-price">$20.50</span>
                          <span class = "apartment-price">$16.70</span>
                      </div>
                      <a href = "#" class ="add-btn">more details</a>
                  </div>
              </div>

              <div class = "filter-item all beds">
                  <div class = "item-img">
                      <img src = "img/s4.jpg" alt = "Item image">
                      <span class = "discount">ismailia</span>
                  </div>
                  <div class = "item-info">
                      <p>Cool Item Name</p>
                      <div>
                          <span class = "old-price">$20.50</span>
                          <span class = "apartment-price">$16.70</span>
                      </div>
                      <a href = "#" class ="add-btn">more details</a>
                  </div>
              </div>

              <div class = "filter-item all apartment">
                  <div class = "item-img">
                      <img src = "img/s3.jpg" alt = "Item image">
                      <span class = "discount">ismailia</span>
                  </div>
                  <div class = "item-info">
                      <p>Cool Item Name</p>
                      <div>
                          <span class = "old-price">$20.50</span>
                          <span class = "apartment-price">$16.70</span>
                      </div>
                      <a href = "#" class ="add-btn">more details</a>
                  </div>
              </div>

              <div class = "filter-item all rooms">
                  <div class = "item-img">
                      <img src = "img/s2.jpg" alt = "Item image">
                      <span class = "discount">Cairo</span>
                  </div>
                  <div class = "item-info">
                      <p>Cool Item Name</p>
                      <div>
                          <span class = "old-price">$20.50</span>
                          <span class = "apartment-price">$16.70</span>
                      </div>
                      <a href = "#" class ="add-btn">more details</a>
                  </div>
              </div>

              <div class = "filter-item all beds">
                  <div class = "item-img">
                      <img src = "img/s1.jpg" alt = "Item image">
                      <span class = "discount">Cairo</span>
                  </div>
                  <div class = "item-info">
                      <p>Cool Item Name</p>
                      <div>
                          <span class = "old-price">$20.50</span>
                          <span class = "apartment-price">$16.70</span>
                      </div>
                      <a href = "#" class ="add-btn">more details</a>
                  </div>
              </div>

              <div class = "filter-item all apartment">
                  <div class = "item-img">
                      <img src = "img/s5.jpg" alt = "Item image">
                      <span class = "discount">Cairo</span>
                  </div>
                  <div class = "item-info">
                      <p>Cool Item Name</p>
                      <div>
                          <span class = "old-price">$20.50</span>
                          <span class = "apartment-price">$16.70</span>
                      </div>
                      <a href = "#" class ="add-btn">more details</a>
                  </div>
              </div>

              <div class = "filter-item all rooms">
                  <div class = "item-img">
                      <img src = "img/s3.jpg" alt = "Item image">
                      <span class = "discount">Asyut</span>
                  </div>
                  <div class = "item-info">
                      <p>Cool Item Name</p>
                      <div>
                          <span class = "old-price">$20.50</span>
                          <span class = "apartment-price">$16.70</span>
                      </div>
                      <a href = "#" class ="add-btn">more details</a>
                  </div>
              </div>

              <div class = "filter-item all beds">
                  <div class = "item-img">
                      <img src = "img/s2.jpg" alt = "Item image">
                      <span class = "discount">Asyut</span>
                  </div>
                  <div class = "item-info">
                      <p>Cool Item Name</p>
                      <div>
                          <span class = "old-price">$20.50</span>
                          <span class = "apartment-price">$16.70</span>
                      </div>
                      <a href = "#" class ="add-btn">more details</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="../js/jquery-1.12.4.min.js" ></script>
<script src="../js/main.js" ></script>
</body>
</html>
<?php
    }else{
        header("location:login.php");
    }

?>