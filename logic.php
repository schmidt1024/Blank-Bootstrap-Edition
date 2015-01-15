<?php defined( '_JEXEC' ) or die; 

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// force latest IE & chrome frame
$doc->setMetadata('x-ua-compatible','IE=edge,chrome=1');

// jquery
// $doc->addScript($tpath.'/js/jquery-2.1.1.min.js');
// $doc->addScript($tpath.'/js/jquery-noconflict.js');

// holder
// $doc->addScript($tpath.'/js/holder.js');

// bootstrap
$doc->addScript($tpath.'/js/bootstrap.min.js');

// template js
$doc->addScript($tpath.'/js/logic.js');

// template css 
$doc->addStyleSheet($tpath.'/css/template.css.php');
