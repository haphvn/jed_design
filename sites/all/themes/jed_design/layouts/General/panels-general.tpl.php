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
<?php if ($content['header']): ?>
    <div class="panel-panel panel-col-header">
        <div class="inside"><?php print $content['header']; ?></div>
    </div>
<?php endif ?>

<?php if ($content['middle']): ?>
    <div class="panel-panel panel-col-middle">
        <div class="inside"><?php print $content['middle']; ?></div>
    </div>
<?php endif ?>

<a href="#" class="scrollup"><span class="ti-arrow-up"></span></a>
