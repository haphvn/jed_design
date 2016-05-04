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

<footer class="jed_pages_footer jed_style_03">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <?php if ($content['left']): ?>
                    <div class="panel-panel panel-col-left">
                        <div class="inside"><?php print $content['left']; ?></div>
                    </div>
                <?php endif ?>
                <div class="jed_footer_copyright">
                    <p>&copy; Copyright 2015 <a href="#">KopaTheme</a> | All Rights Reserved</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <?php if ($content['right']): ?>
                    <div class="panel-panel panel-col-right">
                        <div class="jed_social_links jed_style_04">
                            <div class="inside"><?php print $content['right']; ?></div>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</footer>
