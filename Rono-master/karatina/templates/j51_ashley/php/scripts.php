<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );?>

<!-- Modernizr-->
<?php 
$document->addScript('templates/'.$this->template.'/js/modernizr.custom.js');
 ?>
<!-- Animate on Scroll-->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.visible.js" charset="utf-8"></script>

<?php if($sidecol_responsive_pos == 'after') : ?>
<!-- Responsive stacking order -->
<script type="text/javascript">
jQuery(document).load(jQuery(window).bind("resize", listenWidth));

    function listenWidth( e ) {
        if(jQuery(window).width()<959)
        {
            jQuery("#sidecol_b").remove().insertAfter(jQuery("#content_remainder"));
        } else {
            jQuery("#sidecol_b").remove().insertBefore(jQuery("#content_remainder"));
        }
        if(jQuery(window).width()<959)
        {
            jQuery("#sidecol_a").remove().insertAfter(jQuery("#content_remainder"));
        } else {
            jQuery("#sidecol_a").remove().insertBefore(jQuery("#content_remainder"));
        }
    }
</script>


<?php endif; ?>

<!-- Hornav Responsive Menu -->
<?php if($this->params->get('hornavPosition') == '1') { ?>
<?php if ($this->countModules( 'hornav' )) : ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/responsive-nav/responsive-nav.js" charset="utf-8"></script>
<?php endif; } else { ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/responsive-nav/responsive-nav.js" charset="utf-8"></script>
<?php } ?>

<!-- Vegas Background Slideshow -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.vegas.js" charset="utf-8"></script>
<script type="text/javascript">
(function($) {"use strict";
    $(document).ready(function() {
        $('body').vegas({
            delay: <?php echo $headerslideinterval ?>,
            timer: false,
            // overlay: "<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/overlays/01.png",
            slides: [
            <?php 
                if(is_array($header_json['header_slide_image'])) {
                foreach($header_json['header_slide_image'] as $value)  {
                ?>
                    { src: '<?php echo $this->baseurl ?>/<?php echo $value; ?>'},
            <?php } } ?>
            ]
        });
    });
})(jQuery);
</script>

<!-- Load scripts.js -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scripts.js" charset="utf-8"></script>


