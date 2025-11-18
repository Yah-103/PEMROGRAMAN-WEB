<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembaca Bulan dengan SWITCH</title>
</head>
<body>
    <h1>Pembaca Bulan dengan SWITCH</h1>
    
    <label for="bulan">Pilih Bulan:</label>
    <select id="bulan">
        <option value="">-- Pilih Bulan --</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
    </select>
    <br><br>
    
    <button onclick="cekJumlahHari()">Tampilkan Jumlah Hari</button>
    
    <hr>
    
    <div id="result"></div>
    
    <script>
        function cekJumlahHari() {
            const bulanInput = document.getElementById('bulan').value;
            const result = document.getElementById('result');
            
            if (bulanInput === "") {
                alert('Silakan pilih bulan terlebih dahulu!');
                return;
            }
            
            const bulan = parseInt(bulanInput);
            let namaBulan = "";
            let jumlahHari = 0;
            
            switch(bulan) {
                case 1:
                    namaBulan = "Januari";
                    jumlahHari = 31;
                    break;
                    
                case 2:
                    namaBulan = "Februari";
                    jumlahHari = 28;
                    break;
                    
                case 3:
                    namaBulan = "Maret";
                    jumlahHari = 31;
                    break;
                    
                case 4:
                    namaBulan = "April";
                    jumlahHari = 30;
                    break;
                    
                case 5:
                    namaBulan = "Mei";
                    jumlahHari = 31;
                    break;
                    
                case 6:
                    namaBulan = "Juni";
                    jumlahHari = 30;
                    break;
                    
                case 7:
                    namaBulan = "Juli";
                    jumlahHari = 31;
                    break;
                    
                case 8:
                    namaBulan = "Agustus";
                    jumlahHari = 31;
                    break;
                    
                case 9:
                    namaBulan = "September";
                    jumlahHari = 30;
                    break;
                    
                case 10:
                    namaBulan = "Oktober";
                    jumlahHari = 31;
                    break;
                    
                case 11:
                    namaBulan = "November";
                    jumlahHari = 30;
                    break;
                    
                case 12:
                    namaBulan = "Desember";
                    jumlahHari = 31;
                    break;
                    
                default:
                    alert('Bulan tidak valid!');
                    return;
            }
            
            result.innerHTML = "<h2>Hasil Perhitungan</h2>" +
                              "<p><b>Bulan:</b> " + namaBulan + "</p>" +
                              "<p><b>Jumlah Hari:</b> " + jumlahHari + " hari</p>";
        }
    </script>
</body>
</html>