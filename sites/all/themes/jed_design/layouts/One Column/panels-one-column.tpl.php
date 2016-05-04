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

<section class="kopa-area kopa-area-0">

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <?php if ($content['top']): ?>
                    <div class="panel-panel panel-col-top">
                        <div class="inside"><?php print $content['top']; ?></div>
                    </div>
                <?php endif ?>

            </div>
            <!-- col-md-12 -->

        </div>
        <!-- row -->

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <?php if ($content['bottom']): ?>
                    <div class="panel-panel panel-col-bottom">
                        <div class="inside"><?php print $content['bottom']; ?></div>
                    </div>
                <?php endif ?>

            </div>
            <!-- col-md-12 -->

        </div>
        <!-- row -->

    </div>
    <!-- container -->

</section>
<!-- kopa-area-0 -->
