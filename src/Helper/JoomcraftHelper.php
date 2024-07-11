<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_joomcraft
 *
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace JoomcraftNamespace\Module\Joomcraft\Site\Helper;

defined('_JEXEC') or die;

/**
 * Helper for mod_joomcraft
 *
 * @since  5.0
 */
class JoomcraftHelper
{
    /**
     * Retrieve joomcraft data
     *
     * @return  array
     */
    public static function getText()
    {
        $result       = [];
        $is_online    = false;
        $motd         = '';
        $player_count = 0;
        $player_max   = 0;
        $server_icon  = '';

        // Simulate some data for example purposes
        $result['is_online']    = $is_online;
        $result['motd']         = $motd;
        $result['player_count'] = $player_count;
        $result['player_max']   = $player_max;
        $result['server_icon']  = $server_icon;

        return $result;
    }
}
