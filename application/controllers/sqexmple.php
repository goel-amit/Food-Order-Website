<?php
class sqexmple extends CI_Controller
{
	function  __construct()
	{
		parent ::__construct();
	}
	public function index()
	{
		$this->load->model('sqexmple1');
		$data['result']=$this->sqexmple1->get_book();
		
		foreach($result as $r)
		{
			echo $r->un;
		}
	}
}
?>