<?php defined( '_JEXEC' ) or die; 

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?><!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>" role="document">
  
	<!-- 
		This is a comment to explain The following two lines written in php 
		- bootstrap.test.php has test code
		- bootstrap.example.php has example code
		Note: Do not use both files together! Delete the following two lines 
		and the two files to start your own development. You can copy and paste 
		the code of bootstrap.example.php to index.php for a clean setup.
	-->

	<?php require_once 'html/bootstrap.test.php'; ?>
	<?php //require_once 'html/bootstrap.example.php'; ?>

	<!-- 
		YOUR CODE HERE
	-->

	<jdoc:include type="modules" name="debug" />
</body>

</html>
