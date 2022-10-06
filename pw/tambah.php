<?php
require 'function.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('data berhasil ditambahkan!');
          document.location.href = 'index.php';    
          </script>";
  } else {
    echo  "<script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php';    
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Daftar Buku</title>
</head>
<body>
    <h3>Form Tambah Daftar Buku</h3>

    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    Judul Buku :               
                    <input type="text" name="judul_buku" autofocus required>  
                </label>            
            </li>
            <li>
                <label>
                    penulis :  
                    <input type="text" name="penulis" required>              
                </label>    
            </li>
            <li>
                <label>
                    tahun terbit :      
                    <input type="text" name="tahun_terbit" required>           
                </label>           
            </li>
            <li>
                <label>
                    Gambar :   
                    <input type="text" name="gambar" required>              
                </label>    
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data!</button>
            </li>
        </ul>
    </form>
    
</body>
</html>