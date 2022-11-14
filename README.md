# Fullstack-Test

-   EXAM

1. Buatlah form submission sederhana dengan field Nama, Email, dan Telp. Sertakan tombol submit dan proses simpan datanya menggunakan AJAX, jgn lupa tambahkan pesan popup "Thankyou!" saat klik tombol Submit.

    > Harapannya: kandidat mampu membuat microsite atau landing page yg interaktif

2. Buatlah database "data_form" di lokal dengan kolom ID (int primary key), Nama (text), Email (text), Telp (int) dan beserta data dummynya.

-   Tampilkan kolom Nama dan Email saja menggunakan query
    **Query SQL : SELECT name, email FROM data_from**<br>
-   Tampilkan keseluruhan kolom dengan kondisi ID nya 1000 s/d 1010 menggunakan query
    **Query SQL : SELECT \* FROM data_from ORDER BY id LIMIT 10 OFFSET 1000**<br>
-   Jika database memiliki lebih dari 100jt baris data, bagaimana untuk mengoptimasi database tsb dalam melakukan query data supaya tetap cepat dan tdk timeout? ceritakan.<br>
    **Jawab : Bisa menggunakan indexing pada kolom yang ada pada table, bisa juga menggunakan partition table untuk membagi data.**

> Harapannya: kandidat mampu membuat dan mengolah database dalam skala besar

3. Buatkan aktivitas tracking sederhana menggunakan javascript yg dapat diimplementasi dalam soal nomor satu dengan contoh;

-   menyimpan data (bebas) kedalam cookie ketika berhasil ataupun gagal ketika klik submit<br>
    **Jawab : Cookie yang disimpan pada aplikasi ini ada 3 data yang di simpan pada array masing-masing**

> Harapannya: kandidat dapat membuat tracker menggunakan Javascript

4. Buatlah mini project RESTFul API Crud menggunakan Laravel/Codeigniter dengan database yg sudah kamu buat "data_form" pd nomor soal dua.
   **Dibuat menggunakan laravel 8**
    > Harapannya: kandidat mengetahui development RESTFul API
