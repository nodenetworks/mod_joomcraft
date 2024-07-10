<?php
/**
 * @package    [Joomcraft_mod]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright   Copyright (C) 2024 Node Networks. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use JoomcraftNamespace\Module\Joomcraft\Site\Helper\JoomcraftHelper;

$test  = JoomcraftHelper::getText();

require ModuleHelper::getLayoutPath('mod_joomcraft', $params->get('layout', 'default'));
