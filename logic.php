<?php defined( '_JEXEC' ) or die; 

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;
$templateparams	= $app->getTemplate(true)->params;

// generator tag
$this->setGenerator(null);

// force latest IE & chrome frame
$doc->setMetadata('x-ua-compatible','IE=edge,chrome=1');

// js
JHtml::_('jquery.framework');
$doc->addScript($tpath.'/js/bootstrap.min.js');
$doc->addScript($tpath.'/js/logic.js'); // <- use for custom script

// css

// begin function compress
// function compress($buffer) 
// {
// 	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
// 	$buffer = str_replace(array("\r\n","\r","\n","\t",'  ','    ','    '),'',$buffer);
// 	$buffer = str_replace('{ ', '{', $buffer);
// 	$buffer = str_replace(' }', '}', $buffer);
// 	$buffer = str_replace('; ', ';', $buffer);
// 	$buffer = str_replace(', ', ',', $buffer);
// 	$buffer = str_replace(' {', '{', $buffer);
// 	$buffer = str_replace('} ', '}', $buffer);
// 	$buffer = str_replace(': ', ':', $buffer);
// 	$buffer = str_replace(' ,', ',', $buffer);
// 	$buffer = str_replace(' ;', ';', $buffer);
// 	$buffer = str_replace(';}', '}', $buffer);
// 	return $buffer;
// }

// merge css
// $merged = file_get_contents($tpath.'/css/template.css');
// $merged .= file_get_contents(JUri::base().'/media/system/css/system.css');
// $merged .= file_get_contents(JPATH_THEMES.'/system/css/system.css');
// $merged .= file_get_contents(JPATH_THEMES.'/system/css/general.css');

// $compressed = compress($merged);

// file_put_contents($tpath.'/template.css', $compressed);

$doc->addStyleSheet($tpath.'/css/template.css');
$doc->addStyleSheet(JUri::base().'/media/system/css/system.css');
$doc->addStyleSheet(JPATH_THEMES.'/system/css/system.css');
$doc->addStyleSheet(JPATH_THEMES.'/system/css/general.css');