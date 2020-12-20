<?PHP
//require_once(dirname(dirname(__FILE__))."/caption.php");
function print_sql($sql)
{
	echo "<div style=\"border:1px solid black;background:#FFFFDD;";
	echo "font:small 'Courier new',monospace;padding:5px;\">";
	echo "<b>SQL STATEMENT:</b><br/>$sql</div>";
}

function print_result($rcount,$qtm)
{
	echo "<div style=\"border:1px solid black;border-top:0;background:#EEFFFF;";
	echo "font:small 'Courier new',monospace;padding:4px;margin-bottom:10px;\">";
	echo "<b>RESULT:</b><br/>".mysql_info()."<br/>";
	echo "<span style=\"color:blue\">$rcount</span> records affected</br>";
	echo "Query runtime: <span style=\"color:blue\">$qtm</span> seconds.</div>"; 
}

class DB
{
	function DB($db=id15520675_users,$username=id15520675_guest,$password=Maestrocg@23,$host=root)
	{
		$this->conn = @mysql_connect($host,$username,$password,false,2) or
		die("<h3 align=\"center\" style=\"color:red\">Unable to Connect to MySQL Server</h3>");
		@mysql_select_db($db,$this->conn) or 
		die("<h3 align=\"center\" style=\"color:red\">Unable to find the database</h3>");
		$this->rs = null;
		$this->recordcount = null;
		$this->totrecs=null;
		$this->lastquery = "";
		$this->debug_mode =false;
	}
	 
	function query($SQL)
	{

		if(strlen($SQL)==0) return false;
		$SQL = preg_replace('/`(.+?)`/',TABLE_PREFIX.'$1',$SQL);
		if($this->debug_mode)
		{
			print_sql($SQL);		
		 	$t1=microtime(true);
			$this->rs =@mysql_query($SQL,$this->conn);
			$qtm = microtime(true)-$t1;
		}
		else $this->rs =@mysql_query($SQL,$this->conn);
		$this->recordcount = mysql_affected_rows($this->conn);
		$this->lastquery = $SQL;
		if($this->debug_mode) print_result($this->recordcount,$qtm);
		return ($this->recordcount);
	}
	
	function page_query($SQL,$pagenum=1,$perpage=10,$totrecs=null)
	{
	    if($pagenum < 1) $pagenum=1;
		if($perpage < 1) $perpage=10;
		if(is_null($totrecs))
			$this->totrecs = $this->get_field("SELECT COUNT(*) ".strstr($SQL,'FROM'));
		$PSQL = "$SQL LIMIT ".(($pagenum-1)*$perpage).",$perpage";
		return($this->query($PSQL));
	}
	
	/*function getrec()
	{
		if(!$this->rs) return false;
		return mysql_fetch_assoc($this->rs);
	}*/
	function getrec($rec_type='assoc')
	{
		if(!$this->rs) return false;
		switch($rec_type)
		{
			case 'row':
				return mysql_fetch_row($this->rs);
			case 'array':
				return mysql_fetch_array($this->rs);
			case 'object':			
				return mysql_fetch_object($this->rs);
			default:
				return mysql_fetch_assoc($this->rs);
		}
	}

	function begin_transaction()
	{
			return(@mysql_query("BEGIN",$this->conn));	
	}
	
	function commit_transaction()
	{
			return(@mysql_query("COMMIT",$this->conn));	
	}
	
	function rollback_transaction()
	{
			return(@mysql_query("ROLLBACK",$this->conn));	
	}	
	
	function get_insert_sql($flds,$tblname)
	{
	   $SQL1 = "INSERT INTO $tblname(";
	   $SQL2 = " VALUES(";
	
	   foreach($flds as $fld=>$val)
	   {
			$SQL1 .= $fld.",";
			$SQL2 .= $this->safestr($val).",";
	   }
	  	  
	   $SQL1[strlen($SQL1)-1]=")";
	   $SQL2[strlen($SQL2)-1]=")";
	   return $SQL1.$SQL2;	
	}
		
	function insert(&$flds,$tblname)
	{
	   $SQL1 = "INSERT INTO $tblname(";
	   $SQL2 = " VALUES(";
	
	   foreach($flds as $fld=>$val)
	   {
	   		$striptags = !preg_match("/^<\w*>$/",$fld);
			if($striptags) $SQL1 .= $fld.",";
			else $SQL1 .= substr($fld,1,-1).",";
			$SQL2 .= $this->safestr($val,$striptags).",";
	   }
	  	  
	   $SQL1[strlen($SQL1)-1]=")";
	   $SQL2[strlen($SQL2)-1]=")";
	   $db->debug_mode=true;
	   return $this->query($SQL1.$SQL2);	
	}
	function insert_get_id($flds,$tblname)
	{
		$SQL = $this->get_insert_sql($flds,$tblname);
	//	$this->debug_mode=true;$this->query($SQL);exit;
		if($this->query($SQL))
		{
			//exit;
			return(mysql_insert_id($this->conn));
		}	
		return false;	
	}
	
	function insert_multiple($strfldnames,$valrows,$tblname)
	{
	   if(count($valrows)==0) return false;
	   $SQL1 = "INSERT INTO $tblname($strfldnames) VALUES ";
	   $SQL2="";
	   foreach($valrows as $vals)
		 $SQL2 .= "(".implode(",",array_map(array($this,"safestr"),$vals))."),";
		 
	  	 $SQL2 = substr($SQL2,0,-1);
	   return $this->query($SQL1.$SQL2);
	}	
	
	function update($flds,$WHERE,$tblname)
	{
	//$db->debug_mode=true;
		$SQL = "UPDATE $tblname SET ";
		
		foreach($flds as $fld=>$val)
		{
	   		$striptags = !preg_match("/^<\w*>$/",$fld);
			if($striptags) $SQL .= "$fld=";
			else $SQL .= substr($fld,1,-1)."=";
			$SQL .= $this->safestr($val,$striptags).",";			
		}
		
		$SQL = substr($SQL,0,-1);
		$SQL .= " WHERE ".$WHERE;
			
		return  $this->query($SQL);

	}
	
	function main_update($flds,$WHERE,$tblname)
	{
		$SQL = "UPDATE $tblname SET ";
		
		$SQL .= $flds;
		$SQL .= " WHERE ".$WHERE;
		return $this->query($SQL);
	}
	function &get_col_array($sql,$keycol=0,$valcol=null,$pagenum=0,$perpage=0)
	{
		$arr = Array();
	    
		/*if(is_null($perpage))
		     $this->query($sql); 
		else
			$this->page_query($sql,$pagenum,$perpage);	*/
			
		if($perpage==0)
		   $this->query($sql);	
		else
		  $this->page_query($sql,$pagenum,$perpage);		 
		if($this->recordcount <= 0) return $arr;
		
		if(is_null($valcol)) //is_null because $valcol can also be 0
		{
			if(mysql_field_type($this->rs,$keycol) == 'int')
				while(($r=mysql_fetch_row($this->rs)))
					$arr[] = intval($r[$keycol]);
			else
				while(($r=mysql_fetch_row($this->rs)))
					$arr[] = $r[$keycol];
		}
		else
		{
			if(mysql_field_type($this->rs,$keycol) == 'int')
				while(($r=mysql_fetch_row($this->rs)))
					 $arr[$r[$valcol]] = intval($r[$keycol]);
			else
			{
				while(($r=mysql_fetch_row($this->rs)))
					$arr[$r[$valcol]] = $r[$keycol];
			}		
		}
		
		return $arr;	
	}
	
	function print_records()
	{
	   if($this->rs && $this->recordcount>0)
	   {	
	   		$fc = mysql_num_fields($this->rs);
			echo "<table style=\"border:1px solid black;font:11px verdana,arial;\" cellpadding=\"5\" cellspacing=\"1\">\n";
			echo "<caption style=\"padding:2px 5px;text-align:left;background:#eee;font-size:13px;font-weight:bold;\">{$this->lastquery}</caption><tr style=\"background:black;color:white;\">";
			for($i=0;$i<$fc;$i++) echo "<th>".mysql_field_name($this->rs, $i)."</th>";
	   		echo "</tr>\n";		
 			for($j=0;$j < $this->recordcount; $j++)
			{
				$r = mysql_fetch_row($this->rs);
				echo "<tr style=\"background:#".(($j % 2)? "EEEEFF":"EEFFFF").";\">";
				for($i=0;$i<$fc;$i++) echo "<td>{$r[$i]}</td>";	echo "</tr>\n";
			}
			echo "</table>";
	   }
	   else echo "[No records!]";
	}

	function get_field($SQL,$col=0,$row=0)
	{
		$this->query($SQL);
		if($this->recordcount == 0) return false;
		for($r = 0;($flds = @mysql_fetch_row($this->rs));$r++)
			if(($r == $row) && isset($flds[$col]))
				switch(mysql_field_type($this->rs,$col))
				{	
					case 'int':
						return intval($flds[$col]);
						
					case 'real':
						return floatval($flds[$col]);
						
					default:
						return $flds[$col];
				}
	
		return false;
	}
	
    function safestr($val,$striptags=true)
	{
		if(is_null($val)) return "NULL";
		if(is_string($val))
		{
		   if($striptags) $val=strip_tags($val);
		   $val = addslashes($val);		
		   $val = str_replace('\\\\','\\',str_replace('\\\"','\"',str_replace("\\\\\\'","\\'",$val)));
		   $val = "'$val'";
		}
		return $val;
	}
	/*function delete($Where,$tablename){
		 $SQL=('delete from '.$tablename.' where '.$Where);
		 return  $this->query($SQL);
	}*/
}

$db = new DB();
//require(dirname(__FILE__).'/init_config.php');
?>