<p align="center">
<a href="https://www.codeigniter.com"> <img src="https://logowik.com/content/uploads/images/651_codeigniter.jpg" alt="Build Status"></a>
</p>

## What is CodeIgniter?

CodeIgniter adalah kerangka kerja (framework) aplikasi web berbasis PHP yang digunakan untuk membangun situs web dinamis. Dikembangkan oleh Rick Ellis, CodeIgniter dirancang untuk menjadi kerangka kerja yang ringan, cepat, dan sederhana, serta memiliki kurva belajar yang rendah. Tujuan utama CodeIgniter adalah menyediakan alat yang efisien dan produktif bagi pengembang untuk membangun aplikasi web dengan cepat.

CodeIgniter menawarkan seperangkat komponen dan fungsi yang telah dikembangkan sebelumnya untuk memudahkan pengembangan aplikasi. Kerangka kerja ini mengikuti pola Model-View-Controller (MVC), yang memisahkan logika bisnis (model), tampilan (view), dan pengendali (controller) dalam aplikasi.

Beberapa fitur utama CodeIgniter meliputi:

1. Struktur direktori yang terorganisir dengan baik, sehingga memudahkan pengelolaan file aplikasi.
2. Routing yang fleksibel dan konfigurasi yang mudah, memungkinkan penanganan URL yang mudah dan terstruktur.
3. Library dan helper yang luas, seperti manipulasi database, sesi pengguna, pengiriman email, validasi data, dan lainnya, yang dapat digunakan untuk mempercepat pengembangan.
4. Sistem caching yang efisien untuk meningkatkan kecepatan dan performa aplikasi.
5. Dokumentasi yang lengkap dan komunitas yang aktif, sehingga mudah untuk mencari bantuan dan sumber daya lainnya.

## Installation & updates

Sebelum anda mendownload zip ini, saya ingin memberikan tips agar tidak terjadi error pada saat run program ini :

berikut langkah-langkahnya :

1. Buatlah sebuah project baru dengan mengetikan perintah dibawah ini :
    - composer create-project codeigniter4/appstarter.
    - kemudian composer update | Karna rilis baru kerangka kerja.
    - letakkan folder zip ini dimana saja.
    - Copy file (".env") yang ada difile project baru kalian.
    - Lalu pastekan di dalam folder "ci4_crud_apiValidation".
    - Setting databasenya dan rename production jadi "development" di dalam file (".env").

2. Selanjutnya, buatlah sebuah model, controller, dan migrations sesuka kalian.
3. Untuk membuat controller kali ini berbeda karna menggunakan RestFull Api (Ada didokumentasi Ci4).
5. Tinggal jalankan dan buka postman untuk ngetes program ini. Happy Coding :).
    - php spark serve *Note Untuk run program ci4.

## Screenshot Test
`GET`
![Screenshot 2023-05-28 111910](https://github.com/Dhanz199/Ci4_Crud_ApiValidation/assets/68377029/b21ec33d-e8bd-441b-8509-a4cb4216bbd6)

`POST`
![Screenshot 2023-05-28 111958](https://github.com/Dhanz199/Ci4_Crud_ApiValidation/assets/68377029/73baa892-74b4-469e-a3d2-2e822fbda5a2)

`PUT`
![Screenshot 2023-05-28 112246](https://github.com/Dhanz199/Ci4_Crud_ApiValidation/assets/68377029/d0812678-9981-4081-9208-30e9ccb682c1)

`DELETE`
![Screenshot 2023-05-28 112311](https://github.com/Dhanz199/Ci4_Crud_ApiValidation/assets/68377029/84579de5-3c7d-455a-9975-561277e31290)
