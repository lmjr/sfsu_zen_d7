<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<!-- *****************************************************
Template Version 1.05 - 05/06/09

SF State Web Template Read Me

Use of this template constitutes an agreement to follow the SF State Web Template Guidelines at
http://www.sfsu.edu/template and to meet California Government Code 11135, implementing Section 508 legislation at http://www.sfsu.edu/~dprc/access/  before publishing pages to the Web.

1. Template overview: http://www.sfsu.edu/template/
2. Accessibility Review: http://www.sfsu.edu/access/webaccess/
***************************************************** -->

<head>
<meta name="robots" content="noindex,nofollow" />
<meta name="googlebot" content="nosnippet,noodp,noarchive,noimageindex" />
<meta name="viewport" content="width=900" />
<?php print $head; ?>

<?php if ($sitetitle): ?>        
<?php print $sitetitle; ?>
<?php endif; ?>

<script type="text/javascript" src="<?php print base_path() . path_to_theme() ?>/includes/StrongPasswordGenerator.js" ></script>

<?php print $styles; ?>

</head>

<body class="<?php print $body_classes; ?>">

  <div id="page"><div id="page-inner">
  
<?php if ($headerstripe): ?>        
<?php print $headerstripe; ?>
<?php endif; ?>

<?php if ($sitestripe): ?>        
<?php print $sitestripe; ?>
<?php endif; ?><!-- x site -->

<?php if ($imagestripe): ?>        
<?php print $imagestripe; ?>
<?php endif; ?><!-- x image -->

<!-- o content --><div id="contentstripe"><div id="contentbox">
<!-- o nav -->
<div id="nav">

<?php #if ($left): ?>
<div id="content-left">        
<?php #print $left; ?>
</div> <!-- /#content-left -->
<?php #endif; ?>

          <?php if ($nav): ?>
            <?php print $nav; ?>
          <?php endif; ?>

          <?php #if ($primary_links): ?>
            <div id="primary" class="clear-block">
              <?php #print theme('links', $primary_links); ?>
            </div> <!-- /primary -->
          <?php #endif; ?>

<?php #if ($navbar): ?>
          <?php #print $navbar; ?>
<?php #endif; ?>

<?php #if ($navbar): ?>
<div id="content-navbar">        
<?php #print $navbar; ?>
</div> <!-- /#content-navbar -->
<?php #endif; ?>

<?php #if ($left): ?>
        <div id="sidebar-left"><div id="sidebar-left-inner" class="region region-left">
          <?php #print $left; ?>
        </div></div> <!-- /#sidebar-left-inner, /#sidebar-left -->
      <?php #endif; ?>

</div>
<!-- x nav -->

<!-- o sidebar -->
<div id="sidebar">

<?php if ($sidebar): ?>
<?php print $sidebar; ?>
<?php endif; ?>

<?php #if ($secondary_links): ?>
            <div id="secondary" class="clear-block">
              <?php #print theme('links', $secondary_links); ?>
            </div> <!-- /#secondary -->
          <?php #endif; ?>
          
          
            <?php #if ($right): ?>
        <div id="sidebar-right"><div id="sidebar-right-inner" class="region region-right">
          <?php #print $right; ?>
        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->
      <?php #endif; ?>
          
</div>
<!-- x sidebar -->

<!-- o main -->
<div id="main">

<?php if (/*$breadcrumb or */$title or $tabs or $help or $messages): ?>

<div id="content-header">
<?php #print $breadcrumb; ?>
<?php if ($title): ?>
  <h1 class="title"><?php print $title; ?></h1>
<?php endif; ?>
<?php if ($tabs): ?>
  <div class="tabs"><?php print $tabs; ?></div>
<?php endif; ?>
<?php print $help; ?>
<?php if ($messages): ?>
  <div class="messages"><?php print $messages; ?></div>
<?php endif; ?>

</div> <!-- /#content-header -->
<?php endif; ?>

<?php if ($content_top): ?>
<div id="content-top">        
<?php print $content_top; ?>
</div> <!-- /#content-top -->
<?php endif; ?>

<div id="content-area">
<?php print $content; ?>
</div> <!-- /#content-area -->

<?php if ($content_bottom): ?>
<div id="content-bottom">
<?php print $content_bottom; ?>
</div> <!-- /#content-bottom -->
<?php endif; ?>

<?php #if ($closure_region): ?>
    <div id="closure-blocks" class="region region-closure"><?php #print $closure_region; ?></div>
  <?php #endif; ?></div>

<!-- javascript -->
<script type="text/javascript" src="<?php print base_path() . path_to_theme() ?>/includes/global.js"></script>
<?php print $scripts; ?>

</div></div><!-- x main -->

<div class="clearfloat"></div>

<!-- x content -->

<!-- o footer -->
<?php if ($footerstripe): ?>        
<?php print $footerstripe; ?>
<?php endif; ?>

<div class="clearfloat"></div>

  <!--</div></div>-->
<div id="footer"><?php print $footer; ?>
        <?php if (!empty($footer)): print $footer; endif; ?></div>

<?php print $closure; ?></body>

</html>