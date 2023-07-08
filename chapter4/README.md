## PENJELASAN KODINGAN

# ADDUSER.PHP
Kodingan yang Anda berikan adalah sebuah template HTML dengan sedikit kode PHP di dalamnya. Berikut adalah penjelasan untuk setiap bagian kodingan tersebut:

1. `<html>`: Tag pembuka untuk memulai elemen HTML.
2. `<head>`: Bagian kepala dokumen HTML yang berisi meta informasi dan tag lain yang mendefinisikan judul halaman dan pengaturan lainnya.
3. `<meta>`: Tag yang digunakan untuk menentukan karakter set dokumen dan pengaturan tampilan halaman di perangkat pengguna.
4. `<title>`: Tag yang mendefinisikan judul halaman yang akan ditampilkan di title bar atau tab browser.
5. `<body>`: Bagian isi dokumen HTML yang berisi elemen-elemen yang akan ditampilkan di halaman web.
6. `<h2>`: Tag untuk menampilkan heading level 2, dalam hal ini digunakan untuk judul "Add user".
7. `<form>`: Tag untuk membuat form yang akan mengirim data ke URL yang ditentukan di atribut `action`.
   - `autocomplete="off"`: Atribut untuk mematikan fitur autocomplete pada input form.
   - `method="post"`: Atribut untuk menentukan metode pengiriman data form, dalam hal ini menggunakan metode POST.
8. `<label>`: Tag untuk menampilkan label atau keterangan untuk elemen form.
9. `<input>`: Tag untuk membuat input field yang akan menerima input dari pengguna.
   - `type="text"`: Atribut untuk menentukan jenis input field, dalam hal ini berupa teks.
   - `id`: Atribut untuk memberikan identifikasi unik pada elemen input field.
   - `value`: Atribut untuk menetapkan nilai awal pada input field.
10. `<select>`: Tag untuk membuat elemen dropdown list atau select box.
    - `<option>`: Tag untuk menambahkan opsi atau pilihan dalam dropdown list.
    - `value`: Atribut yang menentukan nilai yang akan dikirimkan saat pengguna memilih opsi tersebut.
11. `<button>`: Tag untuk membuat tombol.
    - `type="button"`: Atribut yang menentukan tipe tombol, dalam hal ini adalah tombol biasa yang tidak mengirimkan form secara otomatis.
    - `onclick`: Atribut untuk menentukan aksi yang akan dilakukan saat tombol diklik. Di sini, memanggil fungsi `submitData('insert')` saat tombol diklik.
12. `<a>`: Tag untuk membuat hyperlink.
    - `href`: Atribut untuk menentukan URL yang akan dituju saat hyperlink diklik.
13. `<?php include 'script.php'; ?>`: Kode PHP yang digunakan untuk memasukkan (include) file `script.php` ke dalam halaman. File ini kemungkinan berisi skrip PHP yang akan diproses pada sisi server.

Jadi, kodingan tersebut adalah template halaman web sederhana dengan form untuk menambahkan pengguna. Ketika tombol "Insert" diklik, fungsi `submitData('insert')` akan dipanggil, dan Anda perlu melihat isi dari file `script.php` untuk mengetahui aksi apa yang akan dilakukan saat tombol tersebut diklik.

# CONFIG.PHP

Kodingan yang Anda berikan adalah sebuah perintah untuk membuat koneksi ke database MySQL menggunakan PHP.

Berikut adalah penjelasan untuk setiap bagian kodingan tersebut:

1. `mysqli_connect()`: Fungsi bawaan PHP yang digunakan untuk membuat koneksi ke database MySQL.
2. `"localhost"`: Parameter pertama yang menentukan host atau alamat server database. Dalam hal ini, "localhost" digunakan untuk menghubungkan ke database yang berjalan di server lokal.
3. `"root"`: Parameter kedua yang menentukan nama pengguna (username) yang digunakan untuk mengakses database.
4. `""`: Parameter ketiga yang menentukan kata sandi (password) untuk mengakses database. Dalam contoh ini, kata sandi tidak diatur (kosong).
5. `"data"`: Parameter keempat yang menentukan nama database yang ingin diakses.

Dengan menggunakan fungsi `mysqli_connect()` dan memberikan parameter yang sesuai, kita dapat membuat koneksi ke database MySQL. Dalam contoh ini, koneksi dibuat dengan host "localhost", pengguna "root", tanpa kata sandi, dan mengakses database dengan nama "data".

Setelah koneksi berhasil dibuat, objek koneksi akan disimpan dalam variabel `$conn` yang dapat digunakan untuk menjalankan query atau operasi lain terhadap database.

Namun, penting untuk dicatat bahwa koneksi yang menggunakan "root" sebagai pengguna database tanpa kata sandi adalah konfigurasi yang tidak aman. Pada produksi, disarankan untuk menggunakan pengguna dengan hak akses yang terbatas dan kata sandi yang kuat untuk melindungi keamanan database.

# edituser.php
Kodingan yang Anda berikan adalah halaman HTML dengan beberapa kode PHP di dalamnya. Halaman ini digunakan untuk mengedit data pengguna dalam database.

Berikut adalah penjelasan untuk setiap bagian kodingan tersebut:

1. `<h2>`: Tag untuk menampilkan heading level 2, dalam hal ini digunakan untuk judul "Edit user".
2. `<form>`: Tag untuk membuat form yang akan mengirim data ke URL yang ditentukan di atribut `action`.
   - `autocomplete="off"`: Atribut untuk mematikan fitur autocomplete pada input form.
   - `method="post"`: Atribut untuk menentukan metode pengiriman data form, dalam hal ini menggunakan metode POST.
3. `<?php require 'config.php'; ?>`: Kode PHP untuk memasukkan (require) file `config.php` yang berisi kode untuk membuat koneksi ke database MySQL.
4. `$id = $_GET["id"];`: Mengambil nilai parameter `id` dari URL menggunakan `$_GET`. Parameter ini digunakan untuk menentukan pengguna mana yang akan diedit.
5. `$rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user WHERE id = $id"));`: Mengambil data pengguna dari database berdasarkan nilai `id` yang diterima. Data pengguna disimpan dalam variabel `$rows`.
   - `mysqli_query($conn, "SELECT * FROM user WHERE id = $id")`: Mengeksekusi query SQL untuk mengambil data pengguna dari tabel "user" dengan kondisi `id = $id`.
   - `mysqli_fetch_assoc()`: Fungsi untuk mengambil hasil query sebagai array asosiatif yang berisi data pengguna.
6. `<input type="hidden">`: Tag untuk membuat input field tersembunyi (hidden) yang digunakan untuk menyimpan nilai `id` pengguna yang akan diedit. Nilai `id` tersebut diambil dari hasil query sebelumnya dan dimasukkan ke dalam atribut `value` input field.
7. `<label>`: Tag untuk menampilkan label atau keterangan untuk elemen form.
8. `<input type="text">`: Tag untuk membuat input field yang akan menerima input teks dari pengguna. Nilai teks yang akan ditampilkan di dalam input field diambil dari hasil query sebelumnya dan dimasukkan ke dalam atribut `value`.
9. `<select>`: Tag untuk membuat elemen dropdown list atau select box.
    - `<option>`: Tag untuk menambahkan opsi atau pilihan dalam dropdown list.
    - `value`: Atribut yang menentukan nilai yang akan dikirimkan saat pengguna memilih opsi tersebut.
    - `<?php if($rows["pemesanan"] == "Delicious Burger") echo "selected"?>`: Kode PHP untuk menandai opsi "Delicious Burger" sebagai terpilih jika nilai `pemesanan` dalam hasil query sama dengan "Delicious Burger".
10. `<button>`: Tag untuk membuat tombol.
    - `type="button"`: Atribut yang menentukan tipe tombol, dalam hal ini adalah tombol biasa yang tidak mengirimkan form secara otomatis.
    - `onclick`: Atribut untuk menentukan aksi yang akan dilakukan saat tombol diklik. Di sini, memanggil fungsi `submitData('edit')` saat tombol diklik.
11. `<a>`: Tag untuk membuat hyperlink.
    - `href`: Atribut untuk menentukan URL yang akan dituju saat hyperlink diklik.
12. `<?php include 'script.php'; ?>`: Kode PHP yang digunakan untuk memasukkan (include) file `script.php` ke dalam halaman. File ini kemungkinan berisi skrip PHP yang akan diproses pada sisi server.

Jadi, kodingan tersebut adalah halaman edit user yang menampilkan data pengguna yang akan diedit dalam input field. Saat tombol "Edit" diklik, fungsi `submitData('edit')` akan dipanggil, dan Anda perlu melihat isi dari file `script.php` untuk mengetahui aksi apa yang akan dilakukan saat tombol tersebut diklik.

# function.php
Kodingan yang Anda berikan adalah kode PHP yang berisi fungsi-fungsi untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada tabel "user" dalam database.

Berikut adalah penjelasan untuk setiap bagian kodingan tersebut:

1. `require 'config.php';`: Kode PHP untuk memasukkan (require) file `config.php` yang berisi kode untuk membuat koneksi ke database MySQL. Ini diperlukan agar koneksi ke database tersedia dalam skrip ini.

2. `if(isset($_POST["action"])){ ... }`: Kode PHP untuk memeriksa apakah ada data yang dikirim melalui metode POST dengan elemen bernama "action". Jika ada, maka akan dilakukan pengecekan lebih lanjut untuk menentukan operasi apa yang akan dilakukan.

3. `insert()`: Fungsi PHP yang digunakan untuk memasukkan data baru ke dalam tabel "user" dalam database. Fungsi ini mengambil nilai-nia dari elemen "name", "email", dan "pemesanan" yang dikirim melalui metode POST, dan kemudian menjalankan query INSERT untuk memasukkan data ke dalam tabel "user". Setelah itu, pesan "Data inserted successfully" akan dicetak.

4. `edit()`: Fungsi PHP yang digunakan untuk mengedit data pengguna dalam tabel "user" berdasarkan nilai "id" yang dikirim melalui metode POST. Fungsi ini mengambil nilai-nia dari elemen "id", "name", "email", dan "pemesanan" yang dikirim melalui metode POST, dan kemudian menjalankan query UPDATE untuk memperbarui data pengguna dalam tabel "user". Setelah itu, pesan "Updated successfully" akan dicetak.

5. `delete()`: Fungsi PHP yang digunakan untuk menghapus data pengguna dari tabel "user" berdasarkan nilai "id" yang dikirim melalui metode POST. Fungsi ini mengambil nilai "id" yang dikirim melalui metode POST, dan kemudian menjalankan query DELETE untuk menghapus data pengguna dari tabel "user". Setelah itu, pesan "Deleted successfully" akan dicetak.

Setiap fungsi mengandalkan variabel global `$conn` yang harus didefinisikan dalam file `config.php` untuk membuat koneksi ke database.

Jadi, kodingan tersebut adalah kode PHP yang melakukan operasi CRUD pada tabel "user" dalam database. Bergantung pada nilai "action" yang dikirim melalui metode POST, fungsi yang sesuai akan dipanggil untuk melakukan operasi yang diinginkan (insert, edit, atau delete) pada data pengguna.

# index.php

Kodingan yang Anda berikan adalah halaman HTML dengan kode PHP di dalamnya. Halaman ini digunakan untuk menampilkan data pemesanan dari tabel "user" dalam bentuk tabel.

Berikut adalah penjelasan untuk setiap bagian kodingan tersebut:

1. `<h2>PEMESANAN</h2>`: Tag untuk menampilkan heading level 2 dengan teks "PEMESANAN".

2. `<table border=1>`: Tag untuk membuat tabel HTML. Atribut `border=1` digunakan untuk menampilkan garis pembatas pada seluruh sel dalam tabel.

3. `<tr>`: Tag untuk membuat baris dalam tabel.

4. `<td>`: Tag untuk membuat sel data dalam tabel.

5. `<?php require 'config.php'; ?>`: Kode PHP untuk memasukkan (require) file `config.php` yang berisi kode untuk membuat koneksi ke database MySQL.

6. `$rows = mysqli_query($conn,"SELECT * FROM user");`: Mengambil semua data dari tabel "user" menggunakan fungsi `mysqli_query()` dan menyimpan hasilnya dalam variabel `$rows`.

7. `$i = 1;`: Mendeklarasikan variabel `$i` dan memberikan nilai awal 1. Variabel ini akan digunakan untuk memberikan nomor urut pada setiap baris data dalam tabel.

8. `<?php foreach ($rows as $row) : ?> ... <?php endforeach; ?>`: Kode PHP untuk melakukan perulangan foreach untuk setiap baris data dalam variabel `$rows`. Setiap baris data akan disimpan dalam variabel `$row`.

9. `<tr id=<?php echo $row["id"]?>>`: Tag `<tr>` dengan atribut `id` yang nilainya diambil dari kolom "id" dalam baris data saat ini. Atribut `id` ini dapat digunakan untuk mengidentifikasi baris data secara unik.

10. `<td><?php echo $i++;?></td>`: Tag `<td>` untuk menampilkan nomor urut dalam setiap baris. Nilai nomor urut diambil dari variabel `$i` dan kemudian diinkremen setiap kali perulangan dilakukan.

11. `<td><?php echo $row["name"]?></td>`: Tag `<td>` untuk menampilkan nilai kolom "name" dari baris data saat ini.

12. `<td><?php echo $row["email"]?></td>`: Tag `<td>` untuk menampilkan nilai kolom "email" dari baris data saat ini.

13. `<td><?php echo $row["pemesanan"]?></td>`: Tag `<td>` untuk menampilkan nilai kolom "pemesanan" dari baris data saat ini.

14. `<td>`: Tag `<td>` untuk menampilkan kolom "Action" yang berisi tautan "Edit" dan tombol "Delete".
    - `<a href="edituser.php?id=<?php echo $row["id"];?>">Edit</a>`: Tautan "Edit" yang mengarahkan ke halaman "edituser.php" dengan membawa nilai "id" sebagai parameter di URL.
    - `<button type="button" onclick="submitData(<?php echo $row['id'];?>)">delete</button>`: Tombol "Delete" yang memanggil fungsi `submitData()` dengan mengirimkan nilai "id" sebagai argumen saat tombol diklik.

15. `<br>`: Tag `<br>` untuk membuat baris baru (line break).

16. `<a href="adduser.php">Add user</a>`: Tautan "Add user" yang mengarahkan ke halaman "adduser.php".

17. `<?php require 'script.php'; ?>`: Kode PHP untuk memasukkan (require) file `script.php` ke dalam halaman. File ini kemungkinan berisi skrip PHP yang akan diproses pada sisi server.

Jadi, kodingan tersebut adalah halaman untuk menampilkan data pemesanan dari tabel "user" dalam bentuk tabel. Setiap baris data ditampilkan dalam satu baris tabel, termasuk nomor urut, nama, email, jenis pemesanan, dan aksi yang dapat dilakukan seperti mengedit data atau menghapus data.

# edituser.php
Kodingan yang Anda berikan adalah halaman HTML dengan beberapa kode PHP di dalamnya. Halaman ini digunakan untuk mengedit data pengguna dalam database.

Berikut adalah penjelasan untuk setiap bagian kodingan tersebut:

1. `<h2>`: Tag untuk menampilkan heading level 2, dalam hal ini digunakan untuk judul "Edit user".
2. `<form>`: Tag untuk membuat form yang akan mengirim data ke URL yang ditentukan di atribut `action`.
   - `autocomplete="off"`: Atribut untuk mematikan fitur autocomplete pada input form.
   - `method="post"`: Atribut untuk menentukan metode pengiriman data form, dalam hal ini menggunakan metode POST.
3. `<?php require 'config.php'; ?>`: Kode PHP untuk memasukkan (require) file `config.php` yang berisi kode untuk membuat koneksi ke database MySQL.
4. `$id = $_GET["id"];`: Mengambil nilai parameter `id` dari URL menggunakan `$_GET`. Parameter ini digunakan untuk menentukan pengguna mana yang akan diedit.
5. `$rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user WHERE id = $id"));`: Mengambil data pengguna dari database berdasarkan nilai `id` yang diterima. Data pengguna disimpan dalam variabel `$rows`.
   - `mysqli_query($conn, "SELECT * FROM user WHERE id = $id")`: Mengeksekusi query SQL untuk mengambil data pengguna dari tabel "user" dengan kondisi `id = $id`.
   - `mysqli_fetch_assoc()`: Fungsi untuk mengambil hasil query sebagai array asosiatif yang berisi data pengguna.
6. `<input type="hidden">`: Tag untuk membuat input field tersembunyi (hidden) yang digunakan untuk menyimpan nilai `id` pengguna yang akan diedit. Nilai `id` tersebut diambil dari hasil query sebelumnya dan dimasukkan ke dalam atribut `value` input field.
7. `<label>`: Tag untuk menampilkan label atau keterangan untuk elemen form.
8. `<input type="text">`: Tag untuk membuat input field yang akan menerima input teks dari pengguna. Nilai teks yang akan ditampilkan di dalam input field diambil dari hasil query sebelumnya dan dimasukkan ke dalam atribut `value`.
9. `<select>`: Tag untuk membuat elemen dropdown list atau select box.
    - `<option>`: Tag untuk menambahkan opsi atau pilihan dalam dropdown list.
    - `value`: Atribut yang menentukan nilai yang akan dikirimkan saat pengguna memilih opsi tersebut.
    - `<?php if($rows["pemesanan"] == "Delicious Burger") echo "selected"?>`: Kode PHP untuk menandai opsi "Delicious Burger" sebagai terpilih jika nilai `pemesanan` dalam hasil query sama dengan "Delicious Burger".
10. `<button>`: Tag untuk membuat tombol.
    - `type="button"`: Atribut yang menentukan tipe tombol, dalam hal ini adalah tombol biasa yang tidak mengirimkan form secara otomatis.
    - `onclick`: Atribut untuk menentukan aksi yang akan dilakukan saat tombol diklik. Di sini, memanggil fungsi `submitData('edit')` saat tombol diklik.
11. `<a>`: Tag untuk membuat hyperlink.
    - `href`: Atribut untuk menentukan URL yang akan dituju saat hyperlink diklik.
12. `<?php include 'script.php'; ?>`: Kode PHP yang digunakan untuk memasukkan (include) file `script.php` ke dalam halaman. File ini kemungkinan berisi skrip PHP yang akan diproses pada sisi server.

Jadi, kodingan tersebut adalah halaman edit user yang menampilkan data pengguna yang akan diedit dalam input field. Saat tombol "Edit" diklik, fungsi `submitData('edit')` akan dipanggil, dan Anda perlu melihat isi dari file `script.php` untuk mengetahui aksi apa yang akan dilakukan saat tombol tersebut diklik.

# Script.php

Kodingan yang Anda berikan adalah kode JavaScript yang menggunakan jQuery untuk mengirim data form ke server menggunakan AJAX.

Berikut adalah penjelasan untuk setiap bagian kodingan tersebut:

1. `<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>`: Tag `<script>` yang digunakan untuk memuat library jQuery dari URL yang ditentukan. Dalam hal ini, kita memuat versi jQuery 3.2.1 dari Google CDN.

2. `<script type="text/javascript">`: Tag `<script>` untuk menuliskan kode JavaScript.

3. `function submitData(action) { ... }`: Definisi fungsi JavaScript `submitData` dengan parameter `action`. Fungsi ini akan dipanggil saat tombol "Insert" atau "Edit" diklik, dan akan melakukan pengiriman data ke server menggunakan AJAX.

4. `$(document).ready(function(){ ... });`: Mengikat kode JavaScript untuk dieksekusi setelah dokumen HTML selesai dimuat. Dalam hal ini, kita menggunakan jQuery untuk memastikan kode dieksekusi setelah elemen HTML selesai dimuat.

5. `var data = { ... };`: Membuat objek JavaScript `data` yang berisi nilai-nilai yang akan dikirim ke server. Nilai-nilai ini diambil dari elemen-elemen form dengan menggunakan metode `val()` dari jQuery.

6. `$.ajax({ ... })`: Menggunakan fungsi `ajax()` dari jQuery untuk mengirim permintaan AJAX ke server.
   - `type: "post"`: Metode HTTP yang digunakan untuk mengirim data, dalam hal ini menggunakan metode POST.
   - `url: "function.php"`: URL tujuan yang akan menerima permintaan AJAX.
   - `data: data`: Data yang akan dikirimkan ke server.
   - `success: function(response) { ... }`: Callback yang akan dipanggil ketika permintaan berhasil dikirim dan menerima respons dari server. Di sini, kita mengolah respons yang diterima, menampilkan pesan respons dalam sebuah alert, dan melakukan tindakan tambahan seperti menyembunyikan elemen dengan id sesuai dengan nilai `action` jika respons adalah "deleted successfully".

Jadi, kodingan tersebut menggunakan jQuery dan AJAX untuk mengirim data form ke server tanpa harus memuat ulang halaman. Dengan menggunakan AJAX, Anda dapat melakukan interaksi dengan server secara asinkron dan melakukan operasi tanpa mengganggu tampilan halaman secara keseluruhan.
