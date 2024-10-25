<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>
    <!-- icon -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Link ke pustaka Chart.js -->

    <style>
        .dashboard {
            display: flex;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
        }

        .dashboard > div {
            margin-bottom: 20px; /* Menambahkan jarak antar elemen */
            width: 30%; /* Menjadikan lebar elemen menyesuaikan container */
            margin-top: 100px;
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
    </style>
</head>
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
                            <span style="margin-left: 10px;">Dashboard</span>
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

    <script>
        // Grafik pie untuk Jenis Tamu
        var ctx1 = document.getElementById('jenisTamuChart').getContext('2d');
        var jenisTamuChart = new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: ['Lembaga/Instansi', 'Perorangan/Masyarakat Umum'],
                datasets: [{
                    label: 'Jenis Tamu',
                    data: [257, 163], // Data sesuai gambar Anda
                    backgroundColor: ['#4db8ff', '#ff6666'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        enabled: true,
                    }
                }
            }
        });

        // Grafik batang untuk Tujuan Kunjungan
        var ctx2 = document.getElementById('tujuanKunjunganChart').getContext('2d');
        var tujuanKunjunganChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['A', 'B', 'C', 'D'], // Label sumbu X
                datasets: [{
                    label: 'A',
                    data: [300, 0, 0, 0], // Data untuk setiap batang
                    backgroundColor: '#ff6666',
                    borderWidth: 1
                },
                {
                    label: 'B',
                    data: [0, 200, 0, 0], // Data untuk setiap batang
                    backgroundColor: '#4db8ff',
                    borderWidth: 1
                },
                {
                    label: 'C',
                    data: [0, 0, 150, 0], // Data untuk setiap batang
                    backgroundColor: '#ffdb4d',
                    borderWidth: 1
                },
                {
                    label: 'D',
                    data: [0, 0, 0, 100], // Data untuk setiap batang
                    backgroundColor: '#66ff66',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 400
                    }
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
