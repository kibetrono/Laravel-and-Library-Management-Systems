
<div id="logo">
  <div class="logo_container">    
  <div class="logo"> <a href="index.php?<?php $lang = JFactory::getLanguage(); echo $lang->getTag(); ?>" title="<?php echo $siteName; ?>">
      <?php if($this->params->get('logoimagefile') == '') : ?>
          <img class="logo-image" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/images/logo.png" alt="Logo" />
      <?php elseif($this->params->get('logoimagefile') != '') : ?>
          <img class="logo-image" src="<?php echo $this->baseurl ?>/<?php echo $logoimagefile; ?>" alt="Logo" />
      <?php endif; ?>
      </a> </div>
  </div>
</div>     