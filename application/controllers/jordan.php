<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *This is just a controller for Jordan to test models
 **/

class Jordan extends CI_Controller {

	/**
	 * Index page
	 * 
	 * Just a test page for jordan to test his work
	 **/
	public function index()
	{
		$this->load->model('brand_model','brand');
		
		$this->brand->create_brand();
	}
}