<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fetch_model extends CI_Model {
	// fetch all data of all phones for first page
	public function get_phones()
	{
	    $this->db->select('*');
	    $this->db->order_by('price','DESC');
	    $query = $this->db->get('phones');
	    return $query->result();

	}
	//fetch data for a phone using its ID
	public function get_a_phone($phone_id)
	{
		$this->db->where('phone_id',$phone_id);
        $query = $this->db->get_where('phones', array('phone_id' => $phone_id));
        return $query->row();
	}
	// fetch data according to the phone name selected from dropdown
	public function get_com_phone($com)
	{
		$this->db->select('*');
		$this->db->where('name',$com);
		$res = $this->db->get('phones');
		return $res;
	}
}

/* End of file Fetch_model.php */
/* Location: ./application/models/Fetch_model.php */