/*
JavaScript Document
#Form js utilities: cdynutil.js Form Validator
#Author: sasikumar
#Contact:info@create-dynamic.com
#Code created by http://www.create-dynamic.com
#Code basically designed for Form purpose but not limited.This program is free software; you can redistribute it and/or modify it.This program is distributed in the hope that it will be useful without any warranty.
*/ 

/*String.prototype.trim=function(){
 return this.replace(/^\s+|\s+$/g,'');
}
*/

//var cdynsend_formdata=new FormData();

/* Validation Class */
var cdynVal = (function (cdynVal) {

var regex={
	/* Numeric 0-9 */
	numeric:/^[0-9]+$/,
	/* not Numeric 0-9 */
	not_numeric:/[^0-9]+/g,
	/* 01,1223,1234.23,-12,-12.13 */
	integer_1:/(^\-?\d+$)|(^\-?\d+\.\d+$)/,
	/* 01,1223,1234.23,-12,-12.13,+12,+12.13 */
	integer_2:/(^[(\-|\+)]?\d+$)|(^[\-|\+]?\d+\.\d+$)/,
	/* alphabetic /^[a-z]+$/i; */
	alphabetic:/^[a-z]+$/i,
	/* not alphabetic */
	not_alphabetic:/[^a-z]/i,
	/* alphabetic with space */
	alphabetic_s:/^[a-z\s]+$/i,
	/* non alphabetic with space */
	not_alphabetic_s:/[^a-z\s]/i,
	/* alphabetic with space and dot */
	alphabetic_sd:/^[a-z\s\.]+$/i,
	/* non alphabetic with space */
	not_alphabetic_sd:/[^a-z\s\.]/i,
	alphanumeric_1:/^[a-z0-9]+$/i,
	/* starting with alpha, then alpha,number,underscore allowed */
	alphanumeric_2:/^[a-z]+(\w+)?$/ig,
	email_1:/^([0-9A-Za-z_\.-]+)@([0-9A-Za-z_-]+)\.([0-9A-Za-z_\.-]+)$/,
	email_2:/^([\w\.-]+)@([\w-]+)\.([\w\.-]+)$/,
	/* 123-155-4785 */
	phone_1:/^(\d{3})-(\d{3})-(\d{4})$/,
	telephone_1:/^0?(\d{9,10})$/,
	/* 0xxx-xxxxxxx */
	telephone_2:/^0?(\d+)-(\d+)$/,
	weburl:/^https?:\/\/[\-A-Za-z0-9+&@#\/%?=~_|!:,.;]*[\-A-Za-z0-9+&@#\/%=~_|]/,
	time_1:/^(\d{1,2}):(\d{2})([ap]m)?$/, 
	/* 11:55,11:55 AM,11:55AM,11:55am,11:55 am,11:55:25 am */
	time_2:/^(\d{1,2})[:](\d{2})(:\d{2})?(\s+)?([ap]m)?$/i 
}

var commonMessages={

	noElement:" No element found.",
	empty: "Field should not be empty",
	required: "This Field is required",
	alpha:"Use alphabetic only. Allowed character a-z",
	digits: "Use digits only. Allowed digits 0-9",
	number: "Please enter a valid number",
	integer: "Please enter a valid integer",
	minval: "Value should be greater than or equal to {0}",
	maxval: "Value should be less than or equal to {0}",
	alphanumeric:"Use alphabetic and numeric value only",
	email:"Please enter a valid email",
	url:"Please enter a valid url",
	phone:"Please enter a valid phone",
	time:"Enter valid time.Eg.,11:55,11:55 AM,11:55AM,11:55am,11:55 pm,11:55:25 pm",
	minchar:"Character should be equal to or more than {0} charaters", 
	maxchar:"Character should be equal to or less than {0} character",
	minSelections:"Please select {0} choices or more",
	maxSelections: "Please select {0} choices or less",
	upload:"Please upload a file",
	uploadAllowedExt:"Please upload files with allowed extensions: {0}"

}



/* var date=checkIsDate("29/2/2012",'ddmmyyyy','/'); */
var checkIsDate=function(datestr,_formatstr,_seperator)	{

var regex=null,match_exec=null,returnobj={ret:false,msg:'Input Date'};
if(typeof datestr==='undefined' || datestr==null || datestr=='')	{
	returnobj.ret=false;
	returnobj.msg=commonMessages.required;
	return returnobj;
}


	datestr=cdynVal.trimEnds(datestr);
	
	var formatstr=(typeof _formatstr==='undefined' || _formatstr==null || _formatstr=='')?'ddmmyyyy':_formatstr;
	var seperator=(typeof _seperator==='undefined' || _seperator==null || _seperator=='')?'/':_seperator;
	/*regset dd mm yyyy : {1,2},{1,2},{4,4} 
	//exection set: ymd : after date exection, store index in format ymd*/
	var format_arr={
	
	'ddmmyyyy':{dateset:[2,1,0],execset:[5,3,1],regset:[1,2,1,2,4,4],arr:['DD','MM','YYYY']},
	'mmddyyyy':{dateset:[2,0,1],execset:[5,1,3],regset:[1,2,1,2,4,4],arr:['MM','DD','YYYY']},
	'yyyymmdd':{dateset:[0,1,2],execset:[1,3,5],regset:[4,4,1,2,1,2],arr:['YYYY','MM','DD']}
	
	};
	
/* DD/MM/YYYY: \d{1,2}\/\d{1,2}\/\d{2,4} */

regex=new RegExp('^(\\d{'+format_arr[formatstr].regset[0]+','+format_arr[formatstr].regset[1]+'})(\\'+seperator+')(\\d{'+format_arr[formatstr].regset[2]+','+format_arr[formatstr].regset[3]+'})(\\'+seperator+')(\\d{'+format_arr[formatstr].regset[4]+','+format_arr[formatstr].regset[5]+'})$');


var date_formatwithseperator=format_arr[formatstr].arr[0]+seperator+format_arr[formatstr].arr[1]+seperator+format_arr[formatstr].arr[2];

match_exec=regex.exec(datestr);


if(match_exec==null)	{
	returnobj.ret=false;
	/* returnobj.msg='Use correct date format: '+formatstr+" and seperate with "+seperator; */
	returnobj.msg='Use correct date format: '+date_formatwithseperator;
	
	return returnobj;
	/*return false;*/
}	


/* exec returns ["1986-02-19", "1986", "-", "02", "-", "19"] index:0,input "1986-02-19" */
	if(match_exec!=null)	{
		var y=format_arr[formatstr].execset[0],m=format_arr[formatstr].execset[1],d=format_arr[formatstr].execset[2];
		
		var yyyy = parseInt(match_exec[y],10),
		mm=parseInt(match_exec[m],10),
		dd=parseInt(match_exec[d],10),
		newdate = new Date(yyyy,mm-1,dd,0,0,0,0);
		var checkdate=(mm === (newdate.getMonth()+1) && dd === newdate.getDate() && yyyy === newdate.getFullYear());
		if(checkdate==true)	{
			returnobj.ret=true;
			returnobj.msg='';
		}
		else {
			returnobj.ret=false;
			returnobj.msg='use correct date with format: '+formatstr;
		}
	}
	
	return returnobj;
	
}



/*cdynFormSelect({name:"Country",getval:true,dummy:'000',min:0});
//cdynFormSelect({name:"Country",getval:true,dummy:'000',required:true});
//cdynFormSelect({name:"country1[]",getval:true,multiple:true,dummy:'000',min:1,max:3}); */
var cdynFormSelect=function(obj)	{
	var selobj=null,returnobj=new Object(),selectedValueArr=[];
	var selectName=(typeof obj.name!=='undefined' && obj.name!=null)?obj.name:'';
	var selectId=(typeof obj.id!=='undefined' && obj.id!=null)?obj.id:'';
	var multiple=(typeof obj.multiple!=='undefined' && obj.multiple==true)?true:false;
	var getval=(typeof obj.getval!=='undefined' && obj.getval==true)?true:false;
	var dummy=(typeof obj.dummy!=='undefined' && obj.dummy!='')?obj.dummy:null;
	var required=(typeof obj.required!=='undefined' && obj.required==true)?true:false;
	
	
	
	
	returnobj.status=false;
	returnobj.values=null;
	returnobj.error=[];
	returnobj.selectedItems=0;
	
	if(selectName!='')
		selobj=document.getElementsByName(selectName)[0];
	else if(selectId!='')	{
		selobj=document.getElementsById(selectId);
	}else	{
		returnobj.error.push("No Elements found");
		return returnobj;
	}
	
	
	var minSelections=(typeof obj.min!=='undefined' && obj.min!=null)?obj.min:0,
	maxSelections=(typeof obj.max!=='undefined' && obj.max!=null)?obj.max:0,
	options_length=selobj.length;
	
	if(multiple==true)	{
	
		for(var i=0;i<options_length;i++)	{
			/*//console.log(i);*/
			if(selobj.options[i].selected ==true && selobj.options[i].value!=dummy && selobj.options[i].value!='')	{
				if(getval==true)	{
						selectedValueArr.push(selobj.options[i].value);
				}
				returnobj.selectedItems++;
			}
		}
		
	}else	{
				if(getval==true  && selobj.value!=dummy && selobj.value!='')	{
						selectedValueArr.push(selobj.value);
						returnobj.selectedItems++;
				}
	}
	
		/*//console.log(total_selected_elements);*/
		if(required==true && returnobj.selectedItems<1)	{
			returnobj.error.push("Select options");
		}
		if(minSelections>0 && returnobj.selectedItems<minSelections)	{
			returnobj.error.push("Please Select "+minSelections+" Selections");
		}
		if(maxSelections>0 && multiple==true && returnobj.selectedItems>maxSelections)	{
			returnobj.error.push("Select maximum "+maxSelections+" Selections");
		}
		
		returnobj.status=(returnobj.error.length>0)?false:true;
		returnobj.values=(selectedValueArr.length>0)?selectedValueArr.join(','):null;
		
		//console.log(returnobj);
		
		return returnobj;
}


/*
## Checkbox Validation ##
@required: Atleast 1 check box checked
@min:Atleast min checkbox checked.
@max:Atmost max checkbox checked
@getval:true prefer to return value
@range_arr: for looping variable checkbox array  like country[India],country[1] not like country[]
//    <input type='checkbox' name='web[]' id='web_1' value='1'/><label>PHP</label>
//    <input type='checkbox' name='web[]' id='web_2' value='2'/><label>JAVASCRIPT</label>
//console.log(cdynOptions({name:"web[]",getval:true,required:true,max:3}));

//console.log(cdynOptions({name:"country",getval:true,required:true,max:3,range_arr:[1,'India','China','SriLanka',2,'Pakistan','Bangladesh']}));
//<input type='checkbox' name='country[India]' id='country_item_4' value='India'/><label for='features_item_4'>India</label>
//<input type='checkbox' name='country[1]' id='country_item_5' value='China'/><label for='features_item_5'>China</label>
*/


var cdynOptions=function(obj)	{

	var selobj=null,returnobj=new Object(),selectedValueArr=[];
	var selectName=(typeof obj.name!=='undefined' && obj.name!=null)?obj.name:'';
	var selectId=(typeof obj.id!=='undefined' && obj.id!=null)?obj.id:'';
	var getval=(typeof obj.getval!=='undefined' && obj.getval==true)?true:false;
	var required=(typeof obj.required!=='undefined' && obj.required==true)?true:false;
	var range_arr=(typeof obj.range_arr!=='undefined' && obj.range_arr!=null)?obj.range_arr:false;
	
	
	
	returnobj.status=false;
	returnobj.values=null;
	returnobj.error=[];
	returnobj.selectedItems=0;
	
	
	var minSelections=(typeof obj.min!=='undefined' && obj.min!=null)?obj.min:0,
	maxSelections=(typeof obj.max!=='undefined' && obj.max!=null)?obj.max:0;
	
	if(range_arr!=false)	{
		var checkbox_name=null,checkboxObj=null;
		for(var i in range_arr)	{
			checkbox_name=selectName+"["+range_arr[i]+"]";
			checkboxObj=document.getElementsByName(checkbox_name)[0];

			if(typeof checkboxObj==='undefined')	
				checkbox_name=null;
			
			if(checkbox_name!=null && checkboxObj.checked ==true )	{
				if(getval==true)	{
						selectedValueArr.push(checkboxObj.value);
				}
				returnobj.selectedItems++;
			}
		}
	}else	{
	
	if(selectName!='')
		selobj=document.getElementsByName(selectName);
	else if(selectId!='')	{
		selobj=document.getElementsById(selectId);
	}else	{
		returnobj.error.push("No Elements found");
		return returnobj;
	}
	
	
	var options_length=selobj.length;
	
		for(var i=0;i<options_length;i++)	{
			if(selobj[i].checked ==true )	{
				if(getval==true)	{
						selectedValueArr.push(selobj[i].value);
				}
				returnobj.selectedItems++;
			}
		}
	}	
	

	
		if(required==true && returnobj.selectedItems<1)	{
			returnobj.error.push("Select options");
		}
		if(minSelections>0 && returnobj.selectedItems<minSelections)	{
			returnobj.error.push("Please Select minimum "+minSelections+" Selections");
		}
		if(maxSelections>0 && returnobj.selectedItems>maxSelections)	{
			returnobj.error.push("Select maximum "+maxSelections+" Selections");
		}
		
		returnobj.status=(returnobj.error.length>0)?false:true;
		returnobj.values=(selectedValueArr.length>0)?selectedValueArr.join(','):null;
		
		return returnobj;
}
/*obj={name:"upload",id:"upload",ExtStatus:true,allowedExts:["jpg","jpeg","png"],setReader:true,loadId:}*/
function cdynFileUploadfn(obj)	{
	//uploadobj.required
	var uploadObj=null,returnobj=new Object(),isExtExist=false;
	/*["jpg","jpeg","png","gif","doc","docx","pdf","txt"]*/
	var allowedArray=(obj.allowedExts!=null && obj.ExtStatus==true && obj.allowedExts.length>0)?obj.allowedExts:null;
	var selectName=(typeof obj.name!=='undefined' && obj.name!=null)?obj.name:'';
	var selectId=(typeof obj.id!=='undefined' && obj.id!=null)?obj.id:'';
	var required=(typeof obj.required!=='undefined' && obj.required==true)?true:false;
	
	returnobj.status=false;
	returnobj.error=[];
	
	if(selectName!='')
		uploadObj=document.getElementsByName(selectName)[0];
	else if(selectId!='')	{
		uploadObj=document.getElementsById(selectId);
	}	
	
	var ext=uploadObj.value.split(".").pop().toLowerCase();
	var ext2= uploadObj.value.substring(uploadObj.value.lastIndexOf('.')+1).toLowerCase();
	//console.log(ext2,ext);
	if(required==true && uploadObj.value=='')	{
		returnobj.error.push(commonMessages.upload);
	}
	
	if(allowedArray!=null && obj.ExtStatus==true && uploadObj.value!=null && ext2!='' )	{
		
		for(var i in allowedArray){
		  if(ext==allowedArray[i].toLowerCase() || ext2==allowedArray[i].toLowerCase()){
			  isExtExist=true;
		  }
		}
		if(isExtExist!=true)	{
			returnobj.error.push(commonMessages.uploadAllowedExt.replace("{0}",allowedArray.join(",")));
		}	
	}

	if (typeof obj.setReader!=='undefined' && obj.setReader==true && obj.loadId!='' && uploadObj.files && uploadObj.files[0])  {
		var reader = new FileReader();
		var loadid=obj.loadId;
		reader.onload = function (e) {
			document.getElementById(loadid).setAttribute('src', e.target.result)
		};

		reader.readAsDataURL(uploadObj.files[0]);
	}	

		returnobj.status=(returnobj.error.length>0)?false:true;

		return returnobj;
}


function checkFormElements(elem_name,elem_id,elemtype)	{
var element_obj=null;
if(elem_name=='' && elem_id=='')
	return element_obj;

	if(elemtype=='checkbox' || elemtype=='radio'  || elemtype=='select' )	{
	
		if(elem_name!='' && typeof document.getElementsByName(elem_name)[0]!='undefined')	{
			element_obj=document.getElementsByName(elem_name)[0];
		}else if(elem_id!='' && typeof document.getElementById(elem_id)!='undefined')	{
			element_obj=document.getElementById(elem_id);
		}else
			element_obj=null;
	
	}else {
	
		if(elem_id!='' && typeof document.getElementById(elem_id)!='undefined')	{
			element_obj=document.getElementById(elem_id);
		}else if(elem_name!='' && typeof document.getElementsByName(elem_name)[0]!='undefined')	{
			element_obj=document.getElementsByName(elem_name)[0];
		}else
			element_obj=null;
			
	}

	return element_obj;
}


/*//addFormError([label,"required",validation.required]);*/
function addFormError(array)	{

	if(typeof array=='undefined' || array==null )
		return false;
	
	
	var errmsg='';
	
	if(typeof array[2]!=='undefined' && typeof array[2].msg!=='undefined' &&  array[2].msg!=='')	{
		cdynVal.formErrors.push(array[2].msg);
	}else if(typeof array[3]!=='undefined' &&  array[3]!=='')	{
		if(array[0]!='')
			errmsg=array[0]+": ";
		errmsg+=array[3];
		cdynVal.formErrors.push(errmsg);
	}else	{
				
		if(array[0]!='')
			errmsg=array[0]+": ";
			
				if(typeof array[2]!=='undefined' && typeof array[2].num!='undefined')	{
					errmsg+=cdynVal.formErrorMessages[array[1]].replace('{0}',array[2].num);
				}else
					errmsg+=cdynVal.formErrorMessages[array[1]];

				cdynVal.formErrors.push(errmsg);

	}
	
	return true;	
}

cdynVal.formElements=[];
cdynVal.formErrors=[];
cdynVal.valregex=regex;
cdynVal.formErrorMessages=commonMessages;
cdynVal.datefn=checkIsDate;
cdynVal.checkOptionsfn=cdynOptions;
cdynVal.cdynFormSelectfn=cdynFormSelect;
cdynVal.cdynFileUpload=cdynFileUploadfn;
cdynVal.ajax=false;
cdynVal.ajaxdata='';
//cdynVal.isajaxformdata=false;
cdynVal.cdynsend_formdata=[];

//cdynVal.cdynsend_formdata=new FormData();
/*Trim Space at ends*/
cdynVal.trimEnds=function(str){
	return (typeof str=="string")?str.replace(/^\s+|\s+$/g,''):str; 
}

cdynVal.trimExtraSpace=function(str)	{
	return (typeof str=="string")?str.replace(/\s{2,}/g,' '):str;
}

cdynVal.init=function()	{
	cdynVal.formElements=[];
	cdynVal.formErrors=[];
}

cdynVal.setAjax=function(obj)	{
	cdynVal.ajax=(typeof obj.asynchronous!=='undefined' && obj.asynchronous!=null && obj.asynchronous==true)?true:false;
	cdynVal.ajaxdata="";
}

cdynVal.addElements=function(obj) { 

//console.log(obj);
		var name=(typeof obj.name!=='undefined' && obj.name!=null)?obj.name:'';
		var Id=(typeof obj.id!=='undefined' && obj.id!=null)?cdynVal.trimEnds(obj.id):'';
		var elemtype=(typeof obj.elemtype!=='undefined' && obj.elemtype!=null)?obj.elemtype:'';
		var element_obj=checkFormElements(name,Id,elemtype);
		
		obj.element_obj=element_obj;
		cdynVal.formElements.push(obj);
		return element_obj;
}


cdynVal.validate=function()	{
	var _return={};
	_return.status=true;
	_return.error=[];

	
	if(cdynVal.formElements.length<1)	{
		_return.status=false;
		return _return;
	}
	
	var err='',name,Id,label,elemtype,validation,date_obj,element_obj=null;
	var ajax_increment=0;
	var cdynajaxdata=[];
	
	for(var i in cdynVal.formElements)	{
		//console.log(cdynVal.formElements[i]);
		
		name=(typeof cdynVal.formElements[i].name!=='undefined' && cdynVal.formElements[i].name!=null)?cdynVal.formElements[i].name:'';
		Id=(typeof cdynVal.formElements[i].id!=='undefined' && cdynVal.formElements[i].id!=null)?cdynVal.trimEnds(cdynVal.formElements[i].id):'';
		label=(typeof cdynVal.formElements[i].label!=='undefined' && cdynVal.formElements[i].label!=null)?cdynVal.formElements[i].label:'';
		elemtype=(typeof cdynVal.formElements[i].elemtype!=='undefined' && cdynVal.formElements[i].elemtype!=null)?cdynVal.formElements[i].elemtype:'';
		validation=(typeof cdynVal.formElements[i].validation!=='undefined' && cdynVal.formElements[i].validation!=null)?cdynVal.formElements[i].validation:{};
		
		element_obj=cdynVal.formElements[i].element_obj;
		
		if(element_obj==null)	{
			addFormError([label,"","","Element not found.Error in configuration."]);
	
			continue;
		}
		
		
		
		if(elemtype=='text' && element_obj!=null )	{
			var texterr=0;
			element_obj.value=cdynVal.trimEnds(element_obj.value);
			
			if(typeof validation.required!=='undefined' && (element_obj.value=='' || element_obj.value==null))	{
					addFormError([label,"required",validation.required]);
					texterr++;
			}
			else if(typeof validation.digits!=='undefined' && cdynVal.valregex.numeric.test(element_obj.value)!=true)	{
					addFormError([label,"digits",validation.digits]);
					texterr++;
			}
			else if(typeof validation.alphabetic!=='undefined' && cdynVal.valregex.alphabetic.test(element_obj.value)!=true)	{
					addFormError([label,"alphabetic",validation.alpha]);
					texterr++;
			}
			else if(typeof validation.alphanumeric!=='undefined' && cdynVal.valregex.alphanumeric_1.test(element_obj.value)!=true)	{
					addFormError([label,"alphanumeric",validation.alphanumeric]);
					texterr++;
			}
			else if(typeof validation.email!=='undefined' && cdynVal.valregex.email_2.test(element_obj.value)!=true)	{
					addFormError([label,"email",validation.email]);
					texterr++;
			}
			else if(typeof validation.phone!=='undefined' && (cdynVal.valregex.phone_1.test(element_obj.value))!=true)	{
					addFormError([label,"phone",validation.phone]);
					texterr++;
			}
			else if(typeof validation.time!=='undefined' && cdynVal.valregex.time_2.test(element_obj.value)!=true)	{
					addFormError([label,"time",validation.time]);
					texterr++;
			}
			else if(typeof validation.weburl!=='undefined' && cdynVal.valregex.weburl.test(element_obj.value)!=true)	{
					addFormError([label,"url",validation.weburl]);
					texterr++;
			}
			else if(typeof validation.minlength!=='undefined' && element_obj.value.length<parseInt(validation.minlength.num,10))	{
					addFormError([label,"minchar",validation.minlength]);
					texterr++;
			}
			else if(typeof validation.maxlength!=='undefined' && element_obj.value.length>parseInt(validation.maxlength.num,10))	{
					addFormError([label,"maxchar",validation.maxlength]);
					texterr++;
			}
			else if(typeof validation.min!=='undefined' && cdynVal.valregex.numeric.test(element_obj.value)==true && parseInt(element_obj.value,10)<parseInt(validation.min.num,10))	{
					addFormError([label,"minval",validation.min]);
					texterr++;
					
			}
			else if(typeof validation.max!=='undefined' && cdynVal.valregex.numeric.test(element_obj.value)==true && parseInt(element_obj.value,10)>parseInt(validation.max.num,10))	{
					addFormError([label,"maxval",validation.max]);
					texterr++;
			}
			else if(typeof validation.date!=='undefined' && element_obj.value!='' )	{
					var date_obj=cdynVal.datefn(element_obj.value,validation.date.format,validation.date.seperator);
					
					if(date_obj.ret!=true)	{
						addFormError([label,"","",date_obj.msg]);
						texterr++;
					}
			}
			
			
			if(texterr===0 && cdynVal.ajax==true)	{
				cdynVal.cdynsend_formdata[ajax_increment]=[];
				cdynVal.cdynsend_formdata[ajax_increment]['k']=name;
				cdynVal.cdynsend_formdata[ajax_increment]['v']=element_obj.value;
				cdynVal.ajaxdata+='&'+name+'='+element_obj.value;
				ajax_increment++;
			}
		
		}
		else if(elemtype=='textarea')	{
			var trimvalue=element_obj.value=cdynVal.trimEnds(element_obj.value);
			var textarea_error=0;
			//alert(trimvalue);
			if(typeof validation.required!=='undefined' && (trimvalue=='' || trimvalue.length<1))	{
					addFormError([label,"empty",validation.required]);
					textarea_error++;
			}
			else if(typeof validation.minchar!=='undefined' && trimvalue.length<parseInt(validation.minchar.num,10))	{
					addFormError([label,"minchar",validation.minchar]);
					textarea_error++;
			}
			else if(typeof validation.maxchar!=='undefined' && trimvalue.length>parseInt(validation.maxchar.num,10))	{
					addFormError([label,"maxchar",validation.maxchar]);
					textarea_error++;
			}
			
			
			
			if(textarea_error===0 && cdynVal.ajax==true)	{
					cdynVal.cdynsend_formdata[ajax_increment]=[];
					cdynVal.cdynsend_formdata[ajax_increment]['k']=name;
					cdynVal.cdynsend_formdata[ajax_increment]['v']=element_obj.value;
					cdynVal.ajaxdata+='&'+name+'='+element_obj.value;
					ajax_increment++;

			}
			
			
		}else if(elemtype=='radio')	{
			var radioarr=cdynVal.checkOptionsfn({name:name,getval:true,required:true});
			
			
			var radio_error=0;
			if(typeof validation.required!=='undefined' && radioarr.status==false)	{
					addFormError([label,"required",validation.required]);
					radio_error++;
			}else if(radio_error===0 && cdynVal.ajax==true)	{
					cdynVal.cdynsend_formdata[ajax_increment]=[];
					cdynVal.cdynsend_formdata[ajax_increment]['k']=name;
					cdynVal.cdynsend_formdata[ajax_increment]['v']=element_obj.value;
					
					cdynVal.ajaxdata+='&'+name+'='+radioarr.values;
					ajax_increment++;
			}
			
		}else if(elemtype=='upload')	{
			
			var uploadobj={};
			uploadobj.name=name;
			uploadobj.id=Id;

			uploadobj.getval=true;
			var upload_error=0;
			if(typeof validation.required!=='undefined')
				uploadobj.required=true;
			if(typeof validation.extension!=='undefined')	{
				uploadobj.ExtStatus=true;
				uploadobj.allowedExts=validation.extension.allowedExts;
			}
				
			var uploadobj_return=cdynVal.cdynFileUpload(uploadobj);
			//console.log(uploadobj_return);
			if( uploadobj_return.status==false)	{
					addFormError([label,"","",uploadobj_return.error[0]]);
					upload_error++;
			}
			if(upload_error===0 && cdynVal.ajax==true)	{
				var uploadfileInput = document.getElementById(Id);
				var uploadfile = uploadfileInput.files[0];
				
					cdynVal.cdynsend_formdata[ajax_increment]=[];
					cdynVal.cdynsend_formdata[ajax_increment]['k']=name;
					cdynVal.cdynsend_formdata[ajax_increment]['v']=uploadfile;
					cdynVal.ajaxdata+='&'+name+'='+uploadfile;
					ajax_increment++;
			}
		}
		else if(elemtype=='checkbox')	{
	
			var chkobj={};
			chkobj.name=name;
			chkobj.getval=true;
			var checkbox_error=0;
			if(typeof validation.required!=='undefined')
				chkobj.required=true;
			if(typeof validation.min!=='undefined')
				chkobj.min=parseInt(validation.min.num,10);
			if(typeof validation.max!=='undefined')
				chkobj.max=parseInt(validation.max.num,10);
				
			
			var checkboxarr=cdynVal.checkOptionsfn(chkobj);
			
			if( checkboxarr.status==false)	{
					addFormError([label,"","",checkboxarr.error[0]]);
					checkbox_error++;
			}
			
			else if(checkbox_error===0 && cdynVal.ajax==true)	{
					cdynVal.cdynsend_formdata[ajax_increment]=[];
					cdynVal.cdynsend_formdata[ajax_increment]['k']=name;
					cdynVal.cdynsend_formdata[ajax_increment]['v']=checkboxarr.values;
					
					cdynVal.ajaxdata+='&'+name+'='+checkboxarr.values;
					ajax_increment++;
			}
			
			
		}else if(elemtype=='select')	{
		
			var chkobj={};

			chkobj.name=name;
			chkobj.getval=true;
			var select_error=0;
			
			if(typeof validation.required!=='undefined')
				chkobj.required=true;
			if(typeof validation.min!=='undefined')
				chkobj.min=parseInt(validation.min.num,10);
			if(typeof validation.max!=='undefined')
				chkobj.max=parseInt(validation.max.num,10);
			if(typeof cdynVal.formElements[i].multiple!=='undefined' && cdynVal.formElements[i].multiple==true)
				chkobj.multiple=true;
			if(typeof cdynVal.formElements[i].dummy!=='undefined')
				chkobj.dummy=cdynVal.formElements[i].dummy;
			
			//console.log(chkobj);
			
			
			var selectarr=cdynVal.cdynFormSelectfn(chkobj);
			//var selectarr=cdynVal.checkOptionsfn(chkobj);
			if(selectarr.status==false)	{
					addFormError([label,"","",selectarr.error[0]]);
					select_error++;
			}
			
			if(typeof selectarr.error && selectarr.error.length===0 && cdynVal.ajax==true)	{
					cdynVal.cdynsend_formdata[ajax_increment]=[];
					cdynVal.cdynsend_formdata[ajax_increment]['k']=name;
					cdynVal.cdynsend_formdata[ajax_increment]['v']=selectarr.values;
					
					cdynVal.ajaxdata+='&'+name+'='+selectarr.values;
					ajax_increment++;
			}
			
			
			
		}
		else if(elemtype=='address')	{
			
			var common_name=(typeof cdynVal.formElements[i].common_name!=='undefined' && cdynVal.formElements[i].common_name!=null)?cdynVal.formElements[i].common_name:'';
			var address_error=0,address_data='',address_obj=new Array();
			
			var addarr={address1:"Street Address",address2:"Address2",city:"City",state:"State",zip:"Zip",country:"Country"};
			var addmsgarr={address1:"Street Address is required",address2:"Address2 is required",city:"City is required",state:"State is required",zip:"Zip is required",country:"Country is required"};
			
			for(var addrtype in addarr)	{
				var newaddrid=common_name+"_"+addrtype,newaddrname=common_name+"["+addrtype+"]";
				
				address_obj[addrtype]=new Object();
				address_obj[addrtype]=checkFormElements(newaddrname,newaddrid,elemtype);
				
				if(address_obj[addrtype]==null)	{
					addFormError([addarr[addrtype],"","","Element not found.Error in configuration."]);
					continue;
				}
				else if( address_obj[addrtype]!=null && typeof validation.required!=='undefined' && (address_obj[addrtype].value=='' || address_obj[addrtype].value==null) )	{
						addFormError([label,"required","",addmsgarr[addrtype]]);
						address_error++;
						continue;
				}else if(cdynVal.ajax==true) {
					cdynVal.cdynsend_formdata[ajax_increment]=[];
					cdynVal.cdynsend_formdata[ajax_increment]['k']=newaddrname;
					cdynVal.cdynsend_formdata[ajax_increment]['v']=address_obj[addrtype].value;
					
					address_data+='&'+newaddrname+'='+address_obj[addrtype].value;
					
					ajax_increment++;
				}
			}
			cdynVal.ajaxdata+=address_data;
		}
		
		
		

		} // End validate loop
		
		
	
	if(cdynVal.formErrors.length>0)	{
		_return.status=false;
		_return.error=cdynVal.formErrors;
	}else
		_return.status=true;
		
		return _return;
	
} /*//End Validate FN*/
 
 
cdynVal.valerrors=function(obj) { 
var _return={};
	_return.status=true;
	_return.error=[];
	
	if(cdynVal.formErrors.length>0)	{
		_return.status=false;
		_return.error=cdynVal.formErrors;
	}else
		_return.status=true;
		
		return _return;
} 
 
  return cdynVal;
  
}) (cdynVal || {});



var cdynVal = (function (cdynVal) {

var httpobj;

cdynVal.httpRequest=function()	{
	var xmlHttp=null;try  {
	// Firefox, Opera 8.0+, Safari
	xmlHttp=new XMLHttpRequest();  
	}catch (e)  {
	// Internet Explorer
	try    {	xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");    }
	catch (e)    {	xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");    }  
	}
	return xmlHttp;
}

cdynVal.requestHeader=function() {
		httpobj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		httpobj.setRequestHeader('Accept', 'text/javascript, text/html, application/xml, text/xml, */*');
		httpobj.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
}
 

cdynVal.AJAXobject=function(obj)	{
	var method=(typeof obj.method!=='undefined' && obj.method!='')?(obj.method.toLowerCase()):'post',
	send_data=(typeof obj.send_data!=='undefined' && obj.send_data!='')?obj.send_data:'',
	//url=(typeof obj.url!=='undefined' && obj.url!='')?obj.url+"?sid="+Math.random():'',
	url=(typeof obj.url!=='undefined' && obj.url!='')?obj.url:'',
	getsendURL=(method=="get")?url+"&"+send_data:url,
	postSendData=(method=="post")?send_data:null;
	
	if(url=='')
		return false;
	
	httpobj=cdynVal.httpRequest();
	
	httpobj.open(method,getsendURL,true);
	
	cdynVal.requestHeader();
	httpobj.send(postSendData);
	httpobj.onreadystatechange=function()	{
										if(this.readyState==4 && this.status==200){	
											return obj.async(httpobj.responseText);
										}
										else
											return null;
								}
	//obj.async();
	return true;
}

cdynVal.loadCaptcha=function(e) {
	document.images.cdynformelem_captchaimg.src="/images/icons/2.gif";
	document.images.cdynformelem_captchaimg.src="cdyn_includes/plugins/captcha/securimage/securimage_show.php?&"+(Math.round(Math.random(0)*1000)+1);
	e = cdynEvent.getEvent(e);
	cdynEvent.preventDefault(e);
	return false;
}
 
 return cdynVal;
  
}) (cdynVal || {});



/*
cdynVal.init();

cdynVal.addElements({
  name: 'first_name',
  id: 'first_name',
  label: 'First Name',
  elemtype: 'text',
  validation: {
    required: {
      msg: ''
    }
  }
});

cdynVal.addElements({
  name: 'last_name',
  id: 'last_name',
  label: 'Last Name',
  elemtype: 'text',
  validation: {
    required: {
      msg: ''
    }
  }
});

cdynVal.addElements({
  name: 'age',
  id: 'age',
  label: 'Age',
  elemtype: 'text',
  validation: {
    required: {
      msg: ''
    },
    digits: {
      msg: ''
    },
    min: {
      num: 18
    },
    max: {
      num: 150
    }
  }
});

cdynVal.addElements({
  name: 'number',
  id: 'number',
  label: 'Number',
  elemtype: 'text',
  validation: {
    required: {
      msg: ''
    },
    digits: {
      msg: ''
    },
    min: {
      num: 10
    }
  }
});

cdynVal.addElements({
  name: 'email',
  id: 'email',
  label: 'Email',
  elemtype: 'text',
  validation: {
    required: {
      msg: ''
    },
    email: {
      msg: ''
    }
  }
});

cdynVal.addElements({
  name: 'date',
  id: 'date',
  label: 'Date',
  elemtype: 'text',
  validation: {
    required: {
      msg: ''
    },
    date: {
      msg: '',
      format: 'mmddyyyy'
    }
  }
});

cdynVal.addElements({
  name: 'time',
  id: 'time',
  label: 'Time',
  elemtype: 'text',
  validation: {
    required: {
      msg: ''
    },
    time: {
      msg: ''
    }
  }
});

cdynVal.addElements({
  name: 'tphone',
  id: 'tphone',
  label: 'Telephone',
  elemtype: 'text',
  validation: {
    required: {
      msg: ''
    },
    phone: {
      msg: ''
    }
  }
});

cdynVal.addElements({
  name: 'fileupload',
  id: 'fileupload',
  label: 'File Upload',
  elemtype: 'upload',
  validation: {
    required: {
      msg: ''
    },
    extension: {
	 allowedExts:['jpg','gif','png'],
     msg: ''
    }
  }
});

cdynVal.addElements({
  name: 'paragraph',
  id: 'paragraph',
  label: 'Paragraph',
  elemtype: 'textarea',
  validation: {
    required: {
      msg: ''
    },
    minchar: {
      num: 5
    },
    maxchar: {
      num: 100
    }
  }
});

cdynVal.addElements({
  name: 'Manufactures',
  id: '',
  label: 'Manufactures',
  elemtype: 'radio',
  validation: {
    required: {
      msg: ''
    }
  }
});

cdynVal.addElements({
  name: 'Features[]',
  id: '',
  label: 'Phone Features',
  elemtype: 'checkbox',
  validation: {
    required: {
      msg: ''
    },
    min: {
      num: 2
    },
    max: {
      num: 4
    }
  }
});

cdynVal.addElements({
  name: 'country',
  id: 'country',
  label: 'Country',
  elemtype: 'select',
  dummy: '',
  validation: {
    required: {
      msg: ''
    }
  }
});

cdynVal.addElements({
  name: 'qualification[]',
  id: 'qualification',
  label: 'Qualification',
  elemtype: 'select',
  dummy: '000',
  multiple: true,
  validation: {
    required: {
      msg: ''
    },
    min: {
      num: 2
    },
    max: {
      num: 3
    }
  }
});


var valobj=cdynVal.validate();

document.getElementById("showerror").innerHTML='';

if(valobj!=true && valobj.error!=null && valobj.error.length>0)	{
	document.getElementById("showerror").innerHTML="<li>"+valobj.error.join("</li><li>")+"</li>";
	alert(valobj.error.join("\n "));
}

*/