<span style="font-family: verdana, geneva, sans-serif"
  ><!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <link rel="stylesheet" href="css_admin/dashboard.css" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
      />
      <link rel="stylesheet" href="css_admin/bootstrap.min.css" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
        href="https://fonts.googleapis.com/css2?family=Changa:wght@300&family=Kufam:ital,wght@1,500&family=Marhey&family=Reem+Kufi:wght@500;600&display=swap"
        rel="stylesheet"
      />
      <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"
      />
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <title>Dashboard</title>
    </head>
    <body>
      <!--*___________________left-section-nav___________-->
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="#" class="logo">
                <img src="images_admin/admin.jpeg" />
                <span class="nav-item">Admin</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fas fa-menorah" style="color: #34af6d !important"></i>
                <span class="nav-item">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="message.php">
                <i class="fas fa-comment"></i>
                <span class="nav-item">Message</span>
              </a>
            </li>
            <li>
              <a href="profile.php">
                <i class="fas fa-solid fa-user"></i>
                <span class="nav-item">profile</span>
              </a>
            </li>
            <li>
              <a href="All-admins.php">
                <i class="fas fa-solid fa-users"></i>
                <span class="nav-item">All admins</span>
              </a>
            </li>

            <li>
              <a href="#" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Log out</span>
              </a>
            </li>
          </ul>
        </nav>
        <!--*___________________left-section-nav___________-->

        <!--*___________________right-section____________-->
        <section class="main">
          <div class="main-top">
            <h1>Dashboard</h1>
            <i class="fas fa-user-cog" style="font-size: 1.5rem"></i>
          </div>
          <div class="users">
            <!--_________counter________-->
            <div class="card">
              <i class="fa-solid fa-people-roof"></i>
              <h2 class="counter">200</h2>
              <h4>Apartments</h4>
            </div>

            <div class="card">
              <i class="fa-solid fa-person-shelter"></i>
              <h2 class="counter">165</h2>
              <h4>Rooms</h4>
            </div>

            <div class="card">
              <i class="fa-solid fa-bed"></i>
              <h2 class="counter">245</h2>
              <h4>Beds</h4>
            </div>

            <div class="card">
              <i class="fa-solid fa-city"></i>
              <h2 class="counter">3</h2>
              <h4>city</h4>
            </div>
          </div>
          <!--_________counter________-->
          <section class="attendance">
            <div class="attendance-list">
              <h1>upload requests</h1>
              <!--____start_____table__________-->
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>cite</th>
                    <th>Duration</th>
                    <th>price</th>
                    <th>accept</th>
                    <th>deletion</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>room</td>
                    <td>Ismailia</td>
                    <td>8:00AM</td>
                    <td>130$</td>
                    <td><button>add</button></td>
                    <td><button class="second_btn">delete</button></td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>bed</td>
                    <td>cairo</td>
                    <td>9:00AM</td>
                    <td>40$</td>
                    <!--_____________add-product___________-->
                    <td><button>add</button></td>
                    <!--_____________add-product___________-->

                    <!--_____________delete-product________-->
                    <td><button class="second_btn">delete</button></td>
                    <!--_____________delete-product________-->
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>apartment</td>
                    <td>asyut</td>
                    <td>8:00AM</td>
                    <td>230$</td>
                    <td><button>add</button></td>
                    <td><button class="second_btn">delete</button></td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>room</td>
                    <td>Ismailia</td>
                    <td>8:00AM</td>
                    <td>110$</td>
                    <td><button>add</button></td>
                    <td><button class="second_btn">delete</button></td>
                  </tr>
                </tbody>
              </table>
              <!--____start_____table__________-->
              <div class="Mobility">
                <span><a href="#">back</a></span>
                <a href="#" class="number">1</a>
                <a href="#" class="number">2</a>
                <a href="#" class="number">3</a>
                <a href="#" class="number">4</a>
                <a href="#" class="number">5</a>
                <span><a href="#">Next</a></span>
             </div>
            </div>

<!--________start________-form login_________-->
<div class="container_form">
  <div class="message signup">
    <div class="btn-wrapper">
      <button class="button" id="signup">Sign Up</button>
      <button class="button" id="login"> Login</button>
    </div>
  </div>
  <div class="form form--signup">
    <div class="form--heading">Sign Up</div>
    <form autocomplete="off">
      <input type="text" placeholder="Name">
      <input type="email" placeholder="Email">
      <input type="password" placeholder="Password">
      <button class="button">Sign Up</button>
    </form>
  </div>
  <div class="form form--login">
    <div class="form--heading"> login </div>
    <form autocomplete="off">
      <input type="text" placeholder="Name">
      <input type="password" placeholder="Password">
      <button class="button">Login</button>
    </form>
  </div>
</div>
<!--________end________-form login_________-->

          </section>
        </section>
      </div>

      <!--*___________________right-section____________-->

      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
      ></script>
      <script src="java_script/main.js"></script>
      <script src="java_script/jquery.counterup.min.js"></script>
      <script src="java_script/swiper-bundle.min.js"></script>
      <script>
        jQuery(document).ready(function ($) {
          $(".counter").counterUp({
            delay: 10,
            time: 1000,
          });
        });
      </script>
    </body>
  </html>
</span>
