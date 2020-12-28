/***------------------------------------------Basics--------------------------------------***/

	body {
		font-size:14px;
		background:rgb(15,15,15);
		font-family:'Roboto',sans-serif;
		color:#fff;
		height:100vh;
		padding-bottom:0px;
		-webkit-user-select:none;
		-moz-user-select:none;
		-ms-user-select:none;
		user-select:none;
		-webkit-transition:all .5s ease;
		-moz-transition:all .5s ease;
		-o-transition:all .5s ease;
		transition:all .5s ease
	}


   	@font-face {
		font-family: 'Conv_Halfomania-Regular';
		src: url('<?php echo ossn_theme_url(); ?>fonts/Halfomania-Regular.eot');
		src: local('☺'), url('<?php echo ossn_theme_url(); ?>fonts/Halfomania-Regular.woff')
						format('woff'),
		 				url('<?php echo ossn_theme_url(); ?>fonts/Halfomania-Regular.ttf')
		 				format('truetype'), 
		 				url('<?php echo ossn_theme_url(); ?>fonts/Halfomania-Regular.svg')
		 				format('svg');
		font-weight: normal;
		font-style: normal;
	}

	.ossn-required {
		color:#a94442
	}

	li:hover {
		text-shadow: 0px 0px 18px #00ff00 
		-webkit-transition:all .5s ease;
		-moz-transition:all .5s ease;
		-o-transition:all .5s ease;
		transition:all .5s ease
	}

	.ossn-wall-container .controls li.active,
	.ossn-wall-container .controls li.focus,
	.ossn-wall-container .controls li:active,
	.ossn-wall-container .controls li:focus,
	.ossn-wall-container .controls li:hover,
	li a:hover {
		text-shadow: 0px 0px 18px  #00ff00,
					 0px 0px 8px  #00ff00
	}

	span {
		cursor:context-menu
	}

	a {
		color:#eeeeff!important;
		cursor:context-menu;
		text-decoration:none !important;
		pointer-events:auto
	}

	a:active,
	a:focus,
	a.active,
	a.focus 
	a:hover {
		outline:0;
		cursor:context-menu;
		color:#00ff00 !important;
		text-decoration:none !important
	}

	a:hover::after,
	a:focus::after {
		color:#c5ff00 !important;
		cursor:context-menu;
		text-decoration:none !important;
		opacity:1
	}

	a::after {
		cursor:context-menu;
		background:#333;
		position:absolute;
		text-decoration:none !important
	}

	p {
		font-size:15px
	}

	::-webkit-scrollbar {
		width:0px
	}

	::-webkit-scrollbar-track {
		background-color:#0000;
		border-left:0px
	}

	::-webkit-scrollbar-thumb {
		background-color:#0000
	}

	::-webkit-scrollbar-thumb:hover {
		background-color:#0000
	}

	.fa{
		margin-right:2px
	}

	.atlas-table {
		border-spacing:10px;
		border-collapse:separate;
		margin-right:auto;
		margin-left:auto
	}

	.ossn-red-borders{
		border:1px solid red !important
	}


	.ossn-hidden {
		display:none
	}

	.col-center {
		float:none;
		margin:0 auto
	}

	.container-table {
		display:table;
		width:100%
	}

	.container {
		padding-left:15px!important
	}

	.center-row {
		display:table-cell;
		text-align:center
	}

	.radio-block {
		margin-top:10px;
		margin-bottom:10px
	}

	.radio-block span {
		display:inline-block;
		margin-right:10px;
		font-size:15px;
		font-weight:bold;
		margin-left:10px
	}

	.right {
		float:right
	}

	.left {
		float:left
	}

	.text-right {
		text-align:right
	}

	.text-left {
		text-align:left
	}

	.text-center {
		text-align:center
	}

	.margin-top-10 {
		margin-top:10px
	}

	.margin-top-20 {
		margin-top:20px
	}

	.dropdown-submenu {
		position:relative;
	}

/***------------------------------------------Topbar--------------------------------------***/

	
	.topbar {
		color: #6f6f6f;
	    z-index: 6;
	    position: fixed;
	    height: 70px;
	    background: #6664;
	    box-shadow: 0px 0px 10px 6px rgb(0 0 0 / 84%);
	    margin-bottom: 10px;
	    width: 100%;
	    backdrop-filter: blur(6px);
	}

	
	.topbar .fa {
		font-size:20px;
		margin-top:5px
	}

	.topbar .site-name {
		float:left;
		width:14%
	}

	.topbar .site-name a {
		text-transform:uppercase;
		font-size:100%;
		color:#fff;
		text-align:center;
		display:block;
		font-weight:700;
		padding-top:25px;
		padding-bottom:25px;
		margin-left:auto;
		margin-right:auto;
		white-space:nowrap
	}

	.topbar .site-name a:hover {
		text-decoration:none }

	.topbar-menu-left {
		position:relative;
		z-index:1;
		display:inline-block;
		float:left
	}

	.topbar-menu-right li,
	.topbar-menu-left li {
		display:inline-block;
	}


	.ossn-topbar-dropdown-menu {
		padding-top:15px;
		margin-right:83px
	}

	.ossn-topbar-dropdown-menu,
	#ossn-notif-notification a,
	#ossn-notif-messages a,
	#ossn-notif-friends a {
		padding:10px;
		display:block;
		color:#fff;
		height:70px;
		padding-top:20px
	}

	.topbar-menu-left li a {
		padding:10px;
		display:block;
		color:#fff;
		height:70px;
		padding-top:20px;
		padding-right:10px;
		padding-left:20px
	}

	.topbar-menu-right li:hover,
	.topbar-menu-left li:hover {
		background-color:#111111b9
	}

	.topbar .right-side-nospace .topbar-menu-right {
		margin-right:0;
		-webkit-transition:all .5s ease;
		-moz-transition:all .5s ease;
		-o-transition:all .5s ease;
		transition:all .5s ease
	}

	.topbar .right-side-space .topbar-menu-right {
		margin-right:0;
		-webkit-transition:all .5s ease;
		-moz-transition:all .5s ease;
		-o-transition:all .5s ease;
		transition:all .5s ease
	}

	.topbar .ossn-icons-topbar-friends,
	.topbar .ossn-icons-topbar-messages,
	.topbar .ossn-icons-topbar-notification,
	.topbar .ossn-icons-topbar-friends-new,
	.topbar .ossn-icons-topbar-messages-new,
	.topbar .ossn-icons-topbar-notifications-new i { 
		color:#fff
	}

	.ossn-topbar-dropdown-menu {
		float:right;
		margin-left:10px
	}
	.dropdown-menu{
		-webkit-transition:display .5s ease;
		-moz-transition:display .5s ease;
		-o-transition:display .5s ease;
		transition:display .5s ease
	}

	.ossn-topbar-dropdown-menu ul li a,
	.ossn-topbar-dropdown-menu ul li {
		display:block;
		width:100%;
		color:#000
	}

	.ossn-topbar-dropdown-menu .dropdown-menu {
		margin:1px -120px 0
	}

	.topbar-search input {
		background-color:#6664;
		border:0 !important;
		padding:10px;
		height:70px;
		width:90%;
		color:#c5ff00
	}

	.topbar-search input[type=text]:focus,select:focus {
		box-shadow:0 0 5px #c5ff00,
			inset 0 0 2px #c5ff00;
		outline:0
	}

/***/


.ossn-profile-edit-layout,
.profile-edit-layout-title{
	background-color:#222!important;
	border:0 solid #000!important;
	border-radius:20px!important;
}




/***------------------------------------------Footer--------------------------------------***/

	/***------Atlas Footer------***/

		/*
			.ossn-layout-startup footer .ossn-footer-menu a {
				color: rgba(0, 0, 0, 0)!important
			}
			
			footer {
				margin-top: 20px;
				margin-bottom:160px!important;
				padding-top: 5px;
				text-align: center!important;
				color: rgba(0, 0, 0, 0.0) !important
			}

			footer a {
				color: rgba(0, 0, 0, 0.0) !important;
				pointer-events: none;
				text-decoration: none
			}

			.menu-footer-powered {
				color: rgba(0, 0, 0, 0.0) !important;
				pointer-events: none;
				text-decoration: none
			}

			.menu-footer-powered:after {
				display: none
			}

		*/

	/***------Oficial Footer------***/

		/**/
			footer .ossn-footer-menu a {
				color:rgba(255,255,255,.5) !important;
				margin-left:5px;
				margin-right:5px;
				padding-right:5px;
				padding-left:5px
			}

			.ossn-layout-startup footer .ossn-footer-menu a {
				color:rgba(255,255,255,.5) !important;
				margin-left:5px;
				margin-right:5px;
				padding-right:5px;
				padding-left:5px
			}

			footer{
				margin-top:10px;
				padding-top:10px
			}
			/*
			footer .col-md-11 {
				border-top:0px;
				align:center;
			}
			
			footer .ossn-footer-menu {
				padding-bottom:10px
			}
			*/
			
			footer .ossn-footer-menu a {
				color:#807d7d;
				font-size:13px
			}

			footer .ossn-footer-menu a::after {
				content:"|";
				margin-left:10px;
				margin-right:10px
			}

			footer .ossn-footer-menu a:nth-last-child(2)::after,
			footer .ossn-footer-menu a:last-child::after {
				content:" "
			}

			.menu-footer-powered {
				/*float:right;
				padding-right:50px;*/
			}

			.menu-footer-powered:after {
				display:none
			}

			.menu-footer-a_copyrights {
				text-transform:uppercase
			}
		/**/

/***-----------------------------------------StartUp--------------------------------------***/


.gulp { 
  overflow:hidden;
}

.gulp div {
   padding: 3px;
   padding-top:0px;
   padding-bottom:0px;
}
#one {
  float:left; 
}
#two { 
  overflow:hidden;
}

@media screen and (max-width: 500px) {
   #one { 
    float: none;   
  }
}


.ossn-like-reactions-panel {
	background:#333!important;
}


	.ossn-home-container {
		margin-top:110px
	}

	.ossn-page-container { 
		overflow-x:hidden 
	}

	.atlas-logo2 { 
		overflow:hidden;
		border:0px;
		height:100px;
		background:url(<?php echo ossn_theme_url(); ?>images/atlas.svg)no-repeat;
		background-size:200px;
		background-position:center;
		width:200px;
	}

	.atlas-logo { 
		overflow:hidden;
		border:0px;
		border-radius:100px;
		height:150px;
		background:url(<?php echo ossn_theme_url(); ?>images/logo_animated.svg)no-repeat;
		background-size:100px;
		background-position:center;
		width:150px;
	}

	.ossn-home-container, .ossn-layout-startup { 
		min-height:95vh!important
	}

	.ossn-home-container  {
		background:rgba(0,0,0,0);
		border:0 transparent rgba(0,0,0,0);
	}

	.ossn-layout-startup {
		background: url("<?php echo ossn_theme_url();?>images/infinite.svg") no-repeat;
		background-size:300vh;
	    background-position:center;
	}

	.ossn-layout-startup textarea,
	.ossn-layout-startup input[type='password'],
	.ossn-layout-startup select,
	.ossn-layout-startup text,
	.ossn-layout-startup input[type='text'],
	.ossn-layout-startup focus,
	.ossn-layout-startup after, {
		background: rgba(20,20,20,.3);
		color:#c5ff00;
		width:-webkit-fill-available;
		border:2px dashed #101010dd;
		paddin:10px;
		margin-bottom:5px;
		margin-top:5px;
		outline:0;
		display:block;
		resize:vertical;
		text-decoration:none;
		-webkit-transition:all .5s ease;
		-moz-transition:all .5s ease;
		-o-transition:all .5s ease;
		transition:all .5s ease
	}

	.ossn-layout-startup .ossn-widget .widget-heading {
		display:none;
	}

	.ossn-layout-startup .ossn-widget {
		background: rgba(0,0,0,.6);
		backdrop-filter: blur(6px);
		box-shadow:0px 0px 5px 2px #0000;
		-webkit-transition:all .5s ease;
		-moz-transition:all .5s ease;
		-o-transition:all .5s ease;
		transition:all .5s ease
	}

	.home-left-contents .logo {
		text-align:center
	}

	.home-left-contents .description { 
		font-size:17px;
		text-transform:uppercase;
		font-weight:bold;
		margin-top:20px;
		text-align:justify;
		color:#fff
	}

	#ossn-home-signup p {
		margin-top:10px
	}

	.home-left-contents .some-icons i {
		font-size:50px
	}

	.home-left-contents .some-icons li {
		display:inline-block;
		color:#fff;
		border:3px solid #fff;
		border-radius:100%;
		padding:20px;
		margin-right:20px;
		margin-bottom:20px;
		width:100px;
		height:100px
	}

	.home-left-contents .some-icons{
		margin-top:10%;
		text-align:center
	}

/***------------------------------------------Form----------------------------------------***/

	.ossn-form input[type='password'],
	.ossn-form text,
	.ossn-form select,
	.ossn-form textarea,
	.ossn-form input[type='text'] {
		background: #42806826;
		color:#c5ff00;
		width:100%;
		border-top:2px dashed #3334;
		border-left:0;
		border-bottom:2px dashed #3334;
		border-right:0;
		padding:10px;
		margin-bottom:5px;
		outline:0;
		display:block;
		resize:vertical;
		text-decoration:none;
		backdrop-filter: blur(6px)
	}

	.ossn-form input[type='submit'] {
		margin-top:5px;
		margin-bottom:5px;
		width:100%
	}

	.ossn-form input[type='text']:focus,
	.ossn-form input[type='password']:focus,
	select:focus{
		color:#c5ff00;
		width:100%;
		padding:10px;
		margin-bottom:5px;
		outline:0;
		display:block;
		resize:vertical;
		text-decoration:none;
		-webkit-transition:all .5s ease;
		-moz-transition:all .5s ease;
		-o-transition:all .5s ease;
		transition:all .5s ease;
		backdrop-filter: blur(6px);
		box-shadow:	0 0 5px #c5ff00,
			inset 	0 0 20px #111
	}

/***----------------------------------Buttons and Controls--------------------------------***/
	
	.ossn-layout-module .controls {
		float:right;
		display:inline-table
	}

	.ossn-wall-container .controls {
		background-color:#0000;
		border-bottom:0 solid #222;
		border-left:0 solid #222;
		border-right:0 solid #222;
		border-bottom-left-radius:10px;
		border-bottom-right-radius:10px;
		height:40px;
		width:100%;
		margin-top:-5px;
		padding-right:10px
	}

	.ossn-wall-container .controls li {
		margin:-10px;
		padding:20px;
		display:inline-block 
	}

	.ossn-notifications-friends-inner .controls {
		float:right;
		margin-top:6px;
		display:inline-block
	}

	.profile-cover-controls {
		position:absolute;
		width:100%;
		margin-left: -251px;
		margin-top:260px;
		z-index:1
	}

	.change-cover {
		float:right;
		position:relative;
		margin-right:50px !important
	}

	.reposition-cover {
		float:right;
		position:relative;
		margin-right:5px !important
	}

	.profile-menu {
		float:right;
		position:relative;
		margin-top:-40px;
		margin-right:20px
	}

	#cover-menu { 
		display:none;
		-webkit-transition:all .5s ease;
		-moz-transition:all .5s ease;
		-o-transition:all .5s ease;
		transition:all .5s ease
	}

	.upload-photo {
		opacity:.9;
		width:170px;
		padding: 10px;	
		position:absolute;
		color: #c3174e;
		text-align:center;
		font-size:15px;
		font-family:sans-serif;
		/* border-top-left-radius:350px;*/
		border-top-right-radius: -88px;
		padding-top: 129px;
		border-radius: 49px
	}

	.upload-photo span {
		height: 50px;
		color: #971e4e;
		margin-left: -1px;
		font-weight: 700;
		font-size: 11pt;
		text-align: center;
		margin-top: 1px;
		padding-top: 50px;
		padding-left: 20px;
		padding-right: 20px
	}

	.user-cover-uploading {
		opacity:.8
	}

	.user-photo-uploading {
		height: 80%;
	    opacity: .8;
	    background: #000;
	    margin: 5px;
	    width: 80%;
	    padding: 7px;
	    position: absolute;
	    border-radius: 90px; 
	}

	.user-photo-uploading span {
		display: inline-block;
	    margin-top: 0;
	    padding: 89px 31px 31px 31px;
    }

	.change-cover,
	.reposition-cover {
		padding-left:10px
	}

	.ossn-topbar-dropdown-menu a,
	.home-left-contents .buttons,
	.ossn-message-box .control .controls .btn,
	.btn-standalone-grey,
	.change-cover,
	.reposition-cover,
	.btn-succes,
	.button-grey,
	.btn-action,
	.btn-link,
	.btn-primary,
	.btn,
	.topbar-menu-left li a,
	.topbar-menu-right li a {
		background:rgba(0,0,0,0);
		border:0 transparent !important;
		color:#fff;
		outline:0;
		border-radius:2px;
		pointer-events:auto;
		cursor:context-menu;
		text-decoration:none;
	}

	.upload-photo span.active,
	.upload-photo span.focus,
	.upload-photo span:focus,
	.upload-photo span:active,
	.upload-photo span:hover {
		border:0 solid #000;
		cursor:context-menu;
		pointer-events:auto;
		outline:0 !important;
		background:rgba(0,0,0,0);
		text-decoration:none !important
	}

	.btn-primary.active,
	.btn-primary.focus,
	.btn-primary:focus,
	.btn-primary:active,
	.btn-primary:hover,
	.btn-success.active,
	.btn-success.focus,
	.btn-success:active,
	.btn-success:focus,
	.btn-success:hover,
	.ossn-topbar-dropdown-menu a.active,
	.ossn-topbar-dropdown-menu a.focus,
	.ossn-topbar-dropdown-menu a:active,
	.ossn-topbar-dropdown-menu a:focus,
	.ossn-topbar-dropdown-menu a:hover,
	.btn.active,
	.btn.focus,
	.btn:active,
	.btn:focus,
	.btn:hover,
	.btn-link.active,
	.btn-link.focus,
	.btn-link:active,
	.btn-link:focus,
	.btn-link:hover,
	.btn-action.active,
	.btn-action.focus,
	.btn-action:active,
	.btn-action:focus,
	.btn-action:hover,
	.home-left-contents .buttons.active,
	.home-left-contents .buttons.focus,
	.home-left-contents .buttons:active,
	.home-left-contents .buttons:focus,
	.home-left-contents .buttons:hover,
	.ossn-message-box .control .controls .btn.active,
	.ossn-message-box .control .controls .btn.focus,
	.ossn-message-box .control .controls .btn:active,
	.ossn-message-box .control .controls .btn:focus,
	.ossn-message-box .control .controls .btn:hover,
	.button-grey.active,
	.button-grey.focus,
	.button-grey:active,
	.button-grey:focus,
	.button-grey:hover,
	.ossn-wall-container .controls li.active,
	.ossn-wall-container .controls li.focus,
	.ossn-wall-container .controls li:active,
	.ossn-wall-container .controls li:focus,
	.ossn-wall-container .controls li:hover,
	.btn-standalone-grey.active,
	.btn-standalone-grey.focus,
	.btn-standalone-grey:active,
	.btn-standalone-grey:focus,
	.btn-standalone-grey:hover,
	.topbar-menu-right li a.active,
	.topbar-menu-right li a.focus,
	.topbar-menu-right li a:active,
	.topbar-menu-right li a:focus,
	.topbar-menu-right li a:hover,
	.topbar-menu-left li a.active,
	.topbar-menu-left li a.focus,
	.topbar-menu-left li a:active,
	.topbar-menu-left li a:focus,
	.topbar-menu-left li a:hover,
	.open>.dropdown-toggle .btn-primary.active,
	.open>.dropdown-toggle .btn-primary.focus,
	.open>.dropdown-toggle .btn-primary:active,
	.open>.dropdown-toggle .btn-primary:focus,
	.open>.dropdown-toggle .btn-primary:hover,
	.open>.dropdown-toggle .btn-success.active,
	.open>.dropdown-toggle .btn-success.focus,
	.open>.dropdown-toggle .btn-success:active,
	.open>.dropdown-toggle .btn-success:focus,
	.open>.dropdown-toggle .btn-success:hover,
	.reposition-cover.active,
	.reposition-cover.focus,
	.reposition-cover:active,
	.reposition-cover:focus,
	.reposition-cover:hover,
	.profile-cover-controls.active,
	.profile-cover-controls.focus,
	.profile-cover-controls:active,
	.profile-cover-controls:focus,
	.profile-cover-controls:hover,
	.change-cover.active,
	.change-cover.focus,
	.change-cover:active,
	.change-cover:focus,
	.change-cover:hover {
		border:0 solid #000;
		color:#c5ff00;
		opacity:1;
		background:rgba(0,0,0,0);
		cursor:context-menu;
		pointer-events:auto;
		outline:0 !important;
		text-decoration:none !important
	}

	.ossn-topbar-dropdown-menu a:hover::after,
	.home-left-contents .buttons:hover::after,
	.ossn-message-box .control .controls .btn:hover::after,
	.btn-standalone-grey:hover::after,
	.change-cover:hover::after,
	.reposition-cover:hover::after,
	.btn-succes:hover::after,
	.button-grey:hover::after,
	.btn-action:hover::after,
	.btn-link:hover::after,
	.btn-primary:hover::after,
	.btn:hover::after,
	.topbar-menu-left li a:hover::after,
	.topbar-menu-right li a:hover::after {
		color:#c5ff00;
		opacity:1;
		cursor:context-menu;
		pointer-events:auto;
		outline:0 !important;
		background:rgba(0,0,0,0);
		text-decoration:none !important
	}

	.ossn-topbar-dropdown-menu a:after,
	.home-left-contents .buttons:after,
	.ossn-message-box .control .controls .btn:after,
	.btn-standalone-grey:after,
	.change-cover:after,
	.reposition-cover:after,
	.btn-succes:after,
	.button-grey:after,
	.btn-action:after,
	.btn-link:after,
	.btn-primary:after,
	.btn:after,
	.topbar-menu-left li a:after,
	.topbar-menu-right li a:after {
		color:#c5ff00;
		opacity:1;
		cursor:context-menu;
		pointer-events:auto;
		outline:0 !important;
		background:rgba(0,0,0,0);
		text-decoration:none !important
	}

	.com-members-memberlist-item img{
	    display: inline-block;
	    border-radius: 50px;
	    border: 4px solid #477;
		margin:0px 15px 5px 0px !important;
		padding:0 !important;
		box-shadow:	 5px 5px 10px #000000cc,
					-5px -5px 10px #ffffff33
	}

	.col-md-5 {
		width:40% !important
	}

	.ossn-chat-tab-titles:hover {
		background:#222 !important;
		border:0 !important
	}

	.ossn-chat-tab-titles {
		background:#171717 !important;
		color:#fff !important;
		border:0 !important;
		border-top-left-radius:10px !important;
		border-top-right-radius:10px !important
	}

	.ossn-chat-bar .friends-list .data {
		border-left:0 !important;
		border-right:0 !important
	}

	.ossn-chat-base {
	    border-bottom: 0;
	    bottom: 0px;
	      display: block;
	    font-size: 11px;
	    height: 33px;
	    position: fixed;
	    text-align: left;
	    z-index: 1028;
	    margin-top: 8px;
	    left: 25%;
	    width: 73%
	}

	.ossn-chat-base .ossn-chat-bar .friends-list {
	    background: #222!important;
	    width: 200px!important;
	    min-height: 273px!important;
	    margin-top: -271px!important;
	    position: fixed!important;
	    height: 268px!important;
	    border-top-left-radius: 10px!important;
	    border-top-right-radius: 10px!important;
	    display: none;
	    margin-left: 0px!important
	}

	.ossn-chat-base {
		border-top-left-radius:10px !important;
		border-top-right-radius:10px !important;
		color:#999 !important
	}

	.ossn-chat-base .ossn-chat-bar .inner:hover {
		background:#171717 !important;
		color:#c5ff00 !important
	}

	.ossn-chat-base .ossn-chat-bar .inner {
		background:#171717 !important;
		border:0 !important;
		margin-left:0px!important
	}
	
	.ossn-chat-bar{}

	.dropdown-menu {
		background-color:#000000b8 !important;
		border:0 !important;
		color:#eee !important;
		backdrop-filter: blur(6px);
	}

	.dropdown-menu>li>a {
		color:#fff4 !important
	}

	.dropdown-menu>li>a:focus,
	.dropdown-menu>li>a:hover {
		color:#c5ff00 !important;
		background:#111b8!important
	}

	.ossn-notifications-box {
	backdrop-filter:blur(6px);
		border-radius:10px !important
	}

	.ossn-notifications-box .type-name {
		color:#999 !important;
		backdrop-filter: blur(6px);
		border-bottom:0 !important
	}

	.ossn-notifications-box .bottom-all {
		background:#000e !important;
		backdrop-filter: blur(6px);
		border-top:0 !important
	}

	.ossn-notifications-box li:hover,
	.ossn-notifications-box a:hover,
	.ossn-notifications-all a:hover,
	.ossn-notifications-all li:hover{
		background:#0004 !important;
		backdrop-filter: blur(6px);
		color:#c5ff00 !important
	}

	.ossn-notification-messages .user-item:hover {
		background:#0004 !important;
		backdrop-filter: blur(6px);
		color:#c5ff00 !important
	}

	.ossn-notifications-box .bottom-all a,
	.ossn-notifications-box .notfi-meta strong {
		color:#999 !important;
		backdrop-filter: blur(6px);
		background:#000e !important
	}

	.ossn-notification-messages .user-item {
		border-bottom:0 !important;
		backdrop-filter: blur(6px);
		border-top:0 !important
	}

	.nav-tabs {
		border-bottom:2px solid #3c763d !important
	}

/***-----------------------------------------Layouts--------------------------------------***/

	.ossn-layout-module,
	.ossn-layout-contents,
	.ossn-layout-media,
	.ossn-layout-newsfeed {
		margin-top:90px;
		min-height:450px 
	}

	.ossn-layout-module {
		margin-top:10px;
		background:rgba(0,0,0,0);
		border:0 solid #eee;
		padding:10px 
	}

	.ossn-layout-module .module-title {
		background:rgba(0,0,0,0);
		border:0 solid #eee;
		padding:10px 
	}

	.ossn-layout-module .module-contents {
		padding:10px
	}

	.ossn-layout-module .module-title .title {
		font-weight:bold;
		display:inline-block
	}

	.ossn-layout-media {
		margin-top:10px
	}

	.ossn-layout-media .like-share,
	.ossn-layout-media .comments-list {
		margin-left:-10px;
		margin-right:-10px
	}

	.ossn-layout-media .content,
	.ossn-page-contents {
		background:rgba(0,0,0,0);
		padding:0px;
		margin: 10px;
		border:0 solid #eee
	}

	.opensource-socialnetwork {
		min-height:100%;
		padding-bottom:-5px;
	}

	.ossn-home-container .row {
		margin-right:10px;
		margin-left:10px
	}

	#ossn-signup-errors {
		display:none;
		margin-top:10px
	}

	.ossn-error-page {
		text-align:center;
		padding:100px
	}

	.ossn-error-page .error-heading {
		font-size:50px;
		font-weight:bold
	}

	.ossn-error-page .error-text {
		font-size:16px 
	}

	.ossn-error-page .fa-exclamation-triangle {
		font-size:100px
	}

	.ossn-group-members {
		margin-right:5px
	}

	.ossn-page-loading-annimation {
		background:#000;
		opacity:.8;
		position:fixed;
		left:0;
		top:0;
		width:100%;
		height:100%;
		z-index:9999;
		backdrop-filter: blur(6px)
	}

	.ossn-page-loading-annimation .ossn-page-loading-annimation-inner {
		width:24px;
		margin:0 auto;
		margin-top:20%
	}

/***---------------------------------------Atlas Wall-------------------------------------***/

	.postbg-text {
		display:block!important
	}

	.ossn-wall-item {
		padding:30px;
		padding-top:10px;
		border-radius:10px;
		margin-top: 20px;
		padding-bottom:0;
		background:#4444;
		backdrop-filter: blur(6px);
		z-index:1
	}

	.ossn-wall-item:first-child {
		margin-top:0
	}

	.ossn-wall-item .friends a {
		text-decoration:none
	}

	.ossn-wall-item .friends a:first-child:before {
		content:"-";
		margin-left:5px;
		margin-right:5px
	}

	.ossn-wall-item .user-img {
		float: left;
	    display: inline-block;
	    border-radius: 50px;
	    border: 6px solid #4774;
	    margin: -30px 7px 10px -26px !important;
	    width: 77px;
	    backdrop-filter: blur(6px);
	    box-shadow:0 0 20px 2px #000c
	}

	.ossn-profile-module-friends .user-name {
		color: #fff!important;
	    text-shadow:0 0 6px 6px #000!important;
	    font-size: 14px!important;
	    font-weight: 300!important;
	}

	.ossn-profile-module-friends img {
		 border-radius:50px!important;
	}

	.ossn-wall-item .meta { margin-top:5px }

	.ossn-wall-item .meta .user {
		display:inline-block;
		margin-top:3px
	}

	.ossn-wall-item .meta .user a {
		font-weight:bold
	}

	.ossn-wall-item .meta .user span {
		color:#999
	}

	.ossn-wall-item .post-contents {
		margin-top:15px;
		z-index:7
	}

	.ossn-wall-item .post-contents p {
		word-break:break-word;
		text-align:justify
	}


	.ossn-wall-item .meta .post-menu {
		float:right
	}

	.ossn-wall-container {
		margin-bottom:20px;
		background:#4444;
		border-radius:10px;
		backdrop-filter: blur(6px);
	}

	.ossn-wall-container textarea {
		padding:10px;
		width:100%;
		resize:vertical;
	    backdrop-filter: blur(6px);
	}

	.ossn-wall-container textarea:focus, select:focus {
		box-shadow:0 0 5px #c5ff00
	}

	.ossn-wall-container .wall-tabs {
		border-top-left-radius:10px;
		border-top-right-radius:10px;
		background-color:#0000
	}

	.ossn-wall-container .wall-tabs .item {
		padding:10px;
		display:inline-flex;
		font-weight:bold;
		font-size:13px
	}

	.ossn-wall-container .wall-tabs .item:hover {
		background:#ffffff00;
		border-radius:10px;
		color:#c5ff00
	}

	.ossn-wall-container .wall-tabs .item div {
		display:inline-block
	}

	.ossn-wall-container .wall-tabs .item .text {
		font-weight:bold;
		margin-top:1px;
		margin-left:5px;
		position:absolute;
		font-size:15px
	}

	.ossn-wall-privacy {
		float:right;
		margin-right:5px
	}

	.ossn-wall-container input[type='submit'] {
		padding:3px 10px;
		display:block;
		margin-top:6px
	}

	.ossn-wall-container i {
		font-size:15px
	}

	.ossn-wall-container input[type="file"] {
		border-left:1px solid #000;
		border-right:1px solid #000
	}

	.ossn-wall-container input[type="file"],
	.ossn-wall-container input[type="text"] {
		width:100%;
		background-color:#333333dd;
		color:#fff;
		border-top:0;
		padding:5px;
		margin-bottom:5px;
		margin-top:-5px;
		outline:0
	}

	#token-input-ossn-wall-friend-input {
		width:100% !important;
		border-top:0 dashed #EEE;
		padding:7px;
		margin-bottom:5px;
		margin-top:-5px
	}

	#ossn-wall-form .ossn-loading {
		margin:7px
	}

	.ossn-wall-item-type {
		display:inline-block
	}

	.ossn-wall-item .friends {
		display:inline-block
	}

/***------------------------------------Coments & Likes-----------------------------------***/

	.ossn-comment-menu {
		float:right;
		display:none
	}

	.comments-item:hover .ossn-comment-menu {
		display:block
	}

	.comments-likes {
		min-height:50px;
		width:100%
	}

	.menu-likes-comments-share {
		margin-bottom:10px
	}

	.menu-likes-comments-share li {
		display:inline-block
	}

	.menu-likes-comments-share li::after {
		content:"-";
		margin-left:5px;
		margin-right:5px;
		color:#ccc
	}

	.menu-likes-comments-share li:last-child:after {
		content:" "
	}

	.comments-list {
		background-color:rgba(0,0,0,0);
		margin-left:-15px;
		margin-right:-15px;
		padding-left:10px;
		border-bottom-left-radius:10px;
		border-bottom-right-radius:10px;
		padding-right:10px
	}

	.comments-list .comments-item{padding-top:10px;
		padding-bottom:5px}

	.comments-list .comments-item:first-child{margin-top:0;
		padding-top:10px}

	.comments-list .comments-item:last-child{border-bottom:0}

	.comments-list .comments-item .comment-user-img{
		border:2px solid #477;
		display:inline-block;
		margin: -5px  15px 0 0;
		border-radius:32px}


	.comments-list .comments-item .comment-contents{display:inline-block;
		margin-top:-3px;
		margin-left:5px}

	.comment-container{padding-bottom:10px;
		position:relative;
		z-index:0}

	.comments-item .col-md-11{padding-left:0}

	.comment-metadata .time-created,.comment-metadata a{display:inline-block}

	.comment-contents p{margin:0;
		word-break:break-word;
		text-align:justify}

	.comment-contents p img{display:block;
		margin-top:10px;
		margin-bottom:10px;
		max-width:100%}

	.comment-contents .owner-link{font-weight:bold;
		margin-right:5px;
		font-size:14px}

	.comment-contents{width:98%}

	.comment-container span[readonly='readonly'],
	.comment-container input[readonly='readonly'] {
		background:rgba(0,0,0,0)
	}

	.comment-box{width:98%;
		border:0 solid #000;
		padding:5px 30px 5px 5px !important;
		margin-bottom:0;
		margin-left:10px;
		outline:0;
		display:block;
		resize:vertical;
		border-radius:50px;
		background:#4445;
		min-height:32px}

	.ossn-comment-attach-photo .fa-camera {
		    margin-right: 10px!important;
		}

	[contentEditable=true]:empty:not(:focus)::before{content:attr(placeholder)}

	.like-share{border-top:0 solid #111;
		border-bottom:0 solid #111;
		padding:10px;
		margin-top:10px;
		background-color:rgba(0,0,0,0);
		margin-left:-15px;
		margin-right:-15px;
		padding-left:20px;
		padding-right:20px}

	.ossn-like-comment,.ossn-total-likes{margin-left:10px}

	.time-created{font-size:14px;
		font-style:italic;
		color:#999}

/***----------------------------------------Sidebar---------------------------------------***/

	.sidebar{background-color:rgba(20,20,20,.5);
		height:200px;
		z-index:1000;
		width:200px;
		position:fixed;
		height:100%;
		overflow-y:auto;
		overflow-x:hidden;
		color:#fff;
		backdrop-filter: blur(6px);
		box-shadow:0 0px 20px #000}

	.sidebar-close {
		width:80px;
		-webkit-transition:all .5s ease;
		-moz-transition:all .5s ease;
		-o-transition:all .5s ease;
		transition:all .5s ease
	}

	.sidebar-open {
	background-color:rgba(20,20,20,.5);
		width:200px;
		-webkit-transition:all .5s ease;
		-moz-transition:all .5s ease;
		-o-transition:all .5s ease;
		transition:all .5s ease;
		border-right:1px solid #;
		backdrop-filter: blur(6px);
		box-shadow:0 0px 20px #000}

	.sidebar-open-no-annimation {
	margin-left:200px;
	backdrop-filter: blur(1px);
	box-shadow:0 0px 20px #000
	}

	.sidebar-open-page-container{margin-left:0px!important;
	-webkit-transition:all .5s ease;
	-moz-transition:all .5s ease;
	-o-transition:all .5s ease;
	transition:all .5s ease}

	.sidebar-open-page-container-no-annimation{margin-left:80px}

	.sidebar-close-page-container{margin-left:80px;
	-webkit-transition:all .5s ease;
	-moz-transition:all .5s ease;
	-o-transition:all .5s ease;
	transition:all .5s ease}

	.sidebar-menu-nav{overflow:auto;
	font-family:verdana;
	font-size:12px;
	font-weight:200;
	top:0;
	width:100%;
	height:100%}

	.sidebar-menu-nav ul,.sidebar-menu-nav li{list-style:none;
	padding:0;
	margin:0;
	line-height:35px}

	.sidebar-menu-nav ul:not(collapsed) .arrow:before,.sidebar-menu-nav li:not(collapsed) .arrow:before{font-family:FontAwesome;
	content:"\f078";
	display:inline-block;
	padding-left:10px;
	padding-right:10px;
	vertical-align:middle;
	float:right}

	.sidebar-menu-nav ul .sub-menu li{padding-left:20px}

	.sidebar-menu-nav ul .sub-menu li,.sidebar-menu-nav li .sub-menu li{border:0;
	line-height:28px;
	border-bottom:1px solid #171717;
	margin-left:0}

	.sidebar-menu-nav ul .sub-menu li:hover,.sidebar-menu-nav li .sub-menu li:hover{background-color:#000;
	color:#c5ff00}

	.sidebar-menu-nav ul .sub-menu li:before,.sidebar-menu-nav li .sub-menu li:before{font-family:FontAwesome;
	content:"\f105";
	display:inline-block;
	padding-left:10px;
	padding-right:10px;
	vertical-align:middle}

	.sidebar-menu-nav li{padding-left:0}

	.sidebar-menu-nav li a{text-decoration:none;
	color:#fff}

	.sidebar-menu-nav li a i{padding-left:10px;
	width:20px;
	padding-right:20px}

	.sidebar-menu-nav li:hover{border-left:3px solid #fff;
	background-color:#4f5b69;
	-webkit-transition:all .5s ease;
	-moz-transition:all .5s ease;
	-o-transition:all .5s ease;
	-ms-transition:all .5s ease;
	transition:all .5s ease}

	.sidebar-close .sub-menu a{display:none}

	.sidebar-close .sidebar-menu-nav li a .text{display:none}

	.sidebar-menu-nav ul .sub-menu li:before{font-size:18px}

	.sidebar-menu-nav ul .sub-menu li,.sidebar-menu-nav li .sub-menu li{line-height:40px}

/***---------------------------------------News Seed--------------------------------------***/
	
	.newseed-uinfo { display:none; padding:10px }

	.sidebar-open .newseed-uinfo1 .name{display:inline-block}
	.newseed-uinfo1 { padding:10px }


	.sidebar-close .newseed-uinfo1 .name{display:none}

	.newseed-uinfo1 img {
		display:inline-block;
		border-radius:50px;
		float:left;
		border:4px solid #070;
		}

	.newseed-uinfo1 .name {
		display:inline-block;
		width:100px;
		margin-left:10px;
		margin-top:20px }

	.newseed-uinfo1 .name a {
		font-weight:bold;
		display:block;
		color:#fff;
		font-size:13px;
		text-decoration:none }

	.newseed-uinfo1 .name a:hover {
		font-weight:bold;
		display:block;
		color:#c5ff00;
		font-size:13px;
		text-decoration:none }

	.newseed-uinfo1 .name .edit-profile { font-weight:inherit }

/***------------------------------------DropDown Menu-------------------------------------***/

	.dropdown-submenu>.dropdown-menu { top:0;
	left:100%;
	margin-top:-6px;
	margin-left:-1px;
	-webkit-border-radius:0 6px 6px 6px;
	-moz-border-radius:0 6px 6px;
	border-radius:0 6px 6px 6px}

	.dropdown-submenu:hover>.dropdown-menu{display:block}

	.dropdown-submenu>a:after{display:block;
	content:" ";
	float:right;
	width:0;
	height:0;
	border-color:transparent;
	border-style:solid;
	border-width:5px 0 5px 5px;
	border-left-color:#ccc;
	margin-top:5px;
	margin-right:-10px}

	.dropdown-submenu:hover>a:after{border-left-color:#fff}

	.dropdown-submenu.pull-left{float:none}

	.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;
	margin-left:10px;
	-webkit-border-radius:6px 0 6px 6px;
	-moz-border-radius:6px 0 6px 6px;
	border-radius:6px 0 6px 6px}

	.dropmenu-topbar-icons{left:inherit;
	right:0}

/***----------------------------------------Ad Item---------------------------------------***/
	.ossn-ad-item .ad-image{max-width:100%;
	margin:0 auto;
	display:block}

	.ossn-ad-item a{text-decoration:none;
	color:#000}

	.ossn-ad-item .ad-title{font-weight:bold;
	font-size:15px;
	margin-bottom:5px}

	.ossn-ad-item .ad-link{margin-bottom:5px}

	.ossn-ad-item p{margin-top:10px;
	text-align:justify}

/***----------------------------------------Widget----------------------------------------***/

	.ossn-widget{
	background-color:rgba(0,0,0,0);
	border-radius:10px}

	.ossn-widget .widget-heading{
	display:block;
	background-color:#4444;
	text-align:center;
	padding:10px;
	font-weight:bold;
	border-top-left-radius:10px;
	border-top-right-radius:10px}

	.ossn-widget .widget-contents{border-bottom-left-radius:10px;
	border-bottom-right-radius:10px;
	padding: 8px;
	margin: 8px }

/***-----------------------------------Notification Box-----------------------------------***/

	.ossn-notifications-box{width:430px;
	color:#000}

	.ossn-notifications-box .notificaton-item{border-bottom:0 solid #eee}

	.ossn-notifications-box .notificaton-item:hover,
	.ossn-notifications-box .notificaton-item .active{background:rgba(0,100,0,5)}

	.ossn-notifications-box .type-name{font-size:13px;
	font-weight:bold;
	padding:1px 10px 5px 10px;
	color:#000;
	height:25px;
	border-bottom:0 solid #ddd}

	.ossn-notification-box-loading{margin:0 auto;
	margin-top:20px;
	margin-bottom:20px}

	.ossn-no-notification{text-align:center;
	padding:10px}

	.ossn-notifications-box .type-name .title{display:inline-block}

	.ossn-notifications-box .type-name .links{display:inline-block;
	float:right}

	.ossn-notifications-box .type-name .links a{color:#337ab7;
	display:inline;
	font-weight:normal}

	.ossn-notifications-box .notification-image,
	.ossn-notifications-box .notification-image img {
		width:50px;
		height:50px;
		border-radius: 50px;
		display:inline-block
	}

	.ossn-notification-messages .user-item .image img {
		border-radius: 50px;	
	} 

	.ossn-notifications-box .bottom-all a,.ossn-notifications-box .notfi-meta strong{color:#337ab7}

	.ossn-notifications-box .notfi-meta{width:330px;
	margin-left:5px;
	display:inline-block;
	float:right;
	color:#000}

	.ossn-notifications-box .bottom-all a{font-weight:bold}

	.ossn-notifications-box .bottom-all{background:#f7f7f7;
	text-align:center;
	padding:0;
	padding-top:10px;
	display:block;
	height:40px;
	border-top:0 solid #eee}

	.ossn-notifications-box .metadata{margin-bottom:-5px}

	.ossn-notifications-box .messages-inner{max-height:400px;
	overflow:hidden;
	overflow-y:scroll}

	.ossn-notification-mark-read{float:right}

	.ossn-notifications-all li{padding:10px;
	display:block}

	.ossn-notifications-all a:hover{background-color:transparent;
	text-decoration:none}

	.ossn-notifications-box li:hover,.ossn-notifications-box a:hover,.ossn-notifications-all a:hover,.ossn-notifications-all li:hover{background:#f9f9f9}

	.ossn-notification-container{background-color:#dc0d17;
	background-image:-webkit-linear-gradient(#fa3c45,#dc0d17);
	color:#fff;
	min-height:13px;
	padding:1px 3px;
	text-shadow:0 -1px 0 rgba(0,0,0,.4);
	-webkit-border-radius:2px;
	-webkit-box-shadow:0 1px 1px rgba(0,0,0,.7);
	-webkit-background-clip:padding-box;
	display:inline-block;
	font-size:11px;
	line-height:normal;
	position:absolute;
	margin-left:-10px;
	z-index:1}

	.notification-friends .image{width:50px;
	height:50px;
	display:inline-table;
	float:left}

	.ossn-notifications-friends-inner{padding:6px}

	.ossn-notifications-friends-inner form{display:inline-table}

	.ossn-notification-page li img{display:none}

	.notification-friends li{margin-bottom:5px;
	width:100%;
	border-bottom:0 solid #eee}

	.notification-friends .notfi-meta a{color:#337ab7;
	font-weight:bold;
	display:inline-block;
	width:200px;
	white-space:nowrap;
	overflow:hidden;
	text-overflow:ellipsis}

	.notification-friends{max-height:400px}

/***---------------------------------------Profile----------------------------------------***/

	.ossn-profile .top-container{background:rgba(0,0,0,0);
	border:0 solid #c4cde0;
	border-width:0;
	margin-top: -19px;
	padding-bottom: 0;
	margin-bottom: -17px }

	.ossn-profile .top-container .profile-cover{height:309px;
	border-bottom-left-radius: 20px;
	box-shadow:inset 0 0 25px #000000dd;
	border-bottom-right-radius: 20px;
	overflow:hidden;
	opacity:.99;
	background: linear-gradient(to bottom,rgba(0,0,0,0) 0,rgba(0,0,0,0) 1%,rgba(0,0,0,.38) 100%) }

	/*.ossn-profile .top-container .profile-cover img{width:100%}*/

	.profile-cover-img {
			
	}



	.ossn-profile-row{margin-bottom:20px}

	.profile-hr-menu ul{margin-bottom:0;
	padding:0}

	.profile-hr-menu ul li{display:inline-block}

	.profile-hr-menu ul li a{display:block;
	padding:15px;
	margin-right:5px;
	font-weight:bold;
	border-right:0 solid #eee}

	.profile-hr-menu .dropdown-menu li{display:block}

	.profile-hr-menu .dropdown a i{margin-left:5px}

	.profile-hr-menu .dropdown-menu li a{border-right:0;
	margin-right:0}

	.profile-hr-menu{border-bottom:0}

	.profile-hr-menu ul li:last-child{border-right:0}

	.ossn-profile .profile-photo{position:absolute;
	margin-left: 2%;
	margin-top: -150px;
	border:1px solid #9994;
	background: #3635;
	border-radius:100px;
	padding: 15px;
	z-index: 1;
	backdrop-filter: blur(6px);
	box-shadow:0px 0px 35px #000,
				inset 0 0 10px #000; }

	.ossn-profile .profile-photo img{border-radius:100px}

	.ossn-profile .user-fullname {
	    color: #c3174e;
	    font-weight: bold;
	    margin-top: -81px;
	    font-size: 3.3vw;
	    padding: 10px;
	    margin-left: 17%;
	    position: absolute;
	    text-shadow: 0 0 6px #000000db, 0 0 16px #000000e0, 0 0 6px #00000096;
	    max-width: 820px;
	    white-space: nowrap;
	    overflow: hidden;
	    text-overflow: ellipsis;
	    z-index: 2
	}

	.ossn-profile-role {
		font-size: 22px !important;
		margin-top: -37px !important;
		margin-left: -12px;
		text-shadow: 0 0 3px #000;
		padding-left: -32px;
		color: #607D8B !important
	}

	.ossn-profile-bottom {
		margin-top:23px
	}

	.ossn-profile-extra-menu {
		display:inline-block
	}

/***------------------------------------Menu & Search-------------------------------------***/

	.menu-section-item-newsfeed:before {
		content:"\f0a1" !important
	}

	.menu-section-item-friends:before {
		content:"\f0c0" !important
	}

	.menu-section-item-allgroups:before {
		content:"\f0c0" !important
	}

	.menu-section-item-photos:before {
		content:"\f03e" !important
	}

	.menu-section-item-messages:before {
		content:"\f0e0" !important
	}

	.menu-section-item-invite-friends:before {
		content:"\f234" !important
	}

	.menu-section-item-addgroup:before {
		content:"\f067" !important
	}

	.menu-section-item-groups {
		white-space:nowrap;
		overflow:hidden;
		text-overflow:ellipsis;
		width:200px;
		padding-right:10px
	}

	.ossn-menu-search li {
		display:block
	}

	.ossn-menu-search li:hover {
		background:#f9f9f9
	}

	.ossn-menu-search li a {
		display:block;
		width:100%;
		padding:5px
	}

	.ossn-menu-search li a:hover {
		text-decoration:none
	}

	.ossn-menu-search li a .text {
		display:inline-block
	}

	.ossn-search-page .ossn-users-list-item {
		margin-left:0;
		border:0;
		margin-bottom:20px;
		margin-top:20px;
		margin-right:0
	}

	.ossn-search-page .ossn-users-list-item .uinfo {
		margin-left:25px
	}

	.ossn-search input[type='text'] {
	    background: #42806826!important;
	    color: #c5ff00 !important;
	    width: 90% !important;
	    backdrop-filter: blur(6px)!important
	}

	.ossn-menu-search-users .text:before {
		font-family:FontAwesome;
		content:"\f007";
		display:absolute;
		padding-right:10px;
		vertical-align:middle;
		float:left
	}

	.ossn-menu-search-groups .text:before {
		font-family:FontAwesome;
		content:"\f0c0";
		display:absolute;
		padding-right:10px;
		vertical-align:middle;
		float:left
	}

/***----------------------------------------Token-----------------------------------------***/
	ul.token-input-list {
		overflow:hidden;
		height:auto !important;
		height:1%;
		width:100%;
		font-size:12px;
		font-family:Verdana;
		min-height:1px;
		z-index:999;
		padding:0;
		margin:0;
		margin-top:-5px;
		background-color:rgba(0,0,0,0);
		list-style-type:none;
		clear:left;
		color:#2b5470;
		border-top:0 dashed #EEE;
		border-right:0 solid #EEE;
		border-left:0 solid #EEE
	}
	
	li.token-input-token {
		overflow:hidden;
		height:auto !important;
		height:15px;
		margin:3px;
		padding:1px 3px;
		background-color:#eff2f7;
		color:#2b5470;
		font-weight:bold;
		border:1px solid #ccd5e4;
		font-size:11px;
		border-radius:5px;
		-moz-border-radius:5px;
		-webkit-border-radius:5px;
		float:left;
		white-space:nowrap
	}
	
	li.token-input-token p {
		display:inline;
		padding:0;
		margin:0;
		font-size:12px
	}
	
	li.token-input-token span {color:#a6b3cf;
		margin-left:5px;
		font-weight:bold
	}
	
	li.token-input-selected-token {background-color:#f9f9f9;
		border:1px solid #eee;
		color:#2b5470 font-weight:bold
	}
	
	li.token-input-input-token {float:left;
		margin:0;
		padding:0;
		list-style-type:none
	}
	
	div.token-input-dropdown {position:absolute;
		width:400px;
		background-color:#fff;
		overflow:hidden;
		border-left:1px solid #ccc;
		border-right:1px solid #ccc;
		border-bottom:1px solid #ccc;
		font-size:11px;
		font-family:Verdana;
		z-index:1
	}
	
	div.token-input-dropdown p {margin:0;
		padding:5px
	}
	
	div.token-input-dropdown ul {margin:0;
		padding:0
	}
	
	div.token-input-dropdown ul li {background-color:#fff;
		padding:3px;
		margin:0;
		list-style-type:none
	}
	
	div.token-input-dropdown ul li.token-input-dropdown-item {
		background-color:#fff
	}
	
	div.token-input-dropdown ul li.token-input-dropdown-item2 {
		background-color:#fff
	}
	
	div.token-input-dropdown ul li em {
		font-weight:bold;
		font-style:normal
	}
	
	div.token-input-dropdown ul li.token-input-selected-dropdown-item {
		background-color:#f9f9f9;
		color:#2b5470;
		font-weight:bold
	}

/***------------------------------------MessageSystem-------------------------------------***/

	.ossn-system-messages .ossn-system-messages-inner {
		margin-top:30px;
		z-index:10000;
		margin-bottom:-100px;
		display:none
	}

	.ossn-system-messages .ossn-system-messages-inner .alert {
		margin-bottom:20px;
		margin-left: 30px
	}

	.ossn-message-done {
		border:1px solid #1eb0df;
		border-width:1px;
		background-color:#daf6ff;
		padding:13px;
		z-index:10000;
		text-align:left
	}

	.ossn-message-box {
		width:470px;
		min-width:470px;
		min-height:96px;
		background:#1115;
		border:0px solid #999;
		position:fixed;
		top:0;
		left:0;
		right:0;
		margin-left:auto;
		margin-right:auto;
		padding:10px;
		z-index:60000;
		margin-top:100px;
		border-radius:20px;
		display:none;
		box-shadow:	 5px 5px 10px #000000cc,
					-5px -5px 10px #ffffff33
	}


	.ossn-message-box .close-box {
		float:right;
		color:#ccc
	}

	.ossn-message-box .title {
		background:#f5f6f7;
		padding:11px;
		border-radius:3px;
		border-bottom:1px solid #e5e5e5;
		color:#5e5656;
		font-size:14px;
		display:none;
		font-weight:bold
	}

	.ossn-message-box .contents {
		padding:10px;
		min-height:150px;
		max-height:420px;
		overflow-x:auto;
		overflow:overlay;
		overflow-x:-moz-hidden-unscrollable
	}

	.ossn-message-box .contents input[type='text'] {
		border:1px solid #EEE;
		width:292px;
		padding:7px
	}

	.ossn-message-box .contents input[type='text'],
	.ossn-message-box .contents label {
		display:inline-table
	}

	.ossn-message-box .contents label {
		color:#666;
		font-weight:bold;
		font-size:13px;
		margin-right:13px
	}

	.friends-tab{
		box-shadow:	 5px 5px 10px #000000cc,
		-5px -5px 10px #ffffff33
	}

/***-------------------------------------OSSN Helpers-------------------------------------***/

	.ossn-halt {
		position:absolute;
		top:0;
		left:0;
		width:100%;
		z-index:10000;
		background-color:#000;
		backdrop-filter: blur(6px);
		opacity:.9;
		height:100%;
		display:none
	}

	.ossn-light {
		opacity:.4;
		backdrop-filter: blur(6px);

	}

	.ossn-viewer {
		width:940px;
		margin:0 auto;
		position:relative
	}

	.ossn-viewer .ossn-container {
		height:200px;
		position:fixed;
		width:900px;
		z-index:10000;
		margin-top:70px;
		min-height:515px
	}

	.ossn-viewer-loding {
		font-size:15px
	}

	.ossn-viewer .ossn-container .close-viewer {
		float:right;
		margin-right:5px;
		font-weight:bold;
		font-size:13px;
		color:#ccc
	}

	.ossn-container tbody {
		background:#000
	}

	.ossn-halt {
		position:absolute;
		top:0;
		left:0;
		width:100%;
		z-index:10000;
		backdrop-filter:blur(6px);
		background-color:#000;
		opacity:.9;
		height:100%;
		display:none
	}

	.ossn-viewer .info-block {
		background:#fff;
		height:100%;
		width:325px;
		float:right;
		margin-left:-3px
		}

	.image-block img {
		max-width:700px
	}

	.alert-danger {
		background:rgba(55,0,0,.7)
	}

	@-moz-keyframes three-quarters-loader {
		0%{
				-moz-transform:rotate(0deg);
				transform:rotate(0deg)}

			100%{
				-moz-transform:rotate(360deg);
				transform:rotate(360deg)
			}
	}

	@-webkit-keyframes three-quarters-loader {
		0%{
			-webkit-transform:rotate(0deg);
			transform:rotate(0deg)
		}

		100% {
			-webkit-transform:rotate(360deg);
			transform:rotate(360deg)
			}
	}

	@keyframes three-quarters-loader {
		0% {
			-moz-transform:rotate(0deg);
			-ms-transform:rotate(0deg);
			-webkit-transform:rotate(0deg);
			transform:rotate(0deg)
		}

		100% {
			-moz-transform:rotate(360deg);
			-ms-transform:rotate(360deg);
			-webkit-transform:rotate(360deg);
			transform:rotate(360deg)
			}
	}


	.ossn-loading:not(:required) {
		-moz-animation:three-quarters-loader 1250ms infinite linear;
		-webkit-animation:three-quarters-loader 1250ms infinite linear;
		animation:three-quarters-loader 1250ms infinite linear;
		border:2px solid #c5ff00;
		border-right-color:transparent;
		border-radius:16px;
		box-sizing:border-box;
		position:relative;
		overflow:hidden;
		text-indent:-9999px;
		width:24px;
		height:24px
	}

	.ossn-box-loading {
		margin-left:216px;
		margin-top:37px
	}

	.ossn-layout-media .content {
		margin-right:10px;
		margin-left:10px;
		margin-top:70px
	}


	.sidebar-menu-nav .sidebar-menu .menu-content {
		display:block
	}

	.ossn-box-inner {
		width:446px
	}


	.ossn-smiley-item {
		display:inline-block !important;
		margin-left:2px;
		margin-right:2px;
		width:initial !important;
		margin-bottom:0 !important;
		margin-top:0 !important;
		border:0 !important
	}

	.ossn_embed_video {
		margin-top:10px;
		margin-bottom:10px;
		padding-top:0
	}

	.ossn-photo-viewer .image-block img,
	.ossn-photo-viewer {
		max-width:100% !important
	}

	.ossn-photos-wall {
		background:#111 !important;
		border:1px solid #111 !important
	}

	.ossn-wall-item .post-contents img {
		max-width:100%;
		background:#111;
		display:block;
		margin-bottom:10px;
		box-shadow:	0 0 30px #000
	}

	.latest-users img {
		margin-bottom:5px
	}

	.emojii-container {
		background:rgba(0,0,0,.87) !important;
		width:254px !important;
		border:0 transparent !important;
		position:fixed !important;
		bottom:20px !important;
		right:20px !important;
		z-index:10000 !important;
		box-shadow:	 5px 5px 10px #000000cc,
					-5px -5px 10px #ffffff33
	}

	.tooltip {
		position:absolute;
		z-index:1070;
		display:block;
		font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;
		font-size:12px;
		font-weight:400;
		line-height:1.4;
		filter:alpha(opacity=0);
		opacity:0
	}

	.tooltip.in {
		filter:alpha(opacity=90);
		opacity:.9
	}

	.tooltip.top {
		padding:5px 0;
		margin-top:-3px
	}

	.tooltip.right {
		padding:0 5px;
		margin-left:3px
	}

	.tooltip.bottom {
		padding:5px 0;
		margin-top:3px
	}

	.tooltip.left {
		padding:0 5px;
		margin-left:-3px
	}

	.tooltip-inner {
		max-width:200px;
		padding:3px 8px;
		color:#fff;
		text-align:center;
		text-decoration:none;
		background-color:#000;
		border-radius:4px
	}

	.tooltip-arrow {
		position:absolute;
		width:0;
		height:0;
		border-color:transparent;
		border-style:solid
	}

	.tooltip.top .tooltip-arrow {
		bottom:0;
		left:50%;
		margin-left:-5px;
		border-width:5px 5px 0;
		border-top-color:#000
	}

	.tooltip.top-left .tooltip-arrow {
		right:5px;
		bottom:0;
		margin-bottom:-5px;
		border-width:5px 5px 0;
		border-top-color:#000
	}

	.tooltip.top-right .tooltip-arrow {
		bottom:0;
		left:5px;
		margin-bottom:-5px;
		border-width:5px 5px 0;
		border-top-color:#000
	}

	.tooltip.right .tooltip-arrow {
		top:50%;
		left:0;
		margin-top:-5px;
		border-width:5px 5px 5px 0;
		border-right-color:#000
	}

	.tooltip.left .tooltip-arrow {
		top:50%;
		right:0;
		margin-top:-5px;
		border-width:5px 0 5px 5px;
		border-left-color:#000
	}

	.tooltip.bottom .tooltip-arrow {
		top:0;
		left:50%;
		margin-left:-5px;
		border-width:0 5px 5px;
		border-bottom-color:#000
	}

	.tooltip.bottom-left .tooltip-arrow {
		top:0;
		right:5px;
		margin-top:-5px;
		border-width:0 5px 5px;
		border-bottom-color:#000
	}

	.tooltip.bottom-right .tooltip-arrow {
		top:0;
		left:5px;
		margin-top:-5px;
		border-width:0 5px 5px;
		border-bottom-color:#000
	}

	.fancybox-skin{
	background:#333!important;
}

	.fancybox-wrap {
		top:75px !important
	}

.ossn-wall-item 
.post-contents img{
	border-radius:20px;
}

	.fancybox-inner img {
		max-width:100%;
		height:auto
	}

	.fancybox-lock .fancybox-overlay{
	background:#0008;
	 backdrop-filter: blur(6px);
}

/***----------------------------------------Bloked----------------------------------------***/

	.ossn-blocked i {
		font-size:100px
	}

	.ossn-blocked {
		text-align:center;
		padding:100px
	}

	.ossn-blocked div {
		font-size:50px;
		font-weight:bold
	}

	.ossn-blocked p {
		font-size:16px
	}

/***---------------------------------------UserList---------------------------------------***/

	.ossn-users-list-item .users-list-controls {
		margin-top:20px
	}

	.ossn-users-list-item .users-list-controls a {
		margin-left:5px
	}

	.ossn-users-list-item {
		border:1px solid #e9eaed;
		margin-bottom:10px;
		margin-right:-10px;
		margin-left:-10px
	}

	.ossn-users-list-item .uinfo a {
		font-size:14px;
		font-weight:bold;
		margin-top:20px;
		float:left;
		text-overflow:ellipsis;
		width:300px;
		white-space:nowrap;
		overflow:hidden
	}

	.ossn-users-list-item .col-md-2 {
		text-align:center
	}

	.ossn-list-users {
		height:60px;
		border-bottom:1px solid #e9eaed;
		display:block;
		margin-left:5px;
		margin-bottom:10px
	}

	.ossn-list-users img,.ossn-list-users .uinfo {
		display:inline-block
	}

	.ossn-list-users .uinfo .userlink {
		font-size:14px;
		font-weight:bold;
		float:right;
		margin-left:12px;
		text-overflow:ellipsis;
		width:370px;
		white-space:nowrap;
		overflow:hidden
	}

	.ossn-list-users .friendlink{
		float:right;
		margin-top:10px;
		margin-right:9px;
		text-overflow:ellipsis;
		width:280px;
		white-space:nowrap;
		overflow:hidden
	}

/***-----------------------------------Media Responsive-----------------------------------***/

	@media only screen and (max-width:485px) {

		.comments-list .comments-item .comment-user-img {
			display:none
		}

		.comments-item .col-md-11 {
			padding-left:15px
		}

		.ossn-wall-item-type {
			display:block
		}

		.ossn-wall-item .meta .user {
			width:155px;
			white-space:nowrap;
			overflow:hidden;
			text-overflow:ellipsis
		}

		.ossn-list-users .uinfo .userlink {
			text-overflow:ellipsis;
			width:195px;
			white-space:nowrap;
			overflow:hidden
		}

		.ossn-message-box .contents {
			height:280px;
			overflow-x:auto;
			overflow:overlay
		}

		.ossn-notifications-box {
			width:300px
		}

		.ossn-notifications-box .notfi-meta {
			width:230px
		}

		.notification-friends .notfi-meta a {
			width:100px
		}

		.ossn-notifications-box .notfi-meta,.ossn-notification-messages .user-item .data {
			width:215px !important
		}

		.ossn-notification-messages .user-item .data .name {
			width:110px !important
		}

		.ossn-notification-messages .reply-text-from {
			width:200px !important;
			white-space:nowrap;
			overflow:hidden;
			text-overflow:ellipsis
		}

		.ossn-profile .profile-photo img {
		    border-radius: 100px;
		}

		.ossn-profile .user-fullname{
			font-size:16px;
			margin-left: 92px;
			margin-top: -174px;
			width: 100%
		}

		.ossn-profile .top-container .profile-cover {
			height: 196px
		}

		.ossn-profile .profile-photo {
			margin-top: -124px;
			margin-left: 20%
		}

		.profile-menu {
			float:none;
			margin:13px
		}

		.ossn-profile .top-container .profile-cover img {
			width:auto
		}

		.profile-hr-menu ul li {
			display:block;
			text-align:center;
			border-bottom:1px solid #eee;
			margin-right:0
		}

		.profile-hr-menu ul li a {
			margin-right:0
		}

		.ossn-profile-role {
			display:none
		}


		.ossn-users-list-item img {
			display:none
		}

		.ossn-users-list-item .users-list-controls {
			margin-top:10px;
			margin-bottom:10px
		}

		.ossn-users-list-item .uinfo a {
			margin-top:10px;
			white-space:nowrap;
			overflow:hidden;
			text-overflow:ellipsis;
			width:90px
		}

		.ossn-search-page .ossn-users-list-item .uinfo a {
			white-space:nowrap;
			overflow:hidden;
			text-overflow:ellipsis;
			width:100px
		}

		.ossn-system-messages {
			padding-left:15px;
			padding-right:15px
		}

		.ossn-users-list-item {
			padding-bottom:10px
		}

		.ossn-widget .widget-contents {
			padding:10px
		}

		.ossn-message-box {
			min-width:300px;
			width:300px
		}

		.ossn-box-loading {
			margin-left:150px;
			margin-top:37px
		}

		.ossn-message-box .contents input[type="text"] {
			width:195px
		}

		.ossn-box-inner {
			width:280px
		}

		/*.ossn-group-cover img{top:auto !important}*/

		.ossn-group-cover {
			height:100px !important
		}

		.ossn-group-cover-header,
		.ossn-group-profile .profile-header,
		.ossn-group-profile .profile-header .header-bottom {
			height:auto !important
		}

		.ossn-group-profile .profile-header {
			max-height:inherit !important
		}

		.ossn-group-profile .profile-header .group-name {
			float:none !important
		}

		.group-header-menu li,#group-header-menu {
			width:100% !important
		}

		.group-header-menu li {
			border-bottom:0 solid #EEE !important
		}

		.group-name {
			text-align:center;
			width:100%;
			border-bottom:0 solid #eee
		}

		.ossn-group-members {
			margin-left:15px;
			margin-right:15px
		}

		.ossn-group-members .request-controls,.ossn-group-members .uinfo {
			display:inline-block
		}

		.ossn-group-members .uinfo .userlink {
			width:130px;
			white-space:nowrap;
			overflow:hidden;
			text-overflow:ellipsis
		}

		.sidebar-menu-nav .sidebar-menu .menu-content {
			display:block
		}

		/*.sidebar-hide-contents-xs{display:none}*/

		.home-left-contents .some-icons {
			display:none
		}

		.newsfeed-right {
			display:none
		}

		.ossn-messages .message-with .user-icon,
		.ossn-messages .messages-recent .messages-from .user-item .image {
			display:none
		}

		.ossn-messages .message-inner .row {
			margin-left:0 !important
		}

		.logo img {
			width:260px
		}

		.home-left-contents .description {
			font-size:16px
		}

		.home-left-contents {
			margin-bottom:20px
		}

		.dropdown-menu {
			margin-left:-110px;
			backdrop-filter: blur(6px);
		}

		.menu-footer-powered {
			float:none
		}

		.menu-section-item-groups:before {
			content:"\f07b" !important
		}
	}
	
	@media only screen and (max-width:992px) {

		.ossn-group-cover img {
			top:auto !important
		}

		.dropdown-menu {
			margin-left:-110px;
			backdrop-filter: blur(6px);
		}

		.ossn-profile .user-fullname {
			max-width:500px;
			font-size: 7.3vw
		}

		.comments-list .comments-item .comment-user-img {
			display:none
		}

		.comments-item .col-md-11 { 
			padding-left:15px
		}

		.newsfeed-right { 
			display:none
		}

		.ossn-messages .message-with .user-icon,
		.ossn-messages .messages-recent .messages-from .user-item .image {
			display:none
		}

		.ossn-messages .message-inner .row {
			margin-left:0 !important
		}

		.sidebar-menu-nav .sidebar-menu .menu-content {
			display:block
		}
	}

	@media only screen and (max-width:1199px) {

		.comments-list .comments-item .col-md-1,
		.comments-list .comments-item .comment-user-img {
			display:none
		}

		.comments-list .comments-item .col-md-11 {
			width:100%
		}

		.comments-item .col-md-11 {
			padding-left:15px
		}

		.group-search-details {
			margin-left:10px
		}

		.ossn-search-page .ossn-users-list-item .uinfo {
			margin-left:35px
		}

		.ossn-search-page .ossn-users-list-item .uinfo a {
			text-overflow:ellipsis;
			width:90%;
			white-space:nowrap;
			overflow:hidden
		}

		.ossn-users-list-item .users-list-controls {
			margin-bottom:10px
		}

		.ossn-profile .user-fullname {
			max-width: 640px;
		}
	}

	@media(max-width:767px) {

		.ossn-profile .user-fullname {
			max-width:767px
		}

		.ossn-search-page .ossn-users-list-item .uinfo {
			margin-left:0
		}

		.sidebar-menu-nav ul .sub-menu li:before {
		font-family:FontAwesome;
		display:inline-block;
		padding-left:10px;
		padding-right:10px;
		vertical-align:middle
		}
	}

	@media only screen and (max-width:768px) {

		.topbar {
			width:100%
		}

		.sidebar {
			margin-left:-200px
		}

		.sidebar-close-page-container {
			margin-left:0px
		}

		.sidebar-close {
			margin-left:-200px
		}

		.sidebar-open {
			margin-left:0
		}

		.sidebar-menu-nav {
			position:relative;
			width:100%;
			margin-bottom:10px
		}

		.ossn-group-members {
			height:75px !important
		}

		.ossn-topbar-dropdown-menu {
			margin-right:-13px
		}

		.profile-cover-controls {
		    position: absolute;
		    width: 100%;
		    margin-left: -235px;
		    margin-top: 12px;
		    z-index: 1
		}
	} 