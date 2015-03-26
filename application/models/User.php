<?php
class User extends CI_Model{
	/*
	Don't change this variable, or it'll cause serious login problem
	*/
	private $salt = '46c935195db61da9974dadd253547505';
	private function hashpasword($password){
		return md5($password . $this->salt);
	}
	public function __construct(){
		parent::__construct();
	}
		/*
		Return true if user is exist, else false
	*/
	public function is_exist($username){
		$query = $this->db->get_where('users',array('user_name'=>$username));
		$num = $query->num_rows();
		return ($num > 0 ? true : false);
	}
	/*
		Return true if user name and password pair is valid
	*/ 
	public function check_auth($username,$password){
		$data = array(
		'user_name' => $username,
		'hashedpassword' => $this->hashpasword($password)
		);
		$query = $this->db->get_where('users',$data);
		if($query->num_rows() > 0) return true;
		else return false;
	}
	/*
		Return true when create success, else false
	*/
	public function create($username, $password){
		if($this->is_exist($username)){
			return false;
		}
		else{
		$data = array(
		'user_name' => $username,
		'hashedpassword' => $this->hashpasword($password)
		);
			$this->db->insert('users',$data);
			return true;
		}
	}
}
?>