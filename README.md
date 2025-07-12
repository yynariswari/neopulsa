# NeoPulsa

Proyek ini merupakan simulasi sistem manajemen konter pulsa sederhana bernama **NeoPulsa**, dibangun menggunakan Laravel 10+. Proyek ini merupakan contoh portfolio.

## ✨ Fitur Utama

-   ✅ Halaman publik:

    -   Beranda
    -   Tentang Kami
    -   Layanan
    -   Kontak
    -   Blog

-   ✅ Halaman Admin:

    -   Dashboard
    -   Log Aktivitas (menampilkan riwayat aktivitas user/admin)

-   ✅ Fitur Log Activity:
    -   Menyimpan aktivitas admin saat mengakses halaman dashboard
    -   Menampilkan log di halaman `/admin/log`
    -   Informasi yang disimpan: nama user, aktivitas, IP address, timestamp

## 🛠 Teknologi

-   Laravel 10
-   Blade Template Engine
-   Bootstrap (default Laravel UI)
-   MySQL

## ⚙️ Instalasi

1.  Clone repository ini:

    ```bash
    git clone https://github.com/username/neopulsa.git
    cd neopulsa

    ```

2.  Install dependency:

    ```bash
    composer install

    ```

3.  Salin file .env :

    ```bash
    cp .env.example .env

    ```

4.  Atur konfigurasi database di file .env:

    ```bash
    DB_DATABASE=neopulsa
    DB_USERNAME=root
    DB_PASSWORD=
    DB_PORT=3306 # atau 3307 sesuai setup XAMPP kamu


    ```

5.  Generate key & migrate database:

    ````bash
    php artisan key:generate
    php artisan migrate

        ```
    ````

6.  Jalankan server:

    ````bash
    php artisan serve

        ```
    ````

7.  Akses dari browser:

        ````bash
        http://127.0.0.1:8000


            ```
        ````

📂 Struktur Folder View - resources/views/ - layouts/ → layout umum user dan admin - admin/ → dashboard & log activity - pages/ → home, about, service, contact, blog

📌 Catatan Tambahan

-   Tidak menggunakan login/registrasi, hanya simulasi tampilan & aktivitas
-   Log otomatis tersimpan setiap kali halaman /admin diakses
-   Data dummy disesuaikan dengan tema konter pulsa

🧑‍💻 Developer
Nama: Yuniar Nf
Role: Full Stack Developer (Laravel, React)
Status: Open for freelance
