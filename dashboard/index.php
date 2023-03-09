<?php 
require "functions.php";
session_start();
if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
};
$title = '';
global $halaman;
if(isset($_GET["hal"])){
  $halaman = $_GET["hal"];
  switch($halaman){
      case "customer":
        $title = "INVENTARIS - Anggaran";
      break;
      case "customer-create":
        $title = "ANGGARAN - Tambah";
      break;

      case "inventarisasi":
        $title = "INVENTARIS - Inventarisasi";
      break;

      case "jabatan":
        $title = "ADMIN - Jabatan";
      break;
      case "jabatan-create":
        $title = "JABATAN - Tambah";
      break;
      case "jabatan-edit":
        $title = "JABATAN - Edit";
      break;

      case "jenis":
        $title = "INVENTARIS - Jenis";
      break;

      case "lokasi":
        $title = "INVENTARIS - Lokasi";
      break;

      case "pegawai":
        $title = "ADMIN - Pegawai";
      break;
      case "pegawai-create":
        $title = "PEGAWAI - Tambah";
      break;

      case "penggunaan":
        $title = "INVENTARIS - Penggunaan";
      break;

      case "petugas":
        $title = "ADMIN - Petugas";
      break;
      default:
      $title = "DASHBOARD";
  }
}
else{
  include("dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="row">
      <div class="container">
        <div class="navigation">
          <ul>
            <li>
              <a href="#">
                <span class="icon">
                  <img src="img/nevtik.svg" width="50px" alt="" class="logo">
                </span>
                <span class="title">Nevtik Wash</span>
              </a>
            </li>

            <li>
              <a href="index.php?hal=dashboard">
                <span class="icon">
                  <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Home</span>
              </a>
            </li>

            <li>
              <a href="index.php?hal=pegawai">
                <span class="icon">
                  <ion-icon name="people-outline"></ion-icon>
                </span>
                <span class="title">Pegawai</span>
              </a>
            </li>

            <li>
              <a href="index.php?hal=customer">
                <span class="icon">
                  <ion-icon name="chatbubble-outline"></ion-icon>
                </span>
                <span class="title">Customer</span>
              </a>
            </li>

            <li>
              <a href="index.php?hal=typemobil">
                <span class="icon">
                  <ion-icon name="car-sport-outline"></ion-icon>
                </span>
                <span class="title">Mobil</span>
              </a>
            </li>
            <li>
              <a href="index.php?hal=typemotor">
                <span class="icon">
                  <ion-icon name="bicycle-outline"></ion-icon>
                </span>
                <span class="title">Motor</span>
              </a>
            </li>

            <li>
              <a href="index.php?hal=jeniscucian">
                <span class="icon">
                  <ion-icon name="water-outline"></ion-icon>
                </span>
                <span class="title">Jenis Cuci</span>
              </a>
            </li> 

            <li>
              <a href="logout.php">
                <span class="icon">
                  <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Sign Out</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="main">
          <div class="topbar">
            <div class="toggle">
              <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
              <label>
                <input type="text" placeholder="Search here" />
                <ion-icon name="search-outline"></ion-icon>
              </label>
            </div>

            <div class="user">
              <img src="./img/nevtik.svg" alt="" />
            </div>
            
          </div>
          <main class="col-md-9 col-lg-10 px-md-4">
        
        <?php
        if(isset($_GET["hal"])){
          switch($halaman){
            case "typemotor":
                include("typemotor/index.php");
              break;
            case "typemotor-create":
                include("typemotor/create.php");
              break;
              case "typemotor-edit":
                include("typemotor/edit.php");
              break;
            case "jeniscucian":
                include("jeniscucian/index.php");
              break;
            case "jeniscucian-create":
                include("jeniscucian/create.php");
              break;
              case "jeniscucian-edit":
                include("jeniscucian/edit.php");
              break;
            case "typemobil":
                include("typemobil/index.php");
              break;
            case "typemobil-create":
                include("typemobil/create.php");
              break;
              case "typemobil-edit":
                include("typemobil/edit.php");
              break;
            case "pegawai":
                include("pegawai/index.php");
              break;
            case "pegawai-create":
                include("pegawai/create.php");
              break;
              case "pegawai-edit":
                include("pegawai/edit.php");
              break;
            case "customer":
                include("customer/index.php");
              break;
            case "customer-create":
                include("customer/create.php");
              break;
              case "customer-edit":
                include("customer/edit.php");
              break;
              default:
              include("dashboard.php");
          }
        }
          else{
            include("dashboard.php");
          }
        ?>
        
          </main>
        </div>
      </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script>
    // add hovered class to selected list item
    let list = document.querySelectorAll(".navigation li");

    function activeLink() {
    list.forEach((item) => {
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
    }

    list.forEach((item) => item.addEventListener("mouseover", activeLink));

    // Menu Toggle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector(".navigation");
    let main = document.querySelector(".main");

    toggle.onclick = function () {
    navigation.classList.toggle("active");
    main.classList.toggle("active");
    };
    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>