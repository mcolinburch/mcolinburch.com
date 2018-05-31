<?php
#gt3_delete_theme_option("theme_version");

$theme_temp_version = gt3_get_theme_option("theme_version");

if ((int)$theme_temp_version < 3) {
	gt3_update_theme_option("custom.css_request_recompile_file", "yes");	
    gt3_update_theme_option("theme_version", 3);
}
if ((int)$theme_temp_version < 4) {
	gt3_update_theme_option("custom.css_request_recompile_file", "yes");	
	gt3_update_theme_option('social_500px', '');
    gt3_update_theme_option("theme_version", 4);
}
if ((int)$theme_temp_version < 5) {
	gt3_update_theme_option("custom.css_request_recompile_file", "yes");	
	gt3_update_theme_option('post_pingbacks', 'disabled');
    gt3_update_theme_option("theme_version", 5);
}

?>