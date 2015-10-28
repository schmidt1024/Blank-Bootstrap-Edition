<?php defined( '_JEXEC' ) or die;

// begin function compress
function compress($buffer)
{
	// remove comments
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
	// remove tabs, spaces, new lines, etc.
	$buffer = str_replace(array("\r\n","\r","\n","\t",'  ','    ','    '),'',$buffer);
	// remove unnecessary spaces
	$buffer = str_replace('{ ', '{', $buffer);
	$buffer = str_replace(' }', '}', $buffer);
	$buffer = str_replace('; ', ';', $buffer);
	$buffer = str_replace(', ', ',', $buffer);
	$buffer = str_replace(' {', '{', $buffer);
	$buffer = str_replace('} ', '}', $buffer);
	$buffer = str_replace(': ', ':', $buffer);
	$buffer = str_replace(' ,', ',', $buffer);
	$buffer = str_replace(' ;', ';', $buffer);
	$buffer = str_replace(';}', '}', $buffer);

	return $buffer;
}

$uri = JUri::base();
// less compiler
$lesspath = __DIR__ . '/css';
require_once $lesspath . '/less.php/less.php';
$less_files = array( $lesspath . '/template.less' => $uri);
$cache_dir = './cache/css/';
$options = array( 'cache_dir' => $cache_dir );
$css_file_name = Less_Cache::Get( $less_files, $options );

if (file_exists($cache_dir.$css_file_name))
{
	// merge files
	$compiled = file_get_contents( $cache_dir.$css_file_name );
	$compiled .= file_get_contents(JUri::base().'/media/system/css/system.css');
	$compiled .= file_get_contents(JPATH_THEMES.'/system/css/system.css');
	$compiled .= file_get_contents(JPATH_THEMES.'/system/css/general.css');

	$compressed = compress($compiled);

	file_put_contents($lesspath.'/template.css', $compressed);
}
