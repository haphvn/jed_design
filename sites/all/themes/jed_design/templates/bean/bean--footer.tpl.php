<?php
/**
 * Created by haph on 2/4/16
 */
$title = $bean->title;
$link = $bean->field_link_limited_['und'][0];
$field_image = $bean->field_image['und'][0];
?>

<div class="jed_pages_footer_2 jed_style_01">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <a href="#">
                    <?php
                    $image = array(
                        'path' => $field_image['uri'],
                        'alt' => $field_image['alt'],
                        'title' => $field_image['title'],
                        'style_name' => 'logo_footer__248x75_'
                    );
                    print theme('image_style', $image);
                    ?>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="jed_footer_contact">
                    <p><?php print $title ?></p>
                    <p><a href="<?php print $link['url'] ?>"><?php print $link['title'] ?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
