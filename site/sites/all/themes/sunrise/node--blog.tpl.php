<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print render($content['field_image']); ?>
    
    <div class="header2">
        <h2 property="dc:title" datatype="">
            <a href="?q=node/<?php print render($node->nid) ?>"><?php print render($node->title); ?></a>
        </h2>
    </div>

  <!-- TODO: decide if we need this change 
  Custom node for blog to print image above title 
  Home » Administration » Structure » Content types » Blog entry is not working now! -->
  <?php if ($title_prefix || $title_suffix || $display_submitted || !$page): ?>
  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>
      <div class="submitted">
        <?php print $user_picture; ?>
        <?php print $submitted; ?> 
      </div>
    <?php endif; ?>
  </header>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      print render($content);
    ?>
  </div>
    
    <?php if (($tags = render($content['field_tags'])) || ($links = render($content['links']))): ?>
    <footer>
    <?php print render($content['links']); ?>
    </footer>
    <?php endif; ?> 

  <?php print render($content['comments']); ?>

</article>