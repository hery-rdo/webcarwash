<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index() {
		$this->load->view('main');
	}

	public function app($page) {
		switch ($page) {
			case 'login.js':
				$this->load->view('app-login.js');
				break;
			case 'main.js':
				$this->load->view('app-main.js');
				break;
			case 'reports.js':
				$this->load->view('app-reports.js');
				break;
		}
	}
}
