<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loket extends CI_Controller {

	public function loket1()
	{
		$this->load->view('view_loket1');
    }
    
    public function loket2()
	{
		$this->load->view('view_loket2');
    }
    
    public function loket3()
	{
		$this->load->view('view_loket3');
	}
}
