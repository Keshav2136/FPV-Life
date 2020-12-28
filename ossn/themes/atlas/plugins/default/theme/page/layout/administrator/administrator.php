<?php
/**
 * Atlas
 */
 ?>
<div class="ossn-layout-admin" style="padding-top: 30px;">
	<?php echo ossn_plugin_view('theme/page/elements/system_messages', array(
						'admin' => true
	  	  )); 
	?>    
    <div class="row">

    	<div class="col-md-12 contents" style="padding-top: 10px;">
			<div class="page-title center"><?php echo $params['title']; ?></div>
    	 	<?php echo $params['contents']; ?>
    	</div>
	</div>
</div>    
