<?php
include_once(dirname(__FILE__)."/database/db.php");

/*

DROP TABLE IF EXISTS `test2`;
CREATE TABLE IF NOT EXISTS `test` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `sex` char(1) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

*/

/*$arr=array(
"name"=>'sasikumar',
"sex"=>'M',
"dept"=>'software',
"dob"=>"1986-04-03"

);

$db->insert($arr,"test",true);
*/



/*

$arr=array(
"name"=>'senthil',
"sex"=>'M',
"dept"=>'Civil Engg',
"dob"=>"1988-04-03"

);

$where="sno=9";

$db->update($arr,$where,"test");


*/



$fieldnames="name,sex,dept,dob";

$fieldvalues=array(

array(
"name"=>'ranjith',
"sex"=>'M',
"dept"=>'Service Engineer',
"dob"=>"1986-02-26"
),
array(
"name"=>'diviya',
"sex"=>'F',
"dept"=>'Business',
"dob"=>"1990-09-07"
),
array(
"name"=>'Akshita',
"sex"=>'F',
"dept"=>'2',
"dob"=>"2011-11-01"
)

);

echo '<pre>';
$db->insert_multiple($fieldnames,$fieldvalues,"test2");



//$db->emptyTable("test");

/*$sql="SELECT * FROM test";
$results=$db->getRecords($sql);

echo '<pre>';
print_r($results);
*/


/*$rec=$db->getSingleRec("test");

echo '<pre>';
print_r($rec);
*/




$sql="SELECT * FROM test2";
$results=$db->getRecords($sql,"sno","name","jsonarr");

echo '<pre>';
print_r($results);
echo '{'.implode(',',$results).'}' ;


?>