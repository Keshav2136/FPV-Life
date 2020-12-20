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
define('OSSN_ALLOW_SYSTEM_START', TRUE);
require_once(dirname(dirname(dirname(__FILE__))) . '/system/start.php');
?>
<div class="layout-installation">
    <h2> <?php echo ossn_installation_print('create:admin:account'); ?> </h2>

    <form action="<?php echo ossn_installation_paths()->url; ?>?action=account" method="post">
        <div>
            <input type="text" name="firstname" placeholder="<?php echo ossn_print('first:name'); ?>"/>
            <input type="text" name="lastname" placeholder="<?php echo ossn_print('last:name'); ?>"/>
        </div>

        <div>
            <input type="text" name="email" placeholder="<?php echo ossn_print('email'); ?>"/>
            <input name="email_re" type="text" placeholder="<?php echo ossn_print('email:again'); ?>"/>
        </div>

        <div>
            <input type="text" name="username" placeholder="<?php echo ossn_print('username'); ?>" class="long-input"/>
            <input type="password" name="password" placeholder="<?php echo ossn_print('password'); ?>" class="long-input"/>
        </div>
        <div class="margin-top-10">
            <label><?php echo ossn_print('birthdate'); ?> </label>

            <select name="birthday">
                <option value=""><?php echo ossn_print('day'); ?></option>
                <?php for ($day = 1; $day <= 31; $day++) { ?>
                    <option
                        value="<?php echo strlen($day) == 1 ? '0' . $day : $day; ?>"><?php echo strlen($day) == 1 ? '0' . $day : $day; ?></option>
                <?php } ?>
            </select>

            <select name="birthm">
                <option value=""><?php echo ossn_print('month'); ?></option>
                <?php for ($month = 1; $month <= 12; $month++) { ?>
                    <option
                        value="<?php echo strlen($month) == 1 ? '0' . $month : $month; ?>"><?php echo strlen($month) == 1 ? '0' . $month : $month; ?></option>
                <?php } ?>
            </select>

            <select name="birthy">
                <option value=""><?php echo ossn_print('year'); ?></option>
                <?php for ($year = date('Y'); $year > date('Y') - 100; $year--) { ?>
                    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                <?php } ?>
            </select>

        </div>
        <br/>

        <div class="margin-top-10">
            <label> <?php echo ossn_print('gender'); ?> </label>
            <span><input type="radio" name="gender" value="male"/> <?php echo ossn_print('male'); ?></span>
            <span><input type="radio" name="gender" value="female"/> <?php echo ossn_print('female'); ?></span>
        </div>
        <br/>
        <input type="submit" value="<?php echo ossn_installation_print('ossn:install:create'); ?>" class="button-blue primary margin-top-10"/>

        </from>
    </form>
