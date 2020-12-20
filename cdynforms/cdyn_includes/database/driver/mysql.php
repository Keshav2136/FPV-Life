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
	
	 $this->conn=@mysql_connect(DB_HOST,DB_USERNAME,DB_PASSWORD) or die("HOST not Connected");
	 @mysql_select_db(DB_DATABASE, $this->conn) or die("Database not connected");
	 
	}

	function query($sql,$type=''){
	
			if(strlen($sql)==0) return false;
			
			if($this->debug_mode)
			{
				$this->print_sql($sql);		
				$t1=microtime(true);
				$this->results =@mysql_query($sql,$this->conn);
				$query_time = microtime(true)-$t1;
			}else		
				$this->results =@mysql_query($sql,$this->conn);	
			
				
			$this->last_query=$sql;
			
			$this->tot_records=(isset($type) && $type=='select')?(int)@mysql_num_rows($this->results):mysql_affected_rows($this->conn);
			
			if($this->debug_mode) {$this->print_result($this->tot_records,$query_time);}
			
			return $this->tot_records;
	}
	
	function fetch_records($type='assoc'){
	
		if($this->tot_records<1 || $this->results==NULL)
			return false;
	
		switch($type){
			case 'row':
				return mysql_fetch_row($this->results);
			break;
			case 'array':
				return mysql_fetch_array($this->results);
			break;
			case 'object':
				return mysql_fetch_object($this->results);
			break;
			default:
				return mysql_fetch_assoc($this->results);
			break;
			
		}
	
	}
	
	function free_results(){
		mysql_free_result($this->result);
	}
	function closeconnection() {
	  	mysql_close($this->conn);
	}
	function getInsertId(){
		return mysql_insert_id($this->conn);
	}
	function getInfo(){
		return (function_exists("mysql_info"))?mysql_info($this->conn):NULL;
	}
	function begin_transaction()	{
			@mysql_query("START TRANSACTION", $this->conn);
			return(@mysql_query("BEGIN",$this->conn));	
	}
	function commit_transaction()	{
			return(@mysql_query("COMMIT",$this->conn));	
	}
	function rollback_transaction()	{
			return(@mysql_query("ROLLBACK",$this->conn));	
	}	
}
?>
