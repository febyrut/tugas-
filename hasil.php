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
                    <span class="header">hasil</span>
                <h3 align="center">Pilih Bobot</h3>
                <form action="hasil.php" method="post">
                    <table align="center">
                        <tr>
                            <td>C1. Absensi</td>
                            <td>:</td>
                            <td>
                                <select name="bobot_c1">
                                    <option value="1">Bobot 1</option>
                                    <option value="2">Bobot 2</option>
                                    <option value="3">Bobot 3</option>
                                    <option value="4">Bobot 4</option>
                                    <option value="5">Bobot 5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>C2. Atitut</td>
                            <td>:</td>
                            <td>
                                <select name="bobot_c2">
                                    <option value="1">Bobot 1</option>
                                    <option value="2">Bobot 2</option>
                                    <option value="3">Bobot 3</option>
                                    <option value="4">Bobot 4</option>
                                    <option value="5">Bobot 5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>C3. Loyaritas</td>
                            <td>:</td>
                            <td>
                                <select name="bobot_c3">
                                    <option value="1">Bobot 1</option>
                                    <option value="2">Bobot 2</option>
                                    <option value="3">Bobot 3</option>
                                    <option value="4">Bobot 4</option>
                                    <option value="5">Bobot 5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>C4. Disiplin</td>
                            <td>:</td>
                            <td>
                                <select name="bobot_c4">
                                    <option value="1">Bobot 1</option>
                                    <option value="2">Bobot 2</option>
                                    <option value="3">Bobot 3</option>
                                    <option value="4">Bobot 4</option>
                                    <option value="5">Bobot 5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>C5. Skill</td>
                            <td>:</td>
                            <td>
                                <select name="bobot_c5">
                                    <option value="1">Bobot 1</option>
                                    <option value="2">Bobot 2</option>
                                    <option value="3">Bobot 3</option>
                                    <option value="4">Bobot 4</option>
                                    <option value="5">Bobot 5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="simpan" value="Hitung">
                            </td>
                        </tr>
                    </table>
                </form>
                <h4 align="center">Bobot yang di Pilih :
                    <?php 
        if (isset($_POST['simpan'])) {
            $bobot_c1 = $_POST['bobot_c1'];
            $bobot_c2 = $_POST['bobot_c2'];
            $bobot_c3 = $_POST['bobot_c3'];
            $bobot_c4 = $_POST['bobot_c4'];
            $bobot_c5 = $_POST['bobot_c5'];
            
            echo "C1 (<font color=aqua>".$bobot_c1."</font>) | C2 (<font color=aqua>". $bobot_c2 
                ."</font>) | C3 (<font color=aqua>". $bobot_c3 ."</font>) | C4 (<font color=aqua>" 
                . $bobot_c4 ."</font>) | C5 (<font color=aqua>". $bobot_c5 ."</font>)";
        }?>
                </h4>
                <br>

                <p>
                    <span class="header"></span>
                </p>

                <center>
                    <h3>Perbaikan Bobot</h3>
                </center>
                <table align="center" border="1" cellpadding="0" cellspacing="0" width="80%">
                    <tr>
                        <th>W1</th>
                        <th>W2</th>
                        <th>W3</th>
                        <th>W4</th>
                        <th>W5</th>
                    </tr>
                    <?php          
          if (isset($_POST['simpan'])) {
            $bobot_c1 = $_POST['bobot_c1'];
            $bobot_c2 = $_POST['bobot_c2'];
            $bobot_c3 = $_POST['bobot_c3'];
            $bobot_c4 = $_POST['bobot_c4'];
            $bobot_c5 = $_POST['bobot_c5'];
            echo "<tr>";
            echo "<td>" . round($bobot_c1/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),2) ."</td>";
            echo "<td>" . round($bobot_c2/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),2) ."</td>";
            echo "<td>" . round($bobot_c3/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),2) ."</td>";
            echo "<td>" . round($bobot_c4/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),2) ."</td>";
            echo "<td>" . round($bobot_c5/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),2) ."</td>";

            $c1 = round($bobot_c1/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),2);
            $c2 = round($bobot_c2/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),2);
            $c3 = round($bobot_c3/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),2);
            $c4 = round($bobot_c4/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),2);
            $c5 = round($bobot_c5/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),2);
          }
          ?>
                </table>

                </p>


                <p>
                    <span class="header"></span>
                <h3 align="center">Perhitungan Vektor</h3>
                <table border="1" cellspacing="0" cellspacing="0" width="80%" align="center">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>C1. </th>
                            <th>C2. </th>
                            <th>C3. </th>
                            <th>C4. </th>
                            <th>C5. </th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
            $koneksi = mysqli_connect("localhost", "root", "", "karyawan_wp");
            error_reporting(E_ALL^(E_NOTICE|E_WARNING));
            
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
    echo '<center>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C5</th>
                        <th>Hasil</th>
                    </tr>
                </thead>
                <tbody>';

    while ($data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $data['nama'] . "</td>";
        echo "<td>" . round(pow($data['c1'], $c1), 3) . "</td>";
        echo "<td>" . round(pow($data['c2'], $c2), 3) . "</td>";
        echo "<td>" . round(pow($data['c3'], $c3), 3) . "</td>";
        echo "<td>" . round(pow($data['c4'], $c4), 3) . "</td>";
        echo "<td>" . round(pow($data['c5'], $c5), 3) . "</td>";
        echo "<td>" . round((pow($data['c1'], $c1) * pow($data['c2'], $c2) * pow($data['c3'], $c3)
                             * pow($data['c4'], $c4) * pow($data['c5'], $c5)), 2) . "</td>";
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
mysqli_close($koneksi);?>

                    </tbody>
                </table>
                </p>

                <p class="header">
                <h3 align="center">Perangkingan</h3>
                <table border="1" cellpadding="0" cellspacing="0" width="80%" align="center">
                    <thead>

                    </thead>
                    <tbody>
                        <?php
// Koneksi ke database (ganti dengan informasi koneksi yang sesuai)
$koneksi = mysqli_connect("localhost", "root", "", "karyawan_wp");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk menghitung GRANDTOTAL
$queryGrandTotal = mysqli_query($koneksi, "SELECT
    POWER(C1, $c1) AS C1,
    POWER(C2, $c2) AS C2,
    POWER(C3, $c3) AS C3,
    POWER(C4, $c4) AS C4,
    POWER(C5, $c5) AS C5,
    (
    POWER(C1, $c1) *
    POWER(C2, $c2) *
    POWER(C3, $c3) *
    POWER(C4, $c4) *
    POWER(C5, $c5)
    ) AS TOTAL,
    SUM(
    POWER(C1, $c1) *
    POWER(C2, $c2) *
    POWER(C3, $c3) *
    POWER(C4, $c4) *
    POWER(C5, $c5)
    ) AS GRANDTOTAL
    FROM kriteria");
$q = mysqli_fetch_array($queryGrandTotal);

// Query untuk menampilkan data kriteria
$queryKriteria = mysqli_query($koneksi, "SELECT * FROM kriteria");

// Tampilkan hasil query dalam bentuk tabel
if ($queryKriteria) {
    echo '<table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Nilai Normalisasi</th>
                </tr>
            </thead>
            <tbody>';

    $nomor = 0;
    while ($data = mysqli_fetch_assoc($queryKriteria)) {
        $nilaiNormalisasi = round((pow($data['c1'], $c1) * pow($data['c2'], $c2) * pow($data['c3'], $c3)
            * pow($data['c4'], $c4) * pow($data['c5'], $c5)) / $q['GRANDTOTAL'], 3);

        echo "<tr>";
        echo "<td>" . ++$nomor . "</td>";
        echo "<td>" . $data['nama'] . "</td>";
        echo "<td>" . $nilaiNormalisasi . "</td>";
        echo "</tr>";

        // Insert data ke tabel rangking
        $data1 = $data['nama'];
        $data2 = $nilaiNormalisasi;
        $sql = "INSERT INTO rangking VALUES ('$data1','$data2')";
        mysqli_query($koneksi, $sql);
    }

    echo '</tbody>
          </table>';
} else {
    // Tampilkan pesan kesalahan jika query gagal
    echo "Error: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>

                    </tbody>
                </table>
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