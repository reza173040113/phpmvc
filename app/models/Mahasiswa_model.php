<?php 

class Mahasiswa_model{
	private $table = 'mahasiswa';
	private $db;

	public function __construct(){
		$this->db = new database;
	}

	public function getAllMahasiswa()
	{
		$this->db->query('SELECT * FROM '. $this->table);
		return $this->db->resultSet();
	}
}