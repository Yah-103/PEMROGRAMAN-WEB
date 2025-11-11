<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pecahan Uang</title>
</head>
<body>
    <h1>Kalkulator Pecahan Uang</h1>
    <h3>Soal 2 - Perhitungan Pecahan Uang</h3>
    
    <p><strong>Deskripsi:</strong> Ibu ingin mengambil uang tabungan Rp 1.575.250. Tentukan jumlah pecahan uang yang diperoleh (Rp 100.000, Rp 50.000, Rp 20.000, Rp 5.000, Rp 100, Rp 50).</p>
    
    <hr>
    
    <label for="totalMoney"><strong>Jumlah Uang Tabungan (Rp):</strong></label><br>
    <input type="number" id="totalMoney" placeholder="Contoh: 1575250" value="1575250" size="30"><br>
    <span id="errorTotal" style="color: red; display: none;">Masukkan jumlah uang yang valid</span>
    
    <br><br>
    
    <button onclick="calculate()">Hitung</button>
    <button onclick="resetForm()">Reset</button>
    
    <br><br>
    
    <div id="result" style="display: none;">
        <hr>
        <h2>Hasil Perhitungan</h2>
        <div id="breakdownList"></div>
    </div>
    
    <script>
        function calculate() {
            let jumlahUang = parseInt(document.getElementById('totalMoney').value) || 0;
            
            const errorElement = document.getElementById('errorTotal');
            
            if (jumlahUang <= 0) {
                errorElement.style.display = 'block';
                document.getElementById('result').style.display = 'none';
                return;
            }
            
            errorElement.style.display = 'none';
            
              const count100k = Math.floor(jumlahUang / 100000);
            jumlahUang = jumlahUang % 100000;
            
            const count50k = Math.floor(jumlahUang / 50000);
            jumlahUang = jumlahUang % 50000;
            
            const count20k = Math.floor(jumlahUang / 20000);
            jumlahUang = jumlahUang % 20000;
            
            const count5k = Math.floor(jumlahUang / 5000);
            jumlahUang = jumlahUang % 5000;
            
            const count100 = Math.floor(jumlahUang / 100);
            jumlahUang = jumlahUang % 100;
            
            const count50 = Math.floor(jumlahUang / 50);
            jumlahUang = jumlahUang % 50;
            
             const breakdownList = document.getElementById('breakdownList');
            breakdownList.innerHTML = `
                <p>Jumlah Rp. 100.000 : <strong>${count100k}</strong></p>
                <p>Jumlah Rp. 50.000 : <strong>${count50k}</strong></p>
                <p>Jumlah Rp. 20.000 : <strong>${count20k}</strong></p>
                <p>Jumlah Rp. 5.000 : <strong>${count5k}</strong></p>
                <p>Jumlah Rp. 100 : <strong>${count100}</strong></p>
                <p>Jumlah Rp. 50 : <strong>${count50}</strong></p>
            `;
            
            document.getElementById('result').style.display = 'block';
        }
        
        function resetForm() {
            document.getElementById('totalMoney').value = '';
            document.getElementById('errorTotal').style.display = 'none';
            document.getElementById('result').style.display = 'none';
        }
        
        document.addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                calculate();
            }
        });
        
        window.addEventListener('load', function() {
            if (document.getElementById('totalMoney').value) {
                calculate();
            }
        });
    </script>
</body>
</html>