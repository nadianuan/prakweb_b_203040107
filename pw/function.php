<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'prakweb_b_203040107');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $judul_buku = htmlspecialchars($data['judul_buku']);
  $penulis =  htmlspecialchars($data['penulis']);
  $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO buku VALUES (null, '$judul_buku', '$penulis', '$tahun_terbit', '$gambar')";

  mysqli_query($conn, $query);
  //echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $penulis =  htmlspecialchars($data['penulis']);
  $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
  $gambar = htmlspecialchars($data['gambar']);


  $query = "UPDATE buku SET
              judul_buku = '$judul_buku',
              penulis = '$penulis',
              tahun_terbit = '$tahun_terbit',
              gambar = '$gambar'
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}