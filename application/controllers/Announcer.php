<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcer extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('view_announcer');
	}

	public function test_redis() {
		$this->load->library('redis');
		$redis = $this->redis->config();

		$set = $redis->set('Data1', 'Tutorial redis codeigniter');

		$get = $redis->get('text');

		echo $get;
	}

	public function test_redis2() {
		$redis = new Redis();
		$redis->connect('127.0.0.1');
		$redis->set('cute', 'benedict roxanne');
		$value = $redis->get('text');

		echo $value;
	}

	public function test_redis3() {
		
	}
}
