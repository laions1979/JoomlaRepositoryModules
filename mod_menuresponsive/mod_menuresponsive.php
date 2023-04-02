<?php

/**
 * @package     Joomla.Diego
 * @subpackage  mod_menuresponsive
 *
 * @Date: 2023-03
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\MenuResponsive\Site\Helper\MenuResponsiveHelper;

$list       = MenuResponsiveHelper::getList($params);
$base       = MenuResponsiveHelper::getBase($params);
$active     = MenuResponsiveHelper::getActive($params);
$default    = MenuResponsiveHelper::getDefault();
$active_id  = $active->id;
$default_id = $default->id;
$path       = $base->tree;
$showAll    = $params->get('showAllChildren', 1);
$class_sfx  = htmlspecialchars($params->get('class_sfx', ''), ENT_COMPAT, 'UTF-8');

if (!$list) {
    return;
}

require ModuleHelper::getLayoutPath('mod_menuresponsive', $params->get('layout', 'default'));
