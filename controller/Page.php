<?php

class page extends App
{
	public function indexAction() {
		$this->loadModel('ArtikelModel');
		$artikel = $this->artikelmodel->all();
		
		$data = array();
		$data['artikel'] = $artikel;

		echo $this->loadView('home', $data);
	}

	public function aboutAction() {
		$data = array("nama" => "Rizal");

		echo $this->loadView('home', $data);
		echo $this->loadView('home');
	}
}
