<?php defined( '_JEXEC' ) or die; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <style type="text/stylesheet">
    @-webkit-viewport   { width: device-width; }
    @-moz-viewport      { width: device-width; }
    @-ms-viewport       { width: device-width; }
    @-o-viewport        { width: device-width; }
    @viewport           { width: device-width; }
  </style>
  <script type="text/javascript">
    //<![CDATA[
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
      var msViewportStyle = document.createElement("style");
      msViewportStyle.appendChild(
        document.createTextNode("@-ms-viewport{width:auto!important}")
      );
      document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
    }
    //]]>
  </script>
  <meta name="HandheldFriendly" content="true"/>
  <meta name="apple-mobile-web-app-capable" content="YES"/>
  <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
  <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php echo $tpath; ?>/css/ie.css">
    <script type="text/javascript" src="<?php echo $tpath; ?>/js/ie/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo $tpath; ?>/js/ie/respond.js"></script>
  <![endif]-->