<?php
/**
 * @package    [Joomcraft_mod]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use JoomcraftNamespace\Module\Joomcraft\Site\Helper\JoomcraftHelper;

$test  = JoomcraftHelper::getText();

require ModuleHelper::getLayoutPath('mod_joomcraft', $params->get('layout', 'default'));
