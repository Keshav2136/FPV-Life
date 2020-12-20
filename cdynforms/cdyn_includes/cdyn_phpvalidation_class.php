<?php 
/*if(!isset($include_filescheck))	
	 die("Permission Denied");
*/	 
/*
Website: www.create-dynamic.com
Author: sasikumar
Created on: April 06,2018
Version: 1.0
Description: Validation Software
*/
class CDYN_FormValidation {

protected $main_opentag='<ul>';
protected $main_closetag='</ul>';
protected $error_opentag='<li>';
protected $error_closetag='</li>';
protected $error_showlabel=true;

protected $error_messages=array(
"required"=>"Field is required",
"empty"=>"Field is required",
"email"=>"Field should be valid email",
"email2"=>"Field should be valid email",
"numeric"=>"Field should only contain numbers",
"alphabetic"=>"Field only accept alphabets",
"alphanumeric"=>"Field should accepts alphabets and numbers",
"match"=>"Field should match with %s",
"match1"=>"%s should match with %s",
"different"=>"Field should be different from %s",
"notmatch"=>"%s should not match with %s",
"max_char"=>"Field should not be more than %d character(s)",
"min_char"=>"Field should be atleast %d character(s)",
"eq_char"=>"Field should be equal to %d character(s)",
"maxval"=>"Field Value should not be more than %d",
"minval"=>"Field Value should not be less than %d",
"eqval"=>"Field Value should be equal to %d",
"phone"=>"Phone Number should be in right format xxx-xxx-xxxx",
"phone2"=>"Phone Number should be in right format 0xxxxxxxxxx",
"phone3"=>"Phone Number should be in right format x{1,}-x{1,}",
"time"=>"Time should be in right format 10:15, 01:15, 1:01 am, 1:01 pm, 1:05 AM",
"time2"=>"Time should be in right format  10:15, 01:15, 1:01 am, 1:01 pm, 1:05 AM, 01:10:50 AM"
);

protected $regex_arr=array(
	/* Numeric 0-9 */
	"numeric"=>'/^[0-9]+$/',
	//01,1223,1234.23,-12,-12.13
	"integers1"=>'/(^\-?\d+$)|(^\-?\d+\.\d+$)/',
	"alphabetic_wspace"=>'/^[a-zA-Z\.\s]+$/i',
	"alphanumeric"=>'/^[a-zA-Z\.\s0-9]+$/i',
	"email"=>'/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/mi',
	"email2"=>'/^([\w\.-]+)@([\w-]+)\.([\w\.-]+)$/mi',
	"phone"=>'/^(\d{3})-(\d{3})-(\d{4})$/mi',
	"phone2"=>'/^0?(\d{9,10})$/mi',
	"phone3"=>'/^0?(\d+)-(\d+)$/mi',
	"weburl"=>'/^https?:\/\/[\-A-Za-z0-9+&@#\/%?=~_|!:,.;]*[\-A-Za-z0-9+&@#\/%=~_|]/mi',
	"time"=>'/^(\d{1,2}):(\d{2})([ap]m)?$/mi',
	"time2"=>'/^(\d{1,2})[:](\d{2})(:\d{2})?(\s+)?([ap]m)?$/mi'
);

private $errors_arr=array();

private $is_errorexists=FALSE;

function __construct($config=array()) {

	if(isset($config) && is_array($config) && count($config)>0):
		$this->settings($config);
	endif;

}

public function settings($config=array()) {

if(!isset($config) || !is_array($config) || count($config)<1)
	return false;
	
	foreach($config as $key=>$value) {
		
		if(property_exists($this,$key)) {
			$this->$key=$value;
		}
	}

}


public function checkErrors($item_array=array()) {

if(!isset($item_array) || !is_array($item_array) || count($item_array)<1)
	return false;


$tempfieldval='';
$tempfieldlabel='';

foreach($item_array as $field_name=>$field_info)	{

if(!isset($field_info['validation']) || !is_array($field_info['validation']) || count($field_info['validation'])<1) continue;

foreach($field_info['validation'] as $validation_type=>$validation_info) {

$tempfieldlabel=isset($field_info['label'])?trim($field_info['label']):'';
$tempfieldval=isset($field_info['value'])?trim($field_info['value']):'';

$errmessage=(isset($field_info['validation_message'][$validation_type]) && $field_info['validation_message'][$validation_type]!='')?trim($field_info['validation_message'][$validation_type]):$this->error_messages[$validation_type];

switch($validation_type) {

case 'empty':
case 'required':
	if($tempfieldval=='') { $this->addError($errmessage,$tempfieldlabel); }
break;

case 'email':
case 'email2':
case 'numeric':
case 'alphanumeric':
case 'phone':

	if(!preg_match($this->regex_arr[$validation_type],$tempfieldval)) { $this->addError($errmessage,$tempfieldlabel); }
break;
case 'not_numeric':
	if(preg_match($this->regex_arr['numeric'],$tempfieldval)) { $this->addError($errmessage,$tempfieldlabel); }
break;

case 'alphabetic':
	if(!preg_match($this->regex_arr['alphabetic_wspace'],$tempfieldval)) { $this->addError($errmessage,$tempfieldlabel); }
break;
case 'phone2':
	if(!preg_match($this->regex_arr['phone2'],$tempfieldval)) { $this->addError($errmessage,$tempfieldlabel); }
break;
case 'minval':

if(!isset($validation_info) || $validation_info<1) continue;
$validation_info=intval($validation_info,10);
$tempfieldval=intval($field_info['value'],10);

	if($tempfieldval<$validation_info) { 
	$errmessage=sprintf($errmessage,$validation_info);
	$this->addError($errmessage,$tempfieldlabel); }

break;

case 'maxval':

if(!isset($validation_info) || $validation_info<1) continue;
$validation_info=intval($validation_info,10);
$tempfieldval=intval($field_info['value'],10);

	if($tempfieldval>$validation_info) { 
	$errmessage=sprintf($errmessage,$validation_info);
	$this->addError($errmessage,$tempfieldlabel); }

break;

case 'eqval':

if(!isset($validation_info) || $validation_info<1) continue;
$validation_info=intval($validation_info,10);
$tempfieldval=intval($field_info['value'],10);

	if($tempfieldval!=$validation_info) { 
	$errmessage=sprintf($errmessage,$validation_info);
	$this->addError($errmessage,$tempfieldlabel); }

break;

case 'min_char':

if(!isset($validation_info) || $validation_info<1) continue;
$validation_info=intval($validation_info,10);

	if(strlen($tempfieldval)<$validation_info) { 
	
	$errmessage=sprintf($errmessage,$validation_info);

	$this->addError($errmessage,$tempfieldlabel); 
	
	}

break;

case 'max_char':

if(!isset($validation_info) || $validation_info<1) continue;
$validation_info=intval($validation_info,10);

	if(strlen($tempfieldval)>$validation_info) { 
	$errmessage=sprintf($errmessage,$validation_info);
	$this->addError($errmessage,$tempfieldlabel); 
	
	}

break;

case 'eq_char':

if(!isset($validation_info) || $validation_info<1) continue;
$validation_info=intval($validation_info,10);

	if(strlen($tempfieldval)!=$validation_info) { 
	$errmessage=sprintf($errmessage,$validation_info);

	$this->addError($errmessage,$tempfieldlabel); }

break;

case 'match':

if(!isset($validation_info) || $validation_info=='') continue;
//echo $validation_info['match']
 $validation_info=trim($validation_info);
	
	if($tempfieldval!=$validation_info) { 
     $extra_label=(isset($field_info['extra']['chklabel']) && $field_info['extra']['chklabel']!='')?trim($field_info['extra']['chklabel']):'another Value';
	 $errmessage=sprintf($errmessage,$extra_label);
	 $this->addError($errmessage,$tempfieldlabel); 
	}

break;


case 'different':
if(!isset($validation_info) || $validation_info=='') continue;
$validation_info=trim($validation_info);
	if($tempfieldval===$validation_info) { 
     $extra_label=(isset($field_info['extra']['chklabel']) && $field_info['extra']['chklabel']!='')?trim($field_info['extra']['chklabel']):'another Value';
	 $errmessage=sprintf($errmessage,$extra_label);
	 $this->addError($errmessage,$tempfieldlabel); 
	}
break;


}


}
}

}


function addError($error_str='',$label='') {
	$error_str=trim($error_str);
	
	$label=($this->error_showlabel==true && $label!='')?trim($label).' : ':'';

	if($error_str!='') { 
		$this->is_errorexists=TRUE; 
		array_push($this->errors_arr,$label.$error_str);
		
		return true;
	}
	return false;
}

function getError() {
	$this->is_errorexists=FALSE;
	if(is_array($this->errors_arr) && count($this->errors_arr)>0) {
		$this->is_errorexists=TRUE;
		return $this->main_opentag.$this->error_opentag.implode($this->error_closetag.$this->error_opentag,$this->errors_arr).$this->error_closetag.$this->main_opentag;
	}
	return FALSE;
}


}

/*
$validate=new CDYN_FormValidation();


$valid_elem=array();
$valid_elem['fname']=array(
"value"=>"jon",
"label"=>"First Name",
"validation"=>array(
"required"=>true,
"max_char"=>35,
"min_char"=>3,
),
"validation_message"=>array(
"required"=>"Please enter a value"
)
);


$valid_elem['lname']=array(
"value"=>"jon",
"label"=>"Last Name",
"validation"=>array(
"empty"=>true,
"max_char"=>35,
"min_char"=>4,
"different"=>'jon'
)
);

$valid_elem['pass']=array(
"value"=>"12345",
"label"=>"Password",
"validation"=>array(
"empty"=>true,
"max_char"=>15,
"min_char"=>6
)
);

$valid_elem['pass']=array(
"value"=>"12345",
"label"=>"Password",
"validation"=>array(
"empty"=>true,
"max_char"=>15,
"min_char"=>6
),
"extra"=>array(
"chklabel"=>'Pass'
)
);

$valid_elem['zip']=array(
"value"=>"123454",
"label"=>"Confirm Password",
"validation"=>array("empty"=>true)
);


$valid_elem['cpass']=array(
"value"=>"sas",
"label"=>"Confirm Password",
"validation"=>array(
"empty"=>true,
"max_char"=>15,
"min_char"=>6,
"match"=>"kumar"
),
"extra"=>array(
"chklabel"=>'Pass'
)
);

$validate->checkErrors($valid_elem);

echo $validate->getError();*/
?>