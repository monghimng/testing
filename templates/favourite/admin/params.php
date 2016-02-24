<?php

/**
*   Favourite
*
*   Responsive and customizable Joomla!3 template by FavThemes
*
*   @version        3.3
*   @link           http://demo.favthemes.com/favourite/
*   @author         FavThemes - http://www.favthemes.com
*   @copyright      Copyright (C) 2012-2015 FavThemes.com. All Rights Reserved.
*   @license        Licensed under GNU/GPLv3, see http://www.gnu.org/licenses/gpl-3.0.html
*/

// SETTINGS

$template_styles                    = $this->params->get('template_styles');
$max_width                          = $this->params->get('max_width');

$show_copyright                     = $this->params->get('show_copyright');
$copyright_text                     = $this->params->get('copyright_text');
$copyright_text_link                = $this->params->get('copyright_text_link');

$nav_style_color                    = $this->params->get('nav_style_color');
$nav_google_font                    = $this->params->get('nav_google_font');
$nav_google_font_weight             = $this->params->get('nav_google_font_weight');
$nav_google_font_style              = $this->params->get('nav_google_font_style');
$nav_text_transform                 = $this->params->get('nav_text_transform');
$nav_font_size                      = $this->params->get('nav_font_size');
$nav_link_padding                   = $this->params->get('nav_link_padding');
$nav_icons_color                    = $this->params->get('nav_icons_color');
$nav_icons_font_size                = $this->params->get('nav_icons_font_size');

$link_color                         = $this->params->get('link_color');
$link_color_hover                   = $this->params->get('link_color_hover');

$titles_google_font                 = $this->params->get('titles_google_font');
$titles_google_font_weight          = $this->params->get('titles_google_font_weight');
$titles_google_font_style           = $this->params->get('titles_google_font_style');
$titles_text_align                  = $this->params->get('titles_text_align');
$titles_text_transform              = $this->params->get('titles_text_transform');

$article_title_color                = $this->params->get('article_title_color');
$article_title_link_color           = $this->params->get('article_title_link_color');
$article_title_link_hover_color     = $this->params->get('article_title_link_hover_color');
$article_title_font_size            = $this->params->get('article_title_font_size');
$article_title_line_height          = $this->params->get('article_title_line_height');

$module_title_color                 = $this->params->get('module_title_color');
$module_title_font_size             = $this->params->get('module_title_font_size');
$module_title_line_height           = $this->params->get('module_title_line_height');
$module_title_icon_color            = $this->params->get('module_title_icon_color');
$module_title_icon_font_size        = $this->params->get('module_title_icon_font_size');
$module_title_icon_padding          = $this->params->get('module_title_icon_padding');
$module_title_icon_border_color     = $this->params->get('module_title_icon_border_color');
$module_title_icon_border_radius    = $this->params->get('module_title_icon_border_radius');

$variation_style_color              = $this->params->get('variation_style_color');
$variation_style_icon_font_size     = $this->params->get('variation_style_icon_font_size');
$variation_style_icon_padding       = $this->params->get('variation_style_icon_padding');

$button_color                       = $this->params->get('button_color');
$button_bg_color                    = $this->params->get('button_bg_color');
$button_hover_color                 = $this->params->get('button_hover_color');
$button_bg_hover_color              = $this->params->get('button_bg_hover_color');
$button_google_font                 = $this->params->get('button_google_font');
$button_google_font_weight          = $this->params->get('button_google_font_weight');
$button_google_font_style           = $this->params->get('button_google_font_style');
$button_text_transform              = $this->params->get('button_text_transform');

$vertical_menus_style_color         = $this->params->get('vertical_menus_style_color');
$vertical_menus_text_transform      = $this->params->get('vertical_menus_text_transform');

$horizontal_menus_style_color        = $this->params->get('horizontal_menus_style_color');
$horizontal_menus_google_font        = $this->params->get('horizontal_menus_google_font');
$horizontal_menus_google_font_weight = $this->params->get('horizontal_menus_google_font_weight');
$horizontal_menus_google_font_style  = $this->params->get('horizontal_menus_google_font_style');
$horizontal_menus_text_transform     = $this->params->get('horizontal_menus_text_transform');

$list_style_color                   = $this->params->get('list_style_color');

$show_back_to_top                   = $this->params->get('show_back_to_top');

$error_page_article_id              = $this->params->get('error_page_article_id');

$offline_page_style                 = $this->params->get('offline_page_style');
$offline_page_bg_image              = $this->params->get('offline_page_bg_image');
$offline_page_bg_image_style        = $this->params->get('offline_page_bg_image_style');

$responsive_k2_image                = $this->params->get('responsive_k2_image');


// LAYOUT

$body_bg_image                      = $this->params->get('body_bg_image');
$body_bg_image_style                = $this->params->get('body_bg_image_style');
$body_bg_image_overlay              = $this->params->get('body_bg_image_overlay');
$body_bg_color                      = $this->params->get('body_bg_color');
$body_color                         = $this->params->get('body_color');
$body_title_color                   = $this->params->get('body_title_color');
$body_link_color                    = $this->params->get('body_link_color');
$body_link_hover_color              = $this->params->get('body_link_hover_color');

$show_advert_button                 = $this->params->get('show_advert_button');
$advert_bg_color                    = $this->params->get('advert_bg_color');
$advert_color                       = $this->params->get('advert_color');
$advert_title_color                 = $this->params->get('advert_title_color');
$advert_link_color                  = $this->params->get('advert_link_color');
$advert_link_hover_color            = $this->params->get('advert_link_hover_color');

$slide_width                        = $this->params->get('slide_width');
$slide_bg_image                     = $this->params->get('slide_bg_image');
$slide_bg_image_style               = $this->params->get('slide_bg_image_style');
$slide_bg_image_overlay             = $this->params->get('slide_bg_image_overlay');
$slide_bg_color                     = $this->params->get('slide_bg_color');
$slide_color                        = $this->params->get('slide_color');
$slide_title_color                  = $this->params->get('slide_title_color');
$slide_link_color                   = $this->params->get('slide_link_color');
$slide_link_hover_color             = $this->params->get('slide_link_hover_color');

$intro_bg_image                     = $this->params->get('intro_bg_image');
$intro_bg_image_style               = $this->params->get('intro_bg_image_style');
$intro_bg_image_overlay             = $this->params->get('intro_bg_image_overlay');
$intro_bg_color                     = $this->params->get('intro_bg_color');
$intro_color                        = $this->params->get('intro_color');
$intro_title_color                  = $this->params->get('intro_title_color');
$intro_link_color                   = $this->params->get('intro_link_color');
$intro_link_hover_color             = $this->params->get('intro_link_hover_color');

$lead_bg_image                      = $this->params->get('lead_bg_image');
$lead_bg_image_style                = $this->params->get('lead_bg_image_style');
$lead_bg_image_overlay              = $this->params->get('lead_bg_image_overlay');
$lead_bg_color                      = $this->params->get('lead_bg_color');
$lead_color                         = $this->params->get('lead_color');
$lead_title_color                   = $this->params->get('lead_title_color');
$lead_link_color                    = $this->params->get('lead_link_color');
$lead_link_hover_color              = $this->params->get('lead_link_hover_color');

$promo_bg_image                     = $this->params->get('promo_bg_image');
$promo_bg_image_style               = $this->params->get('promo_bg_image_style');
$promo_bg_image_overlay             = $this->params->get('promo_bg_image_overlay');
$promo_bg_color                     = $this->params->get('promo_bg_color');
$promo_color                        = $this->params->get('promo_color');
$promo_title_color                  = $this->params->get('promo_title_color');
$promo_link_color                   = $this->params->get('promo_link_color');
$promo_link_hover_color             = $this->params->get('promo_link_hover_color');

$prime_bg_image                     = $this->params->get('prime_bg_image');
$prime_bg_image_style               = $this->params->get('prime_bg_image_style');
$prime_bg_image_overlay             = $this->params->get('prime_bg_image_overlay');
$prime_bg_color                     = $this->params->get('prime_bg_color');
$prime_color                        = $this->params->get('prime_color');
$prime_title_color                  = $this->params->get('prime_title_color');
$prime_link_color                   = $this->params->get('prime_link_color');
$prime_link_hover_color             = $this->params->get('prime_link_hover_color');

$showcase_bg_image                  = $this->params->get('showcase_bg_image');
$showcase_bg_image_style            = $this->params->get('showcase_bg_image_style');
$showcase_bg_image_overlay          = $this->params->get('showcase_bg_image_overlay');
$showcase_bg_color                  = $this->params->get('showcase_bg_color');
$showcase_color                     = $this->params->get('showcase_color');
$showcase_title_color               = $this->params->get('showcase_title_color');
$showcase_link_color                = $this->params->get('showcase_link_color');
$showcase_link_hover_color          = $this->params->get('showcase_link_hover_color');

$feature_bg_image                   = $this->params->get('feature_bg_image');
$feature_bg_image_style             = $this->params->get('feature_bg_image_style');
$feature_bg_image_overlay           = $this->params->get('feature_bg_image_overlay');
$feature_bg_color                   = $this->params->get('feature_bg_color');
$feature_color                      = $this->params->get('feature_color');
$feature_title_color                = $this->params->get('feature_title_color');
$feature_link_color                 = $this->params->get('feature_link_color');
$feature_link_hover_color           = $this->params->get('feature_link_hover_color');

$focus_bg_image                     = $this->params->get('focus_bg_image');
$focus_bg_image_style               = $this->params->get('focus_bg_image_style');
$focus_bg_image_overlay             = $this->params->get('focus_bg_image_overlay');
$focus_bg_color                     = $this->params->get('focus_bg_color');
$focus_color                        = $this->params->get('focus_color');
$focus_title_color                  = $this->params->get('focus_title_color');
$focus_link_color                   = $this->params->get('focus_link_color');
$focus_link_hover_color             = $this->params->get('focus_link_hover_color');

$portfolio_bg_image                 = $this->params->get('portfolio_bg_image');
$portfolio_bg_image_style           = $this->params->get('portfolio_bg_image_style');
$portfolio_bg_image_overlay         = $this->params->get('portfolio_bg_image_overlay');
$portfolio_bg_color                 = $this->params->get('portfolio_bg_color');
$portfolio_color                    = $this->params->get('portfolio_color');
$portfolio_title_color              = $this->params->get('portfolio_title_color');
$portfolio_link_color               = $this->params->get('portfolio_link_color');
$portfolio_link_hover_color         = $this->params->get('portfolio_link_hover_color');

$screen_bg_image                    = $this->params->get('screen_bg_image');
$screen_bg_image_style              = $this->params->get('screen_bg_image_style');
$screen_bg_image_overlay            = $this->params->get('screen_bg_image_overlay');
$screen_bg_color                    = $this->params->get('screen_bg_color');
$screen_color                       = $this->params->get('screen_color');
$screen_title_color                 = $this->params->get('screen_title_color');
$screen_link_color                  = $this->params->get('screen_link_color');
$screen_link_hover_color            = $this->params->get('screen_link_hover_color');

$top_bg_image                       = $this->params->get('top_bg_image');
$top_bg_image_style                 = $this->params->get('top_bg_image_style');
$top_bg_image_overlay               = $this->params->get('top_bg_image_overlay');
$top_bg_color                       = $this->params->get('top_bg_color');
$top_color                          = $this->params->get('top_color');
$top_title_color                    = $this->params->get('top_title_color');
$top_link_color                     = $this->params->get('top_link_color');
$top_link_hover_color               = $this->params->get('top_link_hover_color');

$maintop_bg_image                   = $this->params->get('maintop_bg_image');
$maintop_bg_image_style             = $this->params->get('maintop_bg_image_style');
$maintop_bg_image_overlay           = $this->params->get('maintop_bg_image_overlay');
$maintop_bg_color                   = $this->params->get('maintop_bg_color');
$maintop_color                      = $this->params->get('maintop_color');
$maintop_title_color                = $this->params->get('maintop_title_color');
$maintop_link_color                 = $this->params->get('maintop_link_color');
$maintop_link_hover_color           = $this->params->get('maintop_link_hover_color');

$mainbottom_bg_image                = $this->params->get('mainbottom_bg_image');
$mainbottom_bg_image_style          = $this->params->get('mainbottom_bg_image_style');
$mainbottom_bg_image_overlay        = $this->params->get('mainbottom_bg_image_overlay');
$mainbottom_bg_color                = $this->params->get('mainbottom_bg_color');
$mainbottom_color                   = $this->params->get('mainbottom_color');
$mainbottom_title_color             = $this->params->get('mainbottom_title_color');
$mainbottom_link_color              = $this->params->get('mainbottom_link_color');
$mainbottom_link_hover_color        = $this->params->get('mainbottom_link_hover_color');

$bottom_bg_image                    = $this->params->get('bottom_bg_image');
$bottom_bg_image_style              = $this->params->get('bottom_bg_image_style');
$bottom_bg_image_overlay            = $this->params->get('bottom_bg_image_overlay');
$bottom_bg_color                    = $this->params->get('bottom_bg_color');
$bottom_color                       = $this->params->get('bottom_color');
$bottom_title_color                 = $this->params->get('bottom_title_color');
$bottom_link_color                  = $this->params->get('bottom_link_color');
$bottom_link_hover_color            = $this->params->get('bottom_link_hover_color');

$note_bg_image                      = $this->params->get('note_bg_image');
$note_bg_image_style                = $this->params->get('note_bg_image_style');
$note_bg_image_overlay              = $this->params->get('note_bg_image_overlay');
$note_bg_color                      = $this->params->get('note_bg_color');
$note_color                         = $this->params->get('note_color');
$note_title_color                   = $this->params->get('note_title_color');
$note_link_color                    = $this->params->get('note_link_color');
$note_link_hover_color              = $this->params->get('note_link_hover_color');

$base_bg_image                      = $this->params->get('base_bg_image');
$base_bg_image_style                = $this->params->get('base_bg_image_style');
$base_bg_image_overlay              = $this->params->get('base_bg_image_overlay');
$base_bg_color                      = $this->params->get('base_bg_color');
$base_color                         = $this->params->get('base_color');
$base_title_color                   = $this->params->get('base_title_color');
$base_link_color                    = $this->params->get('base_link_color');
$base_link_hover_color              = $this->params->get('base_link_hover_color');

$block_bg_image                     = $this->params->get('block_bg_image');
$block_bg_image_style               = $this->params->get('block_bg_image_style');
$block_bg_image_overlay             = $this->params->get('block_bg_image_overlay');
$block_bg_color                     = $this->params->get('block_bg_color');
$block_color                        = $this->params->get('block_color');
$block_title_color                  = $this->params->get('block_title_color');
$block_link_color                   = $this->params->get('block_link_color');
$block_link_hover_color             = $this->params->get('block_link_hover_color');

$user_bg_image                      = $this->params->get('user_bg_image');
$user_bg_image_style                = $this->params->get('user_bg_image_style');
$user_bg_image_overlay              = $this->params->get('user_bg_image_overlay');
$user_bg_color                      = $this->params->get('user_bg_color');
$user_color                         = $this->params->get('user_color');
$user_title_color                   = $this->params->get('user_title_color');
$user_link_color                    = $this->params->get('user_link_color');
$user_link_hover_color              = $this->params->get('user_link_hover_color');

$footer_bg_image                    = $this->params->get('footer_bg_image');
$footer_bg_image_style              = $this->params->get('footer_bg_image_style');
$footer_bg_image_overlay            = $this->params->get('footer_bg_image_overlay');
$footer_bg_color                    = $this->params->get('footer_bg_color');
$footer_color                       = $this->params->get('footer_color');
$footer_title_color                 = $this->params->get('footer_title_color');
$footer_link_color                  = $this->params->get('footer_link_color');
$footer_link_hover_color            = $this->params->get('footer_link_hover_color');


// TOPBAR

$topbar_bg_image                     = $this->params->get('topbar_bg_image');
$topbar_bg_image_style               = $this->params->get('topbar_bg_image_style');
$topbar_bg_image_overlay             = $this->params->get('topbar_bg_image_overlay');
$topbar_bg_color                     = $this->params->get('topbar_bg_color');
$topbar_color                        = $this->params->get('topbar_color');
$topbar_title_color                  = $this->params->get('topbar_title_color');
$topbar_link_color                   = $this->params->get('topbar_link_color');
$topbar_link_hover_color             = $this->params->get('topbar_link_hover_color');

$topbarmobile_bg_image               = $this->params->get('topbarmobile_bg_image');
$topbarmobile_bg_image_style         = $this->params->get('topbarmobile_bg_image_style');
$topbarmobile_bg_image_overlay       = $this->params->get('topbarmobile_bg_image_overlay');
$topbarmobile_bg_color               = $this->params->get('topbarmobile_bg_color');
$topbarmobile_color                  = $this->params->get('topbarmobile_color');
$topbarmobile_title_color            = $this->params->get('topbarmobile_title_color');
$topbarmobile_link_color             = $this->params->get('topbarmobile_link_color');
$topbarmobile_link_hover_color       = $this->params->get('topbarmobile_link_hover_color');

$topbar_cart_text                    = $this->params->get('topbar_cart_text');


// LOGO

$show_default_logo                  = $this->params->get('show_default_logo');
$default_logo                       = $this->params->get('default_logo');
$default_logo_img_alt               = $this->params->get('default_logo_img_alt');
$default_logo_padding               = $this->params->get('default_logo_padding');
$default_logo_margin                = $this->params->get('default_logo_margin');
$show_media_logo                    = $this->params->get('show_media_logo');
$media_logo                         = $this->params->get('media_logo');
$media_logo_img_alt                 = $this->params->get('media_logo_img_alt');
$media_logo_padding                 = $this->params->get('media_logo_padding');
$media_logo_margin                  = $this->params->get('media_logo_margin');
$show_text_logo                     = $this->params->get('show_text_logo');
$text_logo                          = $this->params->get('text_logo');
$text_logo_color                    = $this->params->get('text_logo_color');
$text_logo_font_size                = $this->params->get('text_logo_font_size');
$text_logo_google_font              = $this->params->get('text_logo_google_font');
$text_logo_google_font_weight       = $this->params->get('text_logo_google_font_weight');
$text_logo_google_font_style        = $this->params->get('text_logo_google_font_style');
$text_logo_line_height              = $this->params->get('text_logo_line_height');
$text_logo_padding                  = $this->params->get('text_logo_padding');
$text_logo_margin                   = $this->params->get('text_logo_margin');
$show_slogan                        = $this->params->get('show_slogan');
$slogan                             = $this->params->get('slogan');
$slogan_color                       = $this->params->get('slogan_color');
$slogan_font_size                   = $this->params->get('slogan_font_size');
$slogan_line_height                 = $this->params->get('slogan_line_height');
$slogan_padding                     = $this->params->get('slogan_padding');
$slogan_margin                      = $this->params->get('slogan_margin');
$show_retina_logo                   = $this->params->get('show_retina_logo');
$retina_logo                        = $this->params->get('retina_logo');
$retina_logo_height                 = $this->params->get('retina_logo_height');
$retina_logo_width                  = $this->params->get('retina_logo_width');
$retina_logo_img_alt                = $this->params->get('retina_logo_img_alt');
$retina_logo_padding                = $this->params->get('retina_logo_padding');
$retina_logo_margin                 = $this->params->get('retina_logo_margin');


// MOBILE

$mobile_nav_color                   = $this->params->get('mobile_nav_color');
$show_mobile_menu_text              = $this->params->get('show_mobile_menu_text');
$mobile_menu_text                   = $this->params->get('mobile_menu_text');
$show_mobile_submenu                = $this->params->get('show_mobile_submenu');
$paragraph_mobile_font_size         = $this->params->get('paragraph_mobile_font_size');
$article_mobile_title_font_size     = $this->params->get('article_mobile_title_font_size');
$module_mobile_title_font_size      = $this->params->get('module_mobile_title_font_size');
$mobile_show_images                 = $this->params->get('mobile_show_images');


// ANALYTICS

$analytics_code                     = $this->params->get('analytics_code');

?>


<style type="text/css">

<?php // Maximum Width
if ($max_width) { ?>
  @media (min-width: 1200px) {
    .row-fluid {
      max-width: <?php echo htmlspecialchars($max_width); ?>;
    }
  }
<?php } ?>
<?php // Main Navigation Style Color
if ($nav_style_color) { ?>
  .favnav .navigation .nav-pills > .active > a,
  .favnav .navigation .nav-pills > li > a:hover,
  .favnav .navigation .nav-pills > li > a:focus,
  .favnav .navigation .menunav-pills > .active > a,
  .favnav .navigation .menunav-pills > li > a:hover,
  .favnav .navigation .menunav-pills > li > a:focus,
  .favnav .navigation li.active span.nav-header,
  .favnav .navigation li span.nav-header:hover,
  .favnav .navigation li span.nav-header:focus {
    background-color: #<?php echo htmlspecialchars($nav_style_color); ?>;
  }
<?php } ?>
<?php
if ($nav_style_color) { ?>
  ul.nav.menu li span.nav-header {
    color: #<?php echo htmlspecialchars($nav_style_color); ?>;
  }
<?php } ?>
<?php
if ($nav_style_color) { ?>
  .favnav .navigation .nav-pills .nav-child > .active > a,
  .favnav .navigation .nav-pills .nav-child > li > a:hover,
  .favnav .navigation .menunav-pills .nav-child > .active > a,
  .favnav .navigation .menunav-pills .nav-child > li > a:hover,
  .favnav .navigation .nav-pills .nav-child > .active > span.nav-header,
  .favnav .navigation .nav-pills .nav-child > li > span.nav-header:hover,
  .favnav .navigation .menunav-pills .nav-child > .active > span.nav-header,
  .favnav .navigation .menunav-pills .nav-child > li > span.nav-header:hover {
    color: #<?php echo htmlspecialchars($nav_style_color); ?> !important;
  }
<?php } ?>
<?php // Main Navigation Google Font
if ($nav_google_font) { ?>
  .favnav .navigation .nav-pills a,
  .favnav .navigation .menunav-pills a,
  .favnav .navigation .nav-pills > li > a,
  .favnav .navigation .menunav-pills > li > a,
  .favnav .navigation ul.nav.menu li span.nav-header,
  .favnav .navigation .nav-pills .nav-child a,
  .favnav .navigation .menunav-pills .nav-child a,
  .favnav .navigation .nav-pills .nav-child span.nav-header,
  .favnav .navigation .menunav-pills .nav-child span.nav-header {
    font-family: '<?php echo str_replace('+', ' ', $this->params->get('nav_google_font'));?>', sans-serif;
  }
<?php } ?>
<?php // Main Navigation Text Transform
if ($nav_text_transform) { ?>
  .favnav .navigation .nav-pills a,
  .favnav .navigation .menunav-pills a,
  .favnav .navigation .nav-pills > li > a,
  .favnav .navigation .menunav-pills > li > a,
  .favnav .navigation ul.nav.menu li span.nav-header,
  .favnav .navigation .nav-pills .nav-child a,
  .favnav .navigation .menunav-pills .nav-child a,
  .favnav .navigation .nav-pills .nav-child span.nav-header,
  .favnav .navigation .menunav-pills .nav-child span.nav-header {
    text-transform: <?php echo htmlspecialchars($nav_text_transform); ?>;
  }
<?php } ?>
<?php // Main Navigation Font Size
if ($nav_font_size) { ?>
  .favnav .navigation .nav-pills a,
  .favnav .navigation .menunav-pills a,
  .favnav .navigation .nav-pills > li > a,
  .favnav .navigation .menunav-pills > li > a,
  .favnav .navigation ul.nav.menu li span.nav-header {
    font-size: <?php echo htmlspecialchars($nav_font_size); ?>;
  }
<?php } ?>
<?php // Main Navigation Padding
if ($nav_link_padding) { ?>
  .favnav .navigation .nav-pills a,
  .favnav .navigation .menunav-pills a,
  .favnav .navigation .nav-pills > li > a,
  .favnav .navigation .menunav-pills > li > a,
  .favnav .navigation ul.nav.menu li span.nav-header {
    padding: <?php echo htmlspecialchars($nav_link_padding); ?>!important;
  }
<?php } ?>
<?php // Main Navigation Icon Color
if ($nav_icons_color) { ?>
  .favnav .navigation li a[class^="fa-"]:before,
  .favnav .navigation li a[class*=" fa-"]:before,
  .favnav .navigation li span.nav-header[class^="fa-"]:before,
  .favnav .navigation li span.nav-header[class*=" fa-"]:before,
  .favnav .navigation ul.nav-child li a[class^="fa-"]:before,
  .favnav .navigation ul.nav-child li a[class*=" fa-"]:before,
  .favnav .navigation ul.nav-child li span.nav-header[class^="fa-"]:before,
  .favnav .navigation ul.nav-child li span.nav-header[class*=" fa-"]:before,
  .favnav .navigation ul.nav-child li a[class^="fa-"]:before,
  .favnav .navigation ul.nav-child li a[class*=" fa-"]:before,
  .favnav .navigation ul.nav-child li span.nav-header[class^="fa-"]:before,
  .favnav .navigation ul.nav-child li span.nav-header[class*=" fa-"]:before,
  .favnav .navigation ul.nav-child li a[class^="fa-"]:hover:before,
  .favnav .navigation ul.nav-child li a[class*=" fa-"]:hover:before,
  .favnav .navigation ul.nav-child li a[class^="fa-"]:focus:before,
  .favnav .navigation ul.nav-child li a[class*=" fa-"]:focus:before,
  .favnav .navigation ul.nav-child li.active a[class^="fa-"]:before,
  .favnav .navigation ul.nav-child li.active a[class*=" fa-"]:before,
  .favnav .navigation ul.nav-child li span.nav-header[class^="fa-"]:hover:before,
  .favnav .navigation ul.nav-child li span.nav-header[class*=" fa-"]:hover:before,
  .favnav .navigation ul.nav-child li span.nav-header[class^="fa-"]:focus:before,
  .favnav .navigation ul.nav-child li span.nav-header[class*=" fa-"]:focus:before,
  .favnav .navigation ul.nav-child li.active span.nav-header[class^="fa-"]:before,
  .favnav .navigation ul.nav-child li.active span.nav-header[class*=" fa-"]:before {
    color: #<?php echo htmlspecialchars($nav_icons_color); ?>!important;
  }
<?php } ?>
<?php // Main Navigation Icon Font Size
if ($nav_icons_font_size) { ?>
  .favnav .navigation li a[class^="fa-"]:before,
  .favnav .navigation li a[class*=" fa-"]:before,
  .favnav .navigation li span.nav-header[class^="fa-"]:before,
  .favnav .navigation li span.nav-header[class*=" fa-"]:before,
  .favnav .navigation ul.nav-child li a[class^="fa-"]:before,
  .favnav .navigation ul.nav-child li a[class*=" fa-"]:before,
  .favnav .navigation ul.nav-child li span.nav-header[class^="fa-"]:before,
  .favnav .navigation ul.nav-child li span.nav-header[class*=" fa-"]:before,
  .favnav .navigation ul.nav-child li a[class^="fa-"]:before,
  .favnav .navigation ul.nav-child li a[class*=" fa-"]:before,
  .favnav .navigation ul.nav-child li span.nav-header[class^="fa-"]:before,
  .favnav .navigation ul.nav-child li span.nav-header[class*=" fa-"]:before,
  .favnav .navigation ul.nav-child li a[class^="fa-"]:hover:before,
  .favnav .navigation ul.nav-child li a[class*=" fa-"]:hover:before,
  .favnav .navigation ul.nav-child li a[class^="fa-"]:focus:before,
  .favnav .navigation ul.nav-child li a[class*=" fa-"]:focus:before,
  .favnav .navigation ul.nav-child li.active a[class^="fa-"]:before,
  .favnav .navigation ul.nav-child li.active a[class*=" fa-"]:before,
  .favnav .navigation ul.nav-child li span.nav-header[class^="fa-"]:hover:before,
  .favnav .navigation ul.nav-child li span.nav-header[class*=" fa-"]:hover:before,
  .favnav .navigation ul.nav-child li span.nav-header[class^="fa-"]:focus:before,
  .favnav .navigation ul.nav-child li span.nav-header[class*=" fa-"]:focus:before,
  .favnav .navigation ul.nav-child li.active span.nav-header[class^="fa-"]:before,
  .favnav .navigation ul.nav-child li.active span.nav-header[class*=" fa-"]:before {
    font-size: <?php echo htmlspecialchars($nav_icons_font_size); ?>;
  }
<?php } ?>
<?php // Link Color
if ($link_color) { ?>
  a,
  .pagination ul li.active a,
  div.k2Pagination ul li.active a,
  .pagination ul li.active a:hover,
  .pagination ul li.active a:focus,
  div.k2Pagination ul li.active a:hover,
  div.k2Pagination ul li.active a:focus {
    color: #<?php echo htmlspecialchars($link_color); ?>;
  }
<?php } ?>
<?php // Link Color Hover
if ($link_color_hover) { ?>
  a:hover, a:focus,
  ul.dropdown-menu a:hover,
  ul.dropdown-menu a:focus,
  #fav-language ul.dropdown-menu li a:hover,
  #fav-language ul.dropdown-menu li a:focus,
  #fav-language-demo ul.dropdown-menu li a:hover,
  #fav-language-demo ul.dropdown-menu li a:focus {
    color: #<?php echo htmlspecialchars($link_color_hover); ?>;
  }
<?php } ?>
<?php // Link Color Hover
if ($link_color_hover) { ?>
  span.catItemEditLink a:hover,
  span.catItemEditLink a:focus,
  span.itemEditLink a:hover,
  span.itemEditLink a:focus {
    color: #<?php echo htmlspecialchars($link_color_hover); ?> !important;
  }
<?php } ?>
<?php // Article and Module Title Google Font
if ($titles_google_font) { ?>
  h1, h2, h3, h4, h5, h6,
  .componentheading,
  #member-profile legend,
  div.itemHeader h2.itemTitle,
  div.catItemHeader h3.catItemTitle,
  div.tagItemHeader h2.tagItemTitle,
  div.latestItemHeader h2.latestItemTitle,
  div.genericItemHeader h2.genericItemTitle,
  div.userItemHeader h3.userItemTitle,
  div#k2Frontend table.k2FrontendToolbar td.button a.toolbar {
    font-family: '<?php echo str_replace('+', ' ', $this->params->get('titles_google_font'));?>', sans-serif;
  }
<?php } ?>
<?php // Article and Module Title Text Align
if ($titles_text_align) { ?>
  .componentheading,
  .moduletable h3,
  div[class^="moduletable-"] h3,
  div[class*=" moduletable-"] h3,
  .page-header h2,
  h2.item-title,
  div.itemHeader h2.itemTitle,
  div.catItemHeader h3.catItemTitle,
  div.tagItemHeader h2.tagItemTitle,
  div.latestItemHeader h2.latestItemTitle,
  div.genericItemHeader h2.genericItemTitle,
  div.userItemHeader h3.userItemTitle {
    text-align: <?php echo htmlspecialchars($titles_text_align); ?>;
  }
<?php } ?>
<?php // Article and Module Title Text Transform
if ($titles_text_transform) { ?>
  h1, h2, h3, h4, h5, h6,
  .componentheading,
  .moduletable h3,
  [class^="moduletable-"] h3,
  [class*=" moduletable-"] h3,
  #member-profile legend,
  div.itemHeader h2.itemTitle,
  div.catItemHeader h3.catItemTitle,
  div.tagItemHeader h2.tagItemTitle,
  div.latestItemHeader h2.latestItemTitle,
  div.genericItemHeader h2.genericItemTitle,
  div.userItemHeader h3.userItemTitle,
  div#k2Frontend table.k2FrontendToolbar td.button a.toolbar {
    text-transform: <?php echo htmlspecialchars($titles_text_transform); ?>;
  }
<?php } ?>
<?php // Article Title Color
if ($article_title_color) { ?>
  .page-header h2,
  h2.item-title,
  div.tag-category h3,
  div.newsfeed h3,
  div.newsfeed-category h3,
  h3.itemAuthorName,
  div.itemHeader h2.itemTitle,
  div.catItemHeader h3.catItemTitle,
  div.tagItemHeader h2.tagItemTitle,
  div.latestItemHeader h2.latestItemTitle,
  div.genericItemHeader h2.genericItemTitle,
  div.userItemHeader h3.userItemTitle {
    color: #<?php echo htmlspecialchars($article_title_color); ?>;
  }
<?php } ?>
<?php // Article Title Link Color
if ($article_title_link_color) { ?>
  .page-header h2 a,
  h2.item-title a,
  div.tag-category h3 a,
  div.newsfeed h3 a,
  div.newsfeed-category h3 a,
  h3.itemAuthorName a,
  div.catItemHeader h3.catItemTitle a,
  div.tagItemHeader h2.tagItemTitle a,
  div.latestItemHeader h2.latestItemTitle a,
  div.genericItemHeader h2.genericItemTitle a,
  div.userItemHeader h3.userItemTitle a {
    color: #<?php echo htmlspecialchars($article_title_link_color); ?>;
  }
<?php } ?>
<?php // Article Title Link Hover Color
if ($article_title_link_hover_color) { ?>
  .page-header h2 a:hover,
  h2.item-title a:hover,
  div.tag-category h3 a:hover,
  div.newsfeed h3 a:hover,
  div.newsfeed-category h3 a:hover,
  h3.itemAuthorName a:hover,
  div.catItemHeader h3.catItemTitle a:hover,
  div.tagItemHeader h2.tagItemTitle a:hover,
  div.latestItemHeader h2.latestItemTitle a:hover,
  div.genericItemHeader h2.genericItemTitle a:hover,
  div.userItemHeader h3.userItemTitle a:hover {
    color: #<?php echo htmlspecialchars($article_title_link_hover_color); ?>;
  }
<?php } ?>
<?php // Article Title Font Size
if ($article_title_font_size) { ?>
   .page-header h2,
    h2.item-title,
    div.itemHeader h2.itemTitle,
    div.catItemHeader h3.catItemTitle,
    div.tagItemHeader h2.tagItemTitle,
    div.latestItemHeader h2.latestItemTitle,
    div.genericItemHeader h2.genericItemTitle,
    div.userItemHeader h3.userItemTitle,
    .page-header h2 a,
    h2.item-title a,
    div.catItemHeader h3.catItemTitle a,
    div.tagItemHeader h2.tagItemTitle a,
    div.latestItemHeader h2.latestItemTitle a,
    div.genericItemHeader h2.genericItemTitle a,
    div.userItemHeader h3.userItemTitle a {
    font-size: <?php echo htmlspecialchars($article_title_font_size); ?>;
  }
<?php } ?>
<?php // Article Title Line Height
if ($article_title_line_height) { ?>
    .page-header h2,
    h2.item-title,
    div.itemHeader h2.itemTitle,
    div.catItemHeader h3.catItemTitle,
    div.tagItemHeader h2.tagItemTitle,
    div.latestItemHeader h2.latestItemTitle,
    div.genericItemHeader h2.genericItemTitle,
    div.userItemHeader h3.userItemTitle,
    .page-header h2 a,
    h2.item-title a,
    div.catItemHeader h3.catItemTitle a,
    div.tagItemHeader h2.tagItemTitle a,
    div.latestItemHeader h2.latestItemTitle a,
    div.genericItemHeader h2.genericItemTitle a,
    div.userItemHeader h3.userItemTitle a {
    line-height: <?php echo htmlspecialchars($article_title_line_height); ?>;
  }
<?php } ?>
<?php // Module Title Color
if ($module_title_color) { ?>
  .moduletable h3,
  div[class^="moduletable-"] h3,
  div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($module_title_color); ?>;
  }
<?php } ?>
<?php // Module Title Font Size
if ($module_title_font_size) { ?>
  .moduletable h3,
  div[class^="moduletable-"] h3,
  div[class*=" moduletable-"] h3 {
    font-size: <?php echo htmlspecialchars($module_title_font_size); ?>;
  }
<?php } ?>
<?php // Module Title Line Height
if ($module_title_line_height) { ?>
  .moduletable h3,
  div[class^="moduletable-"] h3,
  div[class*=" moduletable-"] h3 {
    line-height: <?php echo htmlspecialchars($module_title_line_height); ?>;
  }
<?php } ?>
<?php // Module Title Icon Color
if ($module_title_icon_color) { ?>
  .moduletable h3 [class^="fa fa-"],
  div[class^="moduletable-"] h3 [class^="fa fa-"],
  div[class*=" moduletable-"] h3 [class^="fa fa-"],
  .moduletable h3 [class*=" fa fa-"],
  div[class^="moduletable-"] h3 [class*=" fa fa-"],
  div[class*=" moduletable-"] h3 [class*=" fa fa-"] {
    color: #<?php echo htmlspecialchars($module_title_icon_color); ?>;
  }
<?php } ?>
<?php // Module Title Icon Font Size
if ($module_title_icon_font_size) { ?>
  .moduletable h3 [class^="fa fa-"],
  div[class^="moduletable-"] h3 [class^="fa fa-"],
  div[class*=" moduletable-"] h3 [class^="fa fa-"],
  .moduletable h3 [class*=" fa fa-"],
  div[class^="moduletable-"] h3 [class*=" fa fa-"],
  div[class*=" moduletable-"] h3 [class*=" fa fa-"]  {
    font-size: <?php echo htmlspecialchars($module_title_icon_font_size); ?>;
  }
<?php } ?>
<?php // Module Title Icon Padding
if ($module_title_icon_padding) { ?>
  .moduletable h3 [class^="fa fa-"],
  div[class^="moduletable-"] h3 [class^="fa fa-"],
  div[class*=" moduletable-"] h3 [class^="fa fa-"],
  .moduletable h3 [class*=" fa fa-"],
  div[class^="moduletable-"] h3 [class*=" fa fa-"],
  div[class*=" moduletable-"] h3 [class*=" fa fa-"]  {
    padding: <?php echo htmlspecialchars($module_title_icon_padding); ?>;
  }
<?php } ?>
<?php // Module Title Icon Border Color
if ($module_title_icon_border_color) { ?>
  .moduletable h3 [class^="fa fa-"],
  div[class^="moduletable-"] h3 [class^="fa fa-"],
  div[class*=" moduletable-"] h3 [class^="fa fa-"],
  .moduletable h3 [class*=" fa fa-"],
  div[class^="moduletable-"] h3 [class*=" fa fa-"],
  div[class*=" moduletable-"] h3 [class*=" fa fa-"]  {
    border: 1px solid #<?php echo htmlspecialchars($module_title_icon_border_color); ?>;
  }
<?php } ?>
<?php // Module Title Icon Border Radius
if ($module_title_icon_border_radius) { ?>
  .moduletable h3 [class^="fa fa-"],
  div[class^="moduletable-"] h3 [class^="fa fa-"],
  div[class*=" moduletable-"] h3 [class^="fa fa-"],
  .moduletable h3 [class*=" fa fa-"],
  div[class^="moduletable-"] h3 [class*=" fa fa-"],
  div[class*=" moduletable-"] h3 [class*=" fa fa-"]  {
    border-radius: <?php echo htmlspecialchars($module_title_icon_border_radius); ?>;
  }
<?php } ?>
<?php // Variation Style Color
if ($variation_style_color) { ?>
  .moduletable-sfx1 h3 i,
  .moduletable-sfx2 h3 i,
  .moduletable-sfx5 h3 i,
  .moduletable-sfx6 h3 i,
  .moduletable-sfx13 h3 i,
  .moduletable-sfx14 h3 i,
  .moduletable-sfx17 h3 i,
  .moduletable-sfx18 h3 i,
  .moduletable-sfx21 h3 i,
  .moduletable-sfx22 h3 i,
  .moduletable-sfx25 h3 i,
  .moduletable-sfx26 h3 i,
  .moduletable-sfx29 h3 i,
  .moduletable-sfx30 h3 i,
  .moduletable-sfx33 h3 i,
  .moduletable-sfx34 h3 i,
  .moduletable-sfx21 a:hover,
  .moduletable-sfx21 a:focus {
    color: #<?php echo htmlspecialchars($variation_style_color); ?>;
  }
<?php } ?>
<?php
if ($variation_style_color) { ?>
  .moduletable-sfx3 h3 i,
  .moduletable-sfx4 h3 i,
  .moduletable-sfx7 h3 i,
  .moduletable-sfx8 h3 i,
  .moduletable-sfx15 h3 i,
  .moduletable-sfx16 h3 i,
  .moduletable-sfx19 h3 i,
  .moduletable-sfx20 h3 i,
  .moduletable-sfx23 h3 i,
  .moduletable-sfx24 h3 i,
  .moduletable-sfx27 h3 i,
  .moduletable-sfx28 h3 i,
  .moduletable-sfx31 h3 i,
  .moduletable-sfx32 h3 i,
  .moduletable-sfx35 h3 i,
  .moduletable-sfx36 h3 i,
  .moduletable-sfx9,
  .moduletable-sfx10,
  .moduletable-sfx11,
  .moduletable-sfx12 {
    background-color: #<?php echo htmlspecialchars($variation_style_color); ?>;
  }
<?php } ?>
<?php
if ($variation_style_color) { ?>
  .moduletable-sfx4 h3,
  .moduletable-sfx8 h3,
  .moduletable-sfx16 h3,
  .moduletable-sfx16 h3,
  .moduletable-sfx20 h3,
  .moduletable-sfx24 h3,
  .moduletable-sfx28 h3,
  .moduletable-sfx32 h3,
  .moduletable-sfx36 h3 {
    border-bottom: 1px solid #<?php echo htmlspecialchars($variation_style_color); ?>;
  }
<?php } ?>
<?php // Variation Style Icon Font Size
if ($variation_style_icon_font_size) { ?>
  [class^="moduletable-"] h3 [class^="fa fa-"],
  [class^="moduletable-"] h3 [class*=" fa fa-"],
  [class*=" moduletable-"] h3 [class^="fa fa-"],
  [class*=" moduletable-"] h3 [class*=" fa fa-"] {
    font-size: <?php echo htmlspecialchars($variation_style_icon_font_size ); ?>;
  }
<?php } ?>
<?php // Variation Style Icon Padding
if ($variation_style_icon_padding) { ?>
  [class^="moduletable-"] h3 [class^="fa fa-"],
  [class^="moduletable-"] h3 [class*=" fa fa-"],
  [class*=" moduletable-"] h3 [class^="fa fa-"],
  [class*=" moduletable-"] h3 [class*=" fa fa-"]  {
    padding: <?php echo htmlspecialchars($variation_style_icon_padding); ?>;
  }
<?php } ?>
<?php // Button Color
if ($button_color) { ?>
  .btn,
  .btn-primary,
  .pager .next a,
  .pager .previous a,
  .badge-info,
  a.backtop i,
  #fav-search-advanced-fields .accordion-heading a.accordion-toggle,
  #fav-search-advanced-fields .accordion-heading a.accordion-toggle,
  div.tag-category ul.thumbnails h3 a,
  .label-info[href],
  .badge-info[href],
  a.k2ReadMore,
  .k2AccountPage button.button.validate,
  div.itemNavigation a.itemNext,
  div.itemNavigation a.itemPrevious,
  div.itemCommentsForm form input#submitCommentButton,
  div.k2LoginBlock fieldset.input input.button,
  div.k2UserBlock form input.button.ubLogout,
  .k2AccountPage button.button.validate,
  .pagination ul li a,
  .pagination ul > .disabled > a,
  .pagination ul > .active > a,
  .pagination ul > .disabled > a:hover,
  .pagination ul > .disabled > a:focus,
  .pagination ul > .active > a:hover,
  .pagination ul > .active > a:focus,
  .k2Pagination ul li a,
  .k2Pagination ul > .disabled > a,
  .k2Pagination ul > .active > a,
  .itemCommentsPagination ul li a,
  .itemCommentsPagination ul > .disabled > a,
  .itemCommentsPagination ul > .active > a,
  .k2Pagination ul > .disabled > a:hover,
  .k2Pagination ul > .disabled > a:focus,
  .k2Pagination ul > .active > a:hover,
  .k2Pagination ul > .active > a:focus,
  .itemCommentsPagination ul > .disabled > a:hover,
  .itemCommentsPagination ul > .disabled > a:focus,
  .itemCommentsPagination ul > .active > a:hover,
  .itemCommentsPagination ul > .active > a:focus,
  div.itemIsFeatured div.itemHeader h2.itemTitle span sup,
  div.catItemIsFeatured div.catItemHeader h3.catItemTitle span sup,
  #k2Container span.catItemAddLink a.modal,
  #k2Container span.catItemAddLink a.modal:before,
  #k2Container span.userItemAddLink a.modal:before {
    color: #<?php echo htmlspecialchars($button_color); ?>;
  }
<?php } ?>
<?php // Button Color
if ($button_color) { ?>
  .dropdown-toggle span.caret {
    border-top: 4px solid #<?php echo htmlspecialchars($button_color); ?>!important;
  }
<?php } ?>
<?php // Button Color
if ($button_color) { ?>
  .k2AccountPage button.button.validate {
    color: #<?php echo htmlspecialchars($button_color); ?>!important;
  }
<?php } ?>
<?php // Button Background Color
if ($button_bg_color) { ?>
  .btn,
  .btn-primary,
  .pager .next a,
  .pager .previous a,
  .badge-info,
  a.backtop i,
  #fav-search-advanced-fields .accordion-heading a.accordion-toggle,
  #fav-search-advanced-fields .accordion-heading a.accordion-toggle,
  a.k2ReadMore,
  .k2AccountPage button.button.validate,
  div.itemNavigation a.itemNext,
  div.itemNavigation a.itemPrevious,
  div.itemCommentsForm form input#submitCommentButton,
  div.k2LoginBlock fieldset.input input.button,
  div.k2UserBlock form input.button.ubLogout,
  .k2AccountPage button.button.validate,
  .pagination ul li a,
  .pagination ul > .disabled > a,
  .pagination ul > .active > a,
  .pagination ul > .disabled > a:hover,
  .pagination ul > .disabled > a:focus,
  .pagination ul > .active > a:hover,
  .pagination ul > .active > a:focus,
  .k2Pagination ul li a,
  .k2Pagination ul > .disabled > a,
  .k2Pagination ul > .active > a,
  .itemCommentsPagination ul li a,
  .itemCommentsPagination ul > .disabled > a,
  .itemCommentsPagination ul > .active > a,
  .k2Pagination ul > .disabled > a:hover,
  .k2Pagination ul > .disabled > a:focus,
  .k2Pagination ul > .active > a:hover,
  .k2Pagination ul > .active > a:focus,
  .itemCommentsPagination ul > .disabled > a:hover,
  .itemCommentsPagination ul > .disabled > a:focus,
  .itemCommentsPagination ul > .active > a:hover,
  .itemCommentsPagination ul > .active > a:focus,
  div.itemIsFeatured div.itemHeader h2.itemTitle span sup,
  div.catItemIsFeatured div.catItemHeader h3.catItemTitle span sup,
  #k2Container span.catItemAddLink a.modal {
    background-color: #<?php echo htmlspecialchars($button_bg_color); ?>;
    background-image: none;
    text-shadow: none;
  }
<?php } ?>
<?php // Button Hover Color
if ($button_hover_color) { ?>
  .btn:hover,
  .btn:focus,
  .pager .next a:hover,
  .pager .previous a:hover,
  .pager .next a:focus,
  .pager .previous a:focus,
  .btn-primary:hover,
  .btn-primary:focus,
  .badge-info:hover,
  .badge-info:focus,
  #fav-search-advanced-fields .accordion-heading a.accordion-toggle:hover,
  #fav-search-advanced-fields .accordion-heading a.accordion-toggle:focus,
  a.k2ReadMore:hover,
  a.k2ReadMore:focus,
  div.itemNavigation a.itemNext:hover,
  div.itemNavigation a.itemNext:focus,
  div.itemNavigation a.itemPrevious:hover,
  div.itemNavigation a.itemPrevious:focus,
  div.itemCommentsForm form input#submitCommentButton:hover,
  div.itemCommentsForm form input#submitCommentButton:focus,
  div.k2LoginBlock fieldset.input input.button:hover,
  div.k2LoginBlock fieldset.input input.button:focus,
  div.k2UserBlock form input.button.ubLogout:hover,
  div.k2UserBlock form input.button.ubLogout:focus,
  .k2AccountPage button.button.validate:hover,
  .k2AccountPage button.button.validate:focus,
  .pagination ul li a:hover,
  .pagination ul li.active a,
  .pagination ul li.active a:hover,
  .k2Pagination ul li a:hover,
  .k2Pagination ul li.active a,
  .k2Pagination ul li.active a:hover,
  .itemCommentsPagination ul li a:hover,
  .itemCommentsPagination ul li.active a,
  .itemCommentsPagination ul li.active a:hover {
    color: #<?php echo htmlspecialchars($button_hover_color); ?>;
  }
<?php } ?>
<?php // Button Hover Color
if ($button_color) { ?>
  .dropdown-toggle:hover span.caret,
  .dropdown-toggle:focus span.caret {
    border-top: 4px solid #<?php echo htmlspecialchars($button_hover_color); ?>!important;
  }
<?php } ?>
<?php // Button Background Hover Color
if ($button_bg_hover_color) { ?>
  .btn:hover,
  .btn:focus,
  .pager .next a:hover,
  .pager .previous a:hover,
  .pager .next a:focus,
  .pager .previous a:focus,
  .btn-primary:hover,
  .btn-primary:focus,
  .badge-info:hover,
  .badge-info:focus,
  .btn-group.open .btn.dropdown-toggle,
  #fav-search-advanced-fields .accordion-heading a.accordion-toggle:hover,
  #fav-search-advanced-fields .accordion-heading a.accordion-toggle:focus,
  .moduletablefavstyle .fav-search a.dropdown-toggle:hover,
  .moduletable.favstyle .fav-search a.dropdown-toggle:hover,
  .moduletablefavstyle .fav-search a.dropdown-toggle:focus,
  .moduletable.favstyle .fav-search a.dropdown-toggle:focus,
  a.k2ReadMore:hover,
  a.k2ReadMore:focus,
  div.itemNavigation a.itemNext:hover,
  div.itemNavigation a.itemNext:focus,
  div.itemNavigation a.itemPrevious:hover,
  div.itemNavigation a.itemPrevious:focus,
  div.itemCommentsForm form input#submitCommentButton:hover,
  div.itemCommentsForm form input#submitCommentButton:focus,
  div.k2LoginBlock fieldset.input input.button:hover,
  div.k2LoginBlock fieldset.input input.button:focus,
  div.k2UserBlock form input.button.ubLogout:hover,
  div.k2UserBlock form input.button.ubLogout:focus,
  .k2AccountPage button.button.validate:hover,
  .k2AccountPage button.button.validate:focus,
  .pagination ul li a:hover,
  .pagination ul li.active a,
  .pagination ul li.active a:hover,
  .k2Pagination ul li a:hover,
  .k2Pagination ul li.active a,
  .k2Pagination ul li.active a:hover,
  .itemCommentsPagination ul li a:hover,
  .itemCommentsPagination ul li.active a,
  .itemCommentsPagination ul li.active a:hover {
    background-color: #<?php echo htmlspecialchars($button_bg_hover_color); ?>;
  }
<?php } ?>
<?php // Button Google Font
if ($button_google_font) { ?>
  .btn,
  .btn-primary,
  .pager .next a,
  .pager .previous a,
  a.k2ReadMore,
  .k2AccountPage button.button.validate,
  div.itemNavigation a.itemNext,
  div.itemNavigation a.itemPrevious,
  div.itemCommentsForm form input#submitCommentButton,
  div.k2LoginBlock fieldset.input input.button,
  div.k2UserBlock form input.button.ubLogout,
  .k2AccountPage button.button.validate,
  div.itemIsFeatured div.itemHeader h2.itemTitle span sup,
  div.catItemIsFeatured div.catItemHeader h3.catItemTitle span sup,
  #k2Container span.catItemAddLink a.modal {
    font-family: '<?php echo str_replace('+', ' ', $this->params->get('button_google_font'));?>', sans-serif;
  }
<?php } ?>
<?php // Button Text Transform
if ($button_text_transform) { ?>
  .btn,
  .btn-primary,
  .pager .next a,
  .pager .previous a,
  a.k2ReadMore,
  .k2AccountPage button.button.validate,
  div.itemNavigation a.itemNext,
  div.itemNavigation a.itemPrevious,
  div.itemCommentsForm form input#submitCommentButton,
  div.k2LoginBlock fieldset.input input.button,
  div.k2UserBlock form input.button.ubLogout,
  .k2AccountPage button.button.validate,
  div.itemIsFeatured div.itemHeader h2.itemTitle span sup,
  div.catItemIsFeatured div.catItemHeader h3.catItemTitle span sup,
  #k2Container span.catItemAddLink a.modal,
  .k2AccountPage button.button.validate {
    text-transform: <?php echo htmlspecialchars($button_text_transform); ?>;
  }
<?php } ?>
<?php // Vertical Menu Style Color
if ($vertical_menus_style_color) { ?>
  ul.menubasic li a:hover,
  ul.menubasic li a:focus,
  ul.menubasic li.current a,
  ul.menubasic li.current ul a:hover,
  ul.menubasic li.current ul a:focus,
  ul.menubasic li span.nav-header:hover,
  ul.menubasic li span.nav-header:focus {
    background-color: #<?php echo htmlspecialchars($vertical_menus_style_color); ?>;
    color: #fff;
  }
<?php } ?>
<?php // Vertical Menu Style Color
if ($vertical_menus_style_color) { ?>
  ul.menuarrow li a:hover,
  ul.menuarrow li a:focus,
  ul.menuarrow li.current a,
  ul.menuarrow li.current ul a:hover,
  ul.menuarrow li.current ul a:focus,
  ul.menuarrow li span.nav-header:hover,
  ul.menuarrow li span.nav-header:focus,
  ul.menuarrow li a:hover:before,
  ul.menuarrow li a:focus:before,
  ul.menuarrow li.current a:before,
  ul.menuarrow li.current ul a:hover:before,
  ul.menuarrow li.current ul a:focus:before,
  ul.menuarrow li span.nav-header:hover:before,
  ul.menuarrow li span.nav-header:focus:before,
  ul.menuside li a:hover,
  ul.menuside li a:focus,
  ul.menuside li.current a,
  ul.menuside li.current ul a:hover,
  ul.menuside li.current ul a:focus,
  ul.menuside li span.nav-header:hover,
  ul.menuside li span.nav-header:focus,
  ul.menuline li a:hover:before,
  ul.menuline li a:focus:before,
  ul.menuline li.current a:before,
  ul.menuline li.current ul a:hover:before,
  ul.menuline li.current ul a:focus:before,
  ul.menuline li span.nav-header:hover:before,
  ul.menuline li span.nav-header:focus:before {
    color: #<?php echo htmlspecialchars($vertical_menus_style_color); ?>;
  }
<?php } ?>
<?php // Vertical Menu Style Color
if ($vertical_menus_style_color) { ?>
  ul.menuside li a:hover,
  ul.menuside li a:focus,
  ul.menuside li.current a,
  ul.menuside li.current ul a:hover,
  ul.menuside li.current ul a:focus,
  ul.menuside li span.nav-header:hover,
  ul.menuside li span.nav-header:focus {
    border-left: 5px solid #<?php echo htmlspecialchars($vertical_menus_style_color); ?>;
  }
<?php } ?>
<?php // Vertical Menu Style Color
if ($vertical_menus_style_color) { ?>
  ul.menuline li a:hover,
  ul.menuline li a:focus,
  ul.menuline li.current a,
  ul.menuline li.current ul a:hover,
  ul.menuline li.current ul a:focus,
  ul.menuline li span.nav-header:hover,
  ul.menuline li span.nav-header:focus,
  ul.menuline.menu-clear li a:hover,
  ul.menuline.menu-clear li a:focus,
  ul.menuline.menu-clear li span.nav-header:hover,
  ul.menuline.menu-clear li span.nav-header:focus,
  ul.menuline.menu-dark li a:hover,
  ul.menuline.menu-dark li a:focus,
  ul.menuline.menu-dark li span.nav-header:hover,
  ul.menuline.menu-dark li span.nav-header:focus {
    border-bottom: 1px solid #<?php echo htmlspecialchars($vertical_menus_style_color); ?>;
  }
<?php } ?>
<?php // Vertical Menu Text Transform
if ($vertical_menus_text_transform) { ?>
  ul.menubasic li a,
  ul.menuarrow li a,
  ul.menuside li a,
  ul.menuline li a,
  ul.menubasic li span.nav-header,
  ul.menuarrow li span.nav-header,
  ul.menuside li span.nav-header,
  ul.menuline li span.nav-header  {
    text-transform: <?php echo htmlspecialchars($vertical_menus_text_transform); ?>;
  }
<?php } ?>
<?php // Horizontal Menu Style Color
if ($horizontal_menus_style_color) { ?>
  ul.menuhorizontal li.active a,
  ul.menuhorizontal li a:hover,
  ul.menuhorizontal li a:focus,
  ul.menuhorizontal li:hover a,
  ul.menuhorizontal li:focus a,
  ul.menuhorizontal li.active span.nav-header,
  ul.menuhorizontal li span.nav-header:hover,
  ul.menuhorizontal li span.nav-header:focus,
  ul.menuhorizontal li:hover span.nav-header,
  ul.menuhorizontal li:focus span.nav-header,
  ul.menuhorizontal li span.nav-header:hover,
  ul.menuhorizontal li span.nav-header:focus {
    color: #<?php echo htmlspecialchars($horizontal_menus_style_color); ?>!important;
  }
<?php } ?>
<?php // Horizontal Menu Clear Style Color
if ($horizontal_menus_style_color) { ?>
 ul.menuhorizontal.menu-clear li.active a,
  ul.menuhorizontal.menu-clear li a:hover,
  ul.menuhorizontal.menu-clear li a:focus,
  ul.menuhorizontal.menu-clear li:hover a,
  ul.menuhorizontal.menu-clear li:focus a,
  ul.menuhorizontal.menu-clear li.active span.nav-header,
  ul.menuhorizontal.menu-clear li span.nav-header:hover,
  ul.menuhorizontal.menu-clear li span.nav-header:focus,
  ul.menuhorizontal.menu-clear li:hover span.nav-header,
  ul.menuhorizontal.menu-clear li:focus span.nav-header,
  ul.menuhorizontal.menu-clear li span.nav-header:hover,
  ul.menuhorizontal.menu-clear li span.nav-header:focus,
  ul.menuhorizontal.menu-clear li.active a:before,
  ul.menuhorizontal.menu-clear li a:hover:before,
  ul.menuhorizontal.menu-clear li a:focus:before,
  ul.menuhorizontal.menu-clear li:hover a:before,
  ul.menuhorizontal.menu-clear li:focus a:before,
  ul.menuhorizontal.menu-clear li.active span.nav-header:before,
  ul.menuhorizontal.menu-clear li span.nav-header:hover:before,
  ul.menuhorizontal.menu-clear li span.nav-header:focus:before,
  ul.menuhorizontal.menu-clear li:hover span.nav-header:before,
  ul.menuhorizontal.menu-clear li:focus span.nav-header:before,
  ul.menuhorizontal.menu-clear li span.nav-header:hover:before,
  ul.menuhorizontal.menu-clear li span.nav-header:focus:before {
    color: #<?php echo htmlspecialchars($horizontal_menus_style_color); ?>!important;
  }
<?php } ?>
<?php // Horizontal Menu Dark Style Color
if ($horizontal_menus_style_color) { ?>
  ul.menuhorizontal.menu-dark li.active a,
  ul.menuhorizontal.menu-dark li a:hover,
  ul.menuhorizontal.menu-dark li a:focus,
  ul.menuhorizontal.menu-dark li:hover a,
  ul.menuhorizontal.menu-dark li:focus a,
  ul.menuhorizontal.menu-dark li.active span.nav-header,
  ul.menuhorizontal.menu-dark li span.nav-header:hover,
  ul.menuhorizontal.menu-dark li span.nav-header:focus,
  ul.menuhorizontal.menu-dark li:hover span.nav-header,
  ul.menuhorizontal.menu-dark li:focus span.nav-header,
  ul.menuhorizontal.menu-dark li span.nav-header:hover,
  ul.menuhorizontal.menu-dark li span.nav-header:focus,
  ul.menuhorizontal.menu-dark li.active a:before,
  ul.menuhorizontal.menu-dark li a:hover:before,
  ul.menuhorizontal.menu-dark li a:focus:before,
  ul.menuhorizontal.menu-dark li:hover a:before,
  ul.menuhorizontal.menu-dark li:focus a:before,
  ul.menuhorizontal.menu-dark li.active span.nav-header:before,
  ul.menuhorizontal.menu-dark li span.nav-header:hover:before,
  ul.menuhorizontal.menu-dark li span.nav-header:focus:before,
  ul.menuhorizontal.menu-dark li:hover span.nav-header:before,
  ul.menuhorizontal.menu-dark li:focus span.nav-header:before,
  ul.menuhorizontal.menu-dark li span.nav-header:hover:before,
  ul.menuhorizontal.menu-dark li span.nav-header:focus:before {
    color: #<?php echo htmlspecialchars($horizontal_menus_style_color); ?>!important;
  }
<?php } ?>
<?php // Horizontal Menu Right Style Color
if ($horizontal_menus_style_color) { ?>
  ul.menuhorizontal.pull-right li.active a,
  ul.menuhorizontal.pull-right li a:hover,
  ul.menuhorizontal.pull-right li a:focus,
  ul.menuhorizontal.pull-right li:hover a,
  ul.menuhorizontal.pull-right li:focus a,
  ul.menuhorizontal.pull-right li.active span.nav-header,
  ul.menuhorizontal.pull-right li span.nav-header:hover,
  ul.menuhorizontal.pull-right li span.nav-header:focus,
  ul.menuhorizontal.pull-right li:hover span.nav-header,
  ul.menuhorizontal.pull-right li:focus span.nav-header,
  ul.menuhorizontal.pull-right li span.nav-header:hover,
  ul.menuhorizontal.pull-right li span.nav-header:focus {
    color: #<?php echo htmlspecialchars($horizontal_menus_style_color); ?>!important;
  }
<?php } ?>
<?php // Horizontal Menu Right Clear Style Color
if ($horizontal_menus_style_color) { ?>
  ul.menuhorizontal-right.menu-clear li.active a,
  ul.menuhorizontal-right.menu-clear li a:hover,
  ul.menuhorizontal-right.menu-clear li a:focus,
  ul.menuhorizontal-right.menu-clear li:hover a,
  ul.menuhorizontal-right.menu-clear li:focus a,
  ul.menuhorizontal-right.menu-clear li span.nav-header:hover,
  ul.menuhorizontal-right.menu-clear li span.nav-header:focus,
  ul.menuhorizontal-right.menu-clear li.active a:before,
  ul.menuhorizontal-right.menu-clear li a:hover:before,
  ul.menuhorizontal-right.menu-clear li a:focus:before,
  ul.menuhorizontal-right.menu-clear li:hover a:before,
  ul.menuhorizontal-right.menu-clear li:focus a:before,
  ul.menuhorizontal-right.menu-clear li span.nav-header:hover:before,
  ul.menuhorizontal-right.menu-clear li span.nav-header:focus:before {
    color: #<?php echo htmlspecialchars($horizontal_menus_style_color); ?>!important;
  }
<?php } ?>
<?php // Horizontal Menu Right Dark Style Color
if ($horizontal_menus_style_color) { ?>
  ul.menuhorizontal-right.menu-dark li.active a,
  ul.menuhorizontal-right.menu-dark li a:hover,
  ul.menuhorizontal-right.menu-dark li a:focus,
  ul.menuhorizontal-right.menu-dark li:hover a,
  ul.menuhorizontal-right.menu-dark li:focus a,
  ul.menuhorizontal-right.menu-dark li span.nav-header:hover,
  ul.menuhorizontal-right.menu-dark li span.nav-header:focus,
  ul.menuhorizontal-right.menu-dark li.active a:before,
  ul.menuhorizontal-right.menu-dark li a:hover:before,
  ul.menuhorizontal-right.menu-dark li a:focus:before,
  ul.menuhorizontal-right.menu-dark li:hover a:before,
  ul.menuhorizontal-right.menu-dark li:focus a:before,
  ul.menuhorizontal-right.menu-dark li span.nav-header:hover:before,
  ul.menuhorizontal-right.menu-dark li span.nav-header:focus:before {
    color: #<?php echo htmlspecialchars($horizontal_menus_style_color); ?>!important;
  }
<?php } ?>
<?php // Horizontal Menu Right Color Style Color
if ($horizontal_menus_style_color) { ?>
  ul.menuhorizontal-right.menu-color li.active a,
  ul.menuhorizontal-right.menu-color li a:hover,
  ul.menuhorizontal-right.menu-color li a:focus,
  ul.menuhorizontal-right.menu-color li:hover a,
  ul.menuhorizontal-right.menu-color li:focus a,
  ul.menuhorizontal-right.menu-color li span.nav-header:hover,
  ul.menuhorizontal-right.menu-color li span.nav-header:focus,
  ul.menuhorizontal-right.menu-color li.active a:before,
  ul.menuhorizontal-right.menu-color li a:hover:before,
  ul.menuhorizontal-right.menu-color li a:focus:before,
  ul.menuhorizontal-right.menu-color li:hover a:before,
  ul.menuhorizontal-right.menu-color li:focus a:before,
  ul.menuhorizontal-right.menu-color li span.nav-header:hover:before,
  ul.menuhorizontal-right.menu-color li span.nav-header:focus:before {
    color: #<?php echo htmlspecialchars($horizontal_menus_style_color); ?>!important;
  }
<?php } ?>
<?php // Horizantal Menu Google Font
if ($horizontal_menus_google_font) { ?>
  ul.menuhorizontal li a,
  ul.menuhorizontal-right li a,
  ul.menuhorizontal li span.nav-header,
  ul.menuhorizontal-right li span.nav-header {
    font-family: '<?php echo str_replace('+', ' ', $this->params->get('horizontal_menus_google_font'));?>', sans-serif;
  }
<?php } ?>
<?php // Horizantal Menu Text Transform
if ($horizontal_menus_text_transform) { ?>
  ul.menuhorizontal li a,
  ul.menuhorizontal-right li a,
  ul.menuhorizontal li span.nav-header,
  ul.menuhorizontal-right li span.nav-header  {
    text-transform: <?php echo htmlspecialchars($horizontal_menus_text_transform); ?>;
  }
<?php } ?>
<?php
if ($list_style_color) { ?>
  ul.list-square li:before,
  ol.list-square li:before,
  ul.list-circle li:before,
  ol.list-circle li:before {
    background-color: #<?php echo htmlspecialchars($list_style_color); ?>;
  }
<?php } ?>
<?php // Offline Background Image
if ($offline_page_bg_image) { ?>
  #fav-offlinewrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($offline_page_bg_image); ?>);
  }
<?php } ?>
<?php // Offline Background Image Style
if ($offline_page_bg_image_style) { ?>
  #fav-offlinewrap {
    background-repeat: <?php echo htmlspecialchars($offline_page_bg_image_style); ?>;
  }
<?php } ?>
<?php // Responsive K2 Image
if ($responsive_k2_image) { ?>
  span.itemImage img,
  span.catItemImage img,
  span.tagItemImage img,
  span.userItemImage img,
  span.latestItemImage img,
  div.k2ItemsBlock ul li div.moduleItemIntrotext a.moduleItemImage img {
    width: <?php echo htmlspecialchars($responsive_k2_image); ?>;
  }
<?php } ?>
<?php // Body Background Image
if ($body_bg_image) { ?>
  #fav-containerwrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($body_bg_image); ?>);
  }
<?php } ?>
<?php // Body Background Image Style
if ($body_bg_image_style) { ?>
  #fav-containerwrap {
    background-repeat: <?php echo htmlspecialchars($body_bg_image_style); ?>;
  }
<?php } ?>
<?php // Body Background Color
if ($body_bg_color)  { ?>
  #fav-containerwrap {
    background-color: #<?php echo htmlspecialchars($body_bg_color); ?>;
  }
<?php } ?>
<?php // Body Color
if ($body_color) { ?>
  #fav-containerwrap p {
    color: #<?php echo htmlspecialchars($body_color); ?>;
  }
<?php } ?>
<?php // Body Title Color
if ($body_title_color) { ?>
  #fav-containerwrap .moduletable h3,
  #fav-containerwrap div[class^="moduletable-"] h3,
  #fav-containerwrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($body_title_color); ?>;
  }
<?php } ?>
<?php // Body Link Color
if ($body_link_color) { ?>
  #fav-containerwrap a {
    color: #<?php echo htmlspecialchars($body_link_color); ?>;
  }
<?php } ?>
<?php // Body Link Hover Color
if ($body_link_hover_color) { ?>
  #fav-containerwrap a:hover {
    color: #<?php echo htmlspecialchars($body_link_hover_color); ?>;
  }
<?php } ?>
<?php // Advert Background Color
if ($advert_bg_color)  { ?>
  #fav-advertwrap {
    background-color: #<?php echo htmlspecialchars($advert_bg_color); ?>;
  }
<?php } ?>
<?php // Advert Color
if ($advert_color) { ?>
  #fav-advertwrap p {
    color: #<?php echo htmlspecialchars($advert_color); ?>;
  }
<?php } ?>
<?php // Advert Title Color
if ($advert_title_color) { ?>
  #fav-advertwrap .moduletable h3,
  #fav-advertwrap div[class^="moduletable-"] h3,
  #fav-advertwrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($advert_title_color); ?>;
  }
<?php } ?>
<?php // Advert Link Color
if ($advert_link_color) { ?>
  #fav-advertwrap a {
    color: #<?php echo htmlspecialchars($advert_link_color); ?>;
  }
<?php } ?>
<?php // Advert Link Hover Color
if ($advert_link_hover_color) { ?>
  #fav-advertwrap a:hover {
    color: #<?php echo htmlspecialchars($advert_link_hover_color); ?>;
  }
<?php } ?>
<?php // Topbar Background Image
if ($topbar_bg_image) { ?>
  #fav-topbarwrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($topbar_bg_image); ?>);
  }
<?php } ?>
<?php // Topbar Background Image Style
if ($topbar_bg_image_style) { ?>
  #fav-topbarwrap {
    background-repeat: <?php echo htmlspecialchars($topbar_bg_image_style); ?>;
  }
<?php } ?>
<?php // Topbar Background Color
if ($topbar_bg_color)  { ?>
  #fav-topbarwrap {
    background-color: #<?php echo htmlspecialchars($topbar_bg_color); ?>;
  }
<?php } ?>
<?php // Topbar Color
if ($topbar_color) { ?>
  #fav-topbarwrap p {
    color: #<?php echo htmlspecialchars($topbar_color); ?>;
  }
<?php } ?>
<?php // Topbar Title Color
if ($topbar_title_color) { ?>
  #fav-topbarwrap .moduletable h3,
  #fav-topbarwrap div[class^="moduletable-"] h3,
  #fav-topbarwrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($topbar_title_color); ?>;
  }
<?php } ?>
<?php // Topbar Link Color
if ($topbar_link_color) { ?>
  #fav-topbarwrap a {
    color: #<?php echo htmlspecialchars($topbar_link_color); ?>;
  }
<?php } ?>
<?php // Topbar Link Hover Color
if ($topbar_link_hover_color) { ?>
  #fav-topbarwrap a:hover {
    color: #<?php echo htmlspecialchars($topbar_link_hover_color); ?>;
  }
<?php } ?>
<?php // Topbarmobile Background Image
if ($topbarmobile_bg_image) { ?>
  #fav-topbarmobilewrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($topbarmobile_bg_image); ?>);
  }
<?php } ?>
<?php // Topbarmobile Background Image Style
if ($topbarmobile_bg_image_style) { ?>
  #fav-topbarmobilewrap {
    background-repeat: <?php echo htmlspecialchars($topbarmobile_bg_image_style); ?>;
  }
<?php } ?>
<?php // Topbarmobile Background Color
if ($topbarmobile_bg_color)  { ?>
  #fav-topbarmobilewrap {
    background-color: #<?php echo htmlspecialchars($topbarmobile_bg_color); ?>;
  }
<?php } ?>
<?php // Topbarmobile Color
if ($topbarmobile_color) { ?>
  #fav-topbarmobilewrap p {
    color: #<?php echo htmlspecialchars($topbarmobile_color); ?>;
  }
<?php } ?>
<?php // Topbarmobile Title Color
if ($topbarmobile_title_color) { ?>
  #fav-topbarmobilewrap .moduletable h3,
  #fav-topbarmobilewrap div[class^="moduletable-"] h3,
  #fav-topbarmobilewrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($topbarmobile_title_color); ?>;
  }
<?php } ?>
<?php // Topbarmobile Link Color
if ($topbarmobile_link_color) { ?>
  #fav-topbarmobilewrap a {
    color: #<?php echo htmlspecialchars($topbarmobile_link_color); ?>;
  }
<?php } ?>
<?php // Topbarmobile Link Hover Color
if ($topbarmobile_link_hover_color) { ?>
  #fav-topbarmobilewrap a:hover {
    color: #<?php echo htmlspecialchars($topbarmobile_link_hover_color); ?>;
  }
<?php } ?>
<?php // Slide Width
if ($slide_width) { ?>
  #fav-slidewrap .row-fluid {
    max-width: <?php echo htmlspecialchars($slide_width); ?>;
  }
<?php } ?>
<?php // Slide Background Image
if ($slide_bg_image) { ?>
  #fav-slidewrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($slide_bg_image); ?>);
  }
<?php } ?>
<?php // Slide Background Image Style
if ($slide_bg_image_style) { ?>
  #fav-slidewrap {
    background-repeat: <?php echo htmlspecialchars($slide_bg_image_style); ?>;
  }
<?php } ?>
<?php // Slide Background Color
if ($slide_bg_color)  { ?>
  #fav-slidewrap {
    background-color: #<?php echo htmlspecialchars($slide_bg_color); ?>;
  }
<?php } ?>
<?php // Slide Color
if ($slide_color) { ?>
  #fav-slidewrap p {
    color: #<?php echo htmlspecialchars($slide_color); ?>;
  }
<?php } ?>
<?php // Slide Title Color
if ($slide_title_color) { ?>
  #fav-slidewrap .moduletable h3,
  #fav-slidewrap div[class^="moduletable-"] h3,
  #fav-slidewrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($slide_title_color); ?>;
  }
<?php } ?>
<?php // Slide Link Color
if ($slide_link_color) { ?>
  #fav-slidewrap a {
    color: #<?php echo htmlspecialchars($slide_link_color); ?>;
  }
<?php } ?>
<?php // Slide Link Hover Color
if ($slide_link_hover_color) { ?>
  #fav-slidewrap a:hover {
    color: #<?php echo htmlspecialchars($slide_link_hover_color); ?>;
  }
<?php } ?>
<?php // Intro Background Image
if ($intro_bg_image) { ?>
  #fav-introwrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($intro_bg_image); ?>);
  }
<?php } ?>
<?php // Intro Background Image Style
if ($intro_bg_image_style) { ?>
  #fav-introwrap {
    background-repeat: <?php echo htmlspecialchars($intro_bg_image_style); ?>;
  }
<?php } ?>
<?php // Intro Background Color
if ($intro_bg_color)  { ?>
  #fav-introwrap {
    background-color: #<?php echo htmlspecialchars($intro_bg_color); ?>;
  }
<?php } ?>
<?php // Intro Color
if ($intro_color) { ?>
  #fav-introwrap p {
    color: #<?php echo htmlspecialchars($intro_color); ?>;
  }
<?php } ?>
<?php // Intro Title Color
if ($intro_title_color) { ?>
  #fav-introwrap .moduletable h3,
  #fav-introwrap div[class^="moduletable-"] h3,
  #fav-introwrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($intro_title_color); ?>;
  }
<?php } ?>
<?php // Intro Link Color
if ($intro_link_color) { ?>
  #fav-introwrap a {
    color: #<?php echo htmlspecialchars($intro_link_color); ?>;
  }
<?php } ?>
<?php // Intro Link Hover Color
if ($intro_link_hover_color) { ?>
  #fav-introwrap a:hover {
    color: #<?php echo htmlspecialchars($intro_link_hover_color); ?>;
  }
<?php } ?>
<?php // Lead Background Image
if ($lead_bg_image) { ?>
  #fav-leadwrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($lead_bg_image); ?>);
  }
<?php } ?>
<?php // Lead Background Image Style
if ($lead_bg_image_style) { ?>
  #fav-leadwrap {
    background-repeat: <?php echo htmlspecialchars($lead_bg_image_style); ?>;
  }
<?php } ?>
<?php // Lead Background Color
if ($lead_bg_color)  { ?>
  #fav-leadwrap {
    background-color: #<?php echo htmlspecialchars($lead_bg_color); ?>;
  }
<?php } ?>
<?php // Lead Color
if ($lead_color) { ?>
  #fav-leadwrap p {
    color: #<?php echo htmlspecialchars($lead_color); ?>;
  }
<?php } ?>
<?php // Lead Title Color
if ($lead_title_color) { ?>
  #fav-leadwrap .moduletable h3,
  #fav-leadwrap div[class^="moduletable-"] h3,
  #fav-leadwrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($lead_title_color); ?>;
  }
<?php } ?>
<?php // Lead Link Color
if ($lead_link_color) { ?>
  #fav-leadwrap a {
    color: #<?php echo htmlspecialchars($lead_link_color); ?>;
  }
<?php } ?>
<?php // Lead Link Hover Color
if ($lead_link_hover_color) { ?>
  #fav-leadwrap a:hover {
    color: #<?php echo htmlspecialchars($lead_link_hover_color); ?>;
  }
<?php } ?>
<?php // Promo Background Image
if ($promo_bg_image) { ?>
  #fav-promowrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($promo_bg_image); ?>);
  }
<?php } ?>
<?php // Promo Background Image Style
if ($promo_bg_image_style) { ?>
  #fav-promowrap {
    background-repeat: <?php echo htmlspecialchars($promo_bg_image_style); ?>;
  }
<?php } ?>
<?php // Promo Background Color
if ($promo_bg_color)  { ?>
  #fav-promowrap {
    background-color: #<?php echo htmlspecialchars($promo_bg_color); ?>;
  }
<?php } ?>
<?php // Promo _color
if ($promo_color) { ?>
  #fav-promowrap p {
    color: #<?php echo htmlspecialchars($promo_color); ?>;
  }
<?php } ?>
<?php // Promo Title Color
if ($promo_title_color) { ?>
  #fav-promowrap .moduletable h3,
  #fav-promowrap div[class^="moduletable-"] h3,
  #fav-promowrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($promo_title_color); ?>;
  }
<?php } ?>
<?php // Promo Link Color
if ($promo_link_color) { ?>
  #fav-promowrap a {
    color: #<?php echo htmlspecialchars($promo_link_color); ?>;
  }
<?php } ?>
<?php // Promo Link Hover Color
if ($promo_link_hover_color) { ?>
  #fav-promowrap a:hover {
    color: #<?php echo htmlspecialchars($promo_link_hover_color); ?>;
  }
<?php } ?>
<?php // Prime Background Image
if ($prime_bg_image) { ?>
  #fav-primewrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($prime_bg_image); ?>);
  }
<?php } ?>
<?php // Prime Background Image Style
if ($prime_bg_image_style) { ?>
  #fav-primewrap {
    background-repeat: <?php echo htmlspecialchars($prime_bg_image_style); ?>;
  }
<?php } ?>
<?php // Prime Background Color
if ($prime_bg_color)  { ?>
  #fav-primewrap {
    background-color: #<?php echo htmlspecialchars($prime_bg_color); ?>;
  }
<?php } ?>
<?php // Prime Color
if ($prime_color) { ?>
  #fav-primewrap p {
    color: #<?php echo htmlspecialchars($prime_color); ?>;
  }
<?php } ?>
<?php // Prime Title Color
if ($prime_title_color) { ?>
  #fav-primewrap .moduletable h3,
  #fav-primewrap div[class^="moduletable-"] h3,
  #fav-primewrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($prime_title_color); ?>;
  }
<?php } ?>
<?php // Prime Link Color
if ($prime_link_color) { ?>
  #fav-primewrap a {
    color: #<?php echo htmlspecialchars($prime_link_color); ?>;
  }
<?php } ?>
<?php // Prime Link Hover Color
if ($prime_link_hover_color) { ?>
  #fav-primewrap a:hover {
    color: #<?php echo htmlspecialchars($prime_link_hover_color); ?>;
  }
<?php } ?>
<?php // Showcase Background Image
if ($showcase_bg_image) { ?>
  #fav-showcasewrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($showcase_bg_image); ?>);
  }
<?php } ?>
<?php // Showcase Background Image Style
if ($showcase_bg_image_style) { ?>
  #fav-showcasewrap {
    background-repeat: <?php echo htmlspecialchars($showcase_bg_image_style); ?>;
  }
<?php } ?>
<?php // Showcase Background Color
if ($showcase_bg_color)  { ?>
  #fav-showcasewrap {
    background-color: #<?php echo htmlspecialchars($showcase_bg_color); ?>;
  }
<?php } ?>
<?php // Showcase Color
if ($showcase_color) { ?>
  #fav-showcasewrap p {
    color: #<?php echo htmlspecialchars($showcase_color); ?>;
  }
<?php } ?>
<?php // Showcase Title Color
if ($showcase_title_color) { ?>
  #fav-showcasewrap .moduletable h3,
  #fav-showcasewrap div[class^="moduletable-"] h3,
  #fav-showcasewrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($showcase_title_color); ?>;
  }
<?php } ?>
<?php // Showcase Link Color
if ($showcase_link_color) { ?>
  #fav-showcasewrap a {
    color: #<?php echo htmlspecialchars($showcase_link_color); ?>;
  }
<?php } ?>
<?php // Showcase Link Hover Color
if ($showcase_link_hover_color) { ?>
  #fav-showcasewrap a:hover {
    color: #<?php echo htmlspecialchars($showcase_link_hover_color); ?>;
  }
<?php } ?>
<?php // Feature Background Image
if ($feature_bg_image) { ?>
  #fav-featurewrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($feature_bg_image); ?>);
  }
<?php } ?>
<?php // Feature Background Image Style
if ($feature_bg_image_style) { ?>
  #fav-featurewrap {
    background-repeat: <?php echo htmlspecialchars($feature_bg_image_style); ?>;
  }
<?php } ?>
<?php // Feature Background Color
if ($feature_bg_color)  { ?>
  #fav-featurewrap {
    background-color: #<?php echo htmlspecialchars($feature_bg_color); ?>;
  }
<?php } ?>
<?php // Feature Color
if ($feature_color) { ?>
  #fav-featurewrap p {
    color: #<?php echo htmlspecialchars($feature_color); ?>;
  }
<?php } ?>
<?php // Feature Title Color
if ($feature_title_color) { ?>
  #fav-featurewrap .moduletable h3,
  #fav-featurewrap div[class^="moduletable-"] h3,
  #fav-featurewrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($feature_title_color); ?>;
  }
<?php } ?>
<?php // Feature Link Color
if ($feature_link_color) { ?>
  #fav-featurewrap a {
    color: #<?php echo htmlspecialchars($feature_link_color); ?>;
  }
<?php } ?>
<?php // Feature Link Hover Color
if ($feature_link_hover_color) { ?>
  #fav-featurewrap a:hover {
    color: #<?php echo htmlspecialchars($feature_link_hover_color); ?>;
  }
<?php } ?>
<?php // Focus Background Image
if ($focus_bg_image) { ?>
  #fav-focuswrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($focus_bg_image); ?>);
  }
<?php } ?>
<?php // Focus Background Image Style
if ($focus_bg_image_style) { ?>
  #fav-focuswrap {
    background-repeat: <?php echo htmlspecialchars($focus_bg_image_style); ?>;
  }
<?php } ?>
<?php // Focus Background Color
if ($focus_bg_color)  { ?>
  #fav-focuswrap {
    background-color: #<?php echo htmlspecialchars($focus_bg_color); ?>;
  }
<?php } ?>
<?php // Focus Color
if ($focus_color) { ?>
  #fav-focuswrap p {
    color: #<?php echo htmlspecialchars($focus_color); ?>;
  }
<?php } ?>
<?php // Focus Title Color
if ($focus_title_color) { ?>
  #fav-focuswrap .moduletable h3,
  #fav-focuswrap div[class^="moduletable-"] h3,
  #fav-focuswrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($focus_title_color); ?>;
  }
<?php } ?>
<?php // Focus Link Color
if ($focus_link_color) { ?>
  #fav-focuswrap a {
    color: #<?php echo htmlspecialchars($focus_link_color); ?>;
  }
<?php } ?>
<?php // Focus Link Hover Color
if ($focus_link_hover_color) { ?>
  #fav-focuswrap a:hover {
    color: #<?php echo htmlspecialchars($focus_link_hover_color); ?>;
  }
<?php } ?>
<?php // Portfolio Background Image
if ($portfolio_bg_image) { ?>
  #fav-portfoliowrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($portfolio_bg_image); ?>);
  }
<?php } ?>
<?php // Portfolio Background Image Style
if ($portfolio_bg_image_style) { ?>
  #fav-portfoliowrap {
    background-repeat: <?php echo htmlspecialchars($portfolio_bg_image_style); ?>;
  }
<?php } ?>
<?php // Portfolio Background Color
if ($portfolio_bg_color)  { ?>
  #fav-portfoliowrap {
    background-color: #<?php echo htmlspecialchars($portfolio_bg_color); ?>;
  }
<?php } ?>
<?php // Portfolio Color
if ($portfolio_color) { ?>
  #fav-portfoliowrap p {
    color: #<?php echo htmlspecialchars($portfolio_color); ?>;
  }
<?php } ?>
<?php // Portfolio Title Color
if ($portfolio_title_color) { ?>
  #fav-portfoliowrap .moduletable h3,
  #fav-portfoliowrap div[class^="moduletable-"] h3,
  #fav-portfoliowrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($portfolio_title_color); ?>;
  }
<?php } ?>
<?php // Portfolio Link Color
if ($portfolio_link_color) { ?>
  #fav-portfoliowrap a {
    color: #<?php echo htmlspecialchars($portfolio_link_color); ?>;
  }
<?php } ?>
<?php // Portfolio Link Hover Color
if ($portfolio_link_hover_color) { ?>
  #fav-portfoliowrap a:hover {
    color: #<?php echo htmlspecialchars($portfolio_link_hover_color); ?>;
  }
<?php } ?>
<?php // Screen Background Image
if ($screen_bg_image) { ?>
  #fav-screenwrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($screen_bg_image); ?>);
  }
<?php } ?>
<?php // Screen Background Image Style
if ($screen_bg_image_style) { ?>
  #fav-screenwrap {
    background-repeat: <?php echo htmlspecialchars($screen_bg_image_style); ?>;
  }
<?php } ?>
<?php // Screen Background Color
if ($screen_bg_color)  { ?>
  #fav-screenwrap {
    background-color: #<?php echo htmlspecialchars($screen_bg_color); ?>;
  }
<?php } ?>
<?php // Screen Color
if ($screen_color) { ?>
  #fav-screenwrap p {
    color: #<?php echo htmlspecialchars($screen_color); ?>;
  }
<?php } ?>
<?php // Screen Title Color
if ($screen_title_color) { ?>
  #fav-screenwrap .moduletable h3,
  #fav-screenwrap div[class^="moduletable-"] h3,
  #fav-screenwrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($screen_title_color); ?>;
  }
<?php } ?>
<?php // Screen Link Color
if ($screen_link_color) { ?>
  #fav-screenwrap a {
    color: #<?php echo htmlspecialchars($screen_link_color); ?>;
  }
<?php } ?>
<?php // Screen Link Hover Color
if ($screen_link_hover_color) { ?>
  #fav-screenwrap a:hover {
    color: #<?php echo htmlspecialchars($screen_link_hover_color); ?>;
  }
<?php } ?>
<?php // Top Background Image
if ($top_bg_image) { ?>
  #fav-topwrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($top_bg_image); ?>);
  }
<?php } ?>
<?php // Top Background Image Style
if ($top_bg_image_style) { ?>
  #fav-topwrap {
    background-repeat: <?php echo htmlspecialchars($top_bg_image_style); ?>;
  }
<?php } ?>
<?php // Top Background Color
if ($top_bg_color)  { ?>
  #fav-topwrap {
    background-color: #<?php echo htmlspecialchars($top_bg_color); ?>;
  }
<?php } ?>
<?php // Top Color
if ($top_color) { ?>
  #fav-topwrap p {
    color: #<?php echo htmlspecialchars($top_color); ?>;
  }
<?php } ?>
<?php // Top Title Color
if ($top_title_color) { ?>
  #fav-topwrap .moduletable h3,
  #fav-topwrap div[class^="moduletable-"] h3,
  #fav-topwrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($top_title_color); ?>;
  }
<?php } ?>
<?php // Top Link Color
if ($top_link_color) { ?>
  #fav-topwrap a {
    color: #<?php echo htmlspecialchars($top_link_color); ?>;
  }
<?php } ?>
<?php // Top Link Hover Color
if ($top_link_hover_color) { ?>
  #fav-topwrap a:hover {
    color: #<?php echo htmlspecialchars($top_link_hover_color); ?>;
  }
<?php } ?>
<?php // Mainmaintop Background Image
if ($maintop_bg_image) { ?>
  #fav-maintopwrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($maintop_bg_image); ?>);
  }
<?php } ?>
<?php // Mainmaintop Background Image Style
if ($maintop_bg_image_style) { ?>
  #fav-maintopwrap {
    background-repeat: <?php echo htmlspecialchars($maintop_bg_image_style); ?>;
  }
<?php } ?>
<?php // Mainmaintop Background Color
if ($maintop_bg_color)  { ?>
  #fav-maintopwrap {
    background-color: #<?php echo htmlspecialchars($maintop_bg_color); ?>;
  }
<?php } ?>
<?php // Mainmaintop Color
if ($maintop_color) { ?>
  #fav-maintopwrap p {
    color: #<?php echo htmlspecialchars($maintop_color); ?>;
  }
<?php } ?>
<?php // Mainmaintop Title Color
if ($maintop_title_color) { ?>
  #fav-maintopwrap .moduletable h3,
  #fav-maintopwrap div[class^="moduletable-"] h3,
  #fav-maintopwrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($maintop_title_color); ?>;
  }
<?php } ?>
<?php // Mainmaintop Link Color
if ($maintop_link_color) { ?>
  #fav-maintopwrap a {
    color: #<?php echo htmlspecialchars($maintop_link_color); ?>;
  }
<?php } ?>
<?php // Mainmaintop Link Hover Color
if ($maintop_link_hover_color) { ?>
  #fav-maintopwrap a:hover {
    color: #<?php echo htmlspecialchars($maintop_link_hover_color); ?>;
  }
<?php } ?>
<?php // Mainbottom Background Image
if ($mainbottom_bg_image) { ?>
  #fav-mainbottomwrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($mainbottom_bg_image); ?>);
  }
<?php } ?>
<?php // Mainbottom Background Image Style
if ($mainbottom_bg_image_style) { ?>
  #fav-mainbottomwrap {
    background-repeat: <?php echo htmlspecialchars($mainbottom_bg_image_style); ?>;
  }
<?php } ?>
<?php // Mainbottom Background Color
if ($mainbottom_bg_color)  { ?>
  #fav-mainbottomwrap {
    background-color: #<?php echo htmlspecialchars($mainbottom_bg_color); ?>;
  }
<?php } ?>
<?php // Mainbottom Color
if ($mainbottom_color) { ?>
  #fav-mainbottomwrap p {
    color: #<?php echo htmlspecialchars($mainbottom_color); ?>;
  }
<?php } ?>
<?php // Mainbottom Title Color
if ($mainbottom_title_color) { ?>
  #fav-mainbottomwrap .moduletable h3,
  #fav-mainbottomwrap div[class^="moduletable-"] h3,
  #fav-mainbottomwrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($mainbottom_title_color); ?>;
  }
<?php } ?>
<?php // Mainbottom Link Color
if ($mainbottom_link_color) { ?>
  #fav-mainbottomwrap a {
    color: #<?php echo htmlspecialchars($mainbottom_link_color); ?>;
  }
<?php } ?>
<?php // Mainbottom Link Hover Color
if ($mainbottom_link_hover_color) { ?>
  #fav-mainbottomwrap a:hover {
    color: #<?php echo htmlspecialchars($mainbottom_link_hover_color); ?>;
  }
<?php } ?>
<?php // Bottom Background Image
if ($bottom_bg_image) { ?>
  #fav-bottomwrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($bottom_bg_image); ?>);
  }
<?php } ?>
<?php // Bottom Background Image Style
if ($bottom_bg_image_style) { ?>
  #fav-bottomwrap {
    background-repeat: <?php echo htmlspecialchars($bottom_bg_image_style); ?>;
  }
<?php } ?>
<?php // Bottom Background Color
if ($bottom_bg_color)  { ?>
  #fav-bottomwrap {
    background-color: #<?php echo htmlspecialchars($bottom_bg_color); ?>;
  }
<?php } ?>
<?php // Bottom Color
if ($bottom_color) { ?>
  #fav-bottomwrap p {
    color: #<?php echo htmlspecialchars($bottom_color); ?>;
  }
<?php } ?>
<?php // Bottom Title Color
if ($bottom_title_color) { ?>
  #fav-bottomwrap .moduletable h3,
  #fav-bottomwrap div[class^="moduletable-"] h3,
  #fav-bottomwrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($bottom_title_color); ?>;
  }
<?php } ?>
<?php // Bottom Link Color
if ($bottom_link_color) { ?>
  #fav-bottomwrap a {
    color: #<?php echo htmlspecialchars($bottom_link_color); ?>;
  }
<?php } ?>
<?php // Bottom Link Hover Color
if ($bottom_link_hover_color) { ?>
  #fav-bottomwrap a:hover {
    color: #<?php echo htmlspecialchars($bottom_link_hover_color); ?>;
  }
<?php } ?>
<?php // Note Background Image
if ($note_bg_image) { ?>
  #fav-notewrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($note_bg_image); ?>);
  }
<?php } ?>
<?php // Note Background Image Style
if ($note_bg_image_style) { ?>
  #fav-notewrap {
    background-repeat: <?php echo htmlspecialchars($note_bg_image_style); ?>;
  }
<?php } ?>
<?php // Note Background Color
if ($note_bg_color)  { ?>
  #fav-notewrap {
    background-color: #<?php echo htmlspecialchars($note_bg_color); ?>;
  }
<?php } ?>
<?php // Note Color
if ($note_color) { ?>
  #fav-notewrap p {
    color: #<?php echo htmlspecialchars($note_color); ?>;
  }
<?php } ?>
<?php // Note Title Color
if ($note_title_color) { ?>
  #fav-notewrap .moduletable h3,
  #fav-notewrap div[class^="moduletable-"] h3,
  #fav-notewrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($note_title_color); ?>;
  }
<?php } ?>
<?php // Note Link Color
if ($note_link_color) { ?>
  #fav-notewrap a {
    color: #<?php echo htmlspecialchars($note_link_color); ?>;
  }
<?php } ?>
<?php // Note Link Hover Color
if ($note_link_hover_color) { ?>
  #fav-notewrap a:hover {
    color: #<?php echo htmlspecialchars($note_link_hover_color); ?>;
  }
<?php } ?>
<?php // Base Background Image
if ($base_bg_image) { ?>
  #fav-basewrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($base_bg_image); ?>);
  }
<?php } ?>
<?php // Base Background Image Style
if ($base_bg_image_style) { ?>
  #fav-basewrap {
    background-repeat: <?php echo htmlspecialchars($base_bg_image_style); ?>;
  }
<?php } ?>
<?php // Base Background Color
if ($base_bg_color)  { ?>
  #fav-basewrap {
    background-color: #<?php echo htmlspecialchars($base_bg_color); ?>;
  }
<?php } ?>
<?php // Base Color
if ($base_color) { ?>
  #fav-basewrap p {
    color: #<?php echo htmlspecialchars($base_color); ?>;
  }
<?php } ?>
<?php // Base Title Color
if ($base_title_color) { ?>
  #fav-basewrap .moduletable h3,
  #fav-basewrap div[class^="moduletable-"] h3,
  #fav-basewrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($base_title_color); ?>;
  }
<?php } ?>
<?php // Base Link Color
if ($base_link_color) { ?>
  #fav-basewrap a {
    color: #<?php echo htmlspecialchars($base_link_color); ?>;
  }
<?php } ?>
<?php // Base Link Hover Color
if ($base_link_hover_color) { ?>
  #fav-basewrap a:hover {
    color: #<?php echo htmlspecialchars($base_link_hover_color); ?>;
  }
<?php } ?>
<?php // Block Background Image
if ($block_bg_image) { ?>
  #fav-blockwrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($block_bg_image); ?>);
  }
<?php } ?>
<?php // Block Background Image Style
if ($block_bg_image_style) { ?>
  #fav-blockwrap {
    background-repeat: <?php echo htmlspecialchars($block_bg_image_style); ?>;
  }
<?php } ?>
<?php // Block Background Color
if ($block_bg_color)  { ?>
  #fav-blockwrap {
    background-color: #<?php echo htmlspecialchars($block_bg_color); ?>;
  }
<?php } ?>
<?php // Block Color
if ($block_color) { ?>
  #fav-blockwrap p {
    color: #<?php echo htmlspecialchars($block_color); ?>;
  }
<?php } ?>
<?php // Block Title Color
if ($block_title_color) { ?>
  #fav-blockwrap .moduletable h3,
  #fav-blockwrap div[class^="moduletable-"] h3,
  #fav-blockwrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($block_title_color); ?>;
  }
<?php } ?>
<?php // Block Link Color
if ($block_link_color) { ?>
  #fav-blockwrap a {
    color: #<?php echo htmlspecialchars($block_link_color); ?> ;
  }
<?php } ?>
<?php // Block Link Hover Color
if ($block_link_hover_color) { ?>
  #fav-blockwrap a:hover {
    color: #<?php echo htmlspecialchars($block_link_hover_color); ?>;
  }
<?php } ?>
<?php // User Background Image
if ($user_bg_image) { ?>
  #fav-userwrap {
    background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($user_bg_image); ?>);
  }
<?php } ?>
<?php // User Background Image Style
if ($user_bg_image_style) { ?>
  #fav-userwrap {
    background-repeat: <?php echo htmlspecialchars($user_bg_image_style); ?>;
  }
<?php } ?>
<?php // User Background Color
if ($user_bg_color)  { ?>
  #fav-userwrap {
    background-color: #<?php echo htmlspecialchars($user_bg_color); ?>;
  }
<?php } ?>
<?php // User Color
if ($user_color) { ?>
  #fav-userwrap p {
    color: #<?php echo htmlspecialchars($user_color); ?>;
  }
<?php } ?>
<?php // User Title Color
if ($user_title_color) { ?>
  #fav-userwrap .moduletable h3,
  #fav-userwrap div[class^="moduletable-"] h3,
  #fav-userwrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($user_title_color); ?>;
  }
<?php } ?>
<?php // User Link Color
if ($user_link_color) { ?>
  #fav-userwrap a {
    color: #<?php echo htmlspecialchars($user_link_color); ?>;
  }
<?php } ?>
<?php // User Link Hover Color
if ($user_link_hover_color) { ?>
  #fav-userwrap a:hover {
    color: #<?php echo htmlspecialchars($user_link_hover_color); ?>;
  }
<?php } ?>
<?php // Footer Background Image
if ($footer_bg_image) { ?>
  #fav-footerwrap {
    background-image: url(<?php echo $this->footerurl."/"; echo htmlspecialchars($footer_bg_image); ?>);
  }
<?php } ?>
<?php // Footer Background Image Style
if ($footer_bg_image_style) { ?>
  #fav-footerwrap {
    background-repeat: <?php echo htmlspecialchars($footer_bg_image_style); ?>;
  }
<?php } ?>
<?php // Footer Background Color
if ($footer_bg_color)  { ?>
  #fav-footerwrap {
    background-color: #<?php echo htmlspecialchars($footer_bg_color); ?>;
  }
<?php } ?>
<?php // Footer Color
if ($footer_color) { ?>
  #fav-footerwrap p {
    color: #<?php echo htmlspecialchars($footer_color); ?>;
  }
<?php } ?>
<?php // Footer Title Color
if ($footer_title_color) { ?>
  #fav-footerwrap .moduletable h3,
  #fav-footerwrap div[class^="moduletable-"] h3,
  #fav-footerwrap div[class*=" moduletable-"] h3 {
    color: #<?php echo htmlspecialchars($footer_title_color); ?>;
  }
<?php } ?>
<?php // Footer Link Color
if ($footer_link_color) { ?>
  #fav-footerwrap a {
    color: #<?php echo htmlspecialchars($footer_link_color); ?>;
  }
<?php } ?>
<?php // Footer Link Hover Color
if ($footer_link_hover_color) { ?>
  #fav-footerwrap a:hover {
    color: #<?php echo htmlspecialchars($footer_link_hover_color); ?>;
  }
<?php } ?>
<?php // Logo Padding
if ($default_logo_padding) { ?>
  .default-logo {
    padding: <?php echo htmlspecialchars($default_logo_padding); ?>;
  }
<?php } ?>
<?php // Logo Margin
if ($default_logo_margin) { ?>
  .default-logo {
    margin: <?php echo htmlspecialchars($default_logo_margin); ?>;
  }
<?php } ?>
<?php // Uploaded Logo Padding
if ($media_logo_padding) { ?>
  .media-logo {
    padding: <?php echo htmlspecialchars($media_logo_padding); ?>;
  }
<?php } ?>
<?php // Uploaded Logo Margin
if ($media_logo_margin) { ?>
  .media-logo {
    margin: <?php echo htmlspecialchars($media_logo_margin); ?>;
  }
<?php } ?>
<?php // Text Logo Color
if ($text_logo_color) { ?>
  .text-logo,
  .text-logo:hover,
  .text-logo:focus {
    color: #<?php echo htmlspecialchars($text_logo_color); ?>;
  }
<?php } ?>
<?php // Text Logo Font Size
if ($text_logo_font_size) { ?>
  .text-logo {
    font-size: <?php echo htmlspecialchars($text_logo_font_size); ?>;
  }
<?php } ?>
<?php // Text Logo Google Font
if ($text_logo_google_font) { ?>
  .text-logo {
    font-family: '<?php echo str_replace('+', ' ', $this->params->get('text_logo_google_font'));?>', sans-serif;
    font-weight: 400;
  }
<?php } ?>
<?php // Text Logo Line Height
if ($text_logo_line_height) { ?>
  .text-logo {
    line-height: <?php echo htmlspecialchars($text_logo_line_height); ?> ;
  }
<?php } ?>
<?php // Text Logo Padding
if ($text_logo_padding) { ?>
  .text-logo {
    padding: <?php echo htmlspecialchars($text_logo_padding); ?>;
  }
<?php } ?>
<?php // Text Logo Margin
if ($text_logo_margin) { ?>
  .text-logo {
    margin: <?php echo htmlspecialchars($text_logo_margin); ?>;
  }
<?php } ?>
<?php // Slogan Logo Color
if ($slogan_color) { ?>
  .slogan {
    color: #<?php echo htmlspecialchars($slogan_color); ?>;
  }
<?php } ?>
<?php // Slogan Logo Font Size
if ($slogan_font_size) { ?>
  .slogan {
    font-size: <?php echo htmlspecialchars($slogan_font_size); ?>;
  }
<?php } ?>
<?php // Slogan Logo Line Height
if ($slogan_line_height) { ?>
  .slogan {
    line-height: <?php echo htmlspecialchars($slogan_line_height); ?>;
  }
<?php } ?>
<?php // Slogan Logo Padding
if ($slogan_padding) { ?>
  .slogan {
    padding: <?php echo htmlspecialchars($slogan_padding); ?>;
  }
<?php } ?>
<?php // Slogan Logo Margin
if ($slogan_margin) { ?>
  .slogan {
    margin: <?php echo htmlspecialchars($slogan_margin); ?>;
  }
<?php } ?>
<?php if (($show_retina_logo) !=0) { // Mobile Retina Logo ?>
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .show_retina_logo { display: block; }
      .default_logo, .media_logo, .text_logo { display: none;}
  }
<?php } ?>
<?php // Retina Logo Height
if ($retina_logo_height) { ?>
  .retina-logo {
    height: <?php echo htmlspecialchars($retina_logo_height); ?>;
  }
<?php } ?>
<?php // Retina Logo Width
if ($retina_logo_width) { ?>
  .retina-logo {
    width: <?php echo htmlspecialchars($retina_logo_width); ?>;
  }
<?php } ?>
<?php // Retina Logo Padding
if ($retina_logo_padding) { ?>
  .retina-logo {
    padding: <?php echo htmlspecialchars($retina_logo_padding); ?>;
  }
<?php } ?>
<?php // Retina Logo Margin
if ($retina_logo_margin) { ?>
  .retina-logo {
    margin: <?php echo htmlspecialchars($retina_logo_margin); ?>;
  }
<?php } ?>
<?php // Mobile Show Submenu
if ($show_mobile_submenu) { ?>
  @media (max-width: 768px) {
    #fav-navbar ul.nav-child {
      display: <?php echo htmlspecialchars($show_mobile_submenu); ?>;
    }
  }
<?php } ?>
<?php // Mobile Show Images
if ($mobile_show_images) { ?>
  @media (max-width: 480px) {
    #fav-main img,
    .moduletable .custom img,
    div[class^="moduletable-"] div[class^="custom-"] img,
    div[class*=" moduletable-"] div[class*=" custom-"] img,
    .img-left,
    .img-right {
      display: <?php echo htmlspecialchars($mobile_show_images); ?>;
    }
  }
<?php } ?>
<?php // Paragraph Mobile Font Size
if ($paragraph_mobile_font_size) { ?>
  @media (max-width: 480px) {
    p {
      font-size: <?php echo htmlspecialchars($paragraph_mobile_font_size); ?>;
    }
  }
<?php } ?>
<?php // Article Mobile Font Size
if ($article_mobile_title_font_size) { ?>
  @media (max-width: 480px) {
    .page-header h2,
    h2.item-title,
    .blog-featured h2.item-title,
    .page-header h1,
    .componentheading,
    div.newsfeed-category h2,
    div.contact-category h2,
    div.weblink-category h2,
    #k2FrontendEditToolbar h2,
    div.itemListCategory h2,
    div.itemHeader h2.itemTitle,
    div.tagItemHeader h2.tagItemTitle,
    div.userBlock h2,
    div.latestItemsCategory h2,
    div.latestItemHeader h2.latestItemTitle,
    div.itemIsFeatured h2,
    div.catItemIsFeatured h3,
    div.userItemIsFeatured h3,
    div.catItemHeader h3.catItemTitle,
    div.itemCommentsForm h3,
    div.userItemHeader h3.userItemTitle,
    h3.itemAuthorName {
      font-size: <?php echo htmlspecialchars($article_mobile_title_font_size); ?>;
    }
  }
<?php } ?>
<?php // Module Mobile Title Font Size
if ($module_mobile_title_font_size) { ?>
  @media (max-width: 480px) {
    .moduletable h3,
    .moduletable .custom h3,
    div[class^="moduletable-"] h3,
    div[class*=" moduletable-"] h3 {
      font-size: <?php echo htmlspecialchars($module_mobile_title_font_size); ?>;
    }
  }
<?php } ?>

</style>