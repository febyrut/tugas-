<!DOCTYPE html>

<html xmlns="" xml:lang="en" lang="en-AU">

<head>

    <title>Seleksi Karyawan Terbaik Di PT Oryza Farma</title>

    <link rel="stylesheet" type="text/css" href="css/screen_yellow.css" media="screen, tv, projection" />

</head>

<body>

    <!-- Main site container -->
    <div id="siteBox">

        <!-- Main site header : holds the img, title and top tabbed menu -->
        <div id="header">

            <!-- top rounded corner -->
            <!-- <img src="images/corner_tl.gif" alt="corner" style="float:left;" /> -->


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
                <!-- <div class="bottomCorner">
                    <img src="images/corner_sub_br.gif" alt="bottom corner" class="vBottom" />
                </div> -->

            </div>


            <!-- Right side main content -->
            <div id="contentRight">

                <p>
                    <span class="header">Tabel Karyawan</span>
                </p>
                <center>
                    <?php
// Koneksi ke database (ganti dengan informasi koneksi yang sesuai)
$koneksi = mysqli_connect("localhost", "root", "", "karyawan_wp");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk menampilkan data dari tabel
$sql = "SELECT * FROM karyawan";
$result = mysqli_query($koneksi, $sql);

// Periksa apakah query berhasil dijalankan
if ($result) {
    // Tampilkan data dalam tabel HTML
    echo '<table border="1">
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['nip'] . '</td>';
        echo '<td>' . $row['nama'] . '</td>';
        echo '<td>' . $row['jk'] . '</td>';
        echo '<td>' . $row['alamat'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';

    // Bebaskan hasil query
    mysqli_free_result($result);
} else {
    // Tampilkan pesan kesalahan jika query gagal
    echo "Error: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>



                    </tbody>
                    </table>
                </center>
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