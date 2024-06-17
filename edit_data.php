<?php
    include"koneksi.php";

    $npm = $_GET['id'];

    $proses_ambil = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id = $npm")
        or die(mysqli_error($koneksi));
?>