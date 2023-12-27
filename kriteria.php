<!DOCTYPE html>

<html xml:lang="en" lang="en-AU">

<head>

    <title>Seleksi Karyawan Terbaik</title>

    <link rel="stylesheet" type="text/css" href="css/screen_yellow.css" media="screen, tv, projection" />

</head>

<body>

    <!-- Main site container -->
    <div id="siteBox">

        <!-- Main site header : holds the img, title and top tabbed menu -->
        <div id="header">

            <!-- top rounded corner -->
            <img src="images/corner_tl.gif" alt="corner" style="float:left;" />


            <!-- Site title and subTitle -->
            <span class="title">
                <marquee>FEBYOLA RUTHOMI HEMATANG |
            </span>SISTEM PENUNJANG KEPUTUSAN </marquee>
            </span>
            </span>


        </div>

        <!-- Content begins -->
        <div id="content">

            <!-- Left side menu : side bar links/news/search/etc. -->
            <div id="contentLeft">

                <p>
                    <span class="header">Data Karyawan</span>
                </p>

                <p>
                    <a href="index.php" title="different colour scheme" class="menuItem">Home</a>
                    <a href="input_karyawan.php" title="whole wack of art" class="menuItem">Input Karyawan</a>
                    <a href="karyawan.php" title="design work" class="menuItem">Lihat Karyawan</a>
                </p>

                <p>
                    <span class="header">SPK</span>
                </p>
                <p>
                    <a href="kriteria_tambah.php" title="different colour scheme" class="menuItem">Inpt Nilai
                        Kriteria</a>
                    <a href="kriteria.php" title="different colour scheme" class="menuItem">Kriteria</a>
                    <a href="hasil.php" title="different colour scheme" class="menuItem">Hasil</a>
                </p>


                <!-- Creates the rounded corner on the bottom of the left menu -->
                <div class="bottomCorner">
                    <img src="images/corner_sub_br.gif" alt="bottom corner" class="vBottom" />
                </div>

            </div>



            <!-- Right side main content -->
            <div id="contentRight">

                <p>
                    <span class="header">Data Kriteria</span>

                </p>


                <?php 
           $koneksi = mysqli_connect("localhost", "root", "", "karyawan_wp");
           

          $nomor = 0;
          
// Koneksi ke database (ganti dengan informasi koneksi yang sesuai)
$koneksi = mysqli_connect("localhost", "root", "", "karyawan_wp");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk menampilkan data dari tabel
$query = "SELECT * FROM kriteria";
$result = mysqli_query($koneksi, $query);

// Periksa apakah query berhasil dijalankan
if ($result) {
    // Tampilkan data dalam tabel HTML
    echo '<center>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C5</th>
                    </tr>
                </thead>
                <tbody>';

    // Nomor urut
    $nomor = 0;

    // Tampilkan data
    while ($data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . ++$nomor . "</td>";
        echo "<td>" . $data['nama'] . "</td>";
        echo "<td>" . $data['c1'] . "</td>";
        echo "<td>" . $data['c2'] . "</td>";
        echo "<td>" . $data['c3'] . "</td>";
        echo "<td>" . $data['c4'] . "</td>";
        echo "<td>" . $data['c5'] . "</td>";
        echo "</tr>";
    }

    echo '</tbody>
          </table>
          </center>';
    // Bebaskan hasil query
    mysqli_free_result($result);
} else {
    // Tampilkan pesan kesalahan jika query gagal
    echo "Error: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>


                <p>
                    <span class="header"></span>

                </p>
                <!-- Creates bottom left rounded corner -->
                <img src="images/corner_sub_bl.gif" alt="bottom corner" class="vBottom" />

            </div>

        </div>

        <!-- Footer begins -->
        <div id="footer">

            <div id="footerLeft">

            </div>

            <div id="footerRight">
                &nbsp;
            </div>

        </div>

    </div>

</body>

</html>