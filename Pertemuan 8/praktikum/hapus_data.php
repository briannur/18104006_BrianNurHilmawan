<?php
    //memuat file koneksi.php dan create_message.php
    include "koneksi.php";
    include "create_message.php";

    //sintaks sql untuk menghapus data pada tabel 'data' berdasarkan id
    $sql = "DELETE from data where id=".$_GET['mahasiswa_id'];
    //kondisi IF jika mengeksekusi query pada variabel sql dan jika berhasil maka akan mengeksekusi statement didalamnya
    if ($conn->query($sql) === TRUE) {
        //menutup koneksi
        $conn->close();
        //menampilkan pesan seperti di bawah dan redirect ke halaman index
        create_message('Hapus data berhasil','success','check');
        header("location:index.php");
        exit();
    //jika kondisi di atas tidak terpenuhi  
    } else {    
        //menutup koneksi
        $conn->close();
        //menampilkan pesan seperti di bawah dan akan redirect ke halaman index
        create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
        header("location:index.php");
        exit();
    }
?>