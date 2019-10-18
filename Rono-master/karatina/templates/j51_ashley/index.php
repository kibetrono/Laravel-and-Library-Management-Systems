<?php
/*================================================================*\
|| # Copyright (C) 2011  Joomla51. All Rights Reserved.           ||
|| # license - PHP files are licensed under  GNU/GPL V2           ||
|| # license - CSS  - JS - IMAGE files are Copyrighted material   ||
|| # Website: http://www.joomla51.com                             ||
\*================================================================*/
defined('_JEXEC') or die;
JHtml::_('bootstrap.framework');
define( 'nexus', dirname(__FILE__) );
require("php/config.php");
require("php/variables.php");
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php include ("php/styles.php");?>
<?php include ("php/scripts.php");?>

<!-- <link rel="stylesheet" href="http://basehold.it/27"> -->

<?php echo ($head_custom_code); ?>

</head>
<body class="<?php echo $pageclass; ?>"> 
	<div id="content" class="wrapper960">

	<div id="container_header" class="j51container">
		<div id="header">
			<?php require("php/layouts/header.php"); ?>
			<?php require("php/layouts/hornav.php"); ?>
			<?php require("php/layouts/social_icons.php"); ?>
		</div>	
	</div>
	<?php if ($this->countModules('showcase')) { ?>
	<div id="container_slideshow" class="j51container">
	<?php require("php/layouts/slideshow.php"); ?>
	</div>
	<?php }?>

	
	<?php if ($this->countModules('top-1a') || $this->countModules('top-1b') || $this->countModules('top-1c') || $this->countModules('top-1d') || $this->countModules('top-1e') || $this->countModules('top-1f')) { ?>
	<div id="container_top1_modules" class="j51container">
	<?php require("php/layouts/top1_modules.php"); ?>
	</div>
	<?php }?>


	<?php if ($this->countModules('top-2a') || $this->countModules('top-2b') || $this->countModules('top-2c') || $this->countModules('top-2d') || $this->countModules('top-2e') || $this->countModules('top-2f')) { ?>
	<div id="container_top2_modules" class="j51container">
	<?php require("php/layouts/top2_modules.php"); ?>
	</div>
	<?php }?>

    <?php if ($this->countModules('breadcrumb') || $this->countModules('top-3a') || $this->countModules('top-3b') || $this->countModules('top-3c') || $this->countModules('top-3d') || $this->countModules('top-3e') || $this->countModules('top-3f')) { ?>
    <div id="container_top3_modules" class="j51container">
	<?php require("php/layouts/top3_modules.php"); ?>
	</div>
	<?php }?>

	<div id="container_main" class="j51container">
	<?php require("php/layouts/main.php"); ?>
	</div>

	<?php if ($this->countModules('bottom-1a') || $this->countModules('bottom-1b') || $this->countModules('bottom-1c') || $this->countModules('bottom-1d') || $this->countModules('bottom-1e') || $this->countModules('bottom-1f')) { ?>
	<div id="container_bottom1_modules" class="j51container">
	<?php require("php/layouts/bottom1_modules.php"); ?>
	</div>
	<?php }?>

	<?php if ($this->countModules('bottom-2a') || $this->countModules('bottom-2b') || $this->countModules('bottom-2c') || $this->countModules('bottom-2d') || $this->countModules('bottom-2e') || $this->countModules('bottom-2f')) { ?>
	<div id="container_bottom2_modules" class="j51container">
	<?php require("php/layouts/bottom2_modules.php"); ?>
	</div>
	<?php }?>
	
	</div>
	<div class="clearfix"></div>

	<?php require("php/layouts/base.php"); ?>

	
<?php echo ($body_custom_code); ?>

<!-- Stellar -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.stellar.js" charset="utf-8"></script>
<script type="text/javascript">
	if (Modernizr.touch) {   
    } else {   
        jQuery(window).stellar({
		horizontalScrolling: false
	}); 
}  
</script>
<jdoc:include type="modules" name="debug" />
</body> 
</html>