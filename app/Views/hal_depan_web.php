<html>
	<head>
	<title>Depan</title>
		<style>
		*{
				margin: 0; 
				padding: 0;
				box-sizing: border-box;
		}
		body{
			font-family: 'Poppins',sans-serif;
		}
		.navbar{
				display: flex;
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
		.btn{
			display:inline-block;
			background:#ff523b;
			color:#fff;
			padding:8px 30px;
			margin: 30px 0;
			border-radius: 30px;
			transition:background 0.5s;
		}
		.btn:hover{
			background:#563434;
		}
		.header{
			background:radial-gradient(#fff,#ffd6d6);
			height:100%;

		}
		.header row{
			margin-top:70px;
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
				<div class="row">
					<div class="col-2">
					<h1>Give Your website
					<br>A New Style</h1>
					<a href = "<?= site_url("/product") ?>" class = "btn">Explore Now &#8594;</a>
					</div>
						<div class="col-2">
						<img src = "/gambar_project/gambar_depan2.png">
						</div>
				</div>
			</div>
		</div>
	
		</body>
</html>