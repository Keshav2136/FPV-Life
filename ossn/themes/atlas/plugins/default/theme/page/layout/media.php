<?php
/**
 * Atlas
 */
?>
<div class="container">
	<div class="row">
       <?php echo ossn_plugin_view('theme/page/elements/system_messages'); ?>    
		<div class="ossn-layout-media">
			<div class="row">
				<div class="col-md-8">
					<div class="content">
						<?php echo $params['content']; ?>
					</div>
				</div>
				<div class="col-md-3">
					<?php if (ossn_is_hook( 'theme', 'sidebar:right')) { ?>
						<div class="page-sidebar">
						<?php
						$modules = ossn_call_hook('theme', 'sidebar:right', null); 
						echo implode( '', $modules);
						?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
 	 <?php echo ossn_plugin_view('theme/page/elements/footer');?> 
</div>
