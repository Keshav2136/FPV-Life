<?php
/*
#Author: sasikumar
#Contact:info@create-dynamic.com
#Code created by http://www.create-dynamic.com
#Code basically designed for Form purpose but not limited.This program is free software; you can redistribute it and/or modify it.This program is distributed in the hope that it will be useful without any warranty.
*/ 

//if(!isset($include_filescheck) || $include_filescheck!=1)	
//	 die("Permission Denied");

$CDYN_ARR=array(
	"status"=>array('In-active','Active'),
	"yesorno_status"=>array(0=>'No',1=>'Yes'),
	"monthfull"=>array(1=>'January',2=>'February',3=>'March',4=>'April',5=>'May',6=>'June',7=>'July',8=>'August',9=>'September',10=>'October',11=>'November',12=>'December'),
	"monthshort"=>array(1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'June',7=>'July',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec'),
	"monthdays"=>array(1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31),
	"dateFormatOptions"=>array(1=>'MM/DD/YYYY',2=>'DD/MM/YYYY',3=>'YYYY/MM/DD'),
	"weekdays"=>array(0=>'Sunday',1=>'Monday',2=>'Tuesday',3=>'Wednesday',4=>'Thursday',5=>'Friday',6=>'Saturday'),
	"gender"=>array(1=>'Male',2=>'Female')
);



class cdyn_phputility {

function __construct() {

}

function trims($str,$space=" ")	{
	return (trim($str)!='')?preg_replace("/^\s+ | \s+$/",$space,trim($str)):'';
}

function LeapYearOrNot($y)
{
	return ($y % 4 == 0) && ($y % 100 != 0) || ($y % 400 == 0);
}

function validateStr($str,$type='')	{

	$str=$this->trims($str,' ');

		switch($type)	{
			
			case 'letter':
				$regexp='/[^a-z]+/i';
			break;
			case 'number':
				$regexp='/[^0-9]+/i';
			break;
			case 'both':
				$regexp='/[^a-z0-9]+/i';
			break;
			// include underscore a-z0-9
			case 'underscore':
				$regexp='/[^a-z0-9_]+/i';
			break;
			case 'bothWspace':
				$regexp='/[^a-z0-9 ]+/i';
			break;
			default:
				$regexp='/[^a-z0-9_ ]+/i';
			break;
			
		}
	return $clean = ($str!='')?$this->trims(preg_replace($regexp, '', $str),' '):false;
}


//name="pdf",folder name[,optionals]
function fileUpload($filename,$foldername,$hiddenfile='',$rewritename='',$uploadtypearr=array('jpg', 'jpeg', 'png', 'doc','docx','txt', 'gif','rtf', 'pdf', 'xls', 'rar', 'tar', 'zip', 'tgz', 'gz'))		{
								$uploadfile="";
								$file=$filename;
								$ori=$this->trims($_FILES[$file]['name'],'');
								$tmporary=$_FILES[$file]['tmp_name'];
								$type=$_FILES[$file]['type'];
					
                    $filename = strtolower(str_replace(' ', '', $ori));
                  // echo  $basefilename = preg_replace("/(.*)\.([^.]+)$/","\\1", $filename);
				  
                     $ext = preg_replace("/.*\.([^.]+)$/","\\1", $filename);
						
								
							 if($hiddenfile!=NULL)
							 $uploadfile=$hiddenfile;
							 
								if($ori!="" && is_dir($foldername) && in_array($ext, $uploadtypearr)==true) 
								{
								
					   // IF another file upload,then delete the old file
						 if(is_file($foldername.$hiddenfile) && $filename!="" && $hiddenfile!=""  )	   {
						   $filename=$foldername.$hiddenfile;
						   unlink($filename);
						   }
								
										//$random=rand(1,99999);
										$destination=$rewritename.$ori;
										$des=$foldername.$destination;
										move_uploaded_file($tmporary,$des);
										chmod($des,0777);
										$uploadfile=$destination;
								}

								return (is_file($des))?$uploadfile:false;
								
}

function isEmptyfieldLi($str,$opentag='<li>',$closetag='</li>'){
$returnstring='';
	if(count($str)>0)
		foreach($str as $fieldname=>$fieldvalue)
			if(trim($fieldvalue)==NULL)
				$returnstring.=$opentag.$fieldname.':&nbsp;You must enter a valid '.$fieldname.'&nbsp;'.$closetag;
			else
				$returnstring.='';
return $returnstring;
}

function getArray2List($arr,$default=0,$start=0)    {

$start=(int)$start;
    if(is_array($arr) && count($arr)>0)
    foreach($arr as $key=>$value)    {
    
	$key=($start>0)?($start++):$key;
	
        $opt.='<option value="'.$key.'"';
        if($default==$key)    $opt.='selected="selected"';
        $opt.='>'.$value.'</option>';
    }
    return $opt;
}


function commaUsage()	{
	$str=array_filter(func_get_args());
	if(count($str)>0)
		return implode(', ',$str);
}
// Convert the date from one format to another format.
//@arg1:input date
//@arg2:seperator.suppose date mm/dd/yyyy seperator should be /
//@arg3:joiner. suppose return vaue is mm;dd;yyyy, then joiner is ;
//@arg4:to be convert array type. 1=>array(2,0,1),2=>array(2,1,0),3=>array(0,1,2) 

function convert_Date($input,$seperator='-',$joiner='-',$type=1)	{
	if($input=='')
		return false;
	$covertdate=explode($seperator,$input);
	if(!is_array($covertdate))
		return false;
	
	$dateformar_arr=array(1=>array(2,0,1),2=>array(2,1,0),3=>array(0,1,2) );
	if($type>0 && $type<=count($dateformar_arr))
		$type=$type;
		
		$arr=$dateformar_arr[$type];
		
	return $covertdate[$arr[0]].$joiner.$covertdate[$arr[1]].$joiner.$covertdate[$arr[2]];
}


function cdyn_dropdowntime($arr)	{
	if(!isset($arr) || !is_array($arr) || count($arr)<1 )
		return false;
	
	$hour=(isset($arr["hour"]) && $arr["hour"]!='')?intval($arr["hour"],10):0;
	$minute=(isset($arr["minute"]) && $arr["minute"]!='')?intval($arr["minute"],10):0;
	if($minute==60)
		$minute-=1;
	
	 $second=(isset($arr["second"]) && $arr["second"]!='')?intval($arr["second"],10):0;
	$meridian=(isset($arr["meridian"]) && $arr["meridian"]!='')?strtolower($arr["meridian"]):'';
	if($meridian=="pm" && $hour<12)
		 $hour=$hour+12;
	
	//return $hour.":".$minute.":".$second;
	
	return str_pad($hour,2,0,STR_PAD_LEFT).":".str_pad($minute,2,0,STR_PAD_LEFT).":".str_pad($second,2,0,STR_PAD_LEFT);
}

function getSelectOptions($query,$optvalue='',$opttext='',$opt2select=NULL,$default_text='') {
global $db;// connection object to database
	if($query=='' || $optvalue=='' || $opttext=='')
		return false;
		$i=0;
		$selected_html='';
		$selected_option='';
		
		$opt2select_array=( is_array($opt2select) && count($opt2select)>0)?$opt2select:(($opt2select!=NULL)?explode(",",$opt2select):NULL);
		
		if($default_text!='')
			$selected_html.='<option value="0">'.$default_text.'</option>';
			
			$totrecords=$db->query($query,"select");
			if($totrecords>0)	{
						while($fetch=$db->fetch_records())	{
						
			$selected_option=($opt2select!=NULL && in_array($fetch[$optvalue],$opt2select_array))?(' SELECTED '):('');
			
			
			$selected_html.='<option value="'.$fetch[$optvalue].'" '.$selected_option.' >'.html_entity_decode($fetch[$opttext]).'</option>';
						}
			
			}			
	return $selected_html;
}


function chkSavePostInput($input='') {

	if(!isset($input) || $input=='' )
	return '';
	
	$str='';
		if(isset($_POST[$input]) && is_array($_POST[$input]) && count($_POST[$input])>0)	{
			$str.=implode(",", $_POST[$input]);
		}else if(isset($_POST[$input]) && trim($_POST[$input])!='')	{
				$str.=trim($_POST[$input]);
		}
	
	
	return $str;

}


}



/*function chkSavePostInput($input='') {

	if(!isset($input) || $input=='' )
	return '';
	
	$str='';
		if(isset($_POST[$input]) && is_array($_POST[$input]) && count($_POST[$input])>0)	{
			$str.=implode(",", $_POST[$input]);
		}else if(isset($_POST[$input]) && trim($_POST[$input])!='')	{
				$str.=trim($_POST[$input]);
		}
	
	
	return $str;

}
*/
?>