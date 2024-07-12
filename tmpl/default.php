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
?>

<div class="joomcraft<?php echo $moduleclass_sfx; ?>">
    <div>
        <img src="https://cdn.pixabay.com/photo/2013/07/12/19/25/minecraft-154749_1280.png" id="server_icon" />
        <div>
            <h1 id="server_ip"><?php echo $server_name; ?></h1>
            <h1 id="is_online">STATUS</h1>
            <span id="motd">A beautiful minecraft server</span>
            <div><span id="player_count"><?php echo $serverData['player_count']; ?></span> <?php echo JText::_('MOD_JOOMCRAFT_OF'); ?> <span id="player_max"><?php echo $serverData['player_max']; ?></span> <?php echo JText::_('MOD_JOOMCRAFT_PLAYERS_ONLINE'); ?></div>
        </div>
    </div>
    
    <script src="<?php echo JUri::base() . 'modules/mod_joomcraft/assets/script.js'; ?>"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            initServerData("<?php echo $server_name; ?>", "<?php echo $server_port; ?>");

            // Set the online status image
            var isOnline = <?php echo $is_online ? 'true' : 'false'; ?>;
            var onlineImage = '<?php echo $online_image; ?>';
            var offlineImage = '<?php echo $offline_image; ?>';
            
            var statusImage = document.getElementById('status_image');
            statusImage.src = isOnline ? '<?php echo JUri::base() . 'media/mod_joomcraft/' . $online_image; ?>' : '<?php echo JUri::base() . 'media/mod_joomcraft/' . $offline_image; ?>';

            // Set the server icon
            var serverIcon = '<?php echo $serverData['server_icon']; ?>';
            var serverIconImg = document.getElementById('server_icon');
            serverIconImg.src = serverIcon;
        });
    </script>
</div>
