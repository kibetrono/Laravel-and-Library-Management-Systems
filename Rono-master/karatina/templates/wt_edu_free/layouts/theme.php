<?php
/**
* @package   Wordpress Themes
* @author    WarpTheme http://www.warptheme.com
* @copyright Copyright (C) WarpTheme
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get theme configuration
include($this['path']->path('layouts:theme.config.php'));

?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>"  data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>

<head>
<?php echo $this['template']->render('head');
  include($this['path']->path('layouts:preloader.php'));
  ?>
</head>

<body class="<?php echo $this['config']->get('body_classes'); ?>"  >
  <div class="body-innerwrapper">
  <?php if ($this['widgets']->count('toolbar-l + toolbar-r')) : ?>
    <div class="tm-toolbar uk-clearfix uk-hidden-small">
      <div class="uk-container uk-container-center">
        <?php if ($this['widgets']->count('toolbar-l')) : ?>
          <div class="uk-float-left"><?php echo $this['widgets']->render('toolbar-l'); ?></div>
        <?php endif; ?>

        <?php if ($this['widgets']->count('toolbar-r')) : ?>
          <div class="uk-float-right"><?php echo $this['widgets']->render('toolbar-r'); ?></div>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($this['widgets']->count('logo + headerbar')) : ?>
    <div class="tm-headerbar uk-clearfix uk-hidden-small">
      <div class="uk-container uk-container-center">
        <?php if ($this['widgets']->count('logo')) : ?>
          <div class="tm-nav-logo uk-hidden-small">
            <a class="tm-logo uk-navbar-brand uk-responsive-width uk-responsive-height" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo'); ?></a>
          </div>
        <?php endif; ?>

        <?php echo $this['widgets']->render('headerbar'); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($this['widgets']->count('menu + search')) : ?>
    <div class="tm-navbar uk-navbar">
      <div class="uk-container uk-container-center">
        <nav class="tm-navbar-container">
          <?php if ($this['widgets']->count('menu')) : ?>
            <div class="tm-nav uk-hidden-small">
              <?php echo $this['widgets']->render('menu'); ?>
            </div>
          <?php endif; ?>
          <?php if ($this['widgets']->count('search')) : ?>
            <div class="tm-search uk-hidden-small">
              <?php echo $this['widgets']->render('search'); ?>
            </div>
          <?php endif; ?>
          <?php if ($this['widgets']->count('offcanvas')) : ?>
            <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
          <?php endif; ?>
          <?php if ($this['widgets']->count('logo-small')) : ?>
            <div class="uk-navbar-content uk-navbar-center uk-visible-small">
              <a class="uk-responsive-width uk-responsive-height" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo-small'); ?></a>
            </div>
          <?php endif; ?>
        </nav>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($this['widgets']->count('slideshow')) : ?>
    <div id="tm-slideshow" class="tm-block-slideshow" <?php echo $styles['block.top-a']; ?>>
        <section class="<?php echo $classes['grid.slideshow']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
          <?php echo $this['widgets']->render('slideshow', array('layout'=>$this['config']->get('grid.slideshow.layout'))); ?>
        </section>
    </div>
  <?php endif; ?>

  <?php if ($this['widgets']->count('top-a')) : ?>
    <div id="tm-top-a" class="tm-block-top-a uk-block <?php echo $classes['block.top-a']; ?>" <?php echo $styles['block.top-a']; ?>>
      <div class="uk-container uk-container-center">
        <section class="<?php echo $classes['grid.top-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
          <?php echo $this['widgets']->render('top-a', array('layout'=>$this['config']->get('grid.top-a.layout'))); ?>
        </section>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('top-b')) : ?>
    <div id="tm-top-b" class="tm-block-top-b uk-block <?php echo $classes['block.top-b']; ?>" <?php echo $styles['block.top-b']; ?>>
      <div class="uk-container uk-container-center">
        <section class="<?php echo $classes['grid.top-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
          <?php echo $this['widgets']->render('top-b', array('layout'=>$this['config']->get('grid.top-b.layout'))); ?>
        </section>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('top-c')) : ?>
    <div id="tm-top-c" class="tm-block-top-c uk-block <?php echo $classes['block.top-c']; ?>" <?php echo $styles['block.top-c']; ?>>
      <div class="uk-container uk-container-center">
        <section class="<?php echo $classes['grid.top-c']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
          <?php echo $this['widgets']->render('top-c', array('layout'=>$this['config']->get('grid.top-c.layout'))); ?>
        </section>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('top-d')) : ?>
    <div id="tm-top-d" class="tm-block-top-d uk-block <?php echo $classes['block.top-d']; ?>" <?php echo $styles['block.top-d']; ?>>
      <div class="uk-container uk-container-center">
        <section class="<?php echo $classes['grid.top-d']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
          <?php echo $this['widgets']->render('top-d', array('layout'=>$this['config']->get('grid.top-d.layout'))); ?>
        </section>
      </div>
    </div>
  <?php endif; ?>
  <?php
		$input = new JInput();
		$has_quix = $input->getCmd('option') === 'com_quix';
		if ($input->getCmd('option') === 'com_quix') {
			include($this['path']->path('layouts:quix-content.php'));
		} else {
			include($this['path']->path('layouts:default-content.php'));
		}
	?>
  <?php if ($this['widgets']->count('bottom-a')) : ?>
    <div id="tm-bottom-a" class="tm-block-bottom-a uk-block <?php echo $classes['block.bottom-a']; ?>" <?php echo $styles['block.bottom-a']; ?>>
      <div class="uk-container uk-container-center">
        <section class="<?php echo $classes['grid.bottom-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
          <?php echo $this['widgets']->render('bottom-a', array('layout'=>$this['config']->get('grid.bottom-a.layout'))); ?>
        </section>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('bottom-b')) : ?>
    <div id="tm-bottom-b" class="tm-block-bottom-b uk-block <?php echo $classes['block.bottom-b']; ?>" <?php echo $styles['block.bottom-b']; ?>>
      <div class="uk-container uk-container-center">
        <section class="<?php echo $classes['grid.bottom-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
          <?php echo $this['widgets']->render('bottom-b', array('layout'=>$this['config']->get('grid.bottom-b.layout'))); ?>
        </section>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('bottom-c')) : ?>
    <div id="tm-bottom-c" class="tm-block-bottom-c uk-block <?php echo $classes['block.bottom-c']; ?>" <?php echo $styles['block.bottom-c']; ?>>
      <div class="uk-container uk-container-center">
        <section class="<?php echo $classes['grid.bottom-c']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
          <?php echo $this['widgets']->render('bottom-c', array('layout'=>$this['config']->get('grid.bottom-c.layout'))); ?>
        </section>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('bottom-d')) : ?>
    <div id="tm-bottom-d" class="tm-block-bottom-d uk-block <?php echo $classes['block.bottom-d']; ?>" <?php echo $styles['block.bottom-d']; ?>>
      <div class="uk-container uk-container-center">
        <section class="<?php echo $classes['grid.bottom-d']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
          <?php echo $this['widgets']->render('bottom-d', array('layout'=>$this['config']->get('grid.bottom-d.layout'))); ?>
        </section>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('bottom-e')) : ?>
    <div id="tm-bottom-e" class="tm-block-bottom-e uk-block <?php echo $classes['block.bottom-e']; ?>" <?php echo $styles['block.bottom-e']; ?>>
      <div class="uk-container uk-container-center">
        <section class="<?php echo $classes['grid.bottom-e']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
          <?php echo $this['widgets']->render('bottom-e', array('layout'=>$this['config']->get('grid.bottom-e.layout'))); ?>
        </section>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('bottom-footer')) : ?>
    <div id="tm-bottom-footer" class="tm-block-bottom-footer uk-block <?php echo $classes['block.bottom-footer']; ?>" <?php echo $styles['block.bottom-footer']; ?>>
      <div class="uk-container uk-container-center">
        <section class="<?php echo $classes['grid.bottom-footer']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
          <?php echo $this['widgets']->render('bottom-footer', array('layout'=>$this['config']->get('grid.bottom-footer.layout'))); ?>
        </section>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($this['config']->get('totop_scroller', true)) : ?>
    <div class="tm-totop-scroller-fixed uk-text-center uk-hidden-small"><a data-uk-smooth-scroll href="#"></a></div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('footer-l + footer-r + debug') || $this['config']->get('warp_branding', true) || $this['config']->get('totop_scroller', true)) : ?>
    <footer class="tm-footer">
      <div class="uk-container uk-container-center">
        <div class="uk-clearfix">
          <?php if ($this['widgets']->count('footer-l')) : ?>
            <div class="uk-align-medium-left"><?php echo $this['widgets']->render('footer-l'); ?>
              <?php
              echo $this['widgets']->render('footer');
              $this->output('warp_branding');
              echo $this['widgets']->render('debug');
              ?>
            </div>
          <?php endif; ?>
          <?php if ($this['widgets']->count('footer-r')) : ?>
            <div class="uk-align-medium-right"><?php echo $this['widgets']->render('footer-r'); ?>
              <?php echo $this['widgets']->render('debug');?>
            </div>
          <?php endif; ?>
          <?php if ($this['config']->get('totop_scroller', true)) : ?>
            <a class="tm-totop-scroller uk-text-center" data-uk-smooth-scroll href="#"></a>
          <?php endif; ?>
        </div>
      </div>
    </footer>
  <?php endif; ?>
  <?php if ($this['widgets']->count('offcanvas')) : ?>
    <div id="offcanvas" class="uk-offcanvas">
      <div class="uk-offcanvas-bar"><?php echo $this['widgets']->render('offcanvas'); ?></div>
    </div>
  <?php endif; ?>
  <?php echo $this->render('footer'); ?>
</div>
</body>
</html>
