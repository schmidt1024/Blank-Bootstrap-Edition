<?php defined( '_JEXEC' ) or die; 

include_once JPATH_THEMES.'/'.$this->template.'/inc/logic.php';

?><!doctype html>
<!--[if IE 8]><html lang="<?php echo $this->language; ?>" class="ltie9"><![endif]-->
<!--[if gt IE 8]><!--><html lang="<?php echo $this->language; ?>"><!--<![endif]-->
<head>
<jdoc:include type="head" /><?php include_once JPATH_THEMES.'/'.$this->template.'/inc/head.php'; ?>
</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>" role="document">

	<!-- 
		YOUR CODE HERE
	-->

	<div class="back-to-top">
		<a href="#!"><span class="fa fa-angle-double-up"></span></a>
	</div>
	
	<div class="checkSize"></div>

	<jdoc:include type="modules" name="debug" />
</body>

</html>
