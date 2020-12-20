<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
?>
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
*/
body {
	font-family: 'Roboto Slab', serif;
}
.logo {

}
.header {
	height: 70px;
    color:#fff;
    background: #3D3D3D;
}
.header .container {
	  padding-top: 15px;
}
.header-dropdown {
	text-align:right;
}
.header-dropdown .navbar-right {
	margin-right:initial;
}
.header-dropdown a i{
	color:#fff;
  font-size: 30px;
  padding-top: 5px;
}
form {
	background: #fff;
    padding: 10px;
    border: 1px solid #eee;
    border-radius: 5px;
}
input[type='number'],
input[type='email'],
select,
input[type="password"],
input[type="text"],
textarea {
    color: #333;
    font-size: 13px;
    border: 1px solid #eee;
	background: #f9f9f9;
    border-radius: 5px;    
    display:block;
    -moz-border-radius: 2px;
    -o-border-radius: 2px;
    outline: none;
    padding: 12px 14px;
    width:100%;
    margin-bottom: 10px;  
	transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
}

input[type="search"]:focus,
input[type="text"]:focus,
textarea:focus {
	border-color: #ddd;
	box-shadow: 0 0 3px #eee;
	-o-box-shadow: 0 0 3px #eee;
	-moz-box-shadow: 0 0 3px #eee;
  	-webkit-box-shadow: 0 0 3px #eee;
}
	 
.btn:focus,
.btn:active {
    outline:none !important;
}
	 
input[type="submit"] {
	display:inherit;
}
label {
    font-weight:bold;
	color: #333;
	cursor: pointer;
    display:block;
}

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
.ossn-system-messages {
	margin-top: 10px;
}
.alert {
	margin-bottom:10px;
}
.topbar-menu li a i{
  margin-left: 5px;
  float: right;
}
.page-title {
	background-color: #f5f5f5;
    border: 1px solid #ddd;
    padding: 10px;
    font-weight: 700;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    text-transform: uppercase;
    margin-bottom: 10px;
}
.page-botton-notice {
  margin-top:10px;
}
.no-right-margins {
	margin-right:0px;
}
.ossn-form div:not('.ossn-editor') {
	margin-top:10px;
}
.margin-top-10 {
	margin-top:10px;
}
.margin-bottom-10 {
	margin-bottom:10px;
}
.right {
	float:right;
}
.left {
	float:left;
}
.text-right {
	text-align:right;
}
.ossn-users-list .image {
  margin-top: 1px;
}
.ossn-users-list .name {
  margin-left: 42px;
  margin-top: 2px;
  min-height: 30px;
  max-width: 160px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.table-titles {
  background: #f8f8f8;
}
.block {
	display:block;
}
.inline-block {
	display:inline-block;
}
.admin-dashboard-item {
	margin-top:10px;
}
.admin-dashboard-fixed-height {
	height:200px;
}
.admin-dashboard-item canvas {
  padding: 14px;
}
.admin-dashboard-box {
	min-height:200px;
    background:#fff;
}
.admin-dashboard-title {
  background-color: #f8f8f8;
  border: 1px solid #e7e7e7;
  padding: 10px;
  font-weight: 700;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;  
}
.admin-dashboard-contents .text {
  font-size: 40px;
  padding: 65px;
  color:#747474;
}
.admin-dashboard-contents {
  padding: 10px;
  border-bottom: 1px solid #e7e7e7;
  border-left: 1px solid #e7e7e7;
  border-right: 1px solid #e7e7e7;
  
  max-height:250px;
  margin-bottom: 15px; 
}
footer {
  margin-top: 20px;
  border-top: 1px solid #E5E5E5;
  padding-bottom: 20px;
  padding: 10px;
}
footer a {
  text-transform: uppercase;
}
.charjs-legend {
	text-align:center;
}
.charjs-legend .title {
    display: inline-block;
    margin-bottom: 0.5em;
    line-height: 1.2em;
	margin-left:10px;
    padding: 0 0.3em;
}

.charjs-legend .color-sample {
    display: block;
    float: left;
    width: 1em;
    height: 1em;
    border: 2px solid; 
    border-radius: 0.5em;
    margin-right: 0.5em;
}
.center {
	text-align:center;
}
.text-right {
	text-align:right;
}
.loading-version {
	background:url('<?php echo ossn_theme_url(); ?>images/loading.gif') no-repeat;
    width:24px;
    height:24px;
    margin: 0 auto;
}
.component-title-icon{
  font-size: 20px !important;
}
.component-title-check {
  color: #147B25;
}
.component-title-delete {
	color:#E70F0F;
}
.components-list-buttons a {
  margin-right: 10px;
}
.components-list-buttons a i{
  margin-right: 5px;
}
.radio-block {
	margin-top:10px;
    margin-bottom:10px;
}
.radio-block span {
	margin-left:5px;
    font-weight:bold;
}
.ui-datepicker-year,
.ui-datepicker-month {
    padding: 0px;
    display: inline-block;
}
.admin-dashboard-box-small {
		min-height:100px;
        background:#fff;
}
.admin-dashboard-contents-small {
	    max-height: 100px;
}
.admin-dashboard-contents-small .text {
	padding:10px;
}	
.navbar-default {
	background-color: #585858;
    border-color: #6f6f6f;
    border-radius: 0;
    border:0;
}
.navbar-default .navbar-nav>li>a {
	color:#fff;
}
.navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
    color: #f1f1f1;
    background-color: transparent;
}
@media (max-width: 480px) { 
	.topbar-menu .nav li {
    	    padding-left: 15px;
    }
}

/*************************************
	0ssn modal box
***************************************/

.ossn-halt {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 10000;
	background-color: #000;
	opacity: 0.9;
	cursor: auto;
	height: 100%;
	display: none;
}

.ossn-light {
	opacity: 0.4;
}
.ossn-halt {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 10000;
	background-color: #000;
	opacity: 0.9;
	cursor: auto;
	height: 100%;
	display: none;
}

.image-block img {
	max-width: 700px;
}

.ossn-message-box {
	width: 470px;
	min-width: 470px;
	min-height: 96px;
	background: #fff;
	border: 1px solid #999;
	position: fixed;
	top: 0px;
	left: 0px;
	right: 0px;
	margin-left: auto;
	margin-right: auto;
	z-index: 60000;
	margin-top: 100px;
	border-radius: 3px;
	display: none;
	box-shadow: 0 2px 26px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(0, 0, 0, 0.1);
}

.ossn-message-box .close-box {
	float: right;
	color: #ccc;
	cursor: pointer;
}

.ossn-message-box .title {
	background: #F5F6F7;
	padding: 11px;
	border-radius: 3px;
	border-bottom: 1px solid #E5E5E5;
	color: #5E5656;
	font-size: 14px;
	font-weight: bold;
}

.ossn-message-box .contents {
	padding: 10px;
	min-height: 150px;
	max-height: 420px;
	overflow-x: auto;
	overflow: overlay;
	overflow-x: -moz-hidden-unscrollable
}

.ossn-message-box .control {
	margin-left: 10px;
	margin-right: 10px;
	height: 45px;
	padding: 10px;
	border-top: 1px solid #E9EAED;
}

.ossn-message-box .control .controls {
	float: right;
}

.ossn-message-box .control .controls .btn {
	padding: 2px 13px;
	border-radius: 2px;
}

.ossn-message-box .contents input[type='text'] {
	border: 1px solid #EEE;
	width: 292px;
	padding: 7px;
}

.ossn-message-box .contents input[type='text'],
.ossn-message-box .contents label {
	display: inline-table;
}

.ossn-message-box .contents label {
	color: #666;
	font-weight: bold;
	font-size: 13px;
	margin-right: 13px;
}
.ossn-page-loading-annimation {
	background: #fff;
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
}

.ossn-page-loading-annimation .ossn-page-loading-annimation-inner {
	width: 24px;
	margin: 0 auto;
	margin-top: 20%;
}

********************************
	Loading Icon
    @source: https://github.com/jlong/css-spinners
*********************************/

@-moz-keyframes three-quarters-loader {
	0% {
		-moz-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-moz-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

@-webkit-keyframes three-quarters-loader {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

@keyframes three-quarters-loader {
	0% {
		-moz-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-moz-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}


/* :not(:required) hides this rule from IE9 and below */

.ossn-loading:not(:required) {
	-moz-animation: three-quarters-loader 1250ms infinite linear;
	-webkit-animation: three-quarters-loader 1250ms infinite linear;
	animation: three-quarters-loader 1250ms infinite linear;
	border: 8px solid #38e;
	border-right-color: transparent;
	border-radius: 16px;
	box-sizing: border-box;
	position: relative;
	overflow: hidden;
	text-indent: -9999px;
	width: 24px;
	height: 24px;
}

.ossn-box-loading {
	margin-left: 216px;
	margin-top: 37px;
}

#onlineusers-classified-graph,
#users-classified-graph {
	width:250px;
    height:140px;
}
.logo-container-goblue {

}
.logo-container-goblue img {
    background: #eee;
    border: 1px dashed #333;
    margin: 10px 0;
    padding: 10px;
    max-width: 300px;
}