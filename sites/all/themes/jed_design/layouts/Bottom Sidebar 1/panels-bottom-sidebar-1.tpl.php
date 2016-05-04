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

<div id="bottom-sidebar">

    <div class="container">

        <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-6">
                <?php if ($content['bottom_left']): ?>
                    <div class="panel-panel panel-col-bottom-left">
                        <div class="inside"><?php print $content['bottom_left']; ?></div>
                    </div>
                <?php endif ?>

            </div>
            <!-- col-md-6 -->

            <div class="col-md-6 col-sm-6 col-xs-6">

                <div class="row">

                    <?php if ($content['bottom_right']): ?>
                        <div class="panel-panel panel-col-bottom-right">
                            <div class="inside"><?php print $content['bottom_right']; ?></div>
                        </div>
                    <?php endif ?>

                </div>
                <!-- row -->

            </div>
            <!-- col-md-6 -->

        </div>
        <!-- row -->

    </div>
    <!-- container -->

</div>
<!-- bottom-sidebar -->
