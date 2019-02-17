<?php
class User extends MY_Controller{
    public function index(){
        $this->load->view('Users/article_list');
    }
}
?>