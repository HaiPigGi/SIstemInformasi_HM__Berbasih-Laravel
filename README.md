Sistem Informasi HM Berbasis Laravel

![image](https://github.com/HaiPigGi/SIstemInformasi_HM__Berbasih-Laravel/assets/119752348/f76a8c2e-4551-48f5-b4bf-b0b73d140287)


Sistem Informasi HM adalah sebuah proyek berbasis web yang dikembangkan menggunakan framework Laravel. Proyek ini bertujuan untuk membantu manajemen hotel dalam mengelola berbagai aspek operasional, seperti reservasi kamar, manajemen tamu, laporan keuangan, dan lain-lain.

Fitur
Pendaftaran dan autentikasi pengguna (Admin, Pegawai, Tamu) dengan login dan registrasi menggunakan Google.
Admin Login: Admin dapat mengakses fitur tambahan berikut:
Melihat informasi trend terkini di website.
Mendaftar event lomba-lomba yang sedang berlangsung.
Mengelola event lomba (Tambah, Ubah, Hapus).

Cara Menjalankan
Berikut adalah langkah-langkah untuk menjalankan proyek Sistem Informasi HM Berbasis Laravel di lingkungan pengembangan lokal:

Pastikan Anda telah menginstal PHP, Composer, dan MySQL pada sistem Anda.
Clone repositori proyek ini ke direktori lokal Anda.
bash
Copy code
git clone https://github.com/HaiPigGi/SIstemInformasi_HM__Berbasih-Laravel.git
Masuk ke direktori proyek.
bash
Copy code
cd SIstemInformasi_HM__Berbasih-Laravel
Salin file .env.example menjadi .env.
bash
Copy code
cp .env.example .env
Buatlah database kosong untuk proyek ini pada server MySQL Anda.
Ubah pengaturan koneksi database di file .env sesuai dengan pengaturan database Anda.
makefile
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=nama_pengguna
DB_PASSWORD=kata_sandi
Jalankan perintah berikut untuk menginstal dependensi proyek melalui Composer.
Copy code
composer install
Generate kunci aplikasi Laravel.
vbnet
Copy code
php artisan key:generate
Jalankan migrasi database untuk membuat skema tabel.
Copy code
php artisan migrate
Jalankan server pengembangan Laravel.
Copy code
php artisan serve
Buka browser dan akses http://localhost:8000 untuk melihat proyek Sistem Informasi HM Berbasis Laravel dalam mode pengembangan.
Pastikan Anda telah mengikuti semua langkah dengan benar untuk memastikan proyek dapat berjalan dengan lancar di sistem lokal Anda.

Kontribusi
Jika Anda ingin berkontribusi pada proyek ini, silakan ikuti langkah-langkah berikut:

Fork repositori ini.
Buatlah branch fitur baru.
Lakukan perubahan pada branch fitur.
Commit perubahan Anda.
Push branch ke repositori Anda.
Ajukan pull request ke repositori utama.
Kami sangat menghargai kontribusi Anda!

Kontak
Jika Anda memiliki pertanyaan atau ingin berdiskusi lebih lanjut tentang proyek ini, silakan hubungi kami melalui email: [email protected]

Terima kasih telah menggunakan Sistem Informasi HM Berbasis Laravel!
