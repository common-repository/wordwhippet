<?php
/*
Plugin Name: WordWhippet
Description: WordWhippet is a free optmisation plugin with multiple options to speed up your WordPress site & improve your site's search engine rankings & PageSpeed Insights scores
Version: 1.0.2
Author: South Devon Digital
Author URI: https://southdevondigital.com
Text Domain: wordpress
*/

add_action( 'admin_menu', 'wrdwpt_admin_menu' );

function wrdwpt_admin_menu() {
	add_menu_page( 'WordWhippet',
                  'WordWhippet',
                  'manage_options',
                  'wordwhippet',
                  'wrdwpt_options_page',
                  'data:image/svg+xml;base64,' . base64_encode('
                  <svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22_rdf_syntax_ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:xlink="http://www.w3.org/1999/xlink"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi_0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="37.041668mm"
   height="26.19375mm"
   viewBox="0 0 37.041668 26.19375"
   version="1.1"
   id="svg8"
   inkscape:version="0.92.2 5c3e80d, 2017_08_06"
   sodipodi:docname="wrdwpt_icon_inv.svg">
  <defs
     id="defs2" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="0.35"
     inkscape:cx="395.71432"
     inkscape:cy="_461.9286"
     inkscape:document_units="mm"
     inkscape:current_layer="layer1"
     showgrid="false"
     inkscape:window_width="1680"
     inkscape:window_height="1005"
     inkscape:window_x="0"
     inkscape:window_y="1"
     inkscape:window_maximized="1" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Layer 1"
     inkscape:groupmode="layer"
     id="layer1"
     transform="translate(_1.1339184,_0.42097545)">
    <image
       y="_0.089293703"
       x="0.75595236"
       id="image3737"
       xlink:href="data:image/png;base64,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"
       style="image_rendering:optimizeSpeed"
       preserveAspectRatio="none"
       height="26.19375"
       width="37.041668" />
  </g>
</svg>'),
76);
}

function wrdwpt_load_scripts($hook) {
   if($hook != 'toplevel_page_wordwhippet') {
           return;
   }
   wp_enqueue_style( 'wrdwpt_css', plugins_url('wrdwpt.css', __FILE__) );
   wp_enqueue_script( 'wrdwpt_js', plugins_url('wrdwpt.js', __FILE__), array('jquery') );
}
add_action( 'admin_enqueue_scripts', 'wrdwpt_load_scripts' );

/* plugin page settings link */
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'wrdwpt_plugin_page_settings_link');
function wrdwpt_plugin_page_settings_link( $links ) {
	$links[] = '<a href="' .
		admin_url( 'admin.php?page=wordwhippet' ) .
		'">' . __('Settings') . '</a>';
	return $links;
}

function wrdwpt_options_page() {
	?>
	<div class="wrap">
		<h1 class="wp_heading_inline"><img id="header_icon" src="<?php echo plugins_url('wrdwpt_icon.png',__FILE__); ?>"> WordWhippet Site Optimiser</h2>
      <form method="post" action="<?php echo admin_url( 'admin.php?page=wordwhippet'); ?>">
		<div class="options_wrapper">
		   <div class="options_box">
			  <div class="options_box_inner">
				 <h2>Minify Source</h2>
				 <span class="note">
					Minifying the source code of your site will speed up loading times. Check that everything is still working if you enable this.
				 </span>
				 <br /><br />
				 <input id="wrdwpt_opt_minify" name="wrdwpt_opt_minify" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_minify' ) ); ?>>
				 <label for="wrdwpt_opt_minify">Enable minifcation</label>
			  </div>
		   </div>
		   <div class="options_box">
			  <div class="options_box_inner">
				 <h2>Cache Control/Expires headers</h2>
				 <span class="note">
					Adding cache control & expires headers will tell your users' browsers how long to keep a cached version of the file for. This is useful for speeding up loading times & improving SEO.
				 </span>
				 <br /><br />
				 <input id="wrdwpt_opt_cache" name="wrdwpt_opt_cache" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_cache' ) ); ?>>
				 <label for="wrdwpt_opt_cache">Enable Cache Control Headers</label>
			  </div>
		   </div>
		   <div class="options_box">
			  <div class="options_box_inner">
				 <h2>Async/Defer Javascript</h2>
				 <span class="note">
					Deferring and/or asyncing your javascript will speed up loading times and increase your PageSpeed Insights score, improving your SEO. Make sure your javascripts still work after enabling this. If not, try adding the filenames to the exceptions list.
				 </span>
				 <br /><br />
				 <div style="margin-bottom: 10px;">
					<input id="wrdwpt_opt_async_js" name="wrdwpt_opt_async_js" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_async_js' ) ); ?>>
					<label for="wrdwpt_opt_async_js">Async javscript</label>
					<div id="js_dont_async">
					   <label for="wrdwpt_opt_dont_async_js">Don't async these files:</label>
					   <br />
					   <input id="wrdwpt_opt_dont_async_js" name="wrdwpt_opt_dont_async_js" type="text" placeholder="Comma seperated filenames, e.g: myscript.js, another.js" value="<?php echo get_option('wrdwpt_opt_dont_async_js') ?>">
					</div>
				 </div>
				 <input id="wrdwpt_opt_defer_js" name="wrdwpt_opt_defer_js" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_defer_js' ) ); ?>>
				 <label for="wrdwpt_opt_defer_js">Defer javscript</label>
				 <div id="js_dont_defer">
					<label for="wrdwpt_opt_dont_defer_js">Don't defer these files:</label>
					<br />
					<input id="wrdwpt_opt_dont_defer_js" name="wrdwpt_opt_dont_defer_js" type="text" placeholder="Comma seperated filenames, e.g: myscript.js, another.js" value="<?php echo get_option('wrdwpt_opt_dont_defer_js') ?>">
				 </div>
			  </div>
		   </div>
		   <div class="options_box">
			  <div class="options_box_inner">
				 <h2>Enable Gzip Compression</h2>
				 <span class="note">
					Gzip compression will compress files before serving them to your users, speeding up loading times. You'll need gzip compression enabled on your server for this to work. Consult pagespeed insights after enabling it to make sure it's working.
				 </span>
				 <br /><br />
				 <input id="wrdwpt_opt_gzip" name="wrdwpt_opt_gzip" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_gzip' ) ); ?>>
				 <label for="wrdwpt_opt_gzip">Enable Gzip compression</label>
			  </div>
		   </div>
		   <div class="options_box">
			  <div class="options_box_inner">
				 <h2>Remove Query Strings</h2>
				 <span class="note">
					Removing query strings from static resources will allow them to be cached by the browser, speeding up loading times and improving your PageSpeed Insights score, boosting your SEO. Removing query strings also helps with security, as they can be sed to find out which version of WordPress you are running.
				 </span>
				 <br /><br />
				 <input id="wrdwpt_opt_remove_query_strings" name="wrdwpt_opt_remove_query_strings" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_remove_query_strings' ) ); ?>>
				 <label for="wrdwpt_opt_remove_query_strings">Remove query strings</label>
			  </div>
		   </div>
		   <div class="options_box">
			  <div class="options_box_inner">
				 <h2>Disable Image Hotlinking</h2>
				 <span class="note">
					If other sites are hotlinking your images, this can slow your server down. You can disable hotlinking here, but don't worry; Facebook, Twitter & Instagram will still be able to embed your images, and Google will still be able to index them.
				 </span>
				 <br /><br />
				 <input id="wrdwpt_opt_disable_hotlinking" name="wrdwpt_opt_disable_hotlinking" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_hotlinking' ) ); ?>>
				 <label for="wrdwpt_opt_disable_hotlinking">Disable hotlinking</label>
				 <div id="enable_hotlink_urls">
					<label for="wrdwpt_opt_enable_hotlink">Allow these sites to hotlink:</label>
					<br />
					<input id="wrdwpt_opt_enable_hotlink" name="wrdwpt_opt_enable_hotlink" type="text" placeholder="Comma seperated urls, e.g: http://mysite.com, https://anothersite.co.uk" value="<?php echo get_option('wrdwpt_opt_enable_hotlink') ?>">
				</div>
			  </div>
		   </div>
		   <div class="options_box">
			  <div class="options_box_inner">
				 <h2>Disable default WordPress functionality</h2>
				 <span class="note">
					By default WordPress will load some js & css files, or add code to the html that may be adding unneccesary weight if you don't need that functionality. You can disable them here to speed up loading times.
				 </span>
				 <br /><br />
				 <div style="margin-bottom: 10px;">
					<input id="wrdwpt_opt_disable_emojis" name="wrdwpt_opt_disable_emojis" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_emojis' ) ); ?>>
					<label for="wrdwpt_opt_disable_emojis">Disable Emoticons</label>
				 </div>
				 <div style="margin-bottom: 10px;">
					<input id="wrdwpt_opt_disable_comments" name="wrdwpt_opt_disable_comments" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_comments' ) ); ?>>
					<label for="wrdwpt_opt_disable_comments">Disable Comment Scripts</label>
				 </div>
				 <div style="margin-bottom: 10px;">
					<input id="wrdwpt_opt_disable_auto_embed" name="wrdwpt_opt_disable_auto_embed" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_auto_embed' ) ); ?>>
					<label for="wrdwpt_opt_disable_auto_embed">Disable Auto Embedding</label>
				 </div>
				 <div style="margin-bottom: 10px;">
					<input id="wrdwpt_opt_disable_jquery_migrate" name="wrdwpt_opt_disable_jquery_migrate" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_jquery_migrate' ) ); ?>>
					<label for="wrdwpt_opt_disable_jquery_migrate">Disable Jquery Migrate</label>
				 </div>
				 <div style="margin-bottom: 10px;">
					<input id="wrdwpt_opt_disable_rsd" name="wrdwpt_opt_disable_rsd" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_rsd' ) ); ?>>
					<label for="wrdwpt_opt_disable_rsd">Disable Really Simple Discovery</label>
				 </div>
				 <div style="margin-bottom: 10px;">
					<input id="wrdwpt_opt_disable_shortlinks" name="wrdwpt_opt_disable_shortlinks" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_shortlinks' ) ); ?>>
					<label for="wrdwpt_opt_disable_shortlinks">Disable Shortlinks</label>
				 </div>
				 <div style="margin-bottom: 10px;">
					<input id="wrdwpt_opt_disable_xml_rpc" name="wrdwpt_opt_disable_xml_rpc" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_xml_rpc' ) ); ?>>
					<label for="wrdwpt_opt_disable_xml_rpc">Disable XML_RPC</label>
				 </div>
				 <div style="margin-bottom: 10px;">
					<input id="wrdwpt_opt_disable_wlmanifest" name="wrdwpt_opt_disable_wlmanifest" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_wlmanifest' ) ); ?>>
					<label for="wrdwpt_opt_disable_wlmanifest">Remove WLManifest Link</label>
				 </div>
				 <div style="margin-bottom: 10px;">
					<input id="wrdwpt_opt_disable_self_pingback" name="wrdwpt_opt_disable_self_pingback" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_self_pingback' ) ); ?>>
					<label for="wrdwpt_opt_disable_self_pingback">Disable self-pingback</label>
				 </div>
				 <div style="margin-bottom: 10px;">
					<input id="wrdwpt_opt_disable_heartbeat_api" name="wrdwpt_opt_disable_heartbeat_api" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_heartbeat_api' ) ); ?>>
					<label for="wrdwpt_opt_disable_heartbeat_api">Disable heartbeat api</label>
				 </div>
				 <div style="margin-bottom: 10px;">
					<input id="wrdwpt_opt_disable_dashicons" name="wrdwpt_opt_disable_dashicons" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_dashicons' ) ); ?>>
					<label for="wrdwpt_opt_disable_dashicons">Disable Dashicons on the front-end</label>
				 </div>
			  </div>
		   </div>
		   <div class="options_box">
			  <div class="options_box_inner">
				 <h2>Limit/Disable WordPress Revisions</h2>
				 <span class="note">
					WordPress post revisions will eventually take up a lot of space in your database, slowing your server down. You can address this by limiting the amount of revisions stored on your site, or disabling them altogether.
				 </span>
				 <br /><br />
				 <div style="margin-bottom: 10px;">
					<input id="wrdwpt_opt_disable_revisions" name="wrdwpt_opt_disable_revisions" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_revisions' ) ); ?>>
					<label for="wrdwpt_opt_disable_revisions">Disable revisions</label>
				 </div>
				 <input id="wrdwpt_opt_limit_revisions" name="wrdwpt_opt_limit_revisions" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_limit_revisions' ) ); ?>>
				 <label for="wrdwpt_opt_limit_revisions">Limit revisions</label>
				 <div id="wrdwpt_opt_rev_num">
					<label for="wrdwpt_opt_limit_revisions_num">Limit revisions to:</label>
					<br />
					<input id="wrdwpt_opt_limit_revisions_num" name="wrdwpt_opt_limit_revisions_num" type="number" style="width:100px;" value="<?php echo get_option('wrdwpt_opt_limit_revisions_num'); ?>">
				 </div>
			  </div>
		   </div>
		   <div class="options_box">
			  <div class="options_box_inner">
				 <h2>Other options</h2>
				 <span class="note">
					  Hiding your WordPress/WooCommerce version can help with security. If an attacker doesn't know what version you're running, they won't know what exploits are available to them.
				 </span>
				 <br /><br />
				<input id="wrdwpt_opt_disable_wp_ver" name="wrdwpt_opt_disable_wp_ver" type="checkbox" value="1" <?php checked( '1', get_option( 'wrdwpt_opt_disable_wp_ver' ) ); ?>>
				<label for="wrdwpt_opt_disable_wp_ver">Hide WordPress/WooCommerce Version tags</label>
			  </div>
		   </div>
		</div>
		<br />
		<input type="submit" value="Save settings" class="button button-primary button-large" name="update_settings" id="wrdwpt_save_settings">
		<?php wp_nonce_field( 'wrdwpt_update', 'wrdwpt_update_nonce' ); ?>
	  </form>
	</div>
	<div id="wrdwpt_footer">
		<h1>Thank you for using WordWhippet!</h1>
		<p>WordWhippet was made with love by <a href="https://southdevondigital.com" target="_blank">South Devon Digital</a>.</p>
		<p>If you've found any bugs, please open a ticket on the WordPress plugin repository before leaving a bad review. Feature suggestions are welcome too!</p>
		<p>If you'd like to support WordWhippet, a 5 star review would be much appreciated.</p>
		<p>Follow <a href="https://www.facebook.com/SouthDevonDigital/" target="_blank">South Devon Digital on Facebook</a> for updates & news about new plugins, features, deals & more.</p>
	</div>
	<?php

}

function wrdwpt_do_update(){
	if (isset($_POST['update_settings'])) {
		if (check_admin_referer('wrdwpt_update', 'wrdwpt_update_nonce')){
			wrdwpt_update_settings();
		} else {
			wp_die('Admin security check failed, please try again.');
		}
	}
}
add_action('init','wrdwpt_do_update');

function wrdwpt_update_settings(){
	$wrdwpt_sand_minify = filter_var($_POST['wrdwpt_opt_minify'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_minify', $wrdwpt_sand_minify);
	$wrdwpt_sand_cache = filter_var($_POST['wrdwpt_opt_cache'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_cache', $wrdwpt_sand_cache);
	$wrdwpt_sand_async_js = filter_var($_POST['wrdwpt_opt_async_js'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_async_js', $wrdwpt_sand_async_js);
	$wrdwpt_sand_dont_async_js = filter_var($_POST['wrdwpt_opt_dont_async_js'], FILTER_SANITIZE_STRING);
	update_option('wrdwpt_opt_dont_async_js', $wrdwpt_sand_dont_async_js);
	$wrdwpt_sand_defer_js = filter_var($_POST['wrdwpt_opt_defer_js'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_defer_js', $wrdwpt_sand_defer_js);
	$wrdwpt_sand_dont_defer_js = filter_var($_POST['wrdwpt_opt_dont_defer_js'], FILTER_SANITIZE_STRING);
	update_option('wrdwpt_opt_dont_defer_js', $wrdwpt_sand_dont_defer_js);
	$wrdwpt_sand_opt_gzip = filter_var($_POST['wrdwpt_opt_gzip'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_gzip', $wrdwpt_sand_opt_gzip);
	$wrdwpt_sand_opt_remove_query_strings = filter_var($_POST['wrdwpt_opt_remove_query_strings'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_remove_query_strings', $wrdwpt_sand_opt_remove_query_strings);
	$wrdwpt_sand_opt_disable_hotlinking = filter_var($_POST['wrdwpt_opt_disable_hotlinking'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_hotlinking', $wrdwpt_sand_opt_disable_hotlinking);
	$wrdwpt_opt_enable_hotlink = filter_var($_POST['wrdwpt_opt_enable_hotlink'], FILTER_SANITIZE_STRING);
	update_option('wrdwpt_opt_enable_hotlink', $wrdwpt_opt_enable_hotlink);
	$wrdwpt_sand_opt_disable_emojis = filter_var($_POST['wrdwpt_opt_disable_emojis'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_emojis', $wrdwpt_sand_opt_disable_emojis);
	$wrdwpt_sand_opt_disable_comments = filter_var($_POST['wrdwpt_opt_disable_comments'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_comments', $wrdwpt_sand_opt_disable_comments);
	$wrdwpt_sand_opt_disable_auto_embed = filter_var($_POST['wrdwpt_opt_disable_auto_embed'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_auto_embed', $wrdwpt_sand_opt_disable_auto_embed);
	$wrdwpt_sand_opt_disable_jquery_migrate = filter_var($_POST['wrdwpt_opt_disable_jquery_migrate'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_jquery_migrate', $wrdwpt_sand_opt_disable_jquery_migrate);
	$wrdwpt_sand_opt_disable_rsd = filter_var($_POST['wrdwpt_opt_disable_rsd'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_rsd', $wrdwpt_sand_opt_disable_rsd);
	$wrdwpt_sand_opt_disable_shortlinks = filter_var($_POST['wrdwpt_opt_disable_shortlinks'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_shortlinks', $wrdwpt_sand_opt_disable_shortlinks);
	$wrdwpt_opt_disable_xml_rpc = filter_var($_POST['wrdwpt_opt_disable_xml_rpc'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_xml_rpc', $wrdwpt_opt_disable_xml_rpc);
	$wrdwpt_opt_disable_wlmanifest = filter_var($_POST['wrdwpt_opt_disable_wlmanifest'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_wlmanifest', $wrdwpt_opt_disable_wlmanifest);
	$wrdwpt_opt_disable_self_pingback = filter_var($_POST['wrdwpt_opt_disable_self_pingback'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_self_pingback', $wrdwpt_opt_disable_self_pingback);
	$wrdwpt_opt_disable_heartbeat_api = filter_var($_POST['wrdwpt_opt_disable_heartbeat_api'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_heartbeat_api', $wrdwpt_opt_disable_heartbeat_api);
	$wrdwpt_opt_disable_dashicons = filter_var($_POST['wrdwpt_opt_disable_dashicons'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_dashicons', $wrdwpt_opt_disable_dashicons);
	$wrdwpt_opt_disable_revisions = filter_var($_POST['wrdwpt_opt_disable_revisions'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_revisions', $wrdwpt_opt_disable_revisions);
	$wrdwpt_opt_limit_revisions = filter_var($_POST['wrdwpt_opt_limit_revisions'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_limit_revisions', $wrdwpt_opt_limit_revisions);
	$wrdwpt_opt_limit_revisions_num = filter_var($_POST['wrdwpt_opt_limit_revisions_num'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_limit_revisions_num', $wrdwpt_opt_limit_revisions_num);
	$wrdwpt_opt_disable_wp_ver = filter_var($_POST['wrdwpt_opt_disable_wp_ver'], FILTER_SANITIZE_NUMBER_INT);
	update_option('wrdwpt_opt_disable_wp_ver', $wrdwpt_opt_disable_wp_ver);

}

function wrdwpt_apply_settings(){

	if (!is_admin()){

		if ( get_option('wrdwpt_opt_minify') == 1 ){
			add_action('get_header', 'wrdwpt_html_compression_start');
		}

		if ( get_option('wrdwpt_opt_async_js') == 1 ){
			add_filter('clean_url', 'wrdwpt_async_js', 11, 1);
		}

		if ( get_option('wrdwpt_opt_defer_js') == 1 ){
			add_filter('clean_url', 'wrdwpt_defer_js', 11, 1);
		}

		if ( get_option('wrdwpt_opt_remove_query_strings') == 1 ){
			add_filter( 'style_loader_src', 'wrdwpt_remove_query_strings', 10, 2 );
			add_filter( 'script_loader_src', 'wrdwpt_remove_query_strings', 10, 2 );
		}

		if ( get_option('wrdwpt_opt_disable_emojis') == 1 ){
			remove_action('wp_head', 'print_emoji_detection_script', 7);
			remove_action('wp_print_styles', 'print_emoji_styles');
			remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
			remove_action( 'admin_print_styles', 'print_emoji_styles' );
		}

		if ( get_option('wrdwpt_opt_disable_comments') == 1 ){
			add_action('init','wrdwpt_disable_comment_reply');
		}

		if ( get_option('wrdwpt_opt_disable_auto_embed') == 1 ){
			add_action( 'wp_footer', 'wrdwpt_disable_embed' );
		}

		if ( get_option('wrdwpt_opt_disable_jquery_migrate') == 1 ){
				if (isset($scripts->registered['jquery'])) {
				$script = $scripts->registered['jquery'];

				if ($script->deps) {
					$script->deps = array_diff($script->deps, array(
						'jquery-migrate'
					));
				}
			}
		}

		if ( get_option('wrdwpt_opt_disable_rsd') == 1 ){
			remove_action( 'wp_head', 'rsd_link' );
		}

		if ( get_option('wrdwpt_opt_disable_shortlinks') == 1 ){
			remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
		}

		if ( get_option('wrdwpt_opt_disable_xml_rpc') == 1 ){
			add_filter('xmlrpc_enabled', '__return_false');
		}

		if ( get_option('wrdwpt_opt_disable_wlmanifest') == 1 ){
			remove_action( 'wp_head', 'wlwmanifest_link' );
		}

		if ( get_option('wrdwpt_opt_disable_self_pingback') == 1 ){
			add_action( 'pre_ping', 'wrdwpt_disable_pingback' );
		}

		if ( get_option('wrdwpt_opt_disable_wp_ver') == 1 ){
			remove_action( 'wp_head', 'wp_generator' );
		}

		if ( get_option('wrdwpt_opt_disable_dashicons') == 1 ){
			add_action( 'wp_enqueue_scripts', 'wrdwpt_disable_dashicons' );
		}

	}

	if ( get_option('wrdwpt_opt_gzip') == 1 ){
		add_action('admin_init','wrdwpt_write_gzip');
	} else {
		add_action('admin_init','wrdwpt_clear_gzip');
	}

	if ( get_option('wrdwpt_opt_cache') == 1 ){
		add_action('admin_init','wrdwpt_write_cache_control');
	} else {
		add_action('admin_init','wrdwpt_clear_cache_control');
	}

	if ( get_option('wrdwpt_opt_disable_hotlinking') == 1 ){
		add_action('admin_init','wrdwpt_write_nohotlink');
	} else {
		add_action('admin_init','wrdwpt_clear_nohotlink');
	}

	if ( get_option('wrdwpt_opt_disable_heartbeat_api') == 1 ){
		add_action( 'init', 'wrdwpt_disable_heartbeat', 1 );
	}

	if ( get_option('wrdwpt_opt_disable_revisions') == 1 ){
		define('WP_POST_REVISIONS', false);
	}

	if ( get_option('wrdwpt_opt_limit_revisions') == 1 ){
		if ( get_option('wrdwpt_opt_limit_revisions_num') !== null ){
			define('WP_POST_REVISIONS', get_option('wrdwpt_opt_limit_revisions_num'));
		}
	}

}
add_action('init','wrdwpt_apply_settings');

/* function to minify source */
class wrdwpt_html_compression {
    protected $compress_css = true;
    protected $compress_js = true;
    protected $info_comment = true;
    protected $remove_comments = true;

    protected $html;
    public function __construct($html) {
      if (!empty($html)) {
		    $this->parseHTML($html);
	    }
    }
    public function __toString() {
	    return $this->html;
    }
    protected function minifyHTML($html) {
	    $pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
	    preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);
	    $overriding = false;
	    $raw_tag = false;
	    $html = '';
	    foreach ($matches as $token) {
		    $tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;
		    $content = $token[0];
		    if (is_null($tag)) {
			    if ( !empty($token['script']) ) {
				    $strip = $this->compress_js;
			    }
			    else if ( !empty($token['style']) ) {
				    $strip = $this->compress_css;
			    }
			    else if ($content == '<!--wp-html-compression no compression-->') {
				    $overriding = !$overriding;
				    continue;
			    }
			    else if ($this->remove_comments) {
				    if (!$overriding && $raw_tag != 'textarea') {
					    $content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content);
				    }
			    }
		    }
		    else {
			    if ($tag == 'pre' || $tag == 'textarea') {
				    $raw_tag = $tag;
			    }
			    else if ($tag == '/pre' || $tag == '/textarea') {
				    $raw_tag = false;
			    }
			    else {
				    if ($raw_tag || $overriding) {
					    $strip = false;
				    }
				    else {
					    $strip = true;
					    $content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content);
					    $content = str_replace(' />', '/>', $content);
				    }
			    }
		    }
		    if ($strip) {
			    $content = $this->removeWhiteSpace($content);
		    }
		    $html .= $content;
	    }
	    return $html;
    }
    public function parseHTML($html) {
	    $this->html = $this->minifyHTML($html);
    }
    protected function removeWhiteSpace($str) {
	    $str = str_replace("\t", ' ', $str);
	    $str = str_replace("\n",  '', $str);
	    $str = str_replace("\r",  '', $str);
	    while (stristr($str, '  ')) {
		    $str = str_replace('  ', ' ', $str);
	    }
	    return $str;
    }
}
function wrdwpt_html_compression_finish($html) {
    return new wrdwpt_html_compression($html);
}
function wrdwpt_html_compression_start() {
    ob_start('wrdwpt_html_compression_finish');
}
/* function to remove query strings */
function wrdwpt_remove_query_strings( $src ) {
	if( strpos( $src, '?ver=' ) )
	 $src = remove_query_arg( 'ver', $src );
	return $src;
}

/* function to disable embeds */
function wrdwpt_disable_embed(){
	wp_dequeue_script( 'wp-embed' );
}

/* function to disable jQuery migrate */
function wrdwpt_dereg_jq_migrate() {
	wp_deregister_script('jquery');
}

/* function to disable pingbacks */
function wrdwpt_disable_pingback( &$links ) {
	foreach ( $links as $l => $link )
		if ( 0 === strpos( $link, get_option( 'home' ) ) )
			unset($links[$l]);
}

/* function to disable dashicons */
function wrdwpt_disable_dashicons() {
    wp_deregister_style('dashicons');
}

/* function to disable heartbeat api */
function wrdwpt_disable_heartbeat() {
	wp_deregister_script('heartbeat');
}

/* function to deqeueue comment-reply.js */
function wrdwpt_disable_comment_reply(){
	wp_deregister_script( 'comment-reply' );
}

/* function to defer scripts */
function wrdwpt_defer_js($url){
    $files = explode(',', preg_replace('/\s+/', '', get_option('wrdwpt_opt_dont_defer_js')) );
    if (!is_admin()) {
        if (false === strpos($url, '.js')) {
            return $url;
        }
        foreach ($files as $file) {
            if (strpos($url, $file)) {
                return $url;
            }
        }
    } else {
        return $url;
    }
    return "$url' defer='defer";
}

/* function to async scripts */
function wrdwpt_async_js($url){
    $files = explode(',', preg_replace('/\s+/', '', get_option('wrdwpt_opt_dont_async_js')) );
    if (!is_admin()) {
        if (false === strpos($url, '.js')) {
            return $url;
        }
        foreach ($files as $file) {
            if (strpos($url, $file)) {
                return $url;
            }
        }
    } else {
        return $url;
    }
    return "$url' async='async";
}

/* function to write cache control headers to htaccess */
function wrdwpt_write_cache_control(){
	$htaccess = ABSPATH.'.htaccess';
	$lines = array();
	$lines[] = '<FilesMatch "\.(js|css|jpg|jpeg|gif|png|pdf|swf|svg|svgz|ico|ttf|ttc|otf|eot|woff|woff2|webp)$">';
	$lines[] = '<IfModule mod_headers.c>';
	$lines[] = 'ExpiresActive On';
	$lines[] = 'ExpiresDefault  "access plus 1 month"';
	$lines[] = 'Header set Cache-Control "public, immutable, max-age=2628000, s-maxage=2628000"';
	$lines[] = 'Header set Access-Control-Allow-Origin "*';
	$lines[] = '</IfModule>';
	$lines[] = '</FilesMatch>';
	insert_with_markers($htaccess, "WordWhippet Cache Control", $lines);
}

/* function to clear cache control headers */
function wrdwpt_clear_cache_control(){
	$htaccess = ABSPATH.'.htaccess';
	insert_with_markers($htaccess, "WordWhippet Cache Control", '');
}

/* function to enable gzip in htaccess */
function wrdwpt_write_gzip(){
	$htaccess = ABSPATH.'.htaccess';
	$lines = array();
	$lines[] = '<IfModule mod_deflate.c>';
	$lines[] = 'AddOutputFilterByType DEFLATE application/javascript';
	$lines[] = 'AddOutputFilterByType DEFLATE application/rss+xml';
	$lines[] = 'AddOutputFilterByType DEFLATE application/vnd.ms-fontobject';
	$lines[] = 'AddOutputFilterByType DEFLATE application/x-font';
	$lines[] = 'AddOutputFilterByType DEFLATE application/x-font-opentype';
	$lines[] = 'AddOutputFilterByType DEFLATE application/x-font-otf';
	$lines[] = 'AddOutputFilterByType DEFLATE application/x-font-truetype';
	$lines[] = 'AddOutputFilterByType DEFLATE application/x-font-ttf';
	$lines[] = 'AddOutputFilterByType DEFLATE application/x-javascript';
	$lines[] = 'AddOutputFilterByType DEFLATE application/xhtml+xml';
	$lines[] = 'AddOutputFilterByType DEFLATE application/xml';
	$lines[] = 'AddOutputFilterByType DEFLATE font/opentype';
	$lines[] = 'AddOutputFilterByType DEFLATE font/otf';
	$lines[] = 'AddOutputFilterByType DEFLATE font/ttf';
	$lines[] = 'AddOutputFilterByType DEFLATE image/svg+xml';
	$lines[] = 'AddOutputFilterByType DEFLATE image/x-icon';
	$lines[] = 'AddOutputFilterByType DEFLATE text/css';
	$lines[] = 'AddOutputFilterByType DEFLATE text/html';
	$lines[] = 'AddOutputFilterByType DEFLATE text/javascript';
	$lines[] = 'AddOutputFilterByType DEFLATE text/plain';
	$lines[] = 'AddOutputFilterByType DEFLATE text/xml';
	$lines[] = 'BrowserMatch ^Mozilla/4 gzip-only-text/html';
	$lines[] = 'BrowserMatch ^Mozilla/4\.0[678] no-gzip';
	$lines[] = 'BrowserMatch \bMSIE !no-gzip !gzip-only-text/html';
	$lines[] = 'Header append Vary User-Agent';
	$lines[] = '</IfModule>';
	insert_with_markers($htaccess, "WordWhippet GZip Compression", $lines);
}

/* function to clear gzip from htaccess */
function wrdwpt_clear_gzip(){
	$htaccess = ABSPATH.'.htaccess';
	insert_with_markers($htaccess, "WordWhippet GZip Compression", '');
}

/* function to disable hotlinking in htaccess */
function wrdwpt_write_nohotlink(){
	$htaccess = ABSPATH.'.htaccess';
	$lines = array();
	$siteurl = str_replace('www.','',str_replace('//','',substr(get_site_url(), strpos(get_site_url(),'/'))));
	$lines[] = 'RewriteCond %{HTTP_REFERER} !^$';
	$lines[] = 'RewriteCond %{HTTP_REFERER} !^http(s)?://'.$siteurl.' [NC]';
	$allows = explode(',',preg_replace('/\s+/', '', get_option('wrdwpt_opt_enable_hotlink')));
	foreach ($allows as $allow){
		$allow = str_replace('www.','',str_replace('//','',substr($allow, strpos($allow,'/'))));
		$lines[] = 'RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?'.$allow.' [NC]';
	}
	$lines[] = 'RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?google.com [NC]';
	$lines[] = 'RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?facebook.com [NC]';
	$lines[] = 'RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?twitter.com [NC]';
	$lines[] = 'RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?instagram.com [NC]';
	$lines[] = 'RewriteRule \.(jpg|jpeg|webp|png|gif)$ - [F]';
	insert_with_markers($htaccess, "WordWhippet Disable Hotlinking", $lines);
}

/* function to clear hotlink disable */
function wrdwpt_clear_nohotlink(){
	$htaccess = ABSPATH.'.htaccess';
	insert_with_markers($htaccess, "WordWhippet Disable Hotlinking", '');
}

?>
