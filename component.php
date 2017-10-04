<?php defined( '_JEXEC' ) or die; 

// variables
$doc = JFactory::getDocument(); 
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// load sheets and scripts
$doc->addStyleSheet($tpath.'/build/main.css'); 

?><!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
    <jdoc:include type="head" />
</head>

<body id="print">
    <div id="overall">
        <jdoc:include type="message" />
        <jdoc:include type="component" />
    </div>
    <?php if ($_GET['print'] == '1') echo '<script type="text/javascript">window.print();</script>'; ?>
</body>

</html>
