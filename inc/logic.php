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

// unset
unset($doc->_styleSheets[$this->baseurl.'/components/com_rsform/assets/css/front.css']);
unset($doc->_scripts[$this->baseurl.'/components/com_rsform/assets/js/script.js']);
unset($doc->_scripts[$this->baseurl .'/media/system/js/mootools-core.js']);
unset($doc->_scripts[$this->baseurl .'/media/system/js/mootools-more.js']);
unset($doc->_scripts[$this->baseurl .'/media/system/js/caption.js']);
unset($doc->_scripts[$this->baseurl .'/media/system/js/core.js']);
unset($doc->_scripts[$this->baseurl .'/media/jui/js/bootstrap.min.js']);
unset($doc->_scripts[$this->baseurl .'/media/system/js/tabs-state.js']);
unset($doc->_scripts[$this->baseurl .'/media/system/js/validate.js']);
unset($doc->_scripts[$this->baseurl .'/media/com_finder/js/autocompleter.js']);

if (isset($doc->_script['text/javascript']))
{
	$doc->_script['text/javascript'] = preg_replace('%jQuery\(window\)\.on\(\'load\'\,\s*function\(\)\s*\{\s*new\s*JCaption\(\'img.caption\'\);\s*}\s*\);\s*%', '', $doc->_script['text/javascript']);
	$doc->_script['text/javascript'] = preg_replace("%\s*jQuery\(document\)\.ready\(function\(\)\{\s*jQuery\('\.hasTooltip'\)\.tooltip\(\{\"html\":\s*true,\"container\":\s*\"body\"\}\);\s*\}\);\s*%", '', $doc->_script['text/javascript']);
	if (empty($doc->_script['text/javascript']))
	{
		unset($doc->_script['text/javascript']);
	}
}

$unset_css = array('com_rsform','com_finder');

foreach($doc->_styleSheets as $name=>$style)
{
	foreach($unset_css as $css)
	{
		if (strpos($name,$css) !== false)
		{
			unset($this->_styleSheets[$name]);
		}
	}
}

// js
$doc->addScript($tpath.'/build/app.js');

// css
$doc->addStyleSheet($tpath.'/build/style.css');
