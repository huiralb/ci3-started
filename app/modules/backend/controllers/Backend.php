<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "Base page with hmvc";
	}

}

/* End of file Base.php */
/* Location: ./application/controllers/Base.php */