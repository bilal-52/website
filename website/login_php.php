<?php
$email = $_POST['email'];
$sifre = $_POST['sifre'];

$validEmailPrefix = substr($email, 0, strpos($email, "@"));

if ($email === $validEmailPrefix."@sakarya.edu.tr" && $validEmailPrefix === $sifre) {
  $signal = true;
} else {
  $signal = false;
  header("refresh:5;url=login_html.html");
}
?>
<html lang="en">
<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <link rel="icon" type="image/png" href="images/logo.png" />
    <!-- css file's link -->
    <link rel="stylesheet" href="projestyle.css" />
    <link rel="stylesheet" href="login.css" />

</head>
<body>
 <!-- navbar -->
 <header class="header-wrapper">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="logo" class="img-fluid" />
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
                <a
                  class="nav-link"
                  aria-current="page"
                  href="anasayfa-hakimda.html"
                  >Home</a
                >
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
                <a class="nav-link active" href="login_html.html">Log in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="iletişim.html">İletişim</a> 
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
<!-- /navbar -->

      <section  class=" mx-5 mb-5">
        <div class=" container">
          <div class="row my-3 ">
            <div class="col-lg-12 my-4 text-center ">
              <h3>
                  <?php
                    if($signal==true)
                    {
                      echo $sifre."  Hoşgeldin" ;
                    }
                    else
                    {
                      echo "hatalı giriş yaptınız ! ";
                      echo "log in sayfasına geri yönlendiriliyorsunuz";
                    }
                  ?>
              </h3>
            </div>
          </div>
        </div>
      </section>

    </table>
    
    </body>
</html>