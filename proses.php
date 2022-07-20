<?php
  echo "<head><title>Data Pemesanan</title></head>";
  $fp=fopen("pesanan.txt","a+");
  $nama = $_POST['nama'];
  $menu = $_POST['menu'];
  $catatan = $_POST['catatan'];
  $alamat = $_POST['alamat'];
  $nomor = $_POST['nomor'];
  $jumlah = $_POST['jumlah'];
  $waktu = $_POST['waktu'];
  fputs($fp,"$nama|$menu|$catatan|$alamat|$nomor|$jumlah|$waktu");
  fclose($fp);

  echo "Terima kasih sudah memesan. kami akan siapkan segera<br>";
  echo"<a href=index.html> Isi Pesanan anda</a><br>";
  echo"<a href=lihat.php> Lihat pesanan anda</a><br>";
?>