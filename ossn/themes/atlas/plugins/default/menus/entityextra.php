<?php
/**
 * Atlas
 */
$entityextra = $params['menu'];
if($entityextra && ossn_isLoggedin()) {
		if(!empty($entityextra)) {
				foreach($entityextra as $menu) {
						foreach($menu as $link) {
								$class = "entity-menu-extra-" . $link['name'];
								if(isset($link['class'])) {
										$link['class'] = $class . ' ' . $link['class'];
								} else {
										$link['class'] = $class;
								}
								unset($link['name']);
								$link = ossn_plugin_view('output/url', $link);
								echo "<li>$link</li>";
						}
				}
		}
}
