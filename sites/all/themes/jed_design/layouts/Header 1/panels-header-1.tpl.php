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

<header class="jed_pages_header jed_style_02">
    <div class="container">
        <div class="row">
            <div class="jed_header_main">
                <div class="col-xs-3 col-sm-3 col-md-3 jed_custom_left">
                    <a href="#" class="jed_logo"><img src="<?php print $theme_path; ?>/images/header-2/logo-4.png"
                                                      alt=""></a>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 jed_custom_right">
                    <div class="jed_header_top hidden-xs clearfix">
                        <div class="jed_header_left">
                            <div class="jed_header_language">
                                <ul>
                                    <li><a href="#">nl</a></li>
                                    <li><a href="#">en</a></li>
                                </ul>
                            </div>
                            <div class="jed_header_contact">
                                <a href="#">support@kopasoft.com</a>
                            </div>
                        </div>
                        <div class="jed_header_right hidden-xs hidden-sm">
                            <div class="jed_header_search">
                                <span class="jed_icon_search ti-search"></span>
                            </div>
                        </div>
                    </div>
                    <div class="jed_header_bottom clearfix">
                        <div class="jed_header_left hidden-xs hidden-sm">
                            <div class="jed_nav">
                                <?php if ($content['main_menu']): ?>
                                    <div class="panel-panel panel-col-main-menu">
                                        <div class="inside"><?php print $content['main_menu']; ?></div>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="jed_right">
                            <!-- removed Cart from HTML exists -->
                            <div class="jed_header_right">
                                <a href="#" class="jed_menu_icon"><i class="fa fa-bars"></i></a>
                            </div>
                        </div>
                        <div class="jed_header_search visible-xs visible-sm">
                            <span class="jed_icon_search ti-search"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jed_search_full">
            <form class="jed_search_form" action="#">
                <input class="jed_search_input" placeholder="Type & Hit Enter..." type="text" name="search">
                <span class="jed_custom_icon ti-close"></span>
            </form>
        </div>
    </div>

</header>
<!-- jed_pages_header -->
