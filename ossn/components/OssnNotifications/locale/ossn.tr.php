<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

$tr = array(
	'ossnnotifications' => 'Bildirimler',
    'ossn:notifications:comments:post' => "%s gönderine yorum yaptı.",
    'ossn:notifications:like:post' => "%s gönderini beğendi.",
    'ossn:notifications:like:annotation' => "%s yorumunu beğendi.",
    'ossn:notifications:like:entity:file:ossn:aphoto' => "%s resmini beğendi.",
    'ossn:notifications:comments:entity:file:ossn:aphoto' => '%s resmine yorum yaptı.',
    'ossn:notifications:wall:friends:tag' => '%s seni bir gönderide etiketledi.',
    'ossn:notification:are:friends' => 'Arkadaşsınız',
    'ossn:notifications:comments:post:group:wall' => "%s grup gönderisi yorumladı.",
    'ossn:notifications:like:entity:file:profile:photo' => "%s profil resmini beğendi.",
    'ossn:notifications:comments:entity:file:profile:photo' => "%s profil resmine yorum yaptı.",
    'ossn:notifications:like:entity:file:profile:cover' => "%s profil cover beğendi.",
    'ossn:notifications:comments:entity:file:profile:cover' => "%s profil cover yorum yaptı.",

    'ossn:notifications:like:post:group:wall' => '%s liked your post.',
	
    'ossn:notification:delete:friend' => 'İstek kaldırıldı',
    'notifications' => 'Bildirimler',
    'see:all' => 'Tümünü Gör',
    'friend:requests' => 'Arkadaşlık İsteği',
    'ossn:notifications:friendrequest:confirmbutton' => 'Onayla',
    'ossn:notifications:friendrequest:denybutton' => 'İsteği sil',
	
    'ossn:notification:mark:read:success' => 'Okundu olarak işaretlendi.',
    'ossn:notification:mark:read:error' => 'Okunu olarak işaretlenemedi.',
    
    'ossn:notifications:mark:as:read' => 'Tümünü okundu olarak işaretle',
	'ossn:notifications:admin:settings:close_anywhere:title' => 'Herhangi bir yeri tıklatarak bildirim pencerelerini kapatın',
	'ossn:notifications:admin:settings:close_anywhere:note' => '<i class="fa fa-info-circle"></i> sayfada herhangi bir yeri tıklatarak herhangi bir bildirim penceresini kapatır<br><br>',
);
ossn_register_languages('tr', $tr); 
