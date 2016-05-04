<?php
/**
 * @file
 *
 * Theme implementation to display the header block on a Drupal page.
 *
 * This utilizes the following variables thata re normally found in
 * page.tpl.php:
 * - $front_page
 * - $logo
 * - $site_name
 * - $site_slogan
 *
 * Additional items can be added via theme_preprocess_pane_header(). See
 * template_preprocess_pane_header() for examples.
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
                                <ul class="sf-menu">
                                    <li class="current-menu-item">
                                        <a href="index-1.html">Home</a>
                                        <ul>
                                            <li><a href="index-1.html">Home Style 1</a></li>
                                            <li><a href="index-2.html">Home Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about-1.html">Pages</a>
                                        <ul>
                                            <li>
                                                <a href="about-1.html">about us</a>
                                                <ul>
                                                    <li><a href="about-1.html">About Style 1</a></li>
                                                    <li><a href="about-2.html">About Style 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="event-list.html">Event Page</a></li>
                                            <li>
                                                <a href="service-1.html">services</a>
                                                <ul>
                                                    <li><a href="service-1.html">services Style 1</a></li>
                                                    <li><a href="service-2.html">services Style 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="team.html">team</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog-center.html">blog</a>
                                        <ul>
                                            <li><a href="blog-center.html">blog center</a></li>
                                            <li><a href="blog-masonry.html">blog masonry</a></li>
                                            <li>
                                                <a href="#">blog grid</a>
                                                <ul>
                                                    <li><a href="blog-grid-1.html">blog grid 1</a></li>
                                                    <li><a href="blog-grid-2.html">blog grid 2</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog-right-sidebar-1.html">blog with sidebar</a>
                                                <ul>
                                                    <li><a href="blog-right-sidebar-1.html">blog right sidebar 1</a>
                                                    </li>
                                                    <li><a href="blog-right-sidebar-2.html">blog right sidebar 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog-single-right-sidebar.html">single blog</a>
                                                <ul>
                                                    <li><a href="blog-single-full-width-1.html">blog single full width
                                                            1</a></li>
                                                    <li><a href="blog-single-full-width-2.html">blog single full width
                                                            2</a></li>
                                                    <li><a href="blog-single-right-sidebar.html">blog single right
                                                            sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="jed_megamenu">
                                        <a href="#">shortcodes</a>

                                        <div class="sf-mega">
                                            <div class="jed_megamenu_item">
                                                <h3><a href="#">shortcodes list 1</a></h3>
                                                <ul>
                                                    <li><a href="sc-accordion.html">accordion</a></li>
                                                    <li><a href="sc-alert.html">alerts</a></li>
                                                    <li><a href="sc-blockquote.html">blockquotes</a></li>
                                                    <li><a href="sc-button.html">buttons</a></li>
                                                </ul>
                                            </div>
                                            <div class="jed_megamenu_item">
                                                <h3><a href="#">shortcodes list 2</a></h3>
                                                <ul>
                                                    <li><a href="sc-client.html">clients</a></li>
                                                    <li><a href="sc-count-down.html">count down</a></li>
                                                    <li><a href="sc-dropcap.html">dropcaps</a></li>
                                                    <li><a href="sc-heading.html">headings</a></li>
                                                </ul>
                                            </div>
                                            <div class="jed_megamenu_item">
                                                <h3><a href="#">shortcodes list 3</a></h3>
                                                <ul>
                                                    <li><a href="sc-highlight-text.html">highlight texts</a></li>
                                                    <li><a href="sc-icon.html">icons</a></li>
                                                    <li><a href="sc-list.html">lists</a></li>
                                                    <li><a href="sc-pricing-table.html">pricing tables</a></li>
                                                </ul>
                                            </div>
                                            <div class="jed_megamenu_item">
                                                <h3><a href="#">shortcodes list 4</a></h3>
                                                <ul>
                                                    <li><a href="sc-skill.html">skills</a></li>
                                                    <li><a href="sc-tab.html">tabs</a></li>
                                                    <li><a href="sc-table.html">tables</a></li>
                                                    <li><a href="sc-button.html">buttons</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="portfolio-1.html">portfolios</a>
                                        <ul>
                                            <li><a href="portfolio-1.html">portfolios list 1</a></li>
                                            <li><a href="portfolio-2.html">portfolios list 2</a></li>
                                            <li><a href="portfolio-3.html">portfolios list 3</a></li>
                                            <li><a href="portfolio-4.html">portfolios list 4</a></li>
                                            <li><a href="portfolio-5.html">portfolios list 5</a></li>
                                            <li><a href="portfolio-single.html">single portfolios</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop.html">shop</a>
                                        <ul>
                                            <li><a href="shop.html">shop list</a></li>
                                            <li><a href="shop-single.html">single shop</a></li>
                                        </ul>
                                    </li>
                                    <li class="jed_megamenu jed_custom_hide">
                                        <a href="#">Mega menu</a>

                                        <div class="sf-mega">
                                            <div class="jed_megamenu_item jed_megamenu_custom_item">
                                                <h3><a href="#">Pages</a></h3>
                                                <ul>
                                                    <li><a href="about-1.html">about 1</a></li>
                                                    <li><a href="about-2.html">about 2</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="event-list.html">Events</a></li>
                                                    <li><a href="#">Single Product</a></li>
                                                </ul>
                                            </div>

                                            <div class="jed_megamenu_item jed_megamenu_custom_item">
                                                <h3><a href="#">Element</a></h3>
                                                <ul>
                                                    <li><a href="sc-accordion.html">accordions</a></li>
                                                    <li><a href="sc-alert.html">alerts</a></li>
                                                    <li><a href="sc-blockquote.html">blockquotes</a></li>
                                                    <li><a href="sc-button.html">buttons</a></li>
                                                    <li><a href="sc-client.html">clients</a></li>
                                                    <li><a href="sc-tab.html">tabs</a></li>
                                                </ul>
                                            </div>

                                            <div class="jed_megamenu_item jed_megamenu_custom_item">
                                                <h3><a href="#">Top Products</a></h3>

                                                <div class="entry-item entry-item-first">
                                                    <div class="entry-thumb">
                                                        <a href="#"><img
                                                                src="<?php print $theme_path; ?>/images/header-2/product-1.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="entry-content">
                                                        <h6 class="entry-title"><a href="#">IWool Cardigan</a></h6>

                                                        <p>$ 150 x 1</p>
                                                    </div>
                                                </div>

                                                <div class="entry-item">
                                                    <div class="entry-thumb">
                                                        <a href="#"><img
                                                                src="<?php print $theme_path; ?>/images/header-2/product-2.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="entry-content">
                                                        <h6 class="entry-title"><a href="#">IWool Cardigan</a></h6>

                                                        <p>$ 80 x 1</p>
                                                    </div>
                                                </div>

                                                <div class="entry-item">
                                                    <div class="entry-thumb">
                                                        <a href="#"><img
                                                                src="<?php print $theme_path; ?>/images/header-2/product-1.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="entry-content">
                                                        <h6 class="entry-title"><a href="#">IWool Cardigan</a></h6>

                                                        <p>$ 150 x 1</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jed_megamenu_item jed_megamenu_custom_item">
                                                <h3><a href="#">Ralates Products</a></h3>

                                                <div class="entry-item entry-item-first">
                                                    <div class="entry-thumb">
                                                        <a href="#"><img
                                                                src="<?php print $theme_path; ?>/images/header-2/product-1.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="entry-content">
                                                        <h6 class="entry-title"><a href="#">IWool Cardigan</a></h6>

                                                        <div class="jed_vote clearfix">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                        <p>$ 150 x 1</p>
                                                    </div>
                                                </div>

                                                <div class="entry-item">
                                                    <div class="entry-thumb">
                                                        <a href="#"><img
                                                                src="<?php print $theme_path; ?>/images/header-2/product-2.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="entry-content">
                                                        <h6 class="entry-title"><a href="#">IWool Cardigan</a></h6>

                                                        <div class="jed_vote clearfix">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                        <p>$ 80 x 1</p>
                                                    </div>
                                                </div>

                                                <div class="entry-item">
                                                    <div class="entry-thumb">
                                                        <a href="#"><img
                                                                src="<?php print $theme_path; ?>/images/header-2/product-1.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="entry-content">
                                                        <h6 class="entry-title"><a href="#">IWool Cardigan</a></h6>

                                                        <div class="jed_vote clearfix">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                        <p>$ 150 x 1</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="jed_megamenu_item jed_megamenu_custom_item jed_custom_05">
                                                <h3><a href="#">Popular Productcart</a></h3>

                                                <div class="jed_thumb">
                                                    <a href="#"><img
                                                            src="<?php print $theme_path; ?>/images/header-2/product-3.jpg"
                                                            alt=""></a>

                                                    <div class="jed_categories">
                                                        <a href="#" class="jed_bg_category_1">Art Work</a>
                                                        <a href="#" class="jed_bg_category_2 clearfix">CD Jazz</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="jed_right">
                            <div class="jed_header_cart hidden-xs">
                                <div class="jed_header_icon">
                                    <i class="fa fa-cart-plus"></i>
                                    <span>3</span>
                                </div>
                                <a href="#" class="jed_cart">Cart</a>

                                <div class="jed_cart_hover">
                                    <h6>shopping cart</h6>

                                    <div class="jed_cart_content">
                                        <div class="entry-item jed_custom_first">
                                            <div class="entry-thumb">
                                                <a href="#"><img
                                                        src="<?php print $theme_path; ?>/images/header-2/product-1.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="entry-content">
                                                <a href="#">Integer ac massa vehicula viverra</a>
                                                <span>$ 150 x 1</span>
                                            </div>
                                            <div class="entry-close">
                                                <a href="#" class="icon_close_alt2"></a>
                                            </div>
                                        </div>

                                        <div class="entry-item">
                                            <div class="entry-thumb">
                                                <a href="#"><img
                                                        src="<?php print $theme_path; ?>/images/header-2/product-2.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="entry-content">
                                                <a href="#">Integer ac massa vehicula viverra</a>
                                                <span>$ 150 x 1</span>
                                            </div>
                                            <div class="entry-close">
                                                <a href="#" class="icon_close_alt2"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jed_price">
                                        <div class="jed_price_left">
                                            <span>total</span>
                                        </div>
                                        <div class="jed_price_right">
                                            <span>$ 250.000</span>
                                        </div>
                                    </div>
                                    <div class="jed_checkout">
                                        <a href="#" class="jed_view_cart">view cart ></a>
                                        <a href="#" class="jed_process">process to checkout</a>
                                    </div>
                                </div>
                            </div>
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
