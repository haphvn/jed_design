<?php
/**
 * Created by haph on 2/4/16
 */

$field_image = $bean->field_image['und'][0];
$sub_title = $bean->field_sub_title['und'][0]['value'];
$title = $bean->title;
$field_desc = $bean->field_description['und'][0]['value'];
?>

<section class="kopa-area kopa-area-0">

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="widget jed_module_text_intro jed_style_01 clearfix">
                    <div class="row">
                        <div class="widget-content col-md-6 col-sm-6">
                            <div class="entry-thumb">
                                <?php
                                $image = array(
                                    'path' => $field_image['uri'],
                                    'alt' => $field_image['alt'],
                                    'title' => $field_image['title'],
                                    'style_name' => 'hello_world__555x293_'
                                );
                                print theme('image_style', $image);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <header class="widget-header">
                                <h4 class="widget-sub-title jed_style_01"><?php print $sub_title ?></h4>
                                <h3 class="widget-title jed_style_02"><?php print $title ?></h3>
                                <p class="jed_style_01"><?php print $field_desc ?></p>
                            </header>
                        </div>
                    </div>
                </div>

            </div>
            <!-- col-md-12 -->

        </div>
        <!-- row -->

    </div>
    <!-- container -->

</section>
<!-- kopa-area-0 -->
