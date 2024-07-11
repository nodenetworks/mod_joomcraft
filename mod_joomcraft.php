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

// Include the helper file
require_once __DIR__ . '/src/Helper/JoomcraftHelper.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$server_name = htmlspecialchars($params->get('server_name', 'mc.eircraft.net'));
$server_port = htmlspecialchars($params->get('server_port', '25565'));
$is_online = (bool) $serverData['is_online'];
$online_image = htmlspecialchars($params->get('online_image', 'online.png'));
$offline_image = htmlspecialchars($params->get('offline_image', 'offline.png'));

$serverData = JoomcraftNamespace\Module\Joomcraft\Site\Helper\JoomcraftHelper::getText();

require JModuleHelper::getLayoutPath('mod_joomcraft', $params->get('layout', 'default'));
?>
