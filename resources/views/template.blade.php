<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="dara-touch-icon" sizes="120x120" href="../assets/img/daraicon.png">
  <link rel="icon" type="image/png" href="../assets/img/daraicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/bootstrap-icons-1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    @yield('sidebar')
    <!-- End Sidebar -->
    <div class="main-panel" style="background-color:white">
      <!-- Navbar -->
      <nav class="navbar" style="margin-bottom:-80px">
        <div class="title">
          <a class="navbar-brand" href="javascript:;" style="visibility: hidden;margin-left:12px;margin-top:10px;border-radius:10px;text-align:center;width:250px;background-color:#3B4B65; color:white; font-weight:bold">
            Title
          </a>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- Content -->
      @yield('content')
      <!-- EndContent -->

    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {

      var currentUrl = window.location.href;

      // Loop melalui setiap tautan sidebar
      $(".sidebar a").each(function() {
        // Memeriksa apakah tautan saat ini sesuai dengan URL saat ini
        if ($(this).attr("href") === currentUrl) {
          // Mengubah warna latar belakang sidebar
          $(".active").css("background-color", "#1B77A0");
          return false; // Berhenti dari loop jika tautan cocok
        }
      });
    });
  </script>
  <script>
    // Mendapatkan nama halaman dari URL
    var currentPage = window.location.href;
    currentPage = currentPage.split('/').pop(); // Mengambil bagian terakhir dari URL

    // Membuat objek untuk memetakan judul halaman
    var pageTitleMap = {
      'dashboard': 'DASHBOARD',
      'stokdarah': 'STOK DARAH',
      'riwayatdonor': 'RIWAYAT',
      'jadwaldonor': 'JADWAL DONOR',
      'kelolaakun': 'KELOLA AKUN',
      'datapendonor' : 'DATA PENDONOR',
      'berita': 'BERITA',
      'akun': 'AKUN',
      // Tambahkan halaman lain dan judulnya di sini
    };

    // Mendapatkan elemen dengan class "title"
    var titleElement = document.querySelector('.navbar-brand');

    // Mengubah judul berdasarkan halaman yang aktif
    if (pageTitleMap[currentPage]) {
      titleElement.innerHTML = pageTitleMap[currentPage];
      titleElement.style.visibility = 'visible';
    }
  </script>
  <script>
    function validasiInput(input) {
      if (input.value.length > 8) {
        input.value = input.value.slice(0, 8); // Membatasi input hingga 8 digit
      }
    }
  </script>
  <script>
    // Mendapatkan elemen input file
    var inputGambar = document.getElementById('gambar');
    // Mendapatkan elemen span keterangan
    var keteranganGambar = document.getElementById('keterangan-gambar');

    // Menambahkan event listener untuk memantau pemilihan file
    inputGambar.addEventListener('change', function() {
      if (inputGambar.files.length > 0) {
        // Jika ada file yang dipilih, update teks keterangan
        keteranganGambar.textContent = 'Gambar telah dipilih: ' + inputGambar.files[0].name;
      } else {
        // Jika tidak ada file yang dipilih, kembalikan teks keterangan ke default
        keteranganGambar.textContent = 'Tidak ada gambar yang dipilih';
      }
    });
  </script>





</body>

</html>