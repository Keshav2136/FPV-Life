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

$(document).ready(function()	{

//$("#formheader_message").hide();

$("#formheader_message .close").on("click",function() {
$("#formheader_message").hide();
});

$.fn.injectMessage =function(type,data) {
	
	if(typeof data==='undefined' || data==null)
		return false;
	var htmldata;
	if(type=='error')	{	
		htmldata="<li><strong>Error</strong></li>"+data;
		$("#injectmsg").html(htmldata);
		
		if(!$("#formheader_message .alert").hasClass("alert-danger")) { $("#formheader_message .alert").addClass("alert-danger") }
		if($("#formheader_message .alert").hasClass("alert-success")) { $("#formheader_message .alert").removeClass("alert-success") }
		$("#formheader_message").show();

	}else if(type=='success') {
		$("#injectmsg").html(data);
		if($("#formheader_message .alert").hasClass("alert-danger")) { $("#formheader_message .alert").removeClass("alert-danger") }
		if(!$("#formheader_message .alert").hasClass("alert-success")) { $("#formheader_message .alert").addClass("alert-success") }
		$("#formheader_message").show();
	}else if(type=='rawformerror')	{	
		htmldata="<ul><li><strong>Error</strong></li>"+data+'</ul>';
		$("#cdynerror").empty();
		$("#cdynerror").html(htmldata);
		$("#cdynerror").show();
	}else if(type=='rawsuccess') {
		$("#cdynsuccess").html(data);
		$("#cdynsuccess").show();
	}
	
	
}

$.fn.CDYN_chkbox_multipleselect=function(type)	{

	if(type==='select')
		return $("select[name="+$(this).attr("name")+"] option:selected").val();
	else if(type==='mulselect')
		return 	$("select[name='"+$(this).attr("name")+"'] option:selected").map(function() {return $(this).val();}).get().join();
	else if(type==='checkbox')
		return 	$("input[name='"+$(this).attr("name")+"']:checked").map(function() {return $(this).val();}).get().join();
	return false;
}

$.fn.loadCheckboxMultiSelectDefault=function(type,defvalue,name)	{
if(typeof defvalue==='undefined' || defvalue==null)
	return false;

//console.log(defvalue);

var name=(typeof name!=='undefined')?name:'';
var defaultarr=new Array();
defaultarr=(typeof defvalue=='Array')?defvalue:defvalue.split(',');
//console.log(defaultarr);
if(type==='radiocheckbox') {
	$("input[name='"+name+"']").map(function() {
			if(defaultarr.indexOf($(this).val())!=-1) { $(this).prop("checked",true);	 }
	 })
	
	
}else if(type==='mulselect') {
	$("select[name='"+name+"'] option").map(function() {
			if(defaultarr.indexOf($(this).val())!=-1) { $(this).prop("selected",true);	 }
	 })
}

}

});