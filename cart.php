<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <!-- ===== BOX ICONS ===== -->
    <link href="https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css" rel="stylesheet" />

    <!-- ===== Bootstrap ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Tokoku | Laptop</title>
  </head>
  <body>
    <!--===== HEADER =====-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light scroll-navbar">
      <div class="container-fluid">
        <a class="navbar-brand fs-3" href="index.html">Tokoku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link fs-6" href="index.html">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Product </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="product-laptop.html">Laptop</a></li>
                <li><a class="dropdown-item" href="product-phone.html">Phone</a></li>
                <li><a class="dropdown-item" href="product-watch.html">Watch</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-dark me-2" type="submit">Search</button>
            <button class="btn btn-outline-dark me-2" type="button">Login</button>
          </form>
        </div>
      </div>
    </nav>

    <main class="cart-page">
      <div class="container">
        <h2 class="jumlah-barang">Dalam Keranjangmu ada : 2 barang</h2>

        <table class="table table-bordered" width="80">
          <thead class="table-dark">
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Produk</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Harga Satuan</th>
              <th scope="col">Hapus</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>1</th>
              <td>
                <a href="display-product.html"><img src="assets/img/Laptop/Asus/ROG/ROG Flow X13 GV301/ROG Flow X13 Belakang.png" width="100px" height="100px" /></a>
              </td>
              <td>Asus ROG Flow X13 GV301</td>
              <td>
                <div class="quantity">
                  <div class="quantity-select">
                    <input type="number" name="jumlah" class="form-control" height="100px" value="1" \ />
                  </div>
                </div>
              </td>
              <td>Rp 10.000.000</td>
              <td>
                <div class="rem">
                  <input type="submit" name="update" class="form-control" value="Update" \ />
                  <input type="hidden" name="idproduknya" value="" \ />
                  <input type="submit" name="hapus" class="form-control" value="Hapus" \ />
                </div>
              </td>
            </tr>
            <tr>
              <th>2</th>
              <td>
                <a href="display-product.html"><img src="assets/img/Laptop/Asus/ROG/ROG Zephyrus G14/ROG G14 Belakang.png" width="100px" height="100px" /></a>
              </td>
              <td>Asus ROG Zephyrus G14</td>
              <td>
                <div class="quantity">
                  <div class="quantity-select">
                    <input type="number" name="jumlah" class="form-control" height="100px" value="1" \ />
                  </div>
                </div>
              </td>
              <td>Rp 10.000.000</td>
              <td>
                <div class="rem">
                  <input type="submit" name="update" class="form-control" value="Update" \ />
                  <input type="hidden" name="idproduknya" value="" \ />
                  <input type="submit" name="hapus" class="form-control" value="Hapus" \ />
                </div>
              </td>
            </tr>
          </tbody>
        </table>

        <div class="cart-left">	
          <div class="cart-left-basket">
            <h4>Total Harga</h4>
            <ul>
              <li>Asus ROG X13 Flow<i> - </i> <span>Rp 10.000.000</span></li>
              <li>Total (inc. 10k Ongkir)<i> - </i> <span>Rp 10.010.000</span></li>
            </ul>
          </div>
          <div class="cart-right-basket">
            <a href="index.html" ><i class='bx bx-left-arrow-alt button-icon'></i>Continue Shopping</a>
            <a href="checkout.html">Checkout<i class='bx bx-right-arrow-alt button-icon' ></i></a>
          </div>
      </div>

      <div class="clearfix"></div>
    </main>

    <!--===== FOOTER =====-->
    <footer class="footer section">
      <div class="footer_container bd-grid">
        <div class="footer_box">
          <h3 class="footer_title">Tokoku</h3>
          <p class="footer_description">New collection of shoes 2021</p>
        </div>

        <div class="footer_box">
          <h3 class="footer_title ms-4">Explore</h3>
          <ul>
            <li><a href="#" class="footer_link">Home</a></li>
            <li><a href="#" class="footer_link">Featured</a></li>
            <li><a href="#" class="footer_link">Women</a></li>
            <li><a href="#" class="footer_link">New</a></li>
          </ul>
        </div>

        <div class="footer_box">
          <h3 class="footer_title ms-4">Support</h3>
          <ul>
            <li><a href="#" class="footer_link">Product Help</a></li>
            <li><a href="#" class="footer_link">Customer Care</a></li>
            <li><a href="#" class="footer_link">Authorized Service</a></li>
          </ul>
        </div>

        <div class="footer_box">
          <a href="#" class="footer_social"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="footer_social"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="footer_social"><i class="bx bxl-twitter"></i></a>
        </div>
      </div>

      <p class="footer_copy">&#169; 2021 Kelompok 1. XII RPL 1</p>
    </footer>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>