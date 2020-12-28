<?php
/**
 * Atlas
 */
$params['controls'] = (isset($params['controls'])) ? $params['controls'] : '';

?>
	<div class="col-md-11">
		<div class="ossn-layout-module">
			<div class="module-title">
				<div class="title"><?php echo $params['title']; ?></div>
				<div class="controls">
					<?php echo $params['controls']; ?>
				</div>
			</div>
			<div class="module-contents">
				<?php echo $params['content']; ?>
			</div>
		</div>
	</div>