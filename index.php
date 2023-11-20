<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pertemuan 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</style>
</head>
<body class="d-flex flex-column h-100">
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li>
            <a href="/WEB/pertemuan10" class="nav-link px-2 text-secondary">Home</a>
          </li>
          <li>
            <a href="index.php?page=kategori" class="nav-link px-2 text-white">Category</a>
          </li>
          <li>
            <a href="index.php?page=produk" class="nav-link px-2 text-white">Product</a>
          </li>
          <li>
            <a href="index.php?page=pesanan" class="nav-link px-2 text-white">Order</a>
          </li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
      </div>
    </div>
  </header>

  <div class="container flex-grow-1" id="content">
    <div class="col p-3 h-100">
      <div class="p-3">
          <?php
            include "sql.php"; 
            $halaman = isset($_GET['page']) ? $_GET['page'] : 'produk';

            switch ($halaman) {
                case 'kategori':
                    include('kategori.php'); 
                    break;
                case 'pesanan':
                    include('pesanan.php'); 
                    break;
                default:
                    include('produk.php'); 
                    break;
            }
          ?>     
      </div>  
    </div>
  </div>

  <footer class="bg-dark text-white p-3" >
      <a>&copy; 2023</a>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>