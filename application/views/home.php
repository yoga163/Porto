<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portofolio</title>
	<link rel="icon" href="assets/img/anim.gif" type="image/gif" sizes="16x16">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/scrollreveal"></script>
	<script src="assets/js/easing.js"></script>
	<script src="assets/js/script.js"></script>


</head>

<body id="home">
	<!-- Navbar -->
	<section>
		<nav class="navbar navbar-expand-md fixed-top navbar-dark">
			<div class="container">
				<a class="navbar-brand page-scroll" href="#home">Ahmad Yoga<span style="color:rgb(160, 0, 0); margin-left:4px;">.</span></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color: white;">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav ">
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#about">About Me</a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#skill">Skill</a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#project">My Project</a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#contact">Contact Me</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</section>

	<!-- Home -->
	<section>
		<div class="container-fluid home">
			<div class="row justify-content-center">
				<div class="col-6 col-sm-6 title">
					<img class="img" src="assets/img/avatar.png"><br>
					<span class="name">Ahmad Yoga</span><br>
					<span class="web">Web Developer</span><br>
					<a class="icon" href="https://www.instagram.com/a_yoga16/" target="_blank"><i class="fab fa-instagram icon"></i></a>
					<a class="icon" href="https://github.com/yoga163" target="_blank"><i class="fab fa-github icon"></i><br></a>
					<a class="tombol page-scroll" href="#contact">Contact Me</a>
				</div>
			</div>
		</div>
	</section>

	<!-- About -->
	<section>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
			<path fill="#343353" fill-opacity="1" d="M0,64L40,85.3C80,107,160,149,240,154.7C320,160,400,128,480,128C560,128,640,160,720,149.3C800,139,880,85,960,101.3C1040,117,1120,203,1200,224C1280,245,1360,203,1400,181.3L1440,160L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
		</svg>
		<div id="about" class="container about">
			<div class="row t">
				<span class="t col-12 col-sm-12 about_title" style="margin-bottom: 110px;">About Me</span>
				<div class="about-img col-4 d-flex justify-content-end">
					<img src="assets/img/me.png">
				</div>

				<div class="col-7 col-sm-7 about-txt">
					<div class="balon">
						<p>Saya Fresh Graduate dari jurusan Teknik Informatika Universitas Semarang dengan pengalaman di bidang Web Development. Saya merupakan pribadi yang cermat dan teliti dalam bekerja. Bisa cepat beradaptasi dengan pekerjaan tim maupun individual.</p>
					</div>
				</div>
			</div>

		</div>
	</section>


	<!-- Skill -->
	<section>
		<div id="skill" class="container skill">
			<div class="row">
				<div class="col-12 col-lg-12 mb-5 mb-lg-0 skill-title">
					<span>Skill</span>
				</div>
				<?php foreach ($i as $ikon) : ?>
					<div class="col-lg-4 col-6 ikon">
						<div><?= $ikon['icon'] ?></div><br>
						<div class="tl"><?= $ikon['name'] ?></div>
					</div>
				<?php endforeach ?>
				<div class="col-lg-4 col-6 ikon">
					<i class="iconify" data-icon="simple-icons:codeigniter"></i><br><br>
					<div class="tl">Codeigniter</div>
				</div>
			</div>
		</div>
	</section>

	<!-- My Project -->
	<section>
		<div id="project" class="container">
			<div class="project row">
				<div class="col-12 col-lg-12 project-title"><span>My Project</span></div>
				<?php foreach ($img as $ft) : ?>
					<div class="col-lg-4 col-12">
						<div class="kard">
							<img src="<?= $ft['ft'] ?>">
							<div class="kard-body">
								<span><?= $ft['icon'] ?><i class="iconify" data-icon="simple-icons:codeigniter"></i></span>
								<div class="kard-text">
									<strong><?= $ft['title'] ?></strong>
									<p><?= $ft['desc'] ?></p>
								</div>
								<a href="<?= $ft['href'] ?>" class="bt"><i class="fas fa-location-arrow"></i> to Web</a>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>

	<!-- Contact Me -->
	<section>
		<div id="contact" class="container ">
			<div class="contact">
				<span class="contact-title">Contact Me</span>
				<form class="form-contact">
					<label>Email</label>
					<input type="email" class="form-control">
					<label class="mt-3">Nama</label>
					<input type="text" class="form-control">
					<label for="" class="mt-3">Message</label>
					<textarea class="form-control"></textarea>
					<button class="btn btn-primary justify-content-end mt-2">Kirim</button>
				</form>
			</div>
		</div>
	</section>

	<!-- Footer -->

	<div class="container-fluid footer py-2">
		<div class="d-flex justify-content-center">
			Copyright@2022
		</div>
	</div>

	<script src="assets/js/scrollReveal.js"></script>
</body>

</html>