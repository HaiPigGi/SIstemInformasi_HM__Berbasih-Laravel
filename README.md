# Sistem Informasi HM Berbasis Laravel

![Sistem Informasi HM](https://github.com/HaiPigGi/SIstemInformasi_HM__Berbasih-Laravel/assets/119752348/f76a8c2e-4551-48f5-b4bf-b0b73d140287)

Sistem Informasi HM adalah sebuah proyek berbasis web yang dikembangkan menggunakan framework Laravel. Proyek ini bertujuan untuk membantu manajemen hotel dalam mengelola berbagai aspek operasional, seperti reservasi kamar, manajemen tamu, laporan keuangan, dan lain-lain.

## Fitur

- Pendaftaran dan autentikasi pengguna (Admin, Pegawai, Tamu) dengan login dan registrasi menggunakan Google.
- **Admin Login**: Admin dapat mengakses fitur tambahan berikut:
  - Melihat informasi trend terkini di website.
  - Mendaftar event lomba-lomba yang sedang berlangsung.
  - Mengelola event lomba (Tambah, Ubah, Hapus).

## Cara Menjalankan

Berikut adalah langkah-langkah untuk menjalankan proyek Sistem Informasi HM Berbasis Laravel di lingkungan pengembangan lokal:

1. Pastikan Anda telah menginstal PHP, Composer, dan MySQL pada sistem Anda.
2. Clone repositori proyek ini ke direktori lokal Anda git clone https://github.com/HaiPigGi/SIstemInformasi_HM__Berbasih-Laravel.git
3. Masuk ke direktori proyek 'cd SIstemInformasi_HM__Berbasih-Laravel'
4. Salin file `.env.example` menjadi `.env`.
5. Buatlah database kosong untuk proyek ini pada server MySQL Anda.
6. Ubah pengaturan koneksi database di file `.env` sesuai dengan pengaturan database Anda.
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database
    DB_USERNAME=nama_pengguna
    DB_PASSWORD=kata_sandi

7. Buatlah proyek di Google Cloud Console dan aktifkan Google API untuk otentikasi menggunakan Google. Dapatkan Client ID dan Client Secret dari proyek tersebut.
8. Tambahkan Client ID dan Client Secret ke dalam file `.env`:
 ```
GOOGLE_CLIENT_ID=client_id_anda
GOOGLE_CLIENT_SECRET=client_secret_anda
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/callback 
 ```
10. Jalankan perintah berikut untuk menginstal dependensi proyek melalui Composer.
 ```
"composer install"
 ```
10. Generate kunci aplikasi Laravel.
 ```
"php artisan key:generate"
 ```
11. Jalankan migrasi database untuk membuat skema tabel.
 ```
"php artisan migrate"
 ```
12. Jalankan server pengembangan Laravel.
 ```
 php artisan serve
 ```
13. Buka browser dan akses `http://localhost:8000` untuk melihat proyek Sistem Informasi HM Berbasis Laravel dalam mode pengembangan.

Pastikan Anda telah mengikuti semua langkah dengan benar untuk memastikan proyek dapat berjalan dengan lancar di sistem lokal Anda.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan ikuti langkah-langkah berikut:

1. Fork repositori ini.
2. Buatlah branch fitur baru.
3. Lakukan perubahan pada branch fitur.
4. Commit perubahan Anda.
5. Push branch ke repositori Anda.
6. Ajukan pull request ke repositori utama.

Kami sangat menghargai kontribusi Anda!

## Kontak

Jika Anda memiliki pertanyaan atau ingin berdiskusi lebih lanjut tentang proyek ini, silakan hubungi kami melalui email: [leonardobryan32@gmail.com]

Terima kasih telah menggunakan Sistem Informasi HM Berbasis Laravel!




