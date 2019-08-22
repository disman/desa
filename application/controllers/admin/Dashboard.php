<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_m', 'menu', true);
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['menu'] = $this->menu->getAll();
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/top-menu');
		$this->load->view('admin/dashboard/index');
		$this->load->view('_partials/footer');
	}
}
