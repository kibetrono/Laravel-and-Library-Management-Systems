<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );

$path = $this->baseurl.'/templates/'.$this->template;
$app = JFactory::getApplication();

//factory
$document = JFactory::getDocument();

//General
$app->getCfg('sitename');
$siteName = $this->params->get('siteName');

// Getting params from template
$params = $app->getTemplate(true)->params;

//Tracker Code
$head_custom_code = $this->params->get('head_custom_code');
$body_custom_code = $this->params->get('body_custom_code');

//Font Link & Color Styling
$body_font_color = $this->params->get('body_font_color');
$h1_font_color = $this->params->get('h1_font_color');
$articletitle_font_color = $this->params->get('articletitle_font_color');
$modulehead_font_color = $this->params->get('modulehead_font_color');
$h4_font_color = $this->params->get('h4_font_color');
$content_link_color = $this->params->get('content_link_color');
$hornav_link_color = $this->params->get('hornav_link_color');
$hornav_droplink_color = $this->params->get('hornav_droplink_color');
$hornav_dropbackground_color = $this->params->get('hornav_dropbackground_color');

$logo_link_color = $this->params->get('logo_link_color');
$slogan_link_color = $this->params->get('slogan_link_color');

//Font Face Styling
$body_fontsize = $this->params->get('body_fontsize');
$body_fontstyle = $this->params->get('body_fontstyle');
$h1head_fontstyle = $this->params->get('h1head_fontstyle');
$articlehead_fontstyle = $this->params->get('articlehead_fontstyle');
$modulehead_fontstyle = $this->params->get('modulehead_fontstyle');
$h4head_fontstyle = $this->params->get('h4head_fontstyle');
$hornav_fontstyle = $this->params->get('hornav_fontstyle');
$logo_fontstyle = $this->params->get('logo_fontstyle');

//Logo and slogan
$logo_x = $this->params->get('logo_x');
$logo_y = $this->params->get('logo_y');
$logoimagefile = $this->params->get('logoimagefile');
$logoimagefile_sm = $this->params->get('logoimagefile_sm');
$defaultlogoimage = "templates/<?php echo $this->template?>/images/logo.png";
$logo_font_color = $this->params->get('logo_font_color');
$slogan_font_color = $this->params->get('slogan_font_color');

//Layout
$sidecola_width = $this->params->get('sidecola_width');
$sidecolb_width = $this->params->get('sidecolb_width');
$column_layout = $this->params->get('column_layout');

//Top Menu
$renderer = $document->loadRenderer( 'module' );
$module	 = JModuleHelper::getModule( 'mod_menu', "top_menu" );
$menu_name = $this->params->get("top_menu", "mainmenu");
$module->params	= "menutype=$menu_name\nendLevel=1";
$topmenu = $renderer->render( $module);
$topmenu_onoff = $this->params->get('topmenu_onoff');

//Hornav Menu
$renderer = $document->loadRenderer( 'module' );
$module	 = JModuleHelper::getModule( 'mod_menu', "hornav_menu" );
$menu_name = $this->params->get("hornav_menu", "mainmenu");
$module->params	= "menutype=$menu_name\nshowAllChildren=1\ntag_id=moomenu";
$hornav = $renderer->render( $module);
$hornav_font_color = $this->params->get('hornav_font_color');
$hornav_font_color_compact = $this->params->get('hornav_font_color_compact');
$hornav_ddbackground_color = $this->params->get('hornav_ddbackground_color');

//Hornav Menu Mobile
$renderer = $document->loadRenderer( 'module' );
$module     = JModuleHelper::getModule( 'mod_menu', "hornav_menu" );
$menu_name = $this->params->get("hornav_menu", "mainmenu");
$module->params    = "menutype=$menu_name\nshowAllChildren=1\ntag_id=mobile";
$hornav_mobile = $renderer->render( $module);

//Footer Menu
$renderer = $document->loadRenderer( 'module' );
$module	 = JModuleHelper::getModule( 'mod_menu', "footer_menu" );
$menu_name = $this->params->get("footer_menu", "mainmenu");
$module->params	= "menutype=$menu_name\nendLevel=1";
$footermenu = $renderer->render( $module);
$footermenu_onoff = $this->params->get('footermenu_onoff');

//Top1 Module manual widths
$top1_auto = $this->params->get('top1_auto');
$top_1a_manual = $this->params->get('top_1a_manual');
$top_1b_manual = $this->params->get('top_1b_manual');
$top_1c_manual = $this->params->get('top_1c_manual');
$top_1d_manual = $this->params->get('top_1d_manual');
$top_1e_manual = $this->params->get('top_1e_manual');
$top_1f_manual = $this->params->get('top_1f_manual');

//Top2 Module manual widths
$top2_auto = $this->params->get('top2_auto');
$top_2a_manual = $this->params->get('top_2a_manual');
$top_2b_manual = $this->params->get('top_2b_manual');
$top_2c_manual = $this->params->get('top_2c_manual');
$top_2d_manual = $this->params->get('top_2d_manual');
$top_2e_manual = $this->params->get('top_2e_manual');
$top_2f_manual = $this->params->get('top_2f_manual');

//Top3 Module manual widths
$top3_auto = $this->params->get('top3_auto');
$top_3a_manual = $this->params->get('top_3a_manual');
$top_3b_manual = $this->params->get('top_3b_manual');
$top_3c_manual = $this->params->get('top_3c_manual');
$top_3d_manual = $this->params->get('top_3d_manual');
$top_3e_manual = $this->params->get('top_3e_manual');
$top_3f_manual = $this->params->get('top_3f_manual');

//ContentTop Module manual widths
$contenttop_auto = $this->params->get('contenttop_auto');
$contenttop_a_manual = $this->params->get('contenttop_a_manual');
$contenttop_b_manual = $this->params->get('contenttop_b_manual');
$contenttop_c_manual = $this->params->get('contenttop_c_manual');

//ContentBottom Module manual widths
$contentbottom_auto = $this->params->get('contentbottom_auto');
$contentbottom_a_manual = $this->params->get('contentbottom_a_manual');
$contentbottom_b_manual = $this->params->get('contentbottom_b_manual');
$contentbottom_c_manual = $this->params->get('contentbottom_c_manual');

//Bottom1 Module manual widths
$bottom1_auto = $this->params->get('bottom1_auto');
$bottom_1a_manual = $this->params->get('bottom_1a_manual');
$bottom_1b_manual = $this->params->get('bottom_1b_manual');
$bottom_1c_manual = $this->params->get('bottom_1c_manual');
$bottom_1d_manual = $this->params->get('bottom_1d_manual');
$bottom_1e_manual = $this->params->get('bottom_1e_manual');
$bottom_1f_manual = $this->params->get('bottom_1f_manual');

//Bottom2 Module manual widths
$bottom2_auto = $this->params->get('bottom2_auto');
$bottom_2a_manual = $this->params->get('bottom_2a_manual');
$bottom_2b_manual = $this->params->get('bottom_2b_manual');
$bottom_2c_manual = $this->params->get('bottom_2c_manual');
$bottom_2d_manual = $this->params->get('bottom_2d_manual');
$bottom_2e_manual = $this->params->get('bottom_2e_manual');
$bottom_2f_manual = $this->params->get('bottom_2f_manual');

//Base1 Module manual widths
$base1_auto = $this->params->get('base1_auto');
$base_1a_manual = $this->params->get('base_1a_manual');
$base_1b_manual = $this->params->get('base_1b_manual');
$base_1c_manual = $this->params->get('base_1c_manual');
$base_1d_manual = $this->params->get('base_1d_manual');
$base_1e_manual = $this->params->get('base_1e_manual');
$base_1f_manual = $this->params->get('base_1f_manual');

//Base2 Module manual widths
$base2_auto = $this->params->get('base2_auto');
$base_2a_manual = $this->params->get('base_2a_manual');
$base_2b_manual = $this->params->get('base_2b_manual');
$base_2c_manual = $this->params->get('base_2c_manual');
$base_2d_manual = $this->params->get('base_2d_manual');
$base_2e_manual = $this->params->get('base_2e_manual');
$base_2f_manual = $this->params->get('base_2f_manual');

// Module Container Padding
$top1_padding = $this->params->get('top1_padding');
$top2_padding = $this->params->get('top2_padding');
$top3_padding = $this->params->get('top3_padding');
$bottom_padding = $this->params->get('bottom_padding');
$bottom2_padding = $this->params->get('bottom2_padding');
$base1_padding = $this->params->get('base1_padding');
$base2_padding = $this->params->get('base2_padding');

//Custom Css
$custom_css = $this->params->get('custom_css');

//New
$wrapper_width = $this->params->get('wrapper_width');

//Responsive Options
$responsive_sw = $this->params->get('responsive_sw');
$sidecol_responsive_pos = $this->params->get('sidecol_responsive_pos');
$mobile_showcase_sw = $this->params->get('mobile_showcase_sw');
$mobile_showcase = $this->params->get('mobile_showcase');
$res_top1_sw = $this->params->get('res_top1_sw');
$res_top2_sw = $this->params->get('res_top2_sw');
$res_top3_sw = $this->params->get('res_top3_sw');
$res_sidecola_sw = $this->params->get('res_sidecola_sw');
$res_sidecolb_sw = $this->params->get('res_sidecolb_sw');
$res_bottom_sw = $this->params->get('res_bottom_sw');
$res_base_sw = $this->params->get('res_base_sw');
$res_header_sw = $this->params->get('res_header_sw');
$tabport_css = $this->params->get('tabport_css');
$mobland_css = $this->params->get('mobland_css');
$mobport_css = $this->params->get('mobport_css');


//Social Media
$social_style	 = $this->params->get('social_style');
$social_rss = $this->params->get('social_rss');
$social_twitter = $this->params->get('social_twitter');
$social_facebook = $this->params->get('social_facebook');
$social_googleplus = $this->params->get('social_googleplus');
$social_youtube = $this->params->get('social_youtube');
$social_pinterest = $this->params->get('social_pinterest');
$social_instagram = $this->params->get('social_instagram');
$social_dribbble = $this->params->get('social_dribbble');
$social_flickr = $this->params->get('social_flickr');
$social_skype = $this->params->get('social_skype');
$social_linkedin = $this->params->get('social_linkedin');
$social_vimeo = $this->params->get('social_vimeo');
$social_yahoo = $this->params->get('social_yahoo');
$social_tumblr = $this->params->get('social_tumblr');
$social_deviantart = $this->params->get('social_deviantart');
$social_delicious = $this->params->get('social_delicious');

//Background Image
$bgimagefile = $this->params->get('bgimagefile');
$bgopacity = $this->params->get('bgopacity');

//Background Color
$bgcolor = $this->params->get('bgcolor');

// Element Colors
$header_full = $this->params->get('header_full');
$header_color = $this->params->get('header_color');
$header_opacity = $this->params->get('header_opacity');
$header_bg = $this->params->get('header_bg');
$showcase_color = $this->params->get('showcase_color'); 
$showcase_opacity = $this->params->get('showcase_opacity');
$top1_bg = $this->params->get('top1_bg');
$top1_color = $this->params->get('top1_color');
$top1_color_opacity = $this->params->get('top1_color_opacity');
$top1_opacity = $this->params->get('top1_opacity');
$top2_bg = $this->params->get('top2_bg');
$top2_color = $this->params->get('top2_color');
$top2_opacity = $this->params->get('top2_opacity');
$top3_bg = $this->params->get('top3_bg');
$top3_color = $this->params->get('top3_color');
$top3_opacity = $this->params->get('top3_opacity');
$bottom1_bg = $this->params->get('bottom1_bg');
$bottom2_bg = $this->params->get('bottom2_bg');
$elementcolor1 = $this->params->get('elementcolor1');
$elementcolor2 = $this->params->get('elementcolor2');
$elementcolor3 = $this->params->get('elementcolor3');
$elementcolor4 = $this->params->get('elementcolor4');
$elementcolor5 = $this->params->get('elementcolor5');
$elementcolor6 = $this->params->get('elementcolor6');
$elementcolor7 = $this->params->get('elementcolor7');
$elementcolor8 = $this->params->get('elementcolor8');
$elementcolor9 = $this->params->get('elementcolor9');
$elementcolor10 = $this->params->get('elementcolor10');
$elementcolor11 = $this->params->get('elementcolor11');
$elementcolor12 = $this->params->get('elementcolor12');
$elementcolor13 = $this->params->get('elementcolor13');
$elementcolor14 = $this->params->get('elementcolor14');
$elementcolor15 = $this->params->get('elementcolor15');
$elementcolor16 = $this->params->get('elementcolor16');
$elementcolor17 = $this->params->get('elementcolor17');
$elementcolor18 = $this->params->get('elementcolor18');
$elementcolor19 = $this->params->get('elementcolor19');
$elementcolor20 = $this->params->get('elementcolor20');

$logoimageheight = $this->params->get('logoimageheight');
$logoimagewidth = $this->params->get('logoimagewidth');

$nav_google_sw = $this->params->get('nav_google_sw');

$button_color = $this->params->get('button_color');
$button_hover_color = $this->params->get('button_hover_color');

$hovercss_sw = $this->params->get('hovercss_sw');

$customcss_sw = $this->params->get('customcss_sw'); 
$headervid = $this->params->get('headervid'); 
$fontawesome_sw = $this->params->get('fontawesome_sw');
$header_grad = $this->params->get('header_grad');
$menu_break = $this->params->get('menu_break');
$font_subset = $this->params->get('font_subset');

$headerslideshow = $this->params->get('headerslideshow');
$header_slide_image = $this->params->get('header_slide_image');
$header_json = json_decode($headerslideshow,true);



$social_custom = $this->params->get('social_custom');
$headerslideinterval = $this->params->get('headerslideinterval');

$json = json_decode($social_custom,true);


?>