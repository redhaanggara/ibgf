<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_controller{
	public $model= NULL;
	public function __construct(){
		parent:: __construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$this->load->view('homeview');
	}
}

?>