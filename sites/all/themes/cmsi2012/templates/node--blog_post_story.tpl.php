<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "877f4031-157b-4bf0-a685-b126256f651b"});</script>

<article id="article-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="article-inner cmsi-blog-post">

    <?php print $unpublished; ?>

    <?php print render($title_prefix); ?>
    <?php if ($title || $display_submitted): ?>
      <header>
        <?php if ($title): ?>
          <h1<?php print $title_attributes; ?>>
            <a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a>
          </h1>
        <?php endif; ?>
        <?php if ($display_submitted): ?>
          <p class="submitted"><?php 
          $dateStart = strpos($submitted,"on ");
          $submitted = "Posted " . substr($submitted,$dateStart,strlen($submitted)-7);
          print $submitted;
          ?></p>
        <?php endif; ?>
      </header>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <div<?php print $content_attributes; ?>>

    <?php print render($content['body']);?>

    <?php print render($content['field_tags']); ?>

    </div><!--/.article-content-->


    <?php if (!empty($content['links'])): ?>
      <nav class="clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>

<div class="shareThisIconBar">
  <span class='st_sharethis_large' displayText='ShareThis'></span>
  <span class='st_facebook_large' displayText='Facebook'></span>
  <span class='st_twitter_large' displayText='Tweet'></span>
  <span class='st_linkedin_large' displayText='LinkedIn'></span>
  <span class='st_googleplus_large' displayText='Google +'></span>
  <span class='st_email_large' displayText='Email'></span>
</div><!--/#shareThisIconBar-->
  </div><!--/.cmsi-blog-post-->
</article>
