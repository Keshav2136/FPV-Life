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
$menus = $params['menu'];
?>
<div class="sidebar-menu-nav">
          <div class="sidebar-menu">
                 <ul id="menu-content" class="menu-content collapse out">
<?php                        
foreach ($menus as $name => $menu) {
	$section = 'menu-section-'.OssnTranslit::urlize($name).' ';
	$items = 'menu-section-items-'.OssnTranslit::urlize($name).' ';
	$item = 'menu-section-item-'.OssnTranslit::urlize($menu['text']).' ';
	
	$expend = '';
	$icon = "fa-angle-right";
	if($name == 'links'){
		$expend = 'in';
		$icon = "fa-newspaper-o";
	}
	if($name  == 'groups'){
		$icon = "fa-users";
	}
	$hash = md5($name);
    ?>
     <li data-toggle="collapse" data-target="#<?php echo $hash;?>" class="<?php echo $section;?>collapsed active <?php echo $expend;?>">
        	<a class="<?php $item;?>" href="javascript:void(0);"><i class="fa <?php echo $icon;?> fa-lg"></i><?php echo ossn_print($name);?><span class="arrow"></span></a>
     </li>
    <ul class="sub-menu collapse <?php echo $expend;?>" id="<?php echo $hash;?>" class="<?php echo $items;?>"> 
    <?php
	if(is_array($menu)){
	    foreach ($menu as $data) {
		    	$data['li_class'] = 'menu-section-item-'.OssnTranslit::urlize($data['name']);
			$data['class'] = 'menu-section-item-a-'.OssnTranslit::urlize($data['name']);
			unset($data['name']);
			unset($data['icon']);
			unset($data['section']);
			unset($data['parent']);
		    	echo ossn_plugin_view('output/section_submenu_url', $data);
		    	unset($data['li_class']);
		    	unset($data['class']);
    	}
	}
	echo "</ul>";
}
?>

         </ul>
    </div>
</div>
