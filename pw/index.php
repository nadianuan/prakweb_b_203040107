<?php
require 'function.php';

$buku = query("SELECT * FROM buku");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../pw/style.css" >
  </head>

<body class="luar">
<h3 class="text-center">Daftar Buku</h3>

<a class="btn btn-secondary" href="tambah.php">Tambah Data Buku</a>
<br><br>
  
  <table class="table table-striped">
  <tr class="top">
      <th>id</th>
      <th>judul Buku</th>
      <th>penulis</th>
      <th>penerbit</th>
      <th>gambar</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $sb) : ?>
      <tr class="isi">
        <td><?= $i ?></td>
        <td><?= $sb['judul_buku']; ?></td>
        <td><?= $sb['penulis']; ?></td>
        <td><?= $sb['tahun_terbit']; ?></td>
        <td><img src="img/<?= $sb['gambar']; ?>" alt="" width="100"></td>
        <td>
          <a class="btn btn-secondary" href="ubah.php?id=<?= $sb['id']; ?>">ubah</a> | 
          <a class="btn btn-secondary" href="hapus.php?id=<?= $sb['id']; ?>" onclick="return confirm('apakah anda yakin?');" role="button">hapus</a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>

</body>

</html>