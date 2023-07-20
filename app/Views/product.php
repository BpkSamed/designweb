<html>
	<head>
	<title>Product</title>
		<style>
		*{
				margin: 0; 
				padding: 0;
				box-sizing: border-box;
				
		}
		body{
			font-family: 'Poppins',sans-serif;
			background: url(/gambar_depan3.jpg) no-repeat;
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
		}
		.navbar{
				display:flex;
				align-items: center; 
				padding: 20px;
		}
		nav{	
				flex: 1;
				text-align: right;
		}
		nav ul {
				display: inline-block; 
				list-style-type: none;
		}
		nav ul li{
				display:inline-block;
				margin-right: 20px;
		}
		a{
				text-decoration:none;
				color: #555;
		}
		p{
				color:#555;
		}
		.container{
			max-width: 1300px;
			margin: auto;
			padding-left:25px;
			padding-right:25px;
			
		}
		.row{
			display:flex;
			align-items:center;
			flex-wrap:wrap;
			justify-content:space-around;
		}
		.col-2{
			flex-basis:50%;
			min-width:300px;
			
		}
		.col-2 img{
			width:120%;
			height:120%;
			padding:50px 0;
		}
		.col-2 h1{
			font-size: 50px;
			line-height:60px;
			margin:25px 0;
		}
		.btn:hover{
			background:#563434;
		}
		.header{
			height:100%;
			
		}
		.header row{
			margin-top:70px;
		}
		.isi{
			width:100%;
			height:400px;
			
			float:left;
			clear:both;
		}
		.produk1{
			margin:20px 0 0 50px;
			width:40%;
			max-height:400px;
			
			font-size:25;
			float:left;		
		}
		.produk1 img{
			width:80%;
			height:70%;
			padding:25px 0;
			margin:0 0 0 50px;
		}
		.produk1 p{
			text-align:right;
		}
		.teks_produk1{
			
			width:50%;
			max-height:500px;
			float:left;
			margin:80px 0 0 50px;
		}
		.foter{
			clear:both;
			float:left;
			background:radial-gradient(#7FFFD4,#00FFFF);
			width:100%;
			height:200px;
		}
		.foter_kiri{
			width:30%;
			
			height:100%;
			float:left;
		}
		.foter_kiri img{
			padding:30px 0 0 20px;
		}
		.foter_tengah{
			width:40%;
			height:100%;
			
			float:left;
		}
		.foter_tengah p{
			padding:50px 20px 20px 120px;
			line-height:30px;
		}
		.foter_kanan{
			width:30%;
			height:100%;
			
			float:left;
		}
		.foter_kanan p{
			padding:50px 20px 20px 120px;
		}
	</style>
	<link href="https://fonts.googleapis.com/css2?family-Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	</head>
		<body>
		<div class="header">
			<div class="container">
				<div class="navbar">
					<div class="logo">
					<img src="/gambar_project/logo_bersih.png" width="125px">
					</div>
				<nav>
					<ul>
						<li><a href="<?= site_url("/hal_depan_web") ?>">Home</a></li>
						<li><a href="<?= site_url("/product") ?>">Products</a></li>
						<li><a href="<?= site_url("/about") ?>">About</a></li>
						<li><a href="<?= site_url("/contact") ?>">Contact</a></li>
						<li><a href="<?= site_url("/account") ?>">Account</a></li>
					</ul>
				</nav>
				<a href="<?= site_url("/belanja") ?>"><img src = "/gambar_project/troli.png" width="30px" height = "30px"></a>
				</div>
			</div>
			<div class = "isi">
			<div class = "produk1">
			Website penjualan barang rumah tangga
			<br><img src = "/gambar_project/desain_web_perabotan_rumahtangga.png" width="30px" height = "30px">
			</div>
			<div class = "teks_produk1">
				Produk desain website penjualan barang rumah tangga adalah platform digital yang secara khusus dirancang untuk memudahkan bisnis barang rumah tangga dalam menjual produk mereka secara online. 
				Website ini menawarkan katalog lengkap berisi berbagai barang rumah tangga dengan deskripsi, foto, dan harga yang jelas, serta menyediakan fitur pencarian dan pengelompokan berdasarkan kategori untuk mempermudah pelanggan dalam menemukan produk yang dibutuhkan. 
				Pengguna dapat dengan mudah menambahkan barang ke dalam keranjang belanja, memilih opsi pembayaran yang aman, serta memilih opsi pengiriman atau pengambilan. Ulasan dan rating dari pelanggan membantu calon pembeli dalam membuat keputusan berbelanja yang lebih tepat, 
				sementara integrasi media sosial membantu memperluas jangkauan dan eksposur merek dan produk. Tujuan utama dari desain website ini adalah memberikan pengalaman berbelanja yang praktis dan efisien bagi pelanggan, serta membantu bisnis barang rumah tangga meningkatkan penjualan mereka secara online.
				<br>
			</div>
			</div>
			<div class= "isi">
			<div class = "produk1">
			Website penjualan pakaian
			<br><img src = "/gambar_project/desain_web_pakaian.png" width="30px" height = "30px">
			</div>
			<div class = "teks_produk1">
				Produk desain website penjualan pakaian adalah sebuah platform digital yang dirancang untuk memfasilitasi bisnis pakaian dalam menjual produk mereka secara online. 
				Website ini menampilkan katalog pakaian lengkap dengan deskripsi, foto, dan harga yang jelas, serta menyediakan fitur pencarian dan pengelompokan berdasarkan kategori untuk memudahkan pelanggan dalam menemukan produk yang diinginkan. 
				Pelanggan dapat dengan mudah menambahkan pakaian ke dalam keranjang belanja, memilih metode pembayaran yang aman, dan memilih opsi pengiriman atau pengambilan. Ulasan dan rating membantu calon pembeli dalam membuat keputusan, dan integrasi media sosial memperluas eksposur merek dan produk. 
				Tujuan dari desain website ini adalah untuk memberikan pengalaman belanja yang menyenangkan dan efisien bagi pelanggan serta membantu bisnis pakaian untuk meningkatkan penjualan mereka secara online.
				<br>
			</div>
			</div>
			<div class= "isi">
			<div class = "produk1">
			Website penjualan makanan
			<br><img src = "/gambar_project/desain4.png" width="30px" height = "30px">
			</div>
			<div class = "teks_produk1">
				Website penjualan makanan adalah platform digital yang menawarkan beragam makanan dengan tampilan menarik dan responsif, katalog lengkap, fitur pencarian, dan kategori makanan. 
				Pelanggan dapat dengan mudah menyesuaikan pesanan, memilih metode pembayaran yang aman, serta memilih opsi pengiriman atau pengambilan. 
				Ulasan dan rating membantu calon pembeli dalam memilih makanan dengan percaya diri, sementara integrasi media sosial membantu mempromosikan produk dengan lebih luas. 
				Tujuan website ini adalah memberikan pengalaman berbelanja yang mudah dan efisien bagi pelanggan, serta membantu bisnis makanan meningkatkan penjualan secara online.
				<br>
			</div>
			</div>
		</div>
		<div class = "foter">
			<div class = "foter_kiri">
			<img src="/gambar_project/logo_bersih.png" width="200px" height = "150px">
			<h1>Gambar Website</h1>
			</div>
			<div class = "foter_tengah">
			<p>0812 3780 9547
			<br>Jalan Simpang Borobudur 100
			<br>abrahamsuhartanto1990@gmail.com
			<br>
			</div>
			<div class = "foter_kanan">
			<p><h1>About the company</h1>
			<br>Kita adalah yang terbaik dibidang ini
			</div>
	</div>
		</body>
</html>