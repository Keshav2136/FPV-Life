<?php
/**
 * Atlas
 */
?>


<style>

.container1 {
  padding-left: 0px!important;
}

</style>

<div class="ossn-layout-startup">
	<div class="container1">
		<div class="row">
            <?php echo ossn_plugin_view('theme/page/elements/system_messages'); ?>        
			<div class="ossn-home-container">
				<div class="inner">
					<?php echo $params['content']; ?>
				</div>
			</div>
		</div>
		<?php echo ossn_plugin_view('theme/page/elements/footer');?>
	</div>
</div>
