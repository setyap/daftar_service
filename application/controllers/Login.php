<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent ::__construct();
        //load model
        $this->load->model('login_model'); 

    }

	function index()
	{
        $data['title']= 'Login page';
		$this->load->view('view_login',$data);
    }
    
    function auth(){
        $email      = $this->input->post('email',TRUE);
        $password   = md5($this->input->post('password',TRUE));

        $validate = $this->login_model->validate($email,$password);

        if ($validate->num_rows() > 0) {
            //mengambil data dari database
            $data   = $validate->row_array();
            $name   = $data['user_name'];
            $email  = $data['user_email'];
            $level  = $data['user_level'];

            $sesdata = array(
                'username'  => $name,
                'email'     => $email,
                'level'     => $level,
                'logged_in' => TRUE
                //logged_in untuk validasi jika berhasil login
            );

            $this->session->set_userdata($sesdata);
            //set user data mengatur sessions data yang telah di buat

            if ($level === '1') {
                redirect('page');
            }
            elseif ($level === '2') {
                redirect('page/staff');
            }
            else {
                redirect('page/author');
            }
        }
        else {
            echo $this->session->set_flashdata('msg','Username or Password is Wrong');
            redirect('Login');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        //session destroy untuk tidak bisa balik karena harus login
        redirect(base_url('login'));
    }


}
