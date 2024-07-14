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
$show_server_icon = $params->get('show_server_icon', 1);
$show_is_online = $params->get('show_is_online', 1);
$show_motd = $params->get('show_motd', 1);
$show_player_count = $params->get('show_player_count', 1);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

// Load language strings into JavaScript
JText::script('MOD_JOOMCRAFT_ONLINE');
JText::script('MOD_JOOMCRAFT_OFFLINE');
?>

<div class="joomcraft<?php echo $moduleclass_sfx; ?>">
    <div>
        <?php if ($show_server_icon): ?>
            <img id="server_icon" />
        <?php endif; ?>
        <div>
            <h1 id="server_ip"><?php echo $server_name; ?></h1>
            <?php if ($show_is_online): ?>
                <h1 id="is_online"><?php echo JText::_('MOD_JOOMCRAFT_STATUS_LOADING'); ?></h1>
            <?php endif; ?>
            <?php if ($show_motd): ?>
                <span id="motd"><?php echo $serverData['motd']; ?></span>
            <?php endif; ?>
            <?php if ($show_player_count): ?>
                <div>
                    <span id="player_count"><?php echo $serverData['player_count']; ?></span>
                    <?php echo JText::_('MOD_JOOMCRAFT_OF'); ?>
                    <span id="player_max"><?php echo $serverData['player_max']; ?></span>
                    <?php echo JText::_('MOD_JOOMCRAFT_PLAYERS_ONLINE'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <script src="<?php echo JUri::base() . 'modules/mod_joomcraft/assets/script.js'; ?>"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            initServerData("<?php echo $server_name; ?>", "<?php echo $server_port; ?>");
            
            // Set the server icon
            var serverIcon = '<?php echo $serverData['server_icon']; ?>';
            var serverIconImg = document.getElementById('server_icon');
            if (serverIconImg) {
                serverIconImg.src = serverIcon;
            }
        });
    </script>
</div>
