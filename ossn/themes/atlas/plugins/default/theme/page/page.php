<?php

$sitename = ossn_site_settings('site_name');
$sitelanguage = ossn_site_settings('language');
if (isset($params['title'])) {
    $title = $params['title'] . ' : ' . $sitename;
} else {
    $title = $sitename;
}
if (isset($params['contents'])) {
    $contents = $params['contents'];
} else {
    $contents = '';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $sitelanguage; ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $title; ?></title>
   
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Red Social sin censura.">
    <meta http-equiv="onion-location" content="http://sqsfqmtxwkolnv6dm66xqwvthtq4id3co47g3u45v2dfzawvmigagtid.onion/" />
    <meta name="author" content="a0110100110010110">
    
    
    <link rel="icon" href="<?php echo ossn_add_cache_to_url(ossn_theme_url().'images/favicon.ico');?>" type="image/x-icon" />
	
    <?php echo ossn_fetch_extend_views('ossn/endpoint'); ?>
    <?php echo ossn_fetch_extend_views('ossn/site/head'); ?>

    <script>
        <?php echo ossn_fetch_extend_views('ossn/js/head'); ?>
    </script>
</head>

<body>
	<div class="ossn-page-loading-annimation">
    		<div class="ossn-page-loading-annimation-inner">
            	<div class="ossn-loading"></div>
            </div>
    </div>

	<div class="ossn-halt ossn-light"></div>
	<div class="ossn-message-box"></div>
	<div class="ossn-viewer"></div>
    
    <div class="opensource-socialnetwork">
    	<?php echo ossn_plugin_view('theme/page/elements/sidebar');?>
    	 <div class="ossn-page-container">
			  <?php echo ossn_plugin_view('theme/page/elements/topbar');?>
			  
			  
          <div class="ossn-inner-page">    
  	  	
  	  
  	  	
  	  	
  	  		  <?php echo $contents; ?>
          </div>    
		</div>

   </div>
    <?php echo ossn_fetch_extend_views('ossn/page/footer'); ?>
</body>
</html>
