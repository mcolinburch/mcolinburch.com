<?php
/**
* Main functions for the diamond theme
**/

function enqueue_parent_styles() {
   //wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function load_custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '-child/core/admin/css/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


function mcb_admin_enqueue($hook) {
    if( 'post.php' != $hook )
    return;
    wp_enqueue_script( 'custom_wp_admin_css', get_template_directory_uri() . '-child/core/admin/css/admin-style.css');
}
add_action( 'admin_enqueue_scripts', 'mcb_admin_enqueue' );



    function get_pf_type_output($args)
    {
        $compile = "";
        extract($args);
        if (!isset($width)) {
            $width = 1170;
        }
        if (!isset($height)) {
            $height = 563;
        }
        if (isset($pf)) {
            $compile .= '<div class="pf_output_container">';

            /* Image */
            if ($pf == 'image') {
                if (isset($fw_post) && $fw_post == true) {
                    $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
                    if (strlen($featured_image[0]) > 0) {
                        $compile .= '<img class="featured_image_standalone" src="' . aq_resize($featured_image[0], $width, $height, true, true, true) . '" alt="" />';
                    }
                } else {
                    $compile .= gt3_get_selected_pf_images($gt3_theme_pagebuilder, $width, $height);
                }
            } else if ($pf == "video") {

                $uniqid = mt_rand(0, 9999);
                global $YTApiLoaded, $allYTVideos;
                if (empty($YTApiLoaded)) {
                    $YTApiLoaded = false;
                }
                if (empty($allYTVideos)) {
                    $allYTVideos = array();
                }

                $video_url = (isset($gt3_theme_pagebuilder['post-formats']['videourl']) ? $gt3_theme_pagebuilder['post-formats']['videourl'] : "");
                if (isset($gt3_theme_pagebuilder['post-formats']['video_height'])) {
                    $video_height = $gt3_theme_pagebuilder['post-formats']['video_height'];
                } else {
                    $video_height = $GLOBALS["pbconfig"]['default_video_height'];
                }

                #YOUTUBE
                $is_youtube = substr_count($video_url, "youtu");
                if ($is_youtube > 0) {
                    $videoid = substr(strstr($video_url, "="), 1);
                    $compile .= "<div id='player{$uniqid}'></div>";
                    array_push($allYTVideos, array("h" => $video_height, "w" => "100%", "videoid" => $videoid, "uniqid" => $uniqid));
                }

                #VIMEO
                $is_vimeo = substr_count($video_url, "vimeo");
                if ($is_vimeo > 0) {
                    $videoid = substr(strstr($video_url, "m/"), 2);
                    $compile .= "
                <iframe src=\"https://player.vimeo.com/video/" . $videoid . "\" width=\"100%\" height=\"" . $video_height . "\" frameborder=\"0\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            ";
                }
            } else {
                if (isset($fw_post) && $fw_post == true) {
                    $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
                    if (strlen($featured_image[0]) > 0) {
                        $compile .= '<img class="featured_image_standalone" src="' . $featured_image[0] . '" alt="" />';
                    }
                } else {
                    $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
                    if (strlen($featured_image[0]) > 0) {
                        $compile .= '<img class="featured_image_standalone" src="' . $featured_image[0] . '" alt="" />';
                    }
                }
            }

            $compile .= '</div>';
        }

        return $compile;
    }
