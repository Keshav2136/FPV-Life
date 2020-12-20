<?php
/*
#Author: sasikumar
#Contact:info@create-dynamic.com
#Code created by http://www.create-dynamic.com
#Code basically designed for Form purpose but not limited.This program is free software; you can redistribute it and/or modify it.This program is distributed in the hope that it will be useful without any warranty.
*/ 
if(!isset($include_filescheck) || $include_filescheck!=1  )	
	 die("Permission Denied");

class CDYNprintEmailFormData	{

var $print_data='';	
	
	function __construct()	{
	
	}
	//@$name=textbox name not post value
	function textbox($name,$label)	{
	$str=$label_str='';
		if(!isset($name) || $name=='' || !isset($_POST[$name]) || trim($_POST[$name])=='')
			return $str;
		if($label!='')
			$label_str='<b>'.$label.':</b><br/>';
		
		if(isset($_POST[$name]) && trim($_POST[$name])!='')	{
			$str.=$label_str.trim($_POST[$name]);
		}
		
		$this->print_data.='<br/>'.$str;
		
		return $str;
	}
	
	
	function textarea($postname,$label)	{
	$str=$label_str='';
		if(!isset($postname) || $postname=='' || !isset($_POST[$postname]) || trim($_POST[$postname])=='')
			return $str;
		if($label!='')
			$label_str='<b>'.$label.':</b><br/>';
		
		if(isset($_POST[$postname]) && trim($_POST[$postname])!='')	{
			$str.=$label_str.nl2br(trim($_POST[$postname]));
		}
		
		$this->print_data.='<br/>'.$str;
		
		return $str;
	}
	
	function checkbox($postname,$label)	{
	
	$str=$label_str='';
	
		if(!isset($postname) || $postname=='' || !isset($_POST[$postname])  || $_POST[$postname]=="null"  || $_POST[$postname][0]=="null" )
			return $str;
		if($label!='')
			$label_str='<b>'.$label.':</b><br/>';
		
		if(isset($_POST[$postname]))	{
			if( is_array($_POST[$postname]) && count($_POST[$postname])>0)
			 $str.=$label_str.implode(",", $_POST[$postname]);
			else
			 $str.=$label_str.trim($_POST[$postname]);
		}
		
		$this->print_data.='<br/>'.$str;
		
		return $str;
	
	}
	
	function radioChoice($postname,$label)	{
		$str=$label_str='';
		//print_r($_POST[$postname]);
		
			if(!isset($postname) || $postname=='' || !isset($_POST[$postname]) || trim($_POST[$postname])=='' || trim($_POST[$postname])=="null")
				return $str;
				
			if($label!='')
				$label_str='<b>'.$label.':</b><br/>';
			
			if(isset($_POST[$postname]) && trim($_POST[$postname])!='')	{
				$str.=$label_str.trim($_POST[$postname]);
			}
			
			$this->print_data.='<br/>'.$str;
			
			return $str;
	}
	
	function select($postname,$label)	{
	
	$str=$label_str='';
		if(!isset($postname) || $postname=='' || !isset($_POST[$postname]) )
			return $str;
		if($label!='')
			$label_str='<b>'.$label.':</b><br/>';
		
		if(isset($_POST[$postname]) && is_array($_POST[$postname]) && count($_POST[$postname])>0)	{
			$str.=$label_str.implode(",", $_POST[$postname]);
		}else if(isset($_POST[$postname]) && trim($_POST[$postname])!='')	{
				$str.=$label_str.trim($_POST[$postname]);
		}
		
		$this->print_data.='<br/>'.$str;
		
		return $str;
	
	}
	
	
	function fullName($postname,$label='')	{
	
	$str='';
	$strarr=array();
	
		if( !isset($postname) || $postname=='' || !isset($_POST[$postname])  || !is_array($_POST[$postname]) || count($_POST[$postname])<1 || $_POST[$postname]['first']=='' || $_POST[$postname]['last']=='' )
			return $str;
			
			if($label!='')
				$strarr['label']='<b>'.$label.':</b><br/>';
			if(isset($_POST[$postname]['prefix']) && trim($_POST[$postname]['prefix'])!='')	
				$strarr['prefix']='<i>'.trim($_POST[$postname]['prefix']).'.</i> ';
			if(isset($_POST[$postname]['first']) && trim($_POST[$postname]['first'])!='')	
				$strarr['first']=trim($_POST[$postname]['first'])." ";
			if(isset($_POST[$postname]['middle']) && trim($_POST[$postname]['middle'])!='')	
				$strarr['middle']=trim($_POST[$postname]['middle']).' ';
			if(isset($_POST[$postname]['last']) && trim($_POST[$postname]['last'])!='')	
				$strarr['last']=trim($_POST[$postname]['last']).' ';
			if(isset($_POST[$postname]['suffix']) && trim($_POST[$postname]['suffix'])!='')	
				$strarr['suffix']='<i>'.trim($_POST[$postname]['suffix']).'.</i>';
			
			
			$str=(is_array($strarr) && count($strarr)>0)?implode("",$strarr):'';
			
		$this->print_data.='<br/>'.$str;
		return $str;
	}
	
	function printPhoneNumber($postname,$label='')	{
		
		$str='';
		$strarr=array();
		
			if( !isset($postname) || $postname=='' || !isset($_POST[$postname])  || !is_array($_POST[$postname]) || count($_POST[$postname])<1 || $_POST[$postname]['number']==''  )
				return $str;
				
				if($label!='')
					$str='<b>'.$label.':</b><br/>';
				if(isset($_POST[$postname]['countrycode']) && trim($_POST[$postname]['countrycode'])!='')	
					$str.=" <i>Country Code</i>: ".trim($_POST[$postname]['countrycode']);
				if(isset($_POST[$postname]['areacode']) && trim($_POST[$postname]['areacode'])!='')	
					$str.=" <i>Area Code</i>: ".trim($_POST[$postname]['areacode']);
				if(isset($_POST[$postname]['number']) && trim($_POST[$postname]['number'])!='')	
					$str.=" <i>Number</i>: ".trim($_POST[$postname]['number']);
					
			$this->print_data.='<br/>'.$str;
		return $str;
		
	}

	function print_time($postname,$label='')	{
	
	$str='';
	$strarr=$strarr1=array();
	
		if( !isset($postname) || $postname=='' || !isset($_POST[$postname])  || !is_array($_POST[$postname]) || count($_POST[$postname])<1 || $_POST[$postname]['hour']=='' || $_POST[$postname]['minute']=='' || ($_POST[$postname]['hour']==0 && $_POST[$postname]['minute']==0)  )
			return $str;
			
			if(isset($_POST[$postname]['hour']) && trim($_POST[$postname]['hour'])!='')	
				$strarr1['hour']=str_pad($_POST[$postname]['hour'],2,STR_PAD_LEFT,0);
			if(isset($_POST[$postname]['minute']) && trim($_POST[$postname]['minute'])!='')	
				$strarr1['minute']=str_pad($_POST[$postname]['minute'],2,STR_PAD_LEFT,0);
				
			if($label!='')
				$strarr['label']='<b>'.$label.':</b><br/>';
				
				$strarr['timeconnect']=implode(" : ",$strarr1);
				
			if(isset($_POST[$postname]['meridian']) && trim($_POST[$postname]['meridian'])!='')	
				$strarr['meridian']=' '.trim($_POST[$postname]['meridian']);
	
			
			$str=(is_array($strarr) && count($strarr)>0)?implode("",$strarr):'';
			
			$this->print_data.='<br/>'.$str;
			return $str;

	}
	
	function printAddress($postname,$label='')	{
	
	$str='';
	$strarr=array();
	
		if( !isset($postname) || $postname=='' || !isset($_POST[$postname])  || !is_array($_POST[$postname]) || count($_POST[$postname])<1 || !isset($_POST[$postname]['address1']) || !isset($_POST[$postname]['city']) || !isset($_POST[$postname]['zip']) || !isset($_POST[$postname]['country']) || $_POST[$postname]['address1']=='' || $_POST[$postname]['city']=='' || $_POST[$postname]['zip']=='' )
			return $str;
			
			
			
			if($label!='')
				$strarr['label']='<b>'.$label.':</b>';
			if(isset($_POST[$postname]['address1']) && trim($_POST[$postname]['address1'])!='')	
				$strarr['address1']=trim($_POST[$postname]['address1']);
			if(isset($_POST[$postname]['address2']) && trim($_POST[$postname]['address2'])!='')	
				$strarr['address2']=trim($_POST[$postname]['address2']);
			if(isset($_POST[$postname]['city']) && trim($_POST[$postname]['city'])!='')	
				$strarr['city']=trim($_POST[$postname]['city'])." ";
			if(isset($_POST[$postname]['state']) && trim($_POST[$postname]['state'])!='')	
				$strarr['state']=trim($_POST[$postname]['state']).' ';
			if(isset($_POST[$postname]['zip']) && trim($_POST[$postname]['zip'])!='')	
				$strarr['zip']=trim($_POST[$postname]['zip']).' ';
			if(isset($_POST[$postname]['country']) && trim($_POST[$postname]['country'])!='' && trim($_POST[$postname]['country'])>0)	
				$strarr['country']=trim($_POST[$postname]['country']);
			
			
			$str=(is_array($strarr) && count($strarr)>0)?implode("<br/>",$strarr):'';
			
		$this->print_data.='<br/>'.$str;
		return $str;
	
	}
	
	
	function printDate($postname,$label='')	{
	
		$str='';
		$strarr=array();
	
		if($label!='')
			$label_str='<b>'.$label.':</b><br/>';
	
		if(isset($_POST[$postname]) && trim($_POST[$postname])!='')	{
			$str.=$label_str.trim($_POST[$postname]);
		}
		
		$this->print_data.='<br/>'.$str;
		
		return $str;
		
	}
	
	function printFormData()	{
		
		
		return $this->print_data;
		
	}
	
	
	
}
?>