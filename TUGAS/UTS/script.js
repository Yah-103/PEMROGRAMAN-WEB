let dataMahasiswa = [];

const form = document.getElementById('formMahasiswa');
const tableBody = document.getElementById('tableBody');

form.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const nama = document.getElementById('nama').value;
    const nim = document.getElementById('nim').value;
    const semester = document.getElementById('semester').value;
    const prodi = document.getElementById('prodi').value;
    const email = document.getElementById('email').value;
    
    const mahasiswa = {
        nama: nama,
        nim: nim,
        semester: semester,
        prodi: prodi,
        email: email
    };
    
    console.log('Data Mahasiswa Baru:', mahasiswa);
    
    dataMahasiswa.push(mahasiswa);
    console.log('Semua Data Mahasiswa:', dataMahasiswa);
    
    updateTable();
    
    form.reset();
});

function updateTable() {
    if (dataMahasiswa.length === 0) {
        tableBody.innerHTML = '<tr><td colspan="3" class="no-data">Belum ada data mahasiswa</td></tr>';
        return;
    }
    
    let html = '';
    dataMahasiswa.forEach((mhs, index) => {
        html += `
            <tr>
                <td>${index + 1}</td>
                <td>${mhs.nama}</td>
                <td class="info-details">
                    <strong>Prodi:</strong> ${mhs.prodi}<br>
                    <strong>Semester:</strong> ${mhs.semester}
                </td>
            </tr>
        `;
    });
    
    tableBody.innerHTML = html;
}