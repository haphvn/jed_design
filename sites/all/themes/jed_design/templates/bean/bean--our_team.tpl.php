<?php
/**
 * Created by haph on 2/4/16
 */

$title = $bean->title;
$field_title = $bean->field_title['und'][0]['value'];
$field_desc = $bean->field_description['und'][0]['value'];
$teams = $bean->field_our_team['und'];
?>

<section class="kopa-area kopa-area-10">

    <div class="kopa-area-heading-text">
        <div class="container">
            <p><?php print $title ?></p>
        </div>
    </div>
    <!-- kopa-area-heading-text -->

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="widget jed_module_staff_team_3 t_jed_style_02">

                    <header class="widget-header jed_style_03">

                        <div class="row">

                            <div class="col-md-5 col-sm-5 col-xs-12">

                                <h3 class="widget-title jed_style_07"><?php print $field_title ?></h3>

                            </div>
                            <!-- col-md-5 -->

                            <div class="widget-title-des col-md-7 col-sm-7 col-xs-12">

                                <p><?php print $field_desc ?></p>

                            </div>
                            <!-- col-md-7 -->

                        </div>
                        <!-- row -->

                    </header>

                    <div class="row">
                        <ul>
                            <?php
                            foreach ($teams as $value) :
                            $item = field_collection_item_load($value['value']);
                                $field_image = $item->field_image['und'][0];
                                $field_title = $item->field_title['und'][0]['value'];
                                $field_position = $item->field_position['und'][0]['value'];
                                $field_telephone = $item->field_telephone['und'][0]['value'];
                                $field_email = $item->field_email['und'][0]['value'];
                                $field_description = $item->field_description['und'][0]['value'];
                                $links = $item->field_link_unlimited_['und'];
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
                                                'style_name' => 'our_team__555x459_'
                                            );
                                            print theme('image_style', $image);
                                            ?>
                                        </a>
                                    </div>
                                    <div class="entry-content">
                                        <h5 class="entry-title"><a href="#"><?php print $field_title ?></a></h5>
                                        <a href="#" class="jed_author"><?php print $field_position ?></a>
                                        <div class="entry-meta">
                                            <div class="jed_content_top">
                                                <p><b>t: </b><?php print $field_telephone ?></p>
                                                <p><b>e: </b><?php print $field_email ?></p>
                                            </div>
                                            <div class="jed_content_bottom">
                                                <p>
                                                    <?php print $field_description ?>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="jed_hover_item">
                                            <?php
                                                foreach ($links as $link) :
                                            ?>
                                                <a href="<?php print $link['url'] ?>"><i class="fa <?php print $link['title'] ?>"></i></a>
                                            <?php endforeach ?>
                                        </div>
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
