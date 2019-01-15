<?php
class Dashboard_model extends CI_Model {

	public function get_all()
	{
		$this->db->select('tbl_giat.id as id, tbl_giat.title as kegiatan, tbl_giat.start as start, tbl_giat.end as end, tbl_giat.description as tempat, tbl_giat.penyelengara as penyelenggara, tbl_diposisi.perangkat as disposisi, tbl_giat.keterangan as keterangan ');
		$this->db->from('tbl_giat');
		$this->db->join('tbl_diposisi', 'tbl_diposisi.id = tbl_giat.disposisi');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function agenda_1()
	{
		$this->db->select('tbl_giat.id as id, tbl_giat.title as kegiatan, tbl_giat.start as start, tbl_giat.end as end, tbl_giat.description as tempat, tbl_giat.penyelengara as penyelenggara, tbl_diposisi.perangkat as disposisi, tbl_giat.keterangan as keterangan ');
		$this->db->from('tbl_giat');
		$this->db->join('tbl_diposisi', 'tbl_diposisi.id = tbl_giat.disposisi');
		$this->db->where('DATE(start)=CURDATE()');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function agenda_2()
	{
		$this->db->select('tbl_giat.id as id, tbl_giat.title as kegiatan, tbl_giat.start as start, tbl_giat.end as end, tbl_giat.description as tempat, tbl_giat.penyelengara as penyelenggara, tbl_diposisi.perangkat as disposisi, tbl_giat.keterangan as keterangan ');
		$this->db->from('tbl_giat');
		$this->db->join('tbl_diposisi', 'tbl_diposisi.id = tbl_giat.disposisi');
		$this->db->where('DATE(start)=CURDATE() + INTERVAL 1 DAY');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function agenda_3()
	{
		$this->db->select('tbl_giat.id as id, tbl_giat.title as kegiatan, tbl_giat.start as start, tbl_giat.end as end, tbl_giat.description as tempat, tbl_giat.penyelengara as penyelenggara, tbl_diposisi.perangkat as disposisi, tbl_giat.keterangan as keterangan ');
		$this->db->from('tbl_giat');
		$this->db->join('tbl_diposisi', 'tbl_diposisi.id = tbl_giat.disposisi');
		$this->db->where('DATE(start)=CURDATE() + INTERVAL 2 DAY');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function get_id($id)
	{
		$this->db->select('tbl_giat.id as id, tbl_giat.title as kegiatan, tbl_giat.start as start, tbl_giat.end as end, tbl_giat.description as tempat, tbl_giat.penyelengara as penyelenggara, tbl_diposisi.perangkat as disposisi, tbl_giat.keterangan as keterangan ');
		$this->db->from('tbl_giat');
		$this->db->join('tbl_diposisi', 'tbl_diposisi.id = tbl_giat.disposisi');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

}
?>