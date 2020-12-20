<?php
if(!isset($include_filescheck) || $include_filescheck!=1)	
	 die("Permission Denied");

class Cdyn_db {

public $conn;

public $results;

public $tot_records;

public $last_query;

public $debug_mode=false;
   
	
	function __construct(){
		 
		 $this->tot_records=0;
		 
		 $this->results=NULL;
		 
		 $this->last_query='';
		
		 $this->conn=@mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
			if (mysqli_connect_errno($this->conn)) {
					die("Connection failed: ".mysqli_connect_error);
			}	 
	}

	function query($sql,$type=''){
	
			if(strlen($sql)==0) return false;
			
			if($this->debug_mode)
			{
				$this->print_sql($sql);		
				$t1=microtime(true);
				$this->results =@mysqli_query($this->conn,$sql);
				$query_time = microtime(true)-$t1;
			}else		
				$this->results =@mysqli_query($this->conn,$sql);	
				
			$this->last_query=$sql;

			$this->tot_records=(isset($type) && $type=='select')?(int)@mysqli_num_rows($this->results):mysqli_affected_rows($this->conn);
			
			if($this->debug_mode) {$this->print_result($this->tot_records,$query_time);}
			
			return $this->tot_records;
	}
	
	function fetch_records($type='assoc'){
	
		if($this->tot_records<1 || $this->results==NULL)
			return false;
	
		switch($type){
			case 'row':
				return mysqli_fetch_row($this->results);
			break;
			case 'array':
				return mysqli_fetch_array($this->results,MYSQLI_BOTH);
			break;
			case 'object':
				return mysqli_fetch_object($this->results);
			break;
			default:
				return mysqli_fetch_assoc($this->results);
			break;
			
		}
	
	}
	
	function free_results(){
		mysqli_free_result($this->result);
	}
	function closeconnection() {
	  	mysqli_close($this->conn);
	}
	function getInsertId(){
		return mysqli_insert_id($this->conn);
	}
	function getInfo(){
		return (function_exists("mysqli_info"))?mysqli_info($this->conn):NULL;
	}
	function begin_transaction()	{
			return (function_exists("mysqli_begin_transaction"))?mysqli_begin_transaction($this->conn, MYSQLI_TRANS_START_READ_ONLY):@mysqli_query($this->conn, "START TRANSACTION");	
	}
	function set_autocommit($mode=FALSE){
		    return mysqli_autocommit($this->conn,$mode);
	}
	function commit_transaction()	{
			return(@mysqli_commit($this->conn));	
	}
	function rollback_transaction()	{
			return(mysqli_rollback($this->conn));	
	}	
	
}
?>