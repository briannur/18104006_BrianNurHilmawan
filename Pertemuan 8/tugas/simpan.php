<?php
    //memuat file koneksi.php dan create_message.php
    include "koneksi.php";
    include "create_message.php";

    //menangkap data nama,kelas,alamat menggunakan method post 
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    //file akan tersimpan dalam folder uploads
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $error = false;
    //tipe file akan diubah menjadi huruf kecil
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST['mahasiswa_id'])) {
        //query untuk mengupdate data pada tabel 'data' berdasarkan id
        $sql = "UPDATE data SET nama='$nama', kelas='$kelas', alamat='$alamat', gambar='$target_file' WHERE id=".$_POST['mahasiswa_id'];
        //menyambungkan ke database dan menjalankan perintah sql
        $edit = $conn->query($sql);

        //kondisi untuk size file, tidak boleh lebih dari 1mb
        if ($_FILES["gambar"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $error = true; 
        }
        //kondisi untuk tipe file
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $error = true; 
        }

        //kondisi jika file gagal terupload
        if ($error == true) {
            echo "Sorry, your file was not uploaded."; 
        } else {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file."; 
            } 
        }

        //kondisi jika file berhasil diupdate dan tidak
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
        //query untuk menginputkan data pada tabel 'data'
        $sql = "INSERT into data(nama, kelas, alamat, gambar) VALUES('$nama','$kelas','$alamat','$target_file')";
        //menyambungkan ke database dan menjalankan perintah sql
        $add = $conn->query($sql);
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $error = true; 
        }
        if ($_FILES["gambar"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $error = true; 
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $error = true; 
        }

        if ($error == true) {
            echo "Sorry, your file was not uploaded."; 
        } else {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file."; 
            } 
        }
        //kondisi jika data berhasil tersimpan dan tidak
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