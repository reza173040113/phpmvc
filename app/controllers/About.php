<?php 

class About extends Controller{

	public function index($nama='Reza Pramita',$pekerjaan='Kapiten')
	{
		$data['judul']='About';
		$data['nama'] = $nama;
		$data['pekerjaan']=$pekerjaan;
		$this->view('templates/header',$data);
		$this->view('about/index',$data);
		$this->view('templates/footer');
	}
 	public function page()
 	{
 		$data['judul']='Page';
 		$this->view('templates/header',$data);
 		$this->view('about/page');
		$this->view('templates/footer');
 	}

 }
