<html>
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
    <link rel="icon" type="image/png" href="images/logo.png" />

    <!-- css file's link -->
    <link rel="stylesheet" href="projestyle.css" />
    <link rel="stylesheet" href="login.css" />
</head>
<body>
      <!-- java script link -->
    <script src="validation.js"></script>
    <script src="changevalidate.js"></script>
    
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
                <a class="nav-link" href="login_html.html">Log in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="iletişim.html">İletişim</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- /navbar -->

<section id="form" class=" mb-5 w-75" style="text-align: center;">
        <div class="container">
          <div class="row my-3 ">
            <div class="col-lg-12 my-4">
              <h1 class="display-3" >Kullanıcı Bilgileri</h1>
            </div>
          </div>
          <div class="row my-1 ">
            <div class="col-lg-12 my-1" style="background-color:aliceblue">
            <table class="table table-borderless">
            <tr>
                <td>E-mail</td>
                <td ><?php echo $_POST["email"]?></td>
            	</tr>
            <tr>
            	<td >isim - soyisim</td>
            	<td ><?php echo $_POST["name"]?></td>
            </tr>
              <tr>
                <td>telefon</td>
                <td ><?php echo $_POST["phone"]?></td>
              </tr>
              <tr>
                <td>Cinsiyet</td>
                <td ><?php echo $_POST["gender"]?></td>
              </tr>
              <tr>
                <td>Doğum tarihi</td>
                <td ><?php echo $_POST["birthDate"]?></td>
              </tr>
              <tr>
                <td>konu</td>
                <td ><?php echo $_POST["subject"]?></td>
              </tr>
              <tr>
                <td>mesaj</td>
                <td ><?php echo $_POST["message"]?></td>
              </tr>
                </table>
              </div>
            </div>
        </div>
      </section>

    </table>
     <!-- Bootstrap Bundle link -->
     <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    </script>
    </body>
    <html>