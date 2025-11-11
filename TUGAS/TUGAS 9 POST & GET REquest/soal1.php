<html>
<head>
  <title>Menghitung Saldo Tabungan</title>
</head>
<body>
  <h1>Menghitung Saldo Tabungan</h1>
  <form method="post" action="soal1-proses.php">
    <table>
      <tr>
        <td>Saldo Awal:</td>
        <td>:</td>
        <td>Rp. <input type="text" name="saldo_awal" size="20"></td>
      </tr>
      <tr>
        <td>Besar Bunga Perbulan (%):</td>
        <td>:</td>
        <td><input type="text" name="bunga" size="10"> %</td>
      </tr>
      <tr>
        <td>Lama Bulan:</td>
        <td>:</td>
        <td><input type="text" name="lama_bulan" size="10"> bulan</td>
      </tr>
    </table>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
  </form>
</body>
</html>