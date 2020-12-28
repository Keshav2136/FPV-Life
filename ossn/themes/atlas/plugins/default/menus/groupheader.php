<?php
/**
 * Atlas
 */
echo '<ul>';
$i = 0;
foreach($params['menu'] as $menu) {
		if($i <= 3) {
				foreach($menu as $name => $link) {
						$class = "menu-group-timeline-" . $link['name'];
						if(isset($link['class'])) {
								$link['class'] = $class . ' ' . $link['class'];
						} else {
								$link['class'] = $class;
						}
						unset($link['name']);
						$link['text'] = ossn_print($link['text']);
						$link         = ossn_plugin_view('output/url', $link);
						echo "<li>{$link}</li>";
				}
		} else {
				echo "<li><a href='javascript:void(0);'>" . ossn_print('more') . "</a>
		  <ul>";
				foreach($menu as $name => $link) {
						$class = "menu-group-timeline-" . $link['name'];
						if(isset($link['class'])) {
								$link['class'] = $class . ' ' . $link['class'];
						} else {
								$link['class'] = $class;
						}
						unset($link['name']);
						$link['text'] = ossn_print($link['text']);
						$link         = ossn_plugin_view('output/url', $link);
						echo "<li>{$link}</li>";
				}
				echo "</ul>
		 </li>";
		}
		$i++;
}
echo '</ul>';