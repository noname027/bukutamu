 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- icon -->
 <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css'>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-straight/css/uicons-solid-straight.css'>

    <title>Document</title>
    <style>
    .dashboard {
            display: flex;
            justify-content: space-between;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
        }
        canvas {
            width: 100% !important;
            height: auto !important;
        }
        .text-border {
        padding: 30px;
        width: 1200px;
        text-align: left;
        font-family: Arial, sans-serif;
        font-size: 35px;
        color: black;
        margin: 100px;
        margin-left: 200px;
        margin-top: -540px;
        background-color: #C0C0C0;
        }
        <?php include "sidebar.php" ?>
    </style>
 </head>
 </html>
<body>
<section id="sidebar">
    <div class="sidebar-content">
      <img class="mt-3" src="assets/images/Icon dishub.png" alt="" style="width: 100px; margin-left: 50px">
      <hr>
      <p>HOME</p>
      <div class="sidebar-menu">
        <div class="list-item">
          <a href="menu.php">
            <li style="margin-top: 5px; margin-bottom: 40px ">
              <i class="fi fi-rs-people-roof"></i>
              <span style="margin-left: 10px; ">Dashboard</span>
            </li>
          </a>
        </div>
        <hr>
        <p class="mt-4">MENU</p>
        <div class="list-menu">
          <div class="list-item">
            <a href="input.php">
              <li>
                <i class="fi fi-rs-user-add"></i>
                <span style="margin-left: 10px;"> Input Data</span>
              </li>
            </a>
          </div>
          <div class="list-item">
            <a href="daftar.php">
              <li style="margin-top: 5px">
                <i class="fi fi-rs-users-alt"></i>
                <span style="margin-left: 10px;">Daftar Tamu</span>
              </li>
            </a>
          </div>
        </div>
        <a href="login.php"><button>Log Out</button></a>
        <div class="text-border">
          Dinas Perhubungan Kota Bandung
        </div>
      </div>
    </div>

  </section>
<div class="dashboard">
    <!-- Pie chart for Jenis Tamu -->
    <div>
        <h3>JENIS TAMU</h3>
        <canvas id="jenisTamuChart"></canvas>
    </div>

    <!-- Bar chart for Tujuan Kunjungan -->
    <div>
        <h3>TUJUAN KUNJUNGAN</h3>
        <canvas id="tujuanKunjunganChart"></canvas>
    </div>
</div>