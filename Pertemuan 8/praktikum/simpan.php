<?php
    //memuat file koneksi.php dan create_message.php
    include "koneksi.php";
    include "create_message.php";

    //menangkap data nama,kelas,alamat menggunakan method post 
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    if(isset($_POST['mahasiswa_id'])) {
        //sql untuk mengupdate data pada tabel 'data' berdasarkan id
        $sql = "UPDATE data SET nama='$nama', kelas='$kelas', alamat='$alamat' WHERE id=".$_POST['mahasiswa_id'];
        //menyambungkan ke database dan menjalankan perintah sql
        $edit = $conn->query($sql);
        //kondisi jika update data berhasil dan tidak
        if($edit) {
            $conn->close();
            create_message('Ubah data berhasil','success','check');
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        } else {
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        }
    } else {
        //sql untuk menginputkan data pada tabel 'data'
        $sql = "INSERT into data(nama, kelas, alamat) VALUES('$nama','$kelas','$alamat')";
        //menyambungkan ke database dan menjalankan perintah sql
        $add = $conn->query($sql);
        //kondisi jika input data berhasil dan tidak
        if($add) {
            $conn->close();
            create_message('Simpan data berhasil','success','check');
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        } else {
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        }
    }
?>