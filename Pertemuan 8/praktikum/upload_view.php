<!DOCTYPE html>
<html>
<body>
	<!--form untuk upload gambar dan akan dikirimkan/dilanjutkan ke file upload_process.php-->
	<form action="upload_process.php" method="post" enctype="multipart/form-data">
        Pilih Gambar:
        <input type="file" name="gambar_contoh" id="gambar_contoh">
        <input type="submit" name="submit">
    </form>
</body>
</html>