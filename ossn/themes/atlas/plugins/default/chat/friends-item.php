<?php
/**
 * Atlas
 */
$friend = $params['entity'];
?>
<div class="friends-list-item" onClick="Ossn.ChatnewTab(<?php echo $friend->guid; ?>);">
    <div class="friends-item-inner">
        <div class="icon"><img class="ossn-chat-icon-online" src="<?php echo $params['icon']; ?>"/></div>
        <div class="name"><?php echo $friend->fullname; ?></div>
    </div>
</div>
