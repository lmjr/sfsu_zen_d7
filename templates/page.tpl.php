<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

  <div id="page"><div id="page-inner">
  
<?php if ($page['headerstripe']): ?>        
<?php print render($page['headerstripe']); ?>
<?php endif; ?>

<?php if ($page['sitestripe']): ?>        
<?php print render($page['sitestripe']); ?>
<?php endif; ?><!-- x site -->

<?php if ($page['imagestripe']): ?>        
<?php print render($page['imagestripe']); ?>
<?php endif; ?><!-- x image -->

<!-- o content --><div id="contentstripe"><div id="contentbox">
<!-- o nav -->
<div id="nav">

<?php #if ($left): ?>
<div id="content-left">        
<?php #print $left; ?>
</div> <!-- /#content-left -->
<?php #endif; ?>

          <?php if ($page['nav']): ?>
            <?php print render($page['nav']); ?>
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

<?php if ($page['sidebar']): ?>
<?php print render($page['sidebar']); ?>
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
<?php if ($tabs = render($tabs)): ?>
        <div class="tabs"><?php print $tabs; ?></div>
<?php endif; ?>
<?php print render($page['help']); ?>
<?php if ($messages): ?>
  <div class="messages"><?php print $messages; ?></div>
<?php endif; ?>

</div> <!-- /#content-header -->
<?php endif; ?>

<?php if ($page['page_top']): ?>
<div id="page-top">        
<?php print render($page['page_top']); ?>
</div> <!-- /#content-top -->
<?php endif; ?>

<div id="content-area">
<?php print render($page['content']); ?>
</div> <!-- /#content-area -->

<?php if ($page['page_bottom']): ?>
<div id="content-bottom">
<?php print render($page['page_bottom']); ?>
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
<?php if ($page['footerstripe']): ?>        
<?php print render($page['footerstripe']); ?>
<?php endif; ?>

<div class="clearfloat"></div>

  <!--</div></div>-->
<div id="footer"><?php print render($page['footer']); ?>
        <?php if (!empty($page['footer'])): print render($page['footer']); endif; ?></div>