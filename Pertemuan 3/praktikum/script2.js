function tampil() {	//fungsi tampil
	alert("hello");	//menampilkan alert 'hello'
}

let color = document.getElementById("color");	//variabel color untuk menyimpan warna dengan menggunakan dokumen

color.addEventListener("change", (e) => {	//mengatur warna background halaman web dari warna yang dipilih
	console.log(e);
	document.body.style.backgroundColor = e.target.value;
});

let nama = window.prompt("Nama kamu siapa?, kenalan dong");
alert(`Oh jadi nama kamu ${nama}, nama aku Brian, salam kenal bro`);
/*menampilkan teks pada window prompt ketika halaman pertama kali dibuka dan
terdapat form untuk mengisi/menginputkannya yang kemudian akan disimpan dalam variabel nama
menampilkan teks dan mengambil value dalam variabel nama*/
