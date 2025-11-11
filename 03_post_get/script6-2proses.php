<html>
<head>
  <title>Menghitung Komisi Salesman</title>
</head>
<body>
<h1>Menghitung Komisi Salesman</h1>
<?php
$nilaiJual = $_POST['penjualan'];  
$prosenKomisi = $_POST['komisi'];  

$komisi = $nilaiJual * $prosenKomisi / 100; 

echo "<p>Nilai penjualan salesman : Rp. ".$nilaiJual."</p>"; 
echo "<p>Prosentase komisi : ".$prosenKomisi." %</p>";  
echo "<p>Komisi yang diterima salesman adalah Rp. ".$komisi."</p>";  
?>

</body>
</html>