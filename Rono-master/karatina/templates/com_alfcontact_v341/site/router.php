<?php

defined('_JEXEC') or die;

function AlfcontactBuildRoute(&$query)
{
	$segments = array();

	if (isset($query['view']))
	{
		$segments = $query['view'];
		unset($query['view']);
	}

	if (isset($query['contactid']))
	{
		$segments = $query['contactid'];
		unset($query['contactid']);
	}

	return $segments;
}

function AlfcontactParseRoute($segments)
{
	$vars = array();

	//Get the active menu item.
	$app = JFactory::getApplication();
	$menu = $app->getMenu();
	$item = $menu->getActive();

	// Count route segments
	$count = count($segments);

	// Standard routing.
	if (!isset($item))
	{
		$vars['view'] = $segments[0];
		$vars['contactid'] = $segments[$count - 1];
		return $vars;
	}

}