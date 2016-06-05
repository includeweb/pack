<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('tank_auth');
		$this->load->library('layout');
		
		$this->layout->setLayout('layout-web');
		
	}

	public function index(){
		$this->load->view('web/home');
		
	}

	public function portfolio($categoria = null, $portfolio = null){
		if($categoria != null && $portfolio != null){
			$this->db->select('*');
			$this->db->from('portfolio');
			$this->db->where('url', $portfolio);
			$data['item'] = $this->db->get()->row();
			
			
			$data['carousel'] = explode(",", $data['item']->carousel);
			
			$this->layout->view('web/portfolio', $data);
		}else{
			$this->db->select('*');
			$this->db->from('portfolio');
			$data['items'] = $this->db->get()->result();
			// die(print_r($data['items']));

			$this->load->view('web/masonry', $data);
		}

		
	}

	public function contacto(){

		$this->layout->view('web/contacto');
	}

	

}