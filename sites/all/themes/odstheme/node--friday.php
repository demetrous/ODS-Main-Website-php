<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?> class="ods-node-title">
     <?php print $title; ?>
    </h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <div>T.G.!.F.</div>
</div>