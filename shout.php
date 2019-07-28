<?php
include "lib/Database.php";

Class Shout{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}
	public function GetAllData(){
		$query = "SELECT * FROM tbl_box";
		$result = $this->db->select($query);
		 return $result;
	}
	public function InsertData($Data){
		$name =mysqli_real_escape_string($this->db->link,$Data['name']);
		$body =mysqli_real_escape_string($this->db->link,$Data['body']);
		
		$query = "INSERT INTO tbl_box(name,body) VALUES('$name','$body')";
		$this->db->insert($query);
		header("Location:index.php");
	}
}

?>