<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Mahasiswa Baru - Universitas X</title>
</head>
<body>
    <h1>Form Pendaftaran Online Mahasiswa Baru - Universitas X</h1>
    
    <form method="get" action="">
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td><input type="text" id="namaLengkap"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" id="tempatLahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>
                <select id="tanggal">
                    <option value="">Tanggal</option>
                </select>
                <select id="bulan">
                    <option value="">Bulan</option>
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
                <select id="tahun">
                    <option value="">Tahun</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat Rumah</td>
            <td><textarea id="alamatRumah" rows="4" cols="30"></textarea></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" id="pria" name="jenisKelamin" value="Pria">
                <label for="pria">Pria</label>
                <input type="radio" id="wanita" name="jenisKelamin" value="Wanita">
                <label for="wanita">Wanita</label>
            </td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td><input type="text" id="asalSekolah"></td>
        </tr>
        <tr>
            <td>Nilai UAN</td>
            <td><input type="text" id="nilaiUAN"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="button" onclick="submitForm()">Submit</button>
                <button type="button" onclick="resetForm()">Reset</button>
            </td>
        </tr>
    </table>

    <hr>

    <div id="output"></div>

    <script>
        const tanggalSelect = document.getElementById('tanggal');
        for (let i = 1; i <= 31; i++) {
            const option = document.createElement('option');
            option.value = i;
            option.textContent = i;
            tanggalSelect.appendChild(option);
        }

        const tahunSelect = document.getElementById('tahun');
        for (let i = 1980; i <= 2005; i++) {
            const option = document.createElement('option');
            option.value = i;
            option.textContent = i;
            tahunSelect.appendChild(option);
        }

        function submitForm() {
            const nama = document.getElementById('namaLengkap').value;
            const tempatLahir = document.getElementById('tempatLahir').value;
            const tanggal = document.getElementById('tanggal').value;
            const bulan = document.getElementById('bulan').value;
            const tahun = document.getElementById('tahun').value;
            const alamat = document.getElementById('alamatRumah').value;
            const jenisKelamin = document.querySelector('input[name="jenisKelamin"]:checked');
            const asalSekolah = document.getElementById('asalSekolah').value;
            const nilaiUAN = document.getElementById('nilaiUAN').value;

            if (!nama || !tempatLahir || !tanggal || !bulan || !tahun || !alamat || !jenisKelamin || !asalSekolah || !nilaiUAN) {
                alert('Mohon lengkapi semua data!');
                return;
            }

            const namaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                              'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            const tanggalLahir = `TGL-${namaBulan[parseInt(bulan)-1].substring(0,3).toUpperCase()}-THN`;

            const outputDiv = document.getElementById('output');
            
            outputDiv.innerHTML = `
                <h2>Data Pendaftaran</h2>
                <p>Nama Lengkap : ${nama}</p>
                <p>Tempat Lahir : ${tempatLahir}</p>
                <p>Tanggal Lahir : ${tanggalLahir}</p>
                <p>Alamat Rumah : ${alamat}</p>
                <p>Jenis Kelamin : ${jenisKelamin.value}</p>
                <p>Asal Sekolah : ${asalSekolah}</p>
                <p>Nilai UAN : ${nilaiUAN}</p>
            `;
        }

        function resetForm() {
            document.getElementById('namaLengkap').value = '';
            document.getElementById('tempatLahir').value = '';
            document.getElementById('tanggal').value = '';
            document.getElementById('bulan').value = '';
            document.getElementById('tahun').value = '';
            document.getElementById('alamatRumah').value = '';
            document.getElementById('asalSekolah').value = '';
            document.getElementById('nilaiUAN').value = '';
            
            const radioButtons = document.querySelectorAll('input[name="jenisKelamin"]');
            radioButtons.forEach(radio => radio.checked = false);
            
            document.getElementById('output').innerHTML = '';
        }
    </script>
</body>
</html>