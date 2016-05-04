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

$theme_path = base_path() . path_to_theme();
?>

<div class="jed_side_menu">
    <a href="#" class="jed_side_logo"><img src="<?php print $theme_path; ?>/images/header-2/logo-3.png" alt=""></a>

    <div class="jed_close">
        <a href="#" class="ti-close"></a>
    </div>

    <div class="jed_menu_content">
        <div class="jed_menu_02 hidden-xs hidden-sm">
            <?php if ($content['side_menu']): ?>
                <div class="panel-panel panel-col-side-menu">
                    <div class="inside"><?php print $content['side_menu']; ?></div>
                </div>
            <?php endif ?>
        </div>
        <div class="jed_menu_mobile visible-xs visible-sm">
            <?php if ($content['mobile_menu']): ?>
                <div class="panel-panel panel-col-mobile-menu">
                    <div class="inside"><?php print $content['mobile_menu']; ?></div>
                </div>
            <?php endif ?>
        </div>
    </div>

    <div class="jed_text_content">
        <p>Welcome to Jed theme! Enter any text or widget here.</p>
    </div>

    <div class="jed_social_content">
        <?php if ($content['social_links']): ?>
            <div class="panel-panel panel-col-social-links">
                <div class="inside"><?php print $content['social_links']; ?></div>
            </div>
        <?php endif ?>
    </div>
</div>
<!-- jed_side_menu -->
