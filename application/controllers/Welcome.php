<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['img'] = [
			['ft' => 'assets/img/project-1.png', 'title' => 'Web Resep', 'desc' => 'Project kecil yang saya kerjakan untuk tugas kuliah', 'href' => '#', 'icon' => '<i class="fab fa-bootstrap" style="color:rgb(112,16,239)"></i>'],
			['ft' => 'assets/img/project-2.png', 'title' => 'Sistem Informasi Akademik', 'desc' => 'Project tugas akhir dengan menggunakan FrontEnd Vue JS dan BackEnd REST API dengan CI', 'href' => '#', 'icon' => '<i class="fab fa-bootstrap" style="color:rgb(112,16,239)"></i><i class="fab fa-vuejs" style="color:rgb(63,178,127)"></i>'],
			['ft' => 'assets/img/project-3.png', 'title' => 'Sistem Pelaporan Fasilitas', 'desc' => 'Project Magang di Kelurahan Sendangguwo dengan menggunakan CI ', 'href' => '#', 'icon' => '<i class="fab fa-bootstrap" style="color:rgb(112,16,239)"></i>'],
		];
		$data['i'] = [
			['name' => 'html', 'icon' => '<i class="fab fa-html5" style="color:rgb(255,71,0)"></i>'],
			['name' => 'css', 'icon' => '<i class="fab fa-css3-alt" style="color:rgb(0, 132, 255)"></i>'],
			['name' => 'vue', 'icon' => '<i class="fab fa-vuejs" style="color:rgb(63,178,127)"></i>'],
			['name' => 'bootstrap', 'icon' => '<i class="fab fa-bootstrap" style="color:rgb(112,16,239)"></i>'],
			['name' => 'php', 'icon' => '<i class="fab fa-php" style="color:rgb(119,123,179)"></i>'],
		];
		$this->load->view('home', $data);
	}
}
