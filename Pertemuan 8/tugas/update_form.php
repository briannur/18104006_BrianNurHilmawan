<?php
    //memuat file koneksi.php
    include "koneksi.php";
    //memulai sesi
    session_start();
    //variabel kelas untuk pilihan kelas
    $kelas = ['SE-02-A', 'SE-02-B','SE-02-C'];
    //query untuk menampilkan / mengambil data pada tabel 'data'
    $sql = "SELECT * FROM data";
    //menyambungkan ke database dan menjalankan perintah sql
    $data = $conn->query($sql);
    //query untuk menampilkan data, diambil berdasarkan id dengan menangkap data id menggunakan method get 
    $sql_mahasiswa = "SELECT * FROM data WHERE id=".$_GET['mahasiswa_id'];
    //menyambungkan database dan menjalankan perintah sql
    $data_mahasiswa = $conn->query($sql_mahasiswa);
    //melihat data
    $view = $data_mahasiswa->fetch_array();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Link rel untuk Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Link rel untuk CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>CRUD PHP</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h4>Input Data</h4>
                <!--memuat file read_message.php-->
                <?php include "read_message.php" ?>
            </div>
            <!--data pada form akan dikirim ke file simpan.php--> 
            <form action="simpan.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="mahasiswa_id" value="<?= $view['id']; ?>">
                <!--form group untuk label dan kolom pada form-->
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" placeholder="Nama" class="form-control" value="<?= $view['nama']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <select name="kelas" class="form-control" required>
                        <option value="">Pilih</option>
                        <?php foreach($kelas as $kl) : ?>
                        <option value="<?= $kl; ?>" <?= ($kl == $view['kelas']) ? 'selected' : ''; ?>><?= $kl; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?= $view['alamat'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Gambar</label>
                    <input type="file" name="gambar" placeholder="Gambar" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?= $view['gambar']; ?>" style="width: 100%; height: auto" />
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-block">Edit</button>
                <a href="index.php" class="btn btn-warning btn-block">Kembali</a>
            </form>
        </div>

        <div class="col-lg-6">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Data Mahasiswa</span>    
            </h4>

            <!--perulangan untuk menampilkan data yang terdapat dalam tabel-->
            <?php foreach($data as $dt) : ?>
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row ml-1">
                        <div>
                            <img src="<?= $dt['gambar']; ?>" style="width: 100px; height: 100px" />
                        </div>
                        <div class="col-5">
                            <h4><?= $dt['nama']; ?></h4>
                            <p><?= $dt['alamat']; ?></p>
                        </div>
                        <div class="col-4">
                            <a class="float-right ml-3 text-danger" href="hapus_data.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button" class="close">
                                <span class="fa fa-trash"></span>
                            </a>
                            <a class="float-right ml-3 text-success" href="update_form.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button" class="close">
                                <span class="fa fa-edit"></span>
                            </a>
                            <p class="text-right"><?= $dt['kelas'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
                <?php endforeach; ?>
            </div>
        </div>

    <!--Link untuk Javascript-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>