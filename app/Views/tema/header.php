<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <style>
    .navbar .navbar-nav .nav-link {
      color: #fff;
      /*font-size: 1.1em;*/
    }

    .navbar .navbar-nav .nav-link:hover {
      background-color: #000080;
      color: #fff;
    }
  </style>
  <title>Hello, world!</title>
</head>

<body>



  <!-- h-100 takes the full height of the body-->
  <div class="container-fluid h-100">

    <!-- h-100 takes the full height
           of the container-->
    <div class="row h-100">
      <div class="col-12">

        <!-- Top navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/rt02/public/index.php/kk/"><strong>SiRT2 </strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="http://localhost/rt02/public/index.php/kk/">[ Warga ]</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link active dropdown-toggle" href="#" id="transaksi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    [ Data Iuran ]
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="http://localhost/rt02/public/index.php/iuran/">Data Master Iuran</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="http://localhost/rt02/public/index.php/iuran/iuran_warga">Data Iuran Warga</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link active dropdown-toggle" href="#" id="transaksi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    [ Transaksi Iuran ]
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="http://localhost/rt02/public/index.php/iuran/iuran_bulan">per Bulan</a></li>
                    <li><a class="dropdown-item" href="http://localhost/rt02/public/index.php/iuran/iuran_kk">per KK</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link active dropdown-toggle" href="#" id="laporan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    [ Laporan ]
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Laporan 1</a></li>
                    <li><a class="dropdown-item" href="#">Laporan 2</a></li>
                    <li><a class="dropdown-item" href="#">Laporan 3</a></li>
                  </ul>
                </li>
              </ul>

            </div>
          </div>
        </nav>
        <br />