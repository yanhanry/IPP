<?php
//被注解的一共5种方法，都可以用于从叫做"data"的表，内含"id","author",
//"content","title"4个属性,其中"id"为key,里求一定的值
class Data_model extends CI_model{
	/*
	function	getAll(){
		$query = $this->db->query("SELECT * FROM data");

		if($query->num_rows() >0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
	*/

	/*
    function getAll(){
	    $query = $this->db->get('data');

	    if($query->num_rows() > 0){
	    	foreach ($query->result() as $row){
	    		$data[] = $row;
	    	}
	    return $data;
		}
	}
	*/
	
    function getAll(){
	    $query = $this->db->SELECT('title,content');
	    $query = $this->db->get('data');
	    if($query->num_rows() > 0){
	    	foreach ($query->result() as $row){
	    		$data[] = $row;
	    	}
	    return $data;
		}
	}
	
	/*
    function getAll(){
    	$sql = "SELECT title,author,content FROM data WHERE  id= ? AND author= ?";
		$query = $this->db->query($sql,array(2,'Jeffery'));
	    if($query->num_rows() > 0){
	    	foreach ($query->result() as $row){
	    		$data[] = $row;
	    	}
	    return $data;
		}
	}
	*/
	/*
    function getAll(){
		$this->db->SELECT('title,content');
	    $this->db->FROM('data');
	    $this->db->WHERE('id',1);
	    $query = $this->db->get();
	    if($query->num_rows() > 0){
	    	foreach ($query->result() as $row){
	    		$data[] = $row;
	    	}
	    return $data;
		}
	}
	*/
}