<?php
/**
 * Atlas
 */
 	$col = "col-md-11";
	if($params['admin'] === true){
		$col = "col-md-12";
	}
 ?>
<div class="ossn-system-messages">
   <div class="row">
	   <div class="<?php echo $col;?> ossn-system-messages-inner">
    		<?php echo ossn_display_system_messages(); ?>
   		</div>
	</div>
</div>    