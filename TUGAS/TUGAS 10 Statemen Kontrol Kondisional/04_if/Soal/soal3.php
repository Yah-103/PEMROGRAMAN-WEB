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
        
        <label for="golongan">Golongan Karyawan:</label><br>
        <select id="golongan" name="golongan" required>
            <option value="">-- Pilih Golongan --</option>
            <option value="A">A - Rp. 4.000/jam</option>
            <option value="B">B - Rp. 5.000/jam</option>
            <option value="C">C - Rp. 6.000/jam</option>
            <option value="D">D - Rp. 7.500/jam</option>
        </select><br><br>
        
        <button type="submit">Hitung Upah</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam_kerja = $_POST['jam_kerja'];
        $golongan = $_POST['golongan'];
        
        $upah_per_golongan = [
            'A' => 4000,
            'B' => 5000,
            'C' => 6000,
            'D' => 7500
        ];
        
        $upah_lembur = 3000;
        
        $batas_jam_normal = 48;
        
        $upah_normal = $upah_per_golongan[$golongan];
        
        if ($jam_kerja <= $batas_jam_normal) {
            $jam_normal = $jam_kerja;
            $jam_lembur = 0;
            $upah_jam_normal = $jam_kerja * $upah_normal;
            $upah_jam_lembur = 0;
            $total_upah = $upah_jam_normal;
        } else {
            $jam_normal = $batas_jam_normal;
            $jam_lembur = $jam_kerja - $batas_jam_normal;
            
            $upah_jam_normal = $jam_normal * $upah_normal;
            $upah_jam_lembur = $jam_lembur * $upah_lembur;
            
            $total_upah = $upah_jam_normal + $upah_jam_lembur;
        }
        
        echo "<hr>";
        echo "<h3>Hasil Perhitungan Upah</h3>";
        echo "<p><strong>Golongan:</strong> $golongan</p>";
        echo "<p><strong>Upah Per Jam:</strong> Rp. " . number_format($upah_normal, 0, ',', '.') . "</p>";
        echo "<p><strong>Total Jam Kerja:</strong> $jam_kerja jam</p>";
        echo "<hr>";
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