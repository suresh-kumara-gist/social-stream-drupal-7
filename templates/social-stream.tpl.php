<?php

/**
 * @file
 * Generates div selector for rendering social stream.
 */
if ($no_library):
  echo t('JQuery Social Stream plugin not found.');
  else: ?>
  <div id="wrapper">
    <div id="container"> 
      <?php if ($type === 'wall'): ?>
        <div id="wall" class="full-wall">
          <div id="social-stream"></div>
        </div>
      <?php else: ?>
        <div id="social-stream"></div>
      <?php endif; ?>
    </div>
  </div>
  <?php endif; ?>
<div id="social-stream-test"></div>
