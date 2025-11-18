<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Upah Karyawan</title>
</head>
<body>
    <h2>Kalkulator Upah Karyawan</h2>
    <form method="POST">
        <label for="jam_kerja">Jumlah Jam Kerja dalam Seminggu:</label><br>
        <input type="number" id="jam_kerja" name="jam_kerja" required min="0" step="0.1"><br><br>
        <button type="submit">Hitung Upah</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam_kerja = $_POST['jam_kerja'];
        
        $upah_normal = 2000;  
        $upah_lembur = 3000;   
        
        $batas_jam_normal = 48;
        
        if ($jam_kerja <= $batas_jam_normal) {
            $total_upah = $jam_kerja * $upah_normal;
            $jam_normal = $jam_kerja;
            $jam_lembur = 0;
            $upah_jam_normal = $total_upah;
            $upah_jam_lembur = 0;
        } else {
            $jam_normal = $batas_jam_normal;
            $jam_lembur = $jam_kerja - $batas_jam_normal;
            
            $upah_jam_normal = $jam_normal * $upah_normal;
            $upah_jam_lembur = $jam_lembur * $upah_lembur;
            
            $total_upah = $upah_jam_normal + $upah_jam_lembur;
        }
        
        echo "<hr>";
        echo "<h3>Hasil Perhitungan Upah</h3>";
        echo "<p><strong>Total Jam Kerja:</strong> $jam_kerja jam</p>";
        echo "<p><strong>Jam Kerja Normal:</strong> $jam_normal jam × Rp. " . number_format($upah_normal, 0, ',', '.') . " = Rp. " . number_format($upah_jam_normal, 0, ',', '.') . "</p>";
        
        if ($jam_lembur > 0) {
            echo "<p><strong>Jam Lembur:</strong> $jam_lembur jam × Rp. " . number_format($upah_lembur, 0, ',', '.') . " = Rp. " . number_format($upah_jam_lembur, 0, ',', '.') . "</p>";
        }
        
        echo "<hr>";
        echo "<h3><strong>Total Upah yang Diterima: Rp. " . number_format($total_upah, 0, ',', '.') . "</strong></h3>";
    }
    ?>
</body>
</html>