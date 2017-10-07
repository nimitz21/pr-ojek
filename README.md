# Tugas 1 IF3110 Pengembangan Aplikasi Berbasis Web
Pada tugas besar ini, Kami diminta untuk membuat aplikasi *ojek online* **berbasis web** yang memungkinkan seorang pengguna untuk menjadi penumpang dan/atau driver ojek online. Untuk menggunakan aplikasi ini, seorang pengguna harus melakukan login. Pengguna dapat menjadi penumpang maupun driver pada akun yang sama. Untuk menjadi driver, pengguna harus mengaktifkan opsi menjadi driver pada profilnya.

Kami diminta untuk membuat tampilan sedemikian hingga mirip dengan tampilan pada contoh. Website yang diminta tidak responsive. Desain tampilan tidak perlu dibuat indah. Icon dan jenis font tidak harus sama dengan contoh. Warna font, garis pemisah, dan perbedaan ukuran font harus terlihat sesuai contoh. Format rating dan waktu harus terlihat sesuai contoh. Perhatikan juga **tata letak** elemen-elemen.


### Prerequisites

*Memiliki MySQL
*Memiliki XAMPP/WAMPP atau sejenisnya untuk menjalankan web pada localhost.

##Documentation

#Login

Login berisi form yang terdiri atas 2 input field yaitu username dan password. Pengguna akan menginput username dan password. Sistem akan mengecek apakah password yang diisi benar dan sesuai. Jika iya, maka pengguna akan di redirect ke profile page. Jika tidak, akan di tampilkan pesan error yang membantu pengguna mengetahui kesalahan.

#Register
Register berisi form yang terdiri atas 7 input yaitu : nama, username, email, password, confirm password, nomor telepon, serta checkbox untuk menjadi driver. Pada saat register username dan email akan divalidasi secara realtime menggunakan onblur dan AJAX sehingga pengguna dapat langsung mengetahui jika terdapat kesalahan pada pengisian username dan email. Setelah semua selesai, sistem akan menvalidasi hasil isian form. Jika tidak terdapat kesalahan, pengguna akan di redirect ke profile jika mendaftar sebagai driver dan order jika mendaftar bukan sebagai driver. Jika terdapat kesalahan, akan ditampilkan pesan kesalahan.

#Profile
Pada profile terdapat tabel navigasi, profil pengguna, serta preferensi lokasi pengguna. Tabel navigasi dapat mengarahkan pengguna ke halaman order, history pengguna, ataupun ke profil pengguna. Pengguna dapat mengedit profilnya dengan menekan gambar pensil di sebelah edit profile. Pengguna juga dapat mengganti preferensi lokasi dengan menekan gambar pensil di sebelah edit preferred location. Sistem akan melakukan query untuk mengambil data pengguna dari database dan menampilkan informasi pengguna di halaman profile.

#Edit Profile
Di halaman ini, pengguna dapat mengganti profile picture yang digunakan, nama, nomor telepon, serta status sebagai driver ataupun non-driver. Sistem akan menerima input gambar, nama dan sebagainya dari pengguna, melakukan copy input gambar ke storage, menghapus profile picture yang lama, dan melakukan query untuk mengganti nama, nomor telepon, status driver serta nama file profile picture. 

#Edit Preferred Location
Di halaman ini, pengguna dapat menambah, mengganti dan menghapus preferensi lokasi. Pengguna dapat menekan tombol pensil untuk mengedit lokasi yang telah ada, menekan tombol x untuk menghapus lokasi, serta mengisi form di bawah untuk menambah lokasi baru.
Ketika pengguna menekan tombol edit, sistem akan mengubah tulisan yang ada menjadi input field yang dapat diedit oleh pengguna, mengganti gambar pensil menjadi centang yang jika diklik akan menyimpan hasil perubahan lokasi. Sistem akan menvalidasi jika form menambah lokasi telah diisi atau belum jika tombol add ditekan. Akan ditampilkan pesan kesalahan jika input field masih kosong.

#Order
Pada halaman ini, pengguna dapat memasukkan lokasi penjemputan, destinasi perjalanan, serta driver yang ingin digunakan(optional).

## Built With

* [PHP](http://php.net/manual/en/tutorial.php) - The web framework used
* [JavaScript] (https://www.javascript.com/) - Client-Side Scripting
* [MySQL](https://www.mysql.com/) - Database
* [HTML](https://www.w3schools.com/html/) - Page Structure
* [CSS] (https://www.w3schools.com/css/) - Page Layouting

## Contributing

**Tampilan**
1. Login : 13515093, 13515075
2. Register : 13515093, 13515075
3. Profile : 13515117, 13515075
4. Edit Profile : 13515117, 13515075
5. Edit Preferred Location : 13515117, 13515075
6. Order : 13515093, 13515075
7. Transaction : 13515093, 13515075

**Fungsionalitas**
1. Login : 13515075
2. Register : 13515093
3. Profile : 13515117
4. Edit Profile : 13515117
5. Edit Preferred : 13515117
6. Order : 13515093
7. Transactions History : 13515093


## Version

Version 1.0.0
-Menyelesaikan semua fungsionalitas yang diinginkan.

Version 1.0.1 
-Memperbaiki bug-bug tersembunyi

## Authors

* Asisten Mata Kuliah Pemrograman Berbasis Web** - *Initial work* - [IF3110](http://gitlab.informatika.org/IF3110/)

* [contributors](http://gitlab.informatika.org/ezpzlemonsqz/TugasBesar1_2017/graphs/master) orang yang berpartisipasi dalam proyek.

## License

Proyek ini di bawah lisensi ITB License - [LICENSE.md](LICENSE.md) untuk keterangan lebih lanjut

## Acknowledgments

Kami ingin berterima kasih Tuhan Yang Maha Esa atas rahmatnya, orang tua dan keluarga kami yang selalu mendukung kami, serta bapak dan ibu dosen yang telah mengajari kami, para asisten yang mempersiapkan tugas ini dengan baik. Tanpa dukungan dan bantuan dari orang yang disebutkan di atas, halaman web ini mungkin tidak akan dapat selesai. Hasil dari yang kami buat merupakan dasar dari halaman web yang mungkin dapat berguna bagi orang lain di kemudian hari.

