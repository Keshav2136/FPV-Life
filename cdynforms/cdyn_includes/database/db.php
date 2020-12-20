<?php
include_once("cdynconfig.php");
if(!isset($include_filescheck) || $include_filescheck!=1  )	
	 die("Permission Denied");
include_once(dirname(__FILE__) . "/driver/".DB_DRIVER.".php");

//Include the configuration and driver file before access this file
class DB extends Cdyn_db{

    public function __call ($method, $arg) {
        if (method_exists ($this, $method))
            return call_user_func_array (array ($this, $method), $arg);

        call_user_func_array (array ($this->conn, $method), $arg);
        return $this;
    }
	function getAutoincrement($tablename)	{
		$max_id=1;
				$total_records=$this->query("SHOW TABLE STATUS LIKE '$tablename'");
				$fetch=$this->fetch_records();
				if(isset($fetch) && is_array($fetch) && isset($fetch['Auto_increment']) && $fetch['Auto_increment']!='')
						$max_id=$fetch['Auto_increment'];
				
	  return $max_id;
	}

	function insert($field_values_arr,$tablename,$get_insertid=false,$return_sql=false) {
		
		if(!isset($field_values_arr) || !is_array($field_values_arr) || count($field_values_arr)<1 || empty($tablename)==true)
			return false;
		
		$get_insertid=($get_insertid==true)?true:false;
		
		$sqlarr=array("fld"=>'',"val"=>'');
		   $sqlarr['fld'] = "INSERT INTO $tablename(";
		   $sqlarr['val'] = " VALUES(";
		
		foreach($field_values_arr as $field=>$value){
			$angletag=!preg_match("/^<\w*>$/",$field,$match);
			if($angletag==true)
			 $sqlarr['fld'].=$field.",";
			else
			 $sqlarr['fld'].=substr($field,1,-1).",";
			 
			$sqlarr['val'].=$this->safestr($value,$angletag).","; 
		}
		   $sqlarr['fld'][strlen($sqlarr['fld'])-1]=")";
		   $sqlarr['val'][strlen($sqlarr['val'])-1]=")";
		   
		   $sql=$sqlarr['fld'].$sqlarr['val'];
		   if($return_sql==true){ 
		     return $sql;
		   }
		   $querystatus=$this->query($sql);
		   
		   return ($get_insertid==true)?($this->getInsertId()):$querystatus;	
		
	}

	function insert_multiple($fldnames,$record_arrays,$tablename) {
		
		if($fldnames==NULL || !is_array($record_arrays) || count($record_arrays)<1  ) return false;
		
		$csv_fieldname=(is_array($fldnames) && count($fldnames)>0)?implode(",",$fldnames):$fldnames;
	
	   $SQL1 = "INSERT INTO $tablename($csv_fieldname) VALUES ";
	   $SQL2="";
	   foreach($record_arrays as $each_record)	{
	   
		$SQL2 .= "(".implode(",",array_map(array($this,"safestr"),$each_record))."),";
		} 
	  	 $SQL2 = substr($SQL2,0,-1);
	   return $this->query($SQL1.$SQL2);
	}	


	function update($field_values_arr,$where,$tablename) {
			$sql = "UPDATE $tablename SET ";
		foreach($field_values_arr as $field=>$value){
			$angletag=!preg_match("/^<\w*>$/",$field,$match);
			if($angletag==true)
			 $sql.="$field=";
			else
			 $sql.=substr($field,1,-1)."=";
			 
			$sql.=$this->safestr($value,$angletag).","; 
		}
			$sql = substr($sql,0,-1);
			$sql .= " WHERE ".$where;
				
			return  $this->query($sql);
	}
	
	
	function getSingleRec($tablename,$where="",$fieldname_csv='*'){
		
		if($tablename=='')
			return false;
		
		$fieldname_csv=(isset($fieldname_csv) && $fieldname_csv!='')?$fieldname_csv:'*';
		if($where!='')
		$where="WHERE $where";
		
			$query="SELECT $fieldname_csv FROM $tablename $where LIMIT 1";
			$this->query($query,"select");
			return $this->fetch_records();
			
	}
	
	function delRecord($tablename,$where='')	{
		
		if($tablename=='')
			return false;
		if($where!='')
			$where="where $where";
			
			$query="DELETE  FROM $tablename $where LIMIT 1";
			return $this->query($query);
			
	}
	
	function emptyTable($tablename) {
		if($tablename=='')
			return false;
			
			$query="TRUNCATE TABLE $tablename";
			$this->query($query);
	}
	
	function print_sql($sql)
	{
		echo "<div style=\"border:1px solid black;background:#FFFFDD;";
		echo "font:small 'Courier new',monospace;padding:5px;\">";
		echo "<b>SQL STATEMENT:</b><br/>$sql</div>";
	}
	function print_result($record_count,$query_time)
	{
		echo "<div style=\"border:1px solid black;border-top:0;background:#EEFFFF;";
		echo "font:small 'Courier new',monospace;padding:4px;margin-bottom:10px;\">";
		echo "<b>RESULT:</b><br/>".$this->getInfo()."<br/>";
		echo "<span style=\"color:blue\">$record_count</span> records affected</br>";
		echo "Query runtime: <span style=\"color:blue\">$query_time</span> seconds.</div>"; 
	}
	//@$index=> single field name. Array Index. [Optional]
	//@$field=> single field name. Array Value. [Optional]
	//$type=> default :NULL, type set to "subarray" then get same index record in sub array, type set to jsonarr then get json reocrds in array [Optional]
	function getRecords($query='',$index='',$field='',$type=NULL)	{
		if($query=='') return false;
		$arr=array();
		
		$i=0;
			$totrecords=$this->query($query,"select");
			
			if($totrecords>0)	{
					if($type=="jsonarr" && $index!='' && $field!='') {
						while($fetch=$this->fetch_records())	{
							 $arr[$i++]="'".$fetch[$index]."':'".$fetch[$field]."'";
						}
						// convert above array to JSON String '{'.implode(',',$arr).'}' after return
					}					
					else if($type=="subarray") {
						while($fetch=$this->fetch_records())	{
							if($index!='')
								$arr[$fetch[$index]][]=($field!='')?$fetch[$field]:$fetch;			
							else
								$arr[$i++][]=($field!='')?$fetch[$field]:$fetch;			
						}
					}else {
						while($fetch=$this->fetch_records())	{
							if($index!='')
								$arr[$fetch[$index]]=($field!='')?$fetch[$field]:$fetch;			
							else
								$arr[$i++]=($field!='')?$fetch[$field]:$fetch;			
						}
					}
			}
				
		return $arr;
	}
	
    function safestr($value,$striptags=true) {
		if(is_null($value)) return "NULL";
		if(is_string($value))
		{
		   if($striptags) $value=strip_tags($value);
		   $value = addslashes($value);		
		   $value = str_replace('\\\\','\\',str_replace('\\\"','\"',str_replace("\\\\\\'","\\'",$value)));
		   $value = "'$value'";
		}
		return $value;
	}

}

$db=new DB();
//set true to show query 
$db->debug_mode=DB_debugmode;
?>