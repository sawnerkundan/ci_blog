<?php
class User extends CI_model {
	public function userdetails($email,$pass){
		$user = $this->db->where(['email'=>$email,'password'=>$pass])
					 ->get('users');
		$userdetail = $user->result();
		return $userdetail;
	}
	public function articlelist($limit,$offset) {
		$user = $this->db->select()
						 ->limit($limit,$offset)
						 ->get('articles');
		return $user->result_array();
	}
	public function num_rows() {
		$user = $this->db->get('articles');
		return $user->num_rows();
	}
}