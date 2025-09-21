# Profil Instagram dengan Bootstrap
## Nama  : Yahya
## Nim   : 2411102441255
## Struktur File
- `index.html` : File utama halaman web.
- `assets/css/custom.css` : CSS tambahan.
- `assets/img/` : Folder berisi gambar.

## Build/Run
Cukup buka `index.html` di browser, pastikan folder assets tersedia.

## Dependencies
- Bootstrap 5

## Pertanyaan
1. **Mengapa memilih konfigurasi col tertentu untuk tiap breakpoint?**  
   Karena di mobile (≤576px) butuh 1 kolom agar nyaman dibaca, tablet (≥768px) bisa 2–3 kolom agar efisien, dan desktop (≥992px) bisa 4–6 kolom agar tampilan penuh dan rapi.

2. **Bagaimana memastikan tombol Follow/Edit Profile tetap mudah dijangkau di mobile?**  
   Dengan menggunakan utilitas Bootstrap seperti `order-*` agar tombol muncul di atas bio saat layar kecil, serta memakai ukuran tombol `btn-sm` agar proporsional.

3. **Jika postingan bertambah jadi 50, apa potensi masalah dan solusi gridnya?**  
   Masalah: halaman terlalu panjang & lambat dimuat.  
   Solusi: gunakan **pagination** atau **infinite scroll**, grid tetap responsif sehingga tambahan item tetap rapi dalam layout.