<?php 

// Koneksi ke database (ganti dengan informasi koneksi yang sesuai)
$koneksi = mysqli_connect("localhost", "root", "", "karyawan_wp");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil nilai 'nip' dari parameter GET (pastikan untuk menambahkan keamanan)
$nip = isset($_GET['nip']) ? $_GET['nip'] : null;

// Query untuk menghapus data
$query = mysqli_query($koneksi, "DELETE FROM karyawan WHERE nip='$nip'");

// Periksa apakah query berhasil dijalankan
if ($query) {
    echo "Data dengan NIP $nip berhasil dihapus.";
} else {
    // Tampilkan pesan kesalahan jika query gagal
    echo "Error: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
echo "<br>";
$link = "karyawan.php";
echo '<a href="' . $link . '"><button>Kembali</button></a>';
?>
















<!--
include 'koneksi.php';
//$nip = $_GET['nip'];
$nip = isset($_GET['nip']) ? $_GET['nip'] : null;

$query = mysql_query("DELETE FROM karyawan WHERE nip='$nip'") or die(mysql_error());
if ($query) {
	?>
<script language="JavaScript">
alert('Data Karyawan Berhasil dihapus');
document.location = 'analisa_alternatif.php';
</script>

}
?>
*/