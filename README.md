## Cara memulai project ngalong-gudang

1. Buka folder xampp/htdocs
2. Klik kanan dan klik git bash here
3. Lalu copy atau ketikan
   ```bash
   git clone https://github.com/ngalong-ngoding/ngalong-gudang.git
4. Setelah berhasil, ketikan lagi 
   ```bash
   cd ngalong-gudang
5. Lalu ketikan lagi
   ```bash
   code .
6. Buka localhost anda melalui browser masukan link berikut
   ```bash
   http://127.0.0.1/ngalong-gudang
   ```
   Atau
   ```bash
   http://localhost/ngalong-gudang
   ```
7. Selamat anda berhasil menjalankan projectnya

## Cara kontribusi project ngalong-gudang (push)

1. Masih di vscode yang sebelumnya lalu buka terminal `ctrl + j`
2. Pertama buat branch hasil kerjaan kita terlebih dahulu, caranya dengan mengetik (nama branch tersebut bebas sesuai apa yang dikerjakan)
   ```bash
   git branch -M nama-branch
4. Lalu ketikan perintah dibawah ini yang berfungsi untuk menambahkan hasil pekerjaan kita kedalam git local, setelah itu di enter
   ```bash
   git add .
5. Lalu ketikan lagi perintah berikut untuk menulis menyampaikan pesan hasil kerja kita, contoh "menambahkan fitur abc"
   ```bash
   git commit -m "pesan yang ingin disampaikan, bebas asal didalam tanda petik"
6. Lalu ketikan lagi perintah berikut untuk mengupload git local kita ke repo saat ini (ngalong-gudang). nama-branch dibawah harus sesuai dengan nama-branch di perintah nomor **2**
   ```bash
   git push origin nama-branch
7. Sudah berhasil melakukan upload dari local ke repo ngalong-gudang
8. Selanjutnya buka link berikut (repo ngalong-gudang)
   ```bash
   https://github.com/ngalong-ngoding/ngalong-gudang
9. Dihalaman tersebut muncul warning disertai tombol ijo bertuliskan (Compare & pull request), pencet tombol hijau tersebut
10. (optional bisa di skip) setelah masuk ke pr page di sebelah kanan ada tulisan reviewers pencet tulisannya trus pilih nama orang yang disuruh review (cek code kita)
11. (optional bisa di skip) setelah masuk ke pr page di sebelah kanan ada tulisan assignees pencet tulisan assign yourself
12. Setelah itu pencet tombol hijau bertuliskan Create pull request
13. Selamat anda sudah berhasil melakukan pr (selanjutnya bisa chat orang yang review buat minta tolong di merge pull request)

## Cara sinkronisasi project local kita dengan repo di github (pull)
1. Masih di vscode yang sebelumnya lalu buka terminal `ctrl + j`
2. Lalu ketikan perintah dibawah ini fungsinya untuk mengupdate local kita dengan repo di server
   ```bash
   git pull origin main
3. Selamat anda telah berhasil sinkronisasi project local dengan repo di github
