<?php
include("connect.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $prodi = $_POST['prodi'];

    $sql = "UPDATE `mahasiswa` SET `nama` = '$nama', `alamat` = '$alamat', `telp` = '$telp', `prodi` = '$prodi' WHERE `mahasiswa`.`id_mahasiswa` = $id;";
    $query = mysqli_query($db, $sql);
// header('Location: index.php');

    ?>
<script type="text/javascript">
    alert('Data Berhasil Diedit');
    window.location.href='index.php';
</script>
    <?php
}
?>

//     if ($query) {

//         header('Location: index.php');
//     } else {

//         die("Gagal menyimpan perubahan...");
//     }
// } else {
//     die("Akses dilarang...");
}
