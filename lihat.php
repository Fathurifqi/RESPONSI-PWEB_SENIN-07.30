<?php
  echo"<head><tittle>Data pemesanan</title><head>";
  $fp = fopen("pesanan.txt","r");
  echo "<table border=0>";

  while ($isi = fgets($fp,80))
  {
      $pisah = explode("|",$isi);
      echo "<tr><td>nama</td><td>:$pisah[0]</td></tr>";
      echo "<tr><td>menu</td><td>:$pisah[1]</td></tr>";
      echo "<tr><td>catatan</td><td>:$pisah[2]</td></tr>";
      echo "<tr><td>alamat</td><td>:$pisah[3]</td></tr>";
      echo "<tr><td>nomor</td><td>:$pisah[4]</td></tr>";
      echo "<tr><td>jumlah</td><td>:$pisah[5]</td></tr>";
      echo "<tr><td>waktu</td><td>:$pisah[6]</td></tr>";

  }

  echo"</table>";
  echo"<a href=index.html> Klik Disini </a> Isi Pesanan kamu";
?>