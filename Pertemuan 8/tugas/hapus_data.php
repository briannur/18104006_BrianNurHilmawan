<?php
    //memuat file koneksi.php dan create_message.php
    include "koneksi.php";
    include "create_message.php";

    //query untuk menghapus data pada tabel 'data' berdasarkan id
    $sql = "DELETE from data where id=".$_GET['mahasiswa_id'];
    //kondisi percabangan, jika sudah koneksi ke database dan perintah sql berhasil dijalankan,
    //maka akan menampilkan pesan seperti di bawah dan akan redirect ke halaman index
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        create_message('Hapus data berhasil','success','check');
        header("location:index.php");
        exit();
    //jika kondisi di atas tidak terpenuhi, maka akan menampilkan pesan seperti di bawah dan akan redirect ke halaman index 
    } else {
        $conn->close();
        create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
        header("location:index.php");
        exit();
    }
?>