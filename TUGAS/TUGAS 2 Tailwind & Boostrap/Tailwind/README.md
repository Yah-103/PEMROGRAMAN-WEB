# Profil Instagram dengan Tailwind CSS
## Nama  : Yahya
## Nim   : 2411102441255
## Struktur File
- `index.html`: File utama halaman web.
- `assets/img/`: Folder berisi gambar.

## Pertanyaan
### 1. Jelaskan keputusan grid-cols/gap di tiap breakpoint – kenapa begitu?
- **Mobile (default)**: `grid-cols-1` agar gambar ditampilkan satu kolom, memanfaatkan ruang terbatas di layar kecil.
- **Tablet (md)**: `md:grid-cols-2` untuk dua kolom, menggunakan ruang lebih efisien di layar lebih besar.
- **Desktop (lg)**: `lg:grid-cols-4` untuk empat kolom, memanfaatkan ruang besar di layar desktop.
- **Gap**: `gap-[2px]` untuk memberi jarak antar gambar agar desain rapi.

### 2. Bagaimana kamu memanfaatkan utility responsive Tailwind untuk memecahkan masalah layout yang muncul di mobile?
Dengan menggunakan kelas responsif Tailwind seperti `sm:`, `md:`, dan `lg:`, saya menyesuaikan jumlah kolom berdasarkan ukuran layar. Pada mobile satu kolom, tablet dua kolom, dan desktop empat kolom, agar tampilan tetap nyaman dilihat di berbagai perangkat.

### 3. Jelaskan trade-off antara memakai banyak utility classes vs membuat component CSS tersendiri.
- **Utility classes (Tailwind)**:
  - **Cepat dan praktis**: Tidak perlu menulis CSS kustom, cukup pakai kelas dari Tailwind.
  - **Konsisten**: Semua elemen menggunakan styling yang sama.
  
- **CSS tersendiri**:
  - **Lebih terstruktur**: Cocok untuk desain yang lebih kompleks atau membutuhkan kontrol lebih.
  - **Mengurangi repetisi**: Berguna jika banyak elemen yang serupa.