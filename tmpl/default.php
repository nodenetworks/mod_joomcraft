<?php
/**
 * @package    JOOMCraft Module
 *
 * @author     Michał Ostrykiewicz <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

// No direct access
defined('_JEXEC') or die;

// Get parameters
$server_name = $params->get('server_name');
$server_port = $params->get('server_port');
$online_image = $params->get('online_image', 'images/mod_joomcraft/online.png');
$offline_image = $params->get('offline_image', 'images/mod_joomcraft/offline.png');

?>

<div class="joomcraft<?php echo $moduleclass_sfx; ?>">
    <div>
        <img id="server_icon" />
        <div>
            <h1 id="server_ip"><?php echo $server_name; ?></h1>
            <h1 id="is_online">
                <?php if ($serverData['is_online']): ?>
                    <img src="<?php echo $online_image; ?>" alt="Online" />
                <?php else: ?>
                    <img src="<?php echo $offline_image; ?>" alt="Offline" />
                <?php endif; ?>
            </h1>
            <span id="motd"><?php echo $serverData['motd']; ?></span>
            <div><span id="player_count"><?php echo $serverData['player_count']; ?></span> <?php echo JText::_('MOD_JOOMCRAFT_OF'); ?> <span id="player_max"><?php echo $serverData['player_max']; ?></span> <?php echo JText::_('MOD_JOOMCRAFT_PLAYERS_ONLINE'); ?></div>
        </div>
    </div>
    
    <script src="<?php echo JUri::base() . 'modules/mod_joomcraft/assets/script.js'; ?>"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            initServerData("<?php echo $server_name; ?>", "<?php echo $server_port; ?>");
            
            // Set the server icon
            var serverIcon = '<?php echo $serverData['server_icon']; ?>';
            var serverIconImg = document.getElementById('server_icon');
            serverIconImg.src = serverIcon;
        });
    </script>
</div>
