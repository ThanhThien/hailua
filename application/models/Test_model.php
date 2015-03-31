<?php
class Test_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function printMe(){
		echo 'Printed';
	}
	public function printMe2($a){
	echo $a;	
	}
	
}

?>