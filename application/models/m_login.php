<?php 
 
class m_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	public function input_data($data,$tbl_reg)
	{
		$this->db->insert('tbl_reg',$data);
	}
	public function getdata()
	{
		return $this->db->get('tbl_reg')->result();
	}
	public function hapus_data($where,$tbl_reg){
		$this->db->where($where);
		$this->db->delete($tbl_reg);
	}
	public function edit_data($where,$tbl_reg){		
	return $this->db->get_where($tbl_reg,$where);
	}
	public function update_data($where,$data,$tbl_reg){
		$this->db->where($where);
		$this->db->update($tbl_reg,$data);
	}	
	 function search($keyword)
    {
        $this->db->like('nama',$keyword);
        $query  =   $this->db->get('tbl_reg');
        return $query->result();
    }
}
