<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Tahun Kabisat</title>
</head>
<body>
    <h2>Cek Tahun Kabisat</h2>
    <form method="POST">
        <label for="tahun">Masukkan Tahun:</label>
        <input type="number" id="tahun" name="tahun" required min="1">
        <button type="submit">Cek Tahun</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tahun = $_POST['tahun'];
        
        $isKabisat = false;
        
        if ($tahun % 400 == 0) {
            $isKabisat = true;
        } elseif ($tahun % 100 == 0) {
            $isKabisat = false;
        } elseif ($tahun % 4 == 0) {
            $isKabisat = true;
        }
        
        echo "<hr>";
        if ($isKabisat) {
            echo "<p>Tahun $tahun adalah <strong>TAHUN KABISAT</strong></p>";
        } else {
            echo "<p>Tahun $tahun <strong>BUKAN TAHUN KABISAT</strong></p>";
        }
    }
    ?>
</body>
</html>