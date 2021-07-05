<?php
session_start();
include "../koneksi.php";
      $nim = $_SESSION['nim'];
      $qry = mysqli_query($koneksi,"select * from user where username='$nim' and jenis='mahasiswa'");
      $us = mysqli_fetch_array($qry);

  $cek = mysqli_query($koneksi,"select * from nilai_dosen where nip='$nim'");
      $r = mysqli_num_rows($cek);
      if ($r > 0){
        header("Location: http://localhost//projectAkhir_SCPK/data_dosen/homepage.php?aksi=nilai");
      }else if ($r == 0){
        $cek_p = mysqli_query($koneksi,"select * from dosen_peserta where nip='$nim'");
        $rp = mysqli_num_rows($cek_p);
        if ($rp > 0){
          header("Location: http://localhost/projectAkhir_SCPK/data_dosen/homepage.php?aksi=daftar");
        }else{
          header("Location: http://localhost/projectAkhir_SCPK/data_dosen/homepage.php");
        }
      }

?>