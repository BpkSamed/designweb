<html>
	<head>
	<title>Account</title>
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
		.formulir{
			margin:40px 0 0 500px;
			max-width:550px;
			font-size:25;
			float:left;	
			
		}
		.formulir h1{
			font-size: 50px;
			line-height:60px;
			margin:25px 0;
			text-align:center;
		}
		input,textarea{
			background-color:#eee;
			border:none;
			padding:12px 15px;
			margin:8px 0;
			width: 100%;
			font-size:0.8rem;
		}
		input:focus,textarea:focus{
			outline:1px solid #00b4cf;
		}
		button{
			border-radius:20px;
			border:1px solid #00b4cf;
			background-color: #00b4cf;
			color: #ffffff;
			font-size:12px;
			font-weight:bold;
			padding:12px 45px;
			letter-spacing:1px;
			text-transform:uppercase;
			transition:transform 80ms ease-out;
		}
		.formulir a{
			color: #ffffff;
		}
		button:hover{
			opacity:0.7;
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
			<div class = "formulir">
			<h1>Login</h1>
				<form action="<?= base_url('/account/process') ?>" method = "POST">
				<input type= "text" name="email" placeholder="Email" id="email" required>
				<input type= "password" name="pass" placeholder="Password" id = "pass" required>
				<button type = "submit">Submit</button>
				<button type = "button"><a href = "<?= site_url("/daftar") ?>">Register</a></button>
				</form>
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