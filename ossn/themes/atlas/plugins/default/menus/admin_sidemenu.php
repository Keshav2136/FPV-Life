<?php
/**
 * Atlas
 */
foreach ($params['menu'] as $key => $value) {
        echo "<li><a href='javascript:void(0);' class='dropdown-toggle' data-toggle='dropdown'>" . $key . "<i class='fa fa-sort-desc'></i></a>";
        echo '<ul class="dropdown-menu multi-level">';
        foreach ($value as $link) {
			unset($link['parent']);
			unset($link['name']);
            $link['text'] = ossn_print($link['text']);
			$link = ossn_plugin_view('output/url', $link);
            echo "<li>{$link}</li>";
        }
        echo '</ul></li>';
}
