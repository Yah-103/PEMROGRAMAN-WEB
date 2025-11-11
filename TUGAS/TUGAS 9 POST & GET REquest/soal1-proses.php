<html>
<head>
  <title>Hasil Perhitungan Saldo Tabungan</title>
</head>
<body>
  <h1>Hasil Perhitungan Saldo Tabungan</h1>
  <?php
  $saldoAwal = $_POST['saldo_awal'];
  $bunga = $_POST['bunga'];
  $lamaBulan = $_POST['lama_bulan'];
  
  $saldoAkhir = $saldoAwal;
  
  for ($i = 1; $i <= $lamaBulan; $i++) {
    $saldoAkhir = $saldoAkhir + ($saldoAkhir * $bunga / 100);
  }
  
  echo "<p>Saldo Awal: Rp. " . number_format($saldoAwal, 2, ',', '.') . "</p>";
  echo "<p>Besar Bunga Perbulan: " . $bunga . " %</p>";
  echo "<p>Lama Bulan: " . $lamaBulan . " bulan</p>";
  echo "<p><strong>Saldo Akhir setelah " . $lamaBulan . " bulan: Rp. " . number_format($saldoAkhir, 2, ',', '.') . "</strong></p>";
  ?>
  
  <br>
  <a href="javascript:history.back()">Kembali ke Form</a>
</body>
</html>