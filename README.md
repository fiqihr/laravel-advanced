<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Mengulik laravel lebih advanced lagi. <br>

## Laravel Queue

Jadi intinya disini, kita akan membuat proses controller di laravel akan tampak lebih cepat dari aslinya, tetapi sebenarnya proses nya berjalan di belakang layar.<br>
<br>
Sebagai contoh, misal kita akan memasukkan data yang jumlahnya 10000. <br>
Lalu kita letakkan proses(memasukkan datanya) nya di controller, maka prosesnya akan memakan waktu lama. bisa sampai kurang lebih 25 detik.<br>
Nah disini, kita coba membuat namanya job. <br>
Jadi secara gampangnya, di controller kita hanya memanggil job dari file lain. <br>
Nah, di file job ini lah nanti nya proses akan dijalankan.<br>

<i>setup dulu seperti biasa di env.</i><br>

Mulai. <br>
Migrasi seperti biasa dulu.<br>
Lalu cek di database, sudah ada tabel jobs atau belum. Jika belum run ini:<br>

```
php artisan queue:table
```

Lalu di database/migration akan dibuatkan file create_jobs_table.<br>
Tabel ini akan digunakan untuk menampung log yang terjadi ketika menjalankan proses queue.<br>
Lalu php artisan migrate. <br>
Selanjutnya pergi ke .env <br>
cari QUEUE_CONNECTION. Atur ke database. <br>

```
...
QUEUE_CONNECTION=database
...
```

Mengapa kita atur ke database? <br>
Jadi saat kita lihat di app/config/queue.php, ada baris seperti ini: <br>

```
|
| Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
|
```

Nah, artinya kita bisa memilih pilihan tersebut, tapi untuk kali ini kita coba pake database dulu.<br>
Selanjutnya, buat job baru untuk melakukan pekerjaan insert data.<br>

```
php artisan make:job dataPersonJob
```

Jangan lupa buat model dan controller nya juga.<br>
Oke, selanjutnya di file dataPersonJob.php kita buka.<br>
Ada function yang namanya handle(), dibagian ini akan kita isi proses nya. jadi seperti ini.<br>

```
public function handle(): void
  {
    try {
        $faker = Factory::create();
        $jumlahData = 10000;
          for ($i = 1; $i <= $jumlahData; $i++) {
            $data = [
              'name' => $faker->name,
              'email' => $faker->unique()->safeEmail,
          ];
        DataPerson::create($data);
      }
    } catch (\Exception $e) {
      \Log::error('Error in dataPersonJob: ' . $e->getMessage());
    }
  }
```

Lalu ini di controller nya, kita panggil menggunakan dispatch.<br>

```
public function index()
  {
    $starttime = microtime(true);

    dispatch(new dataPersonJob());

    $endtime = microtime(true);
    $timediff = $endtime - $starttime;
    $hasil = "Halaman diproses dalam " . sprintf('%0.2f', $timediff) . " detik";
    return view('data_person', compact('hasil'));
  }
```

Kita bikin views untuk menampilkan waktunya.<br>

```
<div class="container">
  <h1 class="text-center">{{ $hasil }}</h1>
</div>
```

Disini kan kita akan coba menginsertkan data berjumlah 10000, kita akan memulainya. Pergi ke terminal.<br>
Ketikkan php artisan queue:work untuk menjalankan job nya. <br>

```
php artisan queue:work

   INFO  Processing jobs from the [default] queue.

  2024-12-31 06:05:10 App\Jobs\dataPersonJob ..............RUNNING
  2024-12-31 06:05:32 App\Jobs\dataPersonJob .............21s DONE
```

Lalu refresh browser nya.<br>
Yosh, maka proses nya akan lebih cepatt, bisa hanya 0.07 detik yang sebelumnya bisa sampai 25 detik.<br>
Tetapi proses input datanya akan berjalan di belakang layar, jadi saat kita refresh database nya, maka data akan bertambah seiring berjalan waktu. Misal kita input data 10000, maka akan perlahan bertambah. Pertama misal 3492, lalu 7332, hingga sampai 10000. <br>
Nah disini kita sudah membuat proses controllernya lebih cepat dengan menggunakan queue.<br>
