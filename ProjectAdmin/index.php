<?php 

// MENGAMBIL DAN MEMPROSES FILE DI BAGIAN ATAS
require_once "top.php";
// MEMANGGIL DAN MEMPROSES FILE DI BAGIAN TENGAH
require_once "menu.php";

require_once __DIR__ ."/koneksi.php" ;
require_once __DIR__ . "/Model/Produk.php" ;
require_once __DIR__ . "/Model/Jenis_Produk.php" ;
require_once __DIR__ . "/Model/Pelanggan.php" ;
require_once __DIR__ . "/Model/Pesanan.php" ;
require_once __DIR__ . "/Model/Produk.php" ;


?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                      <h1>Selamat Datang Web Admin</h1>
                      <?php 
                      // algoritma menangkap url agar masuk kedalam index
                      if (isset($_GET['url'])) {
                        $url = $_GET['url'];
                          if ($url == 'dashboard') {
                            require_once "dashboard.php";
                          } else if (!empty($url)) {
                            require_once  $url . ".php";
                          } else {
                            "dashboard.php";
                          }
                      }
                      
                      ?>
                    </div>
                </main>
</div>

<?php 
// MEMANGGIL FILE DIBAGIAN BAWAH
require_once "bottom.php";

?>