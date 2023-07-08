![image](https://github.com/raulmahya123/neta/blob/master/chapter1/1.png?raw=true)
`cd ~/.ssh/` adalah perintah yang digunakan pada terminal untuk berpindah ke direktori ".ssh" dalam direktori home pengguna.

Berikut penjelasan langkah demi langkah:

1. `cd`: Merupakan perintah untuk berpindah direktori (change directory).
2. `~`: Tanda "~" digunakan sebagai representasi singkat dari direktori home pengguna saat ini. Misalnya, jika nama pengguna Anda adalah "john", "~" akan mewakili "/home/john".
3. `/.ssh/`: Merupakan nama direktori yang ingin dituju. Dalam hal ini, ".ssh" adalah direktori yang berada di dalam direktori home pengguna dan diawali dengan tanda "." yang menandakan bahwa direktori tersebut adalah direktori tersembunyi.

Jadi, `cd ~/.ssh/` akan memindahkan Anda ke direktori ".ssh" dalam direktori home pengguna saat ini. Direktori ".ssh" umumnya digunakan untuk menyimpan kunci SSH, konfigurasi, dan informasi keamanan terkait SSH.
![image](https://github.com/raulmahya123/netafixxx/blob/master/chapter1/2ifx.jpg?raw=true)
`ssh-keygen -t rsa` adalah perintah yang digunakan untuk menghasilkan pasangan kunci SSH RSA baru.

Berikut penjelasan langkah demi langkah:

1. `ssh-keygen`: Merupakan perintah untuk menghasilkan pasangan kunci SSH.
2. `-t rsa`: Merupakan opsi yang digunakan untuk menentukan jenis algoritma kriptografi yang akan digunakan untuk menghasilkan kunci SSH. Dalam hal ini, kita menggunakan algoritma RSA.

Setelah Anda menjalankan perintah `ssh-keygen -t rsa`, langkah-langkah berikut akan dimulai:

1. Anda akan diminta untuk memasukkan lokasi penyimpanan kunci baru. Secara default, kunci akan disimpan dalam direktori `.ssh/` di dalam direktori home pengguna dengan nama file `id_rsa` (kunci privat) dan `id_rsa.pub` (kunci publik).
2. Kemudian, Anda akan diminta untuk memasukkan passphrase (kata sandi) untuk melindungi kunci pribadi. Passphrase ini memberikan lapisan keamanan tambahan. Jika Anda memasukkan passphrase, Anda akan diminta untuk mengonfirmasi passphrase tersebut.
3. Setelah itu, pasangan kunci SSH RSA baru akan dihasilkan. Kunci publik (dalam format OpenSSH) akan ditampilkan di layar, biasanya dimulai dengan "ssh-rsa" diikuti oleh kunci itu sendiri. Kunci publik ini nantinya dapat disalin dan digunakan untuk mengonfigurasi akses SSH ke server atau layanan yang mendukung autentikasi menggunakan kunci SSH.
4. Kunci privat akan disimpan di lokasi yang Anda tentukan sebelumnya (atau lokasi default jika Anda tidak mengubahnya). Kunci privat ini harus dijaga kerahasiaan dan tidak boleh dibagikan atau diunggah ke tempat yang tidak aman.

Setelah berhasil menghasilkan pasangan kunci SSH RSA, Anda dapat menggunakan kunci publik untuk mengautentikasi diri saat mengakses server atau layanan yang membutuhkan kunci SSH. Pastikan Anda melindungi kunci privat dengan baik dan hanya membagikan kunci publik yang terkait dengan orang atau sistem yang dapat dipercaya.
![image](https://github.com/raulmahya123/neta/blob/master/chapter1/3.png?raw=true)
Untuk membuka GitHub di Google, Anda dapat mengikuti langkah-langkah berikut:

1. Buka browser web Google Chrome atau browser web lainnya yang Anda gunakan.
2. Di bilah alamat browser, ketikkan "github.com" dan tekan tombol "Enter" pada keyboard.
3. Browser akan membuka halaman utama GitHub di Google.
4. Jika Anda sudah memiliki akun GitHub, Anda dapat melakukan login dengan mengklik tombol "Sign in" yang terletak di pojok kanan atas halaman. Masukkan informasi login Anda (nama pengguna dan kata sandi) dan tekan tombol "Sign in".
5. Jika Anda belum memiliki akun GitHub, Anda dapat membuat akun baru dengan mengklik tombol "Sign up" yang juga terletak di pojok kanan atas halaman. Ikuti langkah-langkah yang disediakan untuk membuat akun GitHub.
6. Setelah berhasil masuk atau mendaftar, Anda dapat menjelajahi repositori publik di GitHub, mengakses profil pengguna, membuat repositori baru, atau berinteraksi dengan repositori yang ada.

Pastikan Anda terhubung ke internet dan memiliki browser web yang mendukung akses ke situs web. Dengan mengikuti langkah-langkah di atas, Anda akan dapat membuka dan mengakses GitHub di Google.
![image](https://github.com/raulmahya123/neta/blob/master/chapter1/4.png?raw=true)
buka settings cari ssh key
![image](https://github.com/raulmahya123/neta/blob/master/chapter1/5.png?raw=true)
copykan dari gambar kedua yang berisigi generate code untuk ssh key setealh di add
![image](https://github.com/raulmahya123/neta/blob/master/chapter1/Screenshot_1.png?raw=true)
lalu muncul seperti ini
