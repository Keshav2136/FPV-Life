<?php
 $class = '';
 if(isset($params['class'])){ 
 	$class = $params['class'];
 }
 if(empty($params['title'])){
	 return;
 }  
?>
<div class="ossn-widget <?php echo $class;?>">
	<div class="widget-heading"><?php echo $params['title'];?></div>
	<div class="widget-contents">
		<?php echo $params['contents'];?>
	</div>
</div>