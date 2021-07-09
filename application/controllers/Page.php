<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function __construct(){
        parent ::__construct();
        //load model

        if($this->session->userdata('logged_in')  !== TRUE)
        {
            redirect('login');
        }
        $this->load->model('m_login');
        $this->load->helper('url');
    }
    function search_keyword()
    {
        $data['title']= 'Front Office';
        $keyword    =   $this->input->post('keyword');
        $data['tbl_reg']    =   $this->m_login->search($keyword,'tbl_reg');
        $this->load->view('template/header',$data);
        $this->load->view('skeyview',$data);
         $this->load->view('template/footer');
        // redirect('skeyview');
    }

    function search_staff()
    {
        $data['title']= 'Service Advisor';
        $keyword    =   $this->input->post('keyword');
        $data['tbl_reg']    =   $this->m_login->search($keyword,'tbl_reg');
        $this->load->view('template/header',$data);
        $this->load->view('skyview',$data);
         $this->load->view('template/footer');
        // redirect('skeyview');
    }

	public function index()
	{
        //Allowing akses to admin only
		if ($this->session->userdata('level')==='1') {
            $data['title']= 'Front Office';
            $this->load->view('template/header',$data);
            $this->load->view('dashboard_view',$data);
            $this->load->view('template/footer');
        }else {
            echo "Acces Denied";
        }

    }

    public function staff(){

        
        if ($this->session->userdata('level')==='2') {
            $data['title']= 'Service Advisor';
            $data['tbl_reg'] = $this->m_login->getdata();
            $this->load->view('template/header',$data);
            $this->load->view('staff_view',$data);
            $this->load->view('template/footer');
        }else {
            echo "Acces Denied";
        }
    }

    public function tambah(){
        $data['title']= 'Front Office';
        $data['tbl_reg'] = $this->m_login->getdata();
        $this->load->view('template/header',$data);
        $this->load->view('viewprint',$data);
        $this->load->view('template/footer');
    }

    public function cetak($id_reg){
        $where = array('id_reg' => $id_reg);
        $data['title']= 'Cetak';
        $data['tbl_reg'] = $this->m_login->edit_data($where,'tbl_reg')->result();
        $this->load->view('template/header',$data);
        $this->load->view('cetak',$data);
        $this->load->view('template/footer');
    }

    public function cetakv(){
        $id_reg = $this->input->post('id_reg');
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');
        $alamat = $this->input->post('alamat');
        $plat = $this->input->post('plat');
        $t_mtr = $this->input->post('t_mtr');
        $stat = $this->input->post('stat');

        $data =array(
            'nama' => $nama,
            'telp' => $telp,
            'alamat' => $alamat,
            'plat' => $plat,
            't_mtr' => $t_mtr,
            'stat' => $stat
        );

        $where = array(
        'id_reg' => $id_reg);
        $this->m_login->update_data($where,$data,'tbl_reg');
        redirect('page');
    }

    public function create()
    {
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');
        $alamat = $this->input->post('alamat');
        $plat = $this->input->post('plat');
        $t_mtr = $this->input->post('t_mtr');
        $srv = $this->input->post('srv');
        $message = $this->input->post('message');
        $stat = $this->input->post('stat');

        $data =array(
            'nama' => $nama,
            'telp' => $telp,
            'alamat' => $alamat,
            'plat' => $plat,
            't_mtr' => $t_mtr,
            'srv' => $srv,
            'message' => $message,
            'stat' => $stat
        );
        $this->m_login->input_data($data,'tbl_reg');
        redirect('Page/tambah');
    }

    public function hapus($id_reg)
    {
        $where = array('id_reg' => $id_reg);
        $this->m_login->hapus_data($where,'tbl_reg');
        redirect('Page/staff');
    }

    public function edit($id_reg){
        $where = array('id_reg' => $id_reg);
        $data['title']= 'Service Advisor';
        $data['tbl_reg'] = $this->m_login->edit_data($where,'tbl_reg')->result();
        $this->load->view('template/header',$data);
        $this->load->view('edit_view',$data);
        $this->load->view('template/footer');
    }

    public function update(){
        $id_reg = $this->input->post('id_reg');
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');
        $alamat = $this->input->post('alamat');
        $plat = $this->input->post('plat');
        $t_mtr = $this->input->post('t_mtr');
        $stat = $this->input->post('stat');

        $data =array(
            'nama' => $nama,
            'telp' => $telp,
            'alamat' => $alamat,
            'plat' => $plat,
            't_mtr' => $t_mtr,
            'stat' => $stat
        );

        $where = array(
        'id_reg' => $id_reg);
        $this->m_login->update_data($where,$data,'tbl_reg');
        redirect('page/staff');
    }

    
}
