<!DOCTYPE html>

<html xmlns="" xml:lang="en" lang="en-AU">

<head>
    <title>Pemilihan Karyawan Terbaik Di PT DSS</title>
    <link rel="stylesheet" type="text/css" href="css/screen_yellow.css" media="screen, tv, projection" />
</head>

<body>
    <p>Tanggal/Waktu: MM/DD/YYYY hh:mm<br>
        <?php 
date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
echo date('h:i:s a'); 
echo "<br/>";
echo date('l, d-m-Y  H:i:s'); 
?>

        <!-- Main site container -->
    <div id="siteBox">


        <!-- Main site header : holds the img, title and top tabbed menu -->
        <div id="header">

            <!-- top rounded corner -->
            ]


            <!-- Site title and subTitle -->
            <span class="title">
                <span class="white">
                    <marquee>Pemilihan Karyawan Terbaik Di PT DSS |
                </span>Febyola Ruthomi Hematang </marquee>

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
                    <!-- <img src="images/corner_sub_br.gif" alt="bottom corner" class="vBottom" />
                </div>-->

                </div>



                <!-- Right side main content -->
                <div id="contentRight">

                    <p>
                        <span class="header">Beranda</span>

                    </p>

                    <p>
                    </p>

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