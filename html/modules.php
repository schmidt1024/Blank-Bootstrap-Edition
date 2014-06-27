<?php defined('_JEXEC') or die;

function modChrome_well($module, &$params, &$attribs) {
	if ($module->content) {
		echo "<div class=\"well well-sm" . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
		if ($module->showtitle) {
			echo "<h3>" . $module->title . "</h3>";
		}
		echo $module->content;
		echo "</div>";
	}
}

?>