<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <!-- bootstrap link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <!-- Font awesome link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Favicon link -->
    <link rel="icon" type="image/png" href="images/glob-icon.png" />

    <!-- css file's link -->
    <link rel="stylesheet" href="projestyle.css" />
    <link rel="stylesheet" href="login.css" />
    <title>Log in</title>
  </head>
  <body>
    <!-- navbar -->
    <header class="header-wrapper">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="images/glob-icon.png" alt="logo" class="img-fluid" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNav"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="anasayfa-hakimda.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="city.html">Şehrim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mirasımız.html">Mirasımız</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ilgi_alanım.html">İlgi alanım</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="log-in.html">Log in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="iletişim.html">İletişim</a>
              </li>
              <li class="nav-item">
                <img src="images/night-mode.png" id="moon_icon" />
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- /navbar -->

    <main style="text-align: center;  height:max-content" >
     <div id="form">
      <div class="row-lg-12 align-items-center">
        <h2>login</h2>
          <form name = "form" method="POST">
               <label> E-mail : </label>
               <input type="text" id="user" name="user"><br><br>
               <label> Şifre :</label>
               <input type="password" id="pass" name="pass"><br><br>
               <input type="submit" class="main-btn secondary-btn" id="btn" value="login" name="submit">
          </form>
     </div>
     </div>
   </main>


    <!-- Bootstrap Bundle link -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
