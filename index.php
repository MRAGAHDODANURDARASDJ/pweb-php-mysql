<?php
include("func.php")
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style.css">
		<title>Menjual batuan</title>
	</head>
	<body>
		<div class="container">
			<div class="header text-center text-light">
				<marquee bgcolor="cyan"><h1>Welcome to Batu Batu Agadew</h1></marquee>
				<div class="banner">
                	<img width="25%" src="batu.png" alt="">
				</div>
			</div><hr>
			<nav class="navigasi">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="admin.php">Admin Page</a></li>
				</ul>
			</nav>
			<div class="section">
				<hr>
				<marquee behavior="" direction=""><b>Selamat Datang Di Batu-Batu AGADEW - Menjual batu-batu kiyowo</b></marquee>
				<hr>
				<br>
			</div>
			<div class="center">
            <?php
						$sql = "select * from t_artikel order by id asc";
						$res = mysqli_query($db, $sql);
						while ($data = mysqli_fetch_array($res)) {
							if(strlen($data["isi"] >= 40)) {
								echo $data["isi"];
							}
							else {
								$z = '....';
					};
				?>
				<div class="box">
					<div class="isi" align="justify">
						<h2 style="margin-bottom: 5px"><?php echo $data["judul"]; ?></h2>
						<hr>
						<p class="by">by Agadew</p>
						<hr>
						<br>
						<div class="left">
						<img width="20%" src="img/<?php echo $data['gambar'];?>"/>
						<hr>
						<br><br>
						</div>	
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class="right">
				<div class="box">
					<div class="isi" align="center">
                    <h3>Profil Developer</h3><br>
						<img width="17%" src="agadew.jpeg" alt="agadew" style="border-radius: 50%"><br>
						<div style="margin: 10px; display: inline;">
							<p>Agadew</p>
							<p>255-262</p>
							<p>Informatika 21'E</p>
							<a href="https://api.whatsapp.com/send?phone=6288706991555&text=Assalamualaikum%20Wr%20Wb"><button class="btn-info">WhatsApp</button></a><br><br>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="isi">
						<marquee bgcolor="cyan"><h1>BELI  BATU</h1></marquee>
						<?php
							$res = mysqli_query($db, $sql);
							$sql = "select id, judul, gambar from t_artikel order by id desc";
							$no = 0;
							while ($data = mysqli_fetch_array($res)) {
						?>
						<div style="margin-bottom: 5px;">
							<fieldset style="text-align: center; border-color: #F3F1F1">
								<legend>
									<h6 href="" style="padding: 5px; font-size: 30px;"><?php echo $data["judul"]; ?></h6>
								</legend>
								<img style="padding: 10px;" width="20%"  src="img/<?php echo $data['gambar'];?>"/><br>
								<a href="detail.php?id=<?php echo($data['id'])?>"><button class="btn-info">Baca Selengkapnya</button></a>
							</fieldset>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>