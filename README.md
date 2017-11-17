# batudaa

**Batudaa** adalah theme website untuk aplikasi [OpenSID](https://github.com/OpenSID/OpenSID) yang sepenuhnya responsive dan dibangun menggunakan Bootstrap versi 3. Cocok digunakan diberbagai ukuran layar perangkat, mulai dari perangkat mobile sampai komputer desktop.

<img src='screenshot.jpg' width='350px' alt='batudaa screenshot' style='border:1px solid #eee'>

## Installasi

1. Release terbaru dapat diunduh dari laman release di https://github.com/batudaa/batudaa-theme/releases. Pilih release yang dibutuhkan dan download Source dengan tipe file yang diinginkan.
2. Selanjutnya extract file yang telah didownload dan salin folder `batudaa` yang ditemukan didalamnya ke dalam folder `desa/themes/` di aplikasi OpenSID.
3. [Setting aplikasi OpenSID](https://github.com/OpenSID/OpenSID/wiki/Panduan-Konfigurasi-Aplikasi#setting-aplikasi) dan pilih tema **batudaa** untuk [web_theme](https://github.com/OpenSID/OpenSID/wiki/Panduan-Konfigurasi-Aplikasi#setting-web_theme).
4. Refresh halaman website dari aplikasi OpenSID untuk melihat perubahannya.


## Penyesuaian

Kurang puas dengan theme yang digunakan? OpenSID memberikan kesempatan kepada Admin desa untuk [menyesuaikan theme](https://github.com/OpenSID/OpenSID/wiki/Mengubah-Penampilan-Web). Untuk menyesuaikan theme batudaa, lakukan langkah berikut:

1. Buat folder `batudaa` di dalam folder `desa/css/`.
2. Selanjutnya buat berkas dengan nama `desa-web.css` di dalam folder `batudaa` yang telah dibuat sebelumnya. Dan buatlah aturan *css* sesuai dengan keinginan.

> Untuk sekedar contoh, coba cek berkas [desa-web.css](contoh-penyesuaian/desa-web.css).


## Bantuan

Silakan bergabung dengan [Forum Pengguna dan Pegiat OpenSID](https://www.facebook.com/groups/opensid) di Facebook. Group ini merupakan tempat berbagi informasi dan saling membantu menggunakan dan mengembangkan aplikasi OpenSID. Silakan mempergunakan forum itu juga untuk bertanya mengenai theme batudaa dan untuk memberi usulan.


## Tanya-Jawab

### T: Kenapa tidak semua widget tampilannya selaras dengan theme?

**J:** Widget masih bagian internal dari OpenSID dan kebanyakan belum *bootstrap ready*. Saat ini tag html atau layout widget belum bisa disesuaikan lewat theme manapun.

### T: Kenapa halaman login dan admin tampilannya tidak ikut berubah?

**J:** Batudaa hanya theme untuk website (halaman depan). OpenSID sendiri belum menyediakan fasilitas pembuatan theme untuk halaman login dan admin. Namun memberikan kesempatan untuk melakukan penyesuaian lewat berkas `desa/css/siteman.css`.


## Lisensi

Batudaa adalah proyek open source yang bernaung dibawah [lisensi MIT](http://opensource.org/licenses/MIT).

Tidak diijinkan untuk mengeluarkan informasi lisensi dan copyright disetiap distribusi. Aturan ini tidak termasuk informasi copyright yang ditampilkan dibagian *footer tag*.
