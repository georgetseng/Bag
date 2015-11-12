<?php
	class MY_Controller extends CI_Controller{
		
		private $data;//infomation showing on the page
				
		function MY_Controller()
		{
			parent::__construct();
			date_default_timezone_set('America/Los_Angeles');
			$this->data = array();
			
		}
		
		function get_data()
		{
			return $this->data;
		}
		
		
	}

?>