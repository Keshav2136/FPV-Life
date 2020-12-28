 <fieldset class="titleform">
 	<div class="alert alert-warning">
    	<?php echo ossn_print('theme:atlas:browsercache');?>
    </div>	
 	<div>	
    	<label><?php echo ossn_print('theme:atlas:logo:site');?> (450x90 - 500 KB PNG) </label>
        <input type="file" name="logo_site" />
        <div class="logo-container-atlas">
	        <img src="<?php echo ossn_theme_url();?>images/logo_animated.svg" width="50px" />
        </div>
    </div>
  	<div>	
    	<label><?php echo ossn_print('theme:atlas:logo:admin');?> (180x45 - 500 KB JPG)</label>
        <input type="file" name="logo_admin" />
        <div class="logo-container-atlas">
	        <img src="<?php echo ossn_theme_url();?>images/logo_animated.svg" width="50px"/>
        </div>
    </div>   
	<input type="submit" class="btn btn-success btn-sm" value="<?php echo ossn_print('save');?>"/>
</fieldset>