<?php
/**
 * Created by haph on 2/4/16
 */

$title = $bean->title;
$skills = $bean->field_skills['und'];
?>

<div class="widget jed_skill jed_style_04 widget-space-left">
    <h3 class="widget-title jed_style_01"><?php print $title ?></h3>
    <div class="widget-content">
        <?php
        foreach ($skills as $value) :
            $item = field_collection_item_load($value['value']);
            $field_title = $item->field_title['und'][0]['value'];
            $field_percent = $item->field_percent['und'][0]['value'];
        ?>
        <div class="jed_progress_bar">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <p class="title-probar"><?php print $field_title ?></p>
                </div>

                <div class="col-xs-12 col-md-8">
                    <div class="pro-bar-container">
                        <div class="pro-bar bar-<?php print $field_percent ?>" data-pro-bar-percent="<?php print $field_percent ?>">
                            <span><?php print $field_percent ?>%</span>
                        </div>
                    </div>
                    <!-- /.pro-bar-container -->
                </div>

            </div>
        </div>
        <!-- /.jed_progress_bar -->
        <?php endforeach ?>
    </div>
    <!-- /.widget-content -->
</div>