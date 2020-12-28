<?php
/**
 * Atlas
 */

$attr = array(
	'limit' => 12,
	'order_by' => 'r.relation_id DESC'
);
$friends = ossn_loggedin_user()->getFriends('', $attr);

if ($friends) {
	foreach($friends as $user) { ?>
		<a title="<?php echo $user->first_name . ' ' . $user->last_name; ?>"
		class="com-members-memberlist-item"
		href="<?php echo ossn_site_url() . 'u/' . $user->username; ?>">
		<img class="user-img" src="<?php echo $user->iconURL()->small;?>"></a>
		<?php
	}
}