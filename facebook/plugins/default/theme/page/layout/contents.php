<?php
/**
 * Open Source Social Network
 *
 * @package Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright 2014-2017 SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
 ?>
<div class="container">
       <div class="row">
       		<div class="ossn-layout-contents">
            	 <?php echo ossn_plugin_view('theme/page/elements/system_messages'); ?>
				 <?php echo $params['content']; ?>
             </div>    
        </div> 
	   <?php echo ossn_plugin_view('theme/page/elements/footer');?>                               
</div>