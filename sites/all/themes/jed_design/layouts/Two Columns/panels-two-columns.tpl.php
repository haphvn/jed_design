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

<section class="kopa-area kopa-area-6">

    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-6">
                <?php if ($content['left']): ?>
                    <div class="panel-panel panel-col-left">
                        <div class="inside"><?php print $content['left']; ?></div>
                    </div>
                <?php endif ?>
            </div>

            <div class="col-xs-12 col-sm-6">
                <?php if ($content['right']): ?>
                    <div class="panel-panel panel-col-right">
                        <div class="inside"><?php print $content['right']; ?></div>
                    </div>
                <?php endif ?>
            </div>

        </div>
        <!-- row -->

    </div>
    <!-- container -->

</section>
<!-- kopa-area-6 -->
