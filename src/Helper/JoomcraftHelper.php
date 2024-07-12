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
     * @param   \Joomla\Registry\Registry  $params  The module parameters
     *
     * @return  array
     */
    public static function getText($params)
    {
        $result       = [];
        $is_online    = true; // Example value, replace with actual logic to determine online status
        $motd         = 'Welcome to our server'; // Example message of the day
        $player_count = 20; // Example number of players online
        $player_max   = 100; // Example maximum players allowed
        $server_icon  = ''; // Example server icon data (binary)

        // Simulate retrieving binary image data
        $binaryImageData = file_get_contents('path/to/server_icon.png'); // Replace with actual retrieval logic

        if ($binaryImageData) {
            // Convert binary data to base64 format
            $server_icon = 'data:image/png;base64,' . base64_encode($binaryImageData);
        }

        $result['is_online']    = $is_online;
        $result['motd']         = $motd;
        $result['player_count'] = $player_count;
        $result['player_max']   = $player_max;
        $result['server_icon']  = $server_icon;

        return $result;
    }
}
