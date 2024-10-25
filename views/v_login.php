<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku Tamu Dinas Perhubungan Kota Bandung</title>
    <link rel="icon" type="image/png" href="assets/images/Icon dishub.png">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
      *{
        font-family: "Poppins", sans-serif;
      }

      body {
        margin: 0; 
        height: 100%; 
        background-color: rgb(242, 244, 247);
      }

      .header h1 {
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 48px;
      }

      .header p {
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 21px;
        margin-bottom: 20px;
      }

      .login-form label {
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 24px;
        margin-top: 15px;
      }

      .login-form input {
        background: #FFFFFF;
        border: 2px solid #BCBCBC;
        box-sizing: border-box;
        border-radius: 8px;
        font-size: 13px;
      }

      .login-form a {
        font-style: normal;
        font-weight: 400;
        font-size: 13px;
        line-height: 24px;
        margin-top: 20px;
        color: black;
        text-align: center;
      }

      .login-form .signin {
        width: 100%;
        height: 42px;
        background-color: black;
        border-radius: 8px;
        color: white;
        margin: 20px 0;
        display: block;
        border: none;
      }

    </style>
  </head>
  <body>

    <div class="container-fluid">
      <div class="card mx-auto mt-5" style="width: 70rem; height: 540px; border-radius: 30px">
        <div class="row g-0">
          <div class="col-md-6">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1500">
                  <img src="assets/images/Logo Dishub.jpg" class="d-block mt-3" alt="Logo Dishub" style="height: 500px; border-radius: 20px; margin-left: 20px">
                </div>
                <div class="carousel-item active" data-bs-interval="1500">
                  <img src="assets/images/Kantor dishub.jpg" class="d-block mt-3" alt="Kantor Dishub" style="height: 500px; border-radius: 20px; margin-left: 20px">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 ">
            <div class="">
              <div class="header text-center mt-5"> 
                <h1>SIGN IN</h1>
                <p>Buku Tamu Dinas Perhubungan Kota Bandung</p>
              </div>
              <div class="login-form">
              <form action="login.php" method= "POST">
                <div class="mb-3" style="width: 30rem; margin-left: 30px">
                <input type="text" placeholder="username" id="username" required placeholder="Enter Your Email" />
                </div>
                <div class="mb-3" style="width: 30rem; margin-left: 30px">
                <input type="password" placeholder="password" name="password" required />
                    </form>
                  </div>
                
                <div class="text-center">
                  <a href="forget.password.php" class="text-decoration-none mt-5">Forget Password ?</a>
                </div>
                <button type="submit" type="submit" class="btn" required id="loginButton" class="signin mt-4" style="width: 20rem; margin-left: 110px" >Login</button>
                <div class="text-center">
                  <a href="https://www.youtube.com/@dishubkotabandung"><img src="assets/images/Logo yt.png" alt="" style="height: 30px; margin-right: 20px"></a>
                  <a href="https://www.instagram.com/bdg.dishub/"><img src="assets/images/Logo ig.png" alt="" style="height: 30px; margin-right: 20px"></a>
                  <a href="https://dishub.bandung.go.id/"><img src="assets/images/Logo ch.png" alt="" style="height: 30px;"></a>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      // Event listener untuk tombol login
      document.getElementById("loginButton").addEventListener("click", function() {
        // Redirect ke halaman menu.php
        window.location.href = "menu.php";
      });
    </script>  
  </body>
</html>
