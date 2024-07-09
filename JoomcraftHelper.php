<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_breadcrumbs
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
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
