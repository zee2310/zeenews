<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		// $this->load->helper('url');
		// $this->load->model('Crudmodel');
		// $record = $this->Crudmodel->getRecords();
		$this->load->view('home');
	}

	public function loaddata()
	{
		
		$config['base_url'] = site_url("home/loaddata");
		$config['total_rows'] = 1;
		$config['per_page'] = 1;
		$config["uri_segment"] = 2;

		$this->pagination->initialize($config);

		echo $this->pagination->create_links();
		// $this->load->helper('url');
		$this->load->model('Crudmodel');
		$record = $this->Crudmodel->getRecords();
		foreach ($record as $row) {
			echo '<tr>';
			echo '<th scope="row" hidden>' . $row->id . '</th>';
			echo '<th scope="row">' . $row->id . '</th>';
			echo '<td>' . $row->first_name . '</td>';
			echo '<td>' . $row->last_name . '</td>';
			echo '<td>' . $row->contact_no . '</td>';
			echo '<td>' . $row->email . '</td>';
			echo '<td>mark@gmail.com</td>';
			echo '<tr>';
		}
	}
}
