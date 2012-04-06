<?php
// $Id: page.tpl.php,v 1.1.2.16 2010/11/16 14:39:39 himerus Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>

<!-- Drupal 6 theme header content -->   
  <?php print $head; ?>
  <?php print $styles; ?>

<!-- University of Melbourne Header -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- SEO relevant meta data to describe content of page -->
  <meta name="DC.Title" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="DC.Description" content="">
<!-- End SEO relevant meta data -->
<!-- Authoriser and maintainer related meta data - developers, don't forget humans.txt   -->
  <meta name="DC.Creator" content="The University of Melbourne">
  <meta name="DC.Contributor" content="">
  <meta name="author" content="">
  <meta name="UM.Authoriser.Name" content="">
  <meta name="UM.Authoriser.Title" content="">
  <meta name="UM.Maintainer.Name" content="">
  <meta name="UM.Maintainer.Department" content="">
  <meta name="UM.Maintainer.Email" content="">
<!-- End authoriser and maintainer meta data -->
<!-- Static meta data   -->
  <meta name="DC.Rights" content="http://www.unimelb.edu.au/disclaimer">
  <meta name="DC.Publisher" content="The University of Melbourne">
  <meta name="DC.Format" content="text/html">
  <meta name="DC.Language" content="en">
  <meta name="DC.Identifier" content="http://www.unimelb.edu.au/">
<!-- End static meta data -->
<!-- Meta data to be autofilled -->
  <meta name="DC.Date" content="">
  <!--#config timefmt="%Y-%m-%d" --><meta name="DC.Date.Modified" content="<!--#echo var='LAST_MODIFIED' -->">
<!-- End meta data to be autofilled -->
  <meta content="width=device-width; initial-scale=0.9;" name="viewport">

  <!-- GLOBAL RESOURCES -->
  <!-- DO NOT CHANGE -->
    <link rel="stylesheet" href="http://brand.unimelb.edu.au/web-templates/1-1-0/css/complete.css">
    <script src="http://brand.unimelb.edu.au/web-templates/1-1-0/js/complete.js"></script>

    <link rel="stylesheet" href="http://brand.unimelb.edu.au/global-header/css/style.css">
    <script src="http://brand.unimelb.edu.au/global-header/js/injection.js"></script>
    
  <?php print $scripts; ?>
  
</head>

<body class="<?php print $body_classes; ?>" <?php if(!empty($header_img)) print $header_img; ?>>
  <?php if (!empty($admin)) print $admin; ?>
  <div id="page" class="clearfix wrapper">
    <div id="site-header" class="header container-<?php print $branding_wrapper_width; ?> clearfix">
      <div id="branding" class="hgroup grid-<?php print $header_logo_width; ?>">
        <?php if ($linked_site_name): ?>
          <h1 id="site-name" class=""><?php print $linked_site_name; ?></h1>
        <?php endif; ?>
      </div><!-- /#branding -->
      <?php if ($heading_text): ?>
        <?php print $heading_text; ?>
      <?php endif; ?>
      
      <?php if ($main_menu_links || $secondary_menu_links): ?>
        <div id="site-menu" class="grid-<?php print $header_menu_width; ?>">
        <?php if($main_menu_links): ?>
          <div><?php print $main_menu_links; ?></div>
        <?php endif; ?>
        <?php if($secondary_menu_links): ?>
          <div><?php print $secondary_menu_links; ?></div>
        <?php endif; ?>
        </div><!-- /#site-menu -->
      <?php endif; ?>
    </div><!-- /#site-header -->

    <?php if($header_first || $header_last): ?>
    <div id="header-regions" class="container-<?php print $header_wrapper_width; ?> clearfix">
      <?php if($header_first): ?>
        <div id="header-first" class="<?php print $header_first_classes; ?>">
          <?php print $header_first; ?>
        </div><!-- /#header-first -->
      <?php endif; ?>
      <?php if($header_last): ?>
        <div id="header-last" class="<?php print $header_last_classes; ?>">
          <?php print $header_last; ?>
        </div><!-- /#header-last -->
      <?php endif; ?>
    </div><!-- /#header-regions -->
    <?php endif; ?>
    
    <?php if($site_slogan && $is_front || $search_box || $breadcrumb): ?>
    <div id="internal-nav" class="container-<?php print $internal_nav_wrapper_width; ?> clearfix">
      <div id="slogan-bcrumb" class="grid-<?php print $breadcrumb_slogan_width; ?>">
        <?php if ($site_slogan && $is_front): ?>
          <div id="slogan"><?php print $site_slogan; ?></div><!-- /#slogan -->
        <?php endif; ?>
        <?php if($breadcrumb): ?>
          <div id="bcrumb"><?php print $breadcrumb; ?></div><!-- /#bcrumb -->
        <?php endif; ?>
      </div>
      <?php if ($search_box): ?>
        <div id="search-box" class="grid-<?php print $search_width; ?>"><?php print $search_box; ?></div><!-- /#search-box -->
      <?php endif; ?>
    </div><!-- /#internal-nav -->
    <?php endif; ?>
    
    <?php if($preface_first || $preface_middle || $preface_last): ?>
    <div id="preface-wrapper" class="container-<?php print $preface_wrapper_grids; ?> clearfix">
      <?php if($preface_first): ?>
        <div id="preface-first" class="preface <?php print $preface_first_classes; ?>">
          <?php print $preface_first; ?>
        </div><!-- /#preface-first -->
      <?php endif; ?>
      <?php if($preface_middle): ?>
        <div id="preface-middle" class="preface <?php print $preface_middle_classes; ?>">
          <?php print $preface_middle; ?>
        </div><!-- /#preface-middle -->
      <?php endif; ?>
      <?php if($preface_last): ?>
        <div id="preface-last" class="preface <?php print $preface_last_classes; ?>">
          <?php print $preface_last; ?>
        </div><!-- /#preface-last -->
      <?php endif; ?>
    </div><!-- /#preface-wrapper -->
    <?php endif; ?>
    
    <?php if($help || $messages): ?>
    <div class="container-<?php print $default_container_width; ?> clearfix">
      <div class="grid-<?php print $default_container_width; ?>">
        <?php print $help; ?><?php print $messages; ?>
      </div>
    </div><!-- /.container-xx -->
    <?php endif; ?>
    
    <div id="main-content-container" class="container-<?php print $content_container_width; ?> clearfix">
      <div id="main-wrapper" class="column <?php print $main_content_classes; ?>">
        <?php if (!empty($mission)) {
          print $mission;
        }?>
        <?php if($content_top): ?>
        <div id="content-top">
          <?php print $content_top; ?>
        </div><!-- /#content-top -->
        <?php endif; ?>
        <?php if ($tabs): ?>
          <div id="content-tabs" class=""><?php print $tabs; ?></div><!-- /#content-tabs -->
        <?php endif; ?>
    
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
    
        <div id="main-content" class="region clearfix">
          <?php print $content; ?>
        </div><!-- /#main-content -->
        
        <?php if($content_bottom): ?>
        <div id="content-bottom">
          <?php print $content_bottom; ?>
        </div><!-- /#content-bottom -->
        <?php endif; ?>
      </div><!-- /#main-wrapper -->
    
      <?php if ($sidebar_first): ?>
        <div id="sidebar-first" class="column sidebar region <?php print $sidebar_first_classes; ?>">
          <?php print $sidebar_first; ?>
        </div><!-- /#sidebar-first -->
      <?php endif; ?>
    
      <?php if ($sidebar_last): ?>
        <div id="sidebar-last" class="column sidebar region <?php print $sidebar_last_classes; ?>">
          <?php print $sidebar_last; ?>
        </div><!-- /#sidebar-last -->
      <?php endif; ?>
    </div><!-- /#main-content-container -->
    
    <?php if($postscript_one || $postscript_two || $postscript_three || $postscript_four): ?>
    <div id="postscript-wrapper" class="container-<?php print $postscript_container_width; ?> clearfix">
      <?php if($postscript_one): ?>
        <div id="postscript-one" class="postscript <?php print $postscript_one_classes; ?>">
          <?php print $postscript_one; ?>
        </div><!-- /#postscript-one -->
      <?php endif; ?>
      <?php if($postscript_two): ?>
        <div id="postscript-two" class="postscript <?php print $postscript_two_classes; ?>">
          <?php print $postscript_two; ?>
        </div><!-- /#postscript-two -->
      <?php endif; ?>
      <?php if($postscript_three): ?>
        <div id="postscript-three" class="postscript <?php print $postscript_three_classes; ?>">
          <?php print $postscript_three; ?>
        </div><!-- /#postscript-three -->
      <?php endif; ?>
      <?php if($postscript_four): ?>
        <div id="postscript-four" class="postscript <?php print $postscript_four_classes; ?>">
          <?php print $postscript_four; ?>
        </div><!-- /#postscript-four -->
      <?php endif; ?>
    </div><!-- /#postscript-wrapper -->
    <?php endif; ?>
    
  </div><!-- /#page -->
  
  <?php if ($local_footer): ?>
  <div class="footer">
    <div id="local" class="wrapper">
      <?php print $local_footer; ?>
    </div>
    <hr>
  </div>
  <?php endif; ?>
  
  <?php print $closure; ?>
</body>
</html>