<?php
class Admin extends MY_Controller{
    public function login(){
        $this->load->view('admin/loginview');
    }
	public function loginvalidation(){		
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$this->load->model('user');
		$res = $this->user->userdetails($email,$pass);
		if($res){
			return redirect('admin/dashboard');
		}
	}
	public function dashboard(){
		$this->load->model('user');
		$this->load->library('pagination');
		$config =[
			'base_url'	=> base_url('/admin/dashboard'),
			'per_page'	=> 2,
			'total_rows'=> $this->user->num_rows(),
			'full_tag_open'=> '<ul class="pagination">',
			'full_tag_close'=> '</ul>',
			'next_tag_open'=> '<li class="page-link">',
			'next_tag_close'=> '</li>',
			'prev_tag_open'=> '<li class="page-link">',
			'prev_tag_close'=> '</li>',
			'num_tag_open' =>"<li class='page-link'>",
			'num_tag_close' =>"<li>",
			'cur_tag_open' =>"<li class='page-link active'><a>",
			'cur_tag_close' =>"</a></li>"
		];		
		$this->pagination->initialize($config);	
		$data['articles'] = $this->user->articlelist($config['per_page'],$this->uri->segment(3));
		$this->load->view('admin/articleview',$data);
			
	}
}