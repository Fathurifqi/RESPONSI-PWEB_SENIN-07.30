<?php
  echo"<head><tittle>Data pemesanan</title><head>";
  $fp = fopen("pesanan.txt","r");
  echo "<table border=0>";

  while ($isi = fgets($fp,80))
  {
      $pisah = explode("|",$isi);
      echo "<tr><span><td>nama </td><td>:$pisah[0] </td> </span></tr>";
      echo "<tr><span><td>menu </td><td>:$pisah[1] </td> </span></tr>";
      echo "<tr><span><td>catatan </td><td>:$pisah[2] </td> </span></tr>";
      echo "<tr><span><td>alamat </td><td>:$pisah[3] </td> </span></tr>";
      echo "<tr><span><td>nomor </td><td>:$pisah[4] </td> </span></tr>";
      echo "<tr><span><td>jumlah </td><td>:$pisah[5] </td> </span></tr>";
      echo "<tr><span><td>waktu </td><td>:$pisah[6] </td> </span></tr>";

  }

  echo"</table>";
  echo"<a href=index.html> Klik Disini </a> Isi Pesanan kamu";
?>