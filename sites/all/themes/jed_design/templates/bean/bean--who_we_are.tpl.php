<?php
/**
 * Created by haph on 2/4/16
 */

$title = $bean->title;
$field_desc = $bean->field_description['und'][0]['value'];
$teams = $bean->field_our_team['und'];
?>

<section class="kopa-area kopa-area-10">

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="widget jed_module_staff_team_3_1 jed_style_03">
                    <header class="widget-header jed_style_03">

                        <div class="row">

                            <div class="col-md-5 col-sm-5 col-xs-12">

                                <h3 class="widget-title jed_style_07"><?php print $title ?></h3>

                            </div>
                            <!-- col-md-5 -->

                            <div class="widget-title-des col-md-7 col-sm-7 col-xs-12">

                                <p><?php print $field_desc ?></p>

                            </div>
                            <!-- col-md-7 -->

                        </div>
                        <!-- row -->

                    </header>
                    <div class="row jed_custom_row">
                        <ul class="clearfix">
                            <?php
                            foreach ($teams as $value) :
                            $item = field_collection_item_load($value['value']);
                            $field_image = $item->field_image['und'][0];
                            $field_title = $item->field_title['und'][0]['value'];
                            $field_position = $item->field_position['und'][0]['value'];
                            $field_description = $item->field_description['und'][0]['value'];
                            ?>
                            <li class="col-xs-12 col-sm-6 col-md-6">
                                <article class="entry-item">
                                    <div class="entry-thumb">
                                        <a href="#">
                                            <?php
                                            $image = array(
                                                'path' => $field_image['uri'],
                                                'alt' => $field_image['alt'],
                                                'title' => $field_image['title'],
                                                'style_name' => 'who_we_are__88x88_',
                                                'attributes' => array('class' => 'img-circle')
                                            );
                                            print theme('image_style', $image);
                                            ?>
                                        </a>
                                    </div>
                                    <div class="entry-content">
                                        <h6><a href="#"><?php print $field_title ?></a></h6>
                                        <span><?php print $field_position ?></span>
                                        <p>
                                            <?php print $field_description ?>
                                        </p>
                                    </div>
                                </article>
                            </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <!-- widget -->

            </div>
            <!-- col-md-12 -->

        </div>
        <!-- row -->

    </div>
    <!-- container -->

</section>
<!-- kopa-area-10 -->
