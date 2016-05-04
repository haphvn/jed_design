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

<section class="kopa-area-1 white-text-style area_bg_01">

    <div class="kopa-area-mask"></div>

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="jed_breadcrumb jed_style_01">

                    <div class="row">

                        <div class="col-md-5 col-sm-5 col-xs-5">

                            <?php if ($content['left']): ?>
                                <div class="panel-panel panel-col-left">
                                    <div class="inside"><?php print $content['left']; ?></div>
                                </div>
                            <?php endif ?>

                        </div>
                        <!-- col-md-5 -->

                        <div class="col-md-7 col-sm-7 col-xs-7">

                            <?php if ($content['right']): ?>
                                <div class="panel-panel panel-col-right">
                                    <div class="inside"><?php print $content['right']; ?></div>
                                </div>
                            <?php endif ?>

                        </div>
                        <!-- col-md-7 -->

                    </div>
                    <!-- row -->

                </div>
                <!-- widget -->

            </div>
            <!-- col-md-12 -->

        </div>
        <!-- row -->

    </div>

</section>
<!-- kopa-area-1 -->
