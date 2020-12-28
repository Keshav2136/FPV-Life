<?php
/**
 * Atlas
 */
$menus = $params['menu'];
if($menus){
    echo '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';
	foreach($menus as $menu) {
			foreach($menu as $link) {
					$class = "menu-topbar-dropdown-" . $link['name'];
					if(isset($link['class'])) {
						$link['class'] = $class . ' ' . $link['class'];
					} else {
							$link['class'] = $class;
					}
					unset($link['name']);	
					echo "<li>".ossn_plugin_view('output/url', $link)."</li>";
			}
	}
	echo "</ul>";
}
