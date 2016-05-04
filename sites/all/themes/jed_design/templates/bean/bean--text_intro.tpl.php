<?php
/**
 * Created by haph on 2/4/16
 */
$title = $bean->title;
$field_title = $bean->field_title['und'][0]['value'];
$field_short_desc = $bean->field_short_description['und'][0]['value'];
$field_desc = $bean->field_description['und'][0]['value'];
$field_author = $bean->field_author['und'][0]['value'];
$sub_title = $bean->field_sub_title['und'][0]['value'];
$field_image = $bean->field_image['und'][0];
?>

<div class="widget jed_module_text_intro jed_style_02">

    <header class="widget-header jed_style_03">

        <div class="row">

            <div class="col-md-5 col-sm-5 col-xs-12">
                <h3 class="widget-title jed_style_01"><?php print $field_title ?></h3>
            </div>
            <!-- col-md-5 -->

            <div class="widget-title-des col-md-7 col-sm-7 col-xs-12">
                <p><?php print $field_short_desc ?></p>
            </div>
            <!-- col-md-7 -->

        </div>
        <!-- row -->

    </header>

    <div class="widget-content">

        <div class="row">

            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="jed_module_blockquote jed_style_07">
                    <span class="jed_tron"></span>
                    <p><?php print $sub_title ?></p>
                    <span class="jed_author_blockquote"><?php print $field_author ?></span>
                </div>
            </div>
            <!-- col-md-5 -->

            <div class="widget-title-des col-md-7 col-sm-7 col-xs-12">
                <?php
                $image = array(
                    'path' => $field_image['uri'],
                    'alt' => $field_image['alt'],
                    'title' => $field_image['title'],
                    'style_name' => 'text_intro__635x400_'
                );
                print theme('image_style', $image);
                ?>
                <p>
                    <?php print $field_desc ?>
                </p>
            </div>
            <!-- col-md-7 -->

        </div>
        <!-- row -->

    </div>
</div>
