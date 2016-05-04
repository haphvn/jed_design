<?php
/**
 * Created by haph on 1/15/16
 */

/**
 * @file
 * Template common.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>
<?php if ($content['banner']): ?>
    <div class="panel-panel panel-col-banner">
        <div class="inside"><?php print $content['banner']; ?></div>
    </div>
<?php endif ?>

<div id="main-content">
    <?php if ($content['content']): ?>
        <div class="panel-panel panel-col-middle">
            <div class="inside"><?php print $content['content']; ?></div>
        </div>
    <?php endif ?>
</div>

<?php if ($content['bottom']): ?>
    <div class="panel-panel panel-col-bottom">
        <div class="inside"><?php print $content['bottom']; ?></div>
    </div>
<?php endif ?>
