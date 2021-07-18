<?php
	require_once 'models/db_config.php';
	$err_db="";
	if(isset($_POST["add_student"])){
		
		$rs = insertStudents($_POST["name"]);
		if($rs === true){
			header("Location: all_students.php");
		}
		$err_db = $rs;
	}
	elseif(isset($_POST["edit_students"])){
		
		$rs = editStudents($_POST["name"],$_POST["id"]);
		if($rs === true){
			header("Location: all_students.php");
		}
		$err_db = $rs;
	}
	
	function insertStudents($name){
		$query = "insert into students values (NULL, '$name')";
		return execute($query);
		
	}
	function getAll_Students(){
		$query = "select * from categories";
		$rs = get($query);
		return $rs;
	}
	function getStudents($id){
		$query = "select * from categories where id=$id";
		$rs = get($query);
		return $rs[0];
	}
	function editStudents($name, $id){
		$query = "update categories set name='$name' where id=$id";
		return execute($query);
		
	}
?>