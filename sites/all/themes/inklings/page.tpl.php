<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
<title><?php print $head_title ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<?php print $head ?>
<!--[if lte IE 6]>
<?php print $ie6_style; ?>
<![endif]-->
<!--[if IE 7]>
<?php print $ie7_style; ?>
<![endif]-->
<?php print $styles ?>
<?php print $scripts ?>
<script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
<!--site verifications & analytics tags!-->
<meta name="google-site-verification" content="cZzcWn6cb9Tv0iuvbLyijs4cvSq2eOShESIZH6QXMI0" />
<meta name="msvalidate.01" content="8594F474CD9CD6102FC8356B3057ADA7" />
<META name="y_key" content="366e58d47a24f9c3" />

</head>

<body class="<?php print $body_classes; ?>">
<div id="body-wrapper">
<div id="skip-nav"><a href="#main">Skip to Content</a></div>

<div id="bg1"><div id="bg2">

<div id="top_bg" class="page0">
<div class="sizer0">
<div id="topex" class="expander0">
<div id="top_left">
<div id="top_right">
<div id="headimg">


<div id="header" class="clearfix">
  <div id="top-elements">
    <?php if ($search_box): ?>
      <div id="search-box" style="padding-top:7px;"><?php print $search_box; ?></div>
    <?php endif; ?>
    <?php if (function_exists('toplinks')): ?>
      <div id="toplinks"><?php print toplinks() ?></div>
    <?php endif; ?>
  </div><!-- /top-elements -->

<div class="brclear"></div>

<?php if ($header): ?>
  <?php print $header; ?>
<?php endif; ?>

<?php if (isset($primary_links)) { ?>
<?php if (theme_get_setting('menutype')== '0'): ?><div class="<?php print menupos() ?>"><?php print theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist')); ?></div><?php endif; ?>
<?php if (theme_get_setting('menutype')== '1'): ?><div id="navlinks" class="<?php print menupos() ?>"><?php print $primary_links_tree; ?></div><?php endif; ?>
<?php } ?>

</div> <!-- /header -->

</div>
</div><!-- /top_right -->
</div><!-- /top_left -->
</div><!-- /expander0 -->
</div><!-- /sizer0 -->
</div><!-- /page0 -->

<div id="body_bg" class="page0">
<div class="sizer0">
<div class="expander0">
<div id="body_left">
<div id="body_right">

<?php if ($breadcrumb): ?>
  <div id="breadcrumb">
    <?php print $breadcrumb; ?>
  </div>
<?php endif; ?>

<div id="middlecontainer">
  <div id="wrapper">
    <div class="outer">
      <div class="float-wrap">
        <div class="colmain">
          <div id="main">
            <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
            <?php if ($content_top):?><div id="content-top"><?php print $content_top; ?></div><?php endif; ?>
            <?php if ($title): if ($is_front){ /*print '<h2 class="title">'. $title .'</h2>';*/ } else { /*print '<h1 class="title">'. $title .'</h1>'; */} endif; ?>
			<?php if ( $user->uid ):?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
            <?php print $help ?>
            <?php print $messages ?>
            <?php print $content; ?>
            <?php print $feed_icons; ?>
            <?php if ($content_bottom): ?><div id="content-bottom"><?php print $content_bottom; ?></div><?php endif; ?>
          </div>
        </div> <!-- /colmain -->
        <?php if ($left) { ?>
          <div class="colleft">
            <div id="sidebar-left"><?php print $left ?></div>
          </div>
        <?php } ?>
        <br class="brclear" />
      </div> <!-- /float-wrap -->
      <?php if ($right) { ?>
        <div class="colright">
          <div id="sidebar-right"><?php print $right ?></div>
        </div>
      <?php } ?>
      <br class="brclear" />
    </div><!-- /outer -->
  </div><!-- /wrapper -->
</div>

<div id="bar"></div>

<?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist2')) ?><?php } ?>

</div><!-- /body_right -->
</div><!-- /body_left -->
</div><!-- /expander0 -->
</div><!-- /sizer0 -->
</div><!-- /page0 -->

<div class="eopage">
<div id="bottom_bg" class="page0">
<div class="sizer0">
<div class="expander0">
<div id="bottom_left">
<div id="bottom_right">

<div id="footer-wrapper" class="clearfix">
  <div id="footer">
    <div id="user_links"><?php print inklings_login() ?></div>
    <?php if ($below) { ?><div id="below"><?php print $below; ?></div><?php } ?>
    <div class="legal">
      Copyright &copy; <?php print date('Y') ?> <a href="/">Inklings Books (www.booksbyinklings.com)</a> &middot; <i><?php print $footer_message ?></i>
    </div>
  </div>
</div> <!-- /footer-wrapper -->


</div><!-- /bottom_right -->
</div><!-- /bottom_left -->
</div><!-- /expander0 -->
</div><!-- /sizer0 -->
</div><!-- /page0 -->
</div>
</div></div><!-- /bg# -->
</div><!--body-wrapper -->
<?php print $closure ?>
<div class="brclear"></div>
</body>

<!--share this embed code-->
<script type="text/javascript">var switchTo5x=true;</script><script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'877f4031-157b-4bf0-a685-b126256f651b'});</script>

</html>
