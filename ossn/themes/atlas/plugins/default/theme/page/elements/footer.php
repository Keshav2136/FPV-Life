<?php
$site_name = ossn_site_settings('site_name');
if (isset($params['title'])) {
  $title = $params['title'] . ' : ' . $site_name;
} else {
  $title = ossn_site_settings('site_name');}
  ?>

<!-- this shit is deprecated -->
<style type="text/css">

.futer {
        width: 100%;
        text-align: center;
        /*position: fixed;
        bottom: 10px;*/
        z-index: 1;
        }

</style>
<footer>
  <div class="col-x-1">
    <div class="futer footer-contents">
      <div class="ossn-footer-menu">
        <?php echo ossn_view_menu('footer'); ?>
      </div>
      <?php echo ossn_fetch_extend_views('ossn/page/footer/contents'); ?>
    </div>
  </div>
</footer>
<!--
<div class="col-x-1">
  <div class="futer footer" >
    <a href="<?php echo ossn_site_url(); ?>"
      style="color:#666;text-transform:uppercase"
      onMouseOver="this.style.color='#c5ff00'"
      onMouseOut="this.style.color='#666'">

      <?php echo ossn_print('copyright'); ?>
      <?php echo date("Y"); ?>
      <?php echo $site_name; ?>
    </a>
    
    by

    <a target="_blank" href="https://m.me/dealer.slp"
    style="color:#666;text-transform:uppercase"
    onMouseOver="this.style.color='#c5ff00'"
    onMouseOut="this.style.color='#666'">

    t_coder

  </a>
-->
</div>
</div>
