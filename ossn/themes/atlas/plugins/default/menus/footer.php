<?php
/**
 * Atlas
 */

$menus = $params['menu'];
foreach($menus as $menu) {
		foreach($menu as $link) {
				$class = "menu-footer-" . $link['name'];
				if(isset($link['class'])) {
						$link['class'] = $class . ' ' . $link['class'];
				} else {
						$link['class'] = $class;
				}
				unset($link['name']);
				echo ossn_plugin_view('output/url', $link);
		}
}
