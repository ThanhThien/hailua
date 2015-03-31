<?php
class ItemView extends CI_Controller{
	public function index(){
		$this->load->model('Test_model');
		$this->Test_model->printMe2('a');
		$info = array('title' => 'HaiLua eCommerce System');
		$this->load->database();
		//$query = $this->db->query('SELECT * FROM products');
		$query = $this->db->get('products');
		$info['products'] = $query->result_array();		
		$ix = $info['products'][0]['vendor_id'];
		var_dump((int)$ix);
		$this->load->view('header',$info);
		$this->load->view('list_view',$info);
	}
}

?>