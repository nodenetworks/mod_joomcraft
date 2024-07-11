<?php
/**
 * @package    JOOMCraft Module
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
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
            <div><span id="player_count">x</span> of <span id="player_max">y</span> Players Online</div>
        </div>
    </div>
    
    <script src="<?php echo JUri::base() . 'modules/mod_joomcraft/assets/script.js'; ?>"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            initServerData("<?php echo $server_name; ?>", "<?php echo $server_port; ?>");
        });
    </script>
</div>
