<?php
/**
 * @package    [Joomcraft_mod]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright   Copyright (C) 2024 Node Networks. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

// No direct access
defined('_JEXEC') or die;

use JoomcraftNamespace\Module\Joomcraft\Site\Helper\JoomcraftHelper;

class ModJoomcraftHelper extends JoomcraftHelper
{
}

// Include the helper
require_once __DIR__ . '/src/Helper/JoomcraftHelper.php';

// Get module parameters
$serverData = ModJoomcraftHelper::getText($params);

// Load the layout
require JModuleHelper::getLayoutPath('mod_joomcraft', $params->get('layout', 'default'));
