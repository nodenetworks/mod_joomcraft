<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_joomcraft
 *
 * @copyright   Copyright (C) 2024 Node Networks. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE.txt
 */

namespace JoomcraftNamespace\Module\Joomcraft\Site\Helper;

defined('_JEXEC') or die;

/**
 * Helper for mod_joomcraft
 *
 * @since  4.0
 */
class JoomcraftHelper
{
	/**
	 * Retrieve joomcraft test
	 *
	 * @param   Registry        $params  The module parameters
	 * @param   CMSApplication  $app     The application
	 *
	 * @return  array
	 */
	public static function getText()
	{
		return 'JoomcraftHelpertest';
	}
}
