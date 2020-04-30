<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbacess extends CI_Model {

	function insertmodel(){
	/*	echo $this->input->post('n1');
		$s['name']=$this->input->post('n1');
		$s['age']=12;
		$this->db->insert('stud',$s);
		print_r("Insert successfully");
		$a['name']='loki';
	    $this->db->where('age', 20);
		$this->db->update('stud', $a);

        $this->db->where('age', 12 );
		$this->db->delete('stud');
		echo ('all process completed');
		exit();  */
        $this->db->select('staff.staff_id,staff.name,staff.role');
        $this->db->from('staff');
        $this->db->join('user','user.user_id=staff.staff_id');
        $query=$this->db->get();
        $data=$query->result_array();
	
	
	}
}
?>