<?php /*** Atlas ***/ ?>

<style>
.topbar{
    display: none;
}
</style>

<div class="atlas-logo2 col-x-1 center-block" style="margin-bottom:10px; margin-top: -50px; z-index: 5000;"></div>
 
<div class="atlas-logo col-x-1 center-block" style="margin-bottom:10px;"></div>



<div class="row ossn-page-contents">

<?php
$error = input('error');
?>
<div class="row">
       <div class="col-x-1 col-center" style="text-align: center;">
    <?php if ($error == 1) { ?>
        <div class="alert alert-danger">
            <strong style="text-align: center;"><?php echo ossn_print('login:error'); ?></strong><br/>
            <p style="text-align: center;"><?php echo ossn_print('login:error:sub'); ?></p>
        </div>
      <?php } ?>       


<p></p><p></p>
		<!--	<div class="col-m-12 center-block">

				<p align="center">
				<?php echo ossn_print('home:top:heading', array(ossn_site_settings('site_name'))); ?>
				</p>

			</div>-->

      <div class="col-x-1 gulp">
        <table class="atlas-table">
        <tr><td>
       <div id="one" >
            <?php $contents = ossn_view_form('login2', array( 'id' => 'ossn-login', 'action' => ossn_site_url('action/user/login')));
              echo ossn_plugin_view('widget/view', array( 'title' => ossn_print('site:login'), 'contents' => $contents));?>
            </div>
       <div id="two">
            <?php $contents = ossn_view_form('signup', array('id' => 'ossn-home-signup','action' => ossn_site_url('action/user/register')));
            $heading = "<p>".ossn_print('its:free')."</p>";
              echo ossn_plugin_view('widget/view', array('title' => ossn_print('create:account'),'contents' => 
          //  $heading.
              $contents));?></div></td></tr>
      </table>
</div>
</div>


