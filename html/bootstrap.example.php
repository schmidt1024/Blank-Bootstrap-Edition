  
  <!-- NAVBAR -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-modules">
          <span class="sr-only">Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo $this->baseurl; ?>/"><?php echo $app->getCfg('sitename'); ?></a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-modules">
        <jdoc:include type="modules" name="navbar" />
      </div>

    </div>
  </nav>

  <!-- BREADCRUMBS -->
  <div class="container">
    <jdoc:include type="modules" name="breadcrumbs" />
  </div>
  
  <!-- CONTENT -->
  <div class="container">
    <div class="row">
      <div class="col-lg-1"></div>

      <!-- content -->
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
        <jdoc:include type="message" />
        <jdoc:include type="component" />
      </div> 

      <div class="col-md-1 col-lg-1"></div>

      <!-- sidebar -->
      <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" id="sidebar">
        <div id="insidebar">
          <jdoc:include type="modules" name="sidebar" style="well" />
        </div>
      </div>

      <div class="col-lg-1"></div>
    </div>
  </div>

  <!-- FOOTER -->
  <div class="container footer">
    <p><br />Copyright &copy; <?php echo date('Y'); ?> - <?php echo $app->getCfg('sitename'); ?></p>
  </div>
