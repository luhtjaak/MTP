<?php
/*
FooBox Free Image Lightbox
*/

define( 'FOOBOXFREE_SLUG', 'foobox-free' );
define( 'FOOBOXFREE_PATH', plugin_dir_path( __FILE__ ));
define( 'FOOBOXFREE_URL', plugin_dir_url( __FILE__ ));
define( 'FOOBOXFREE_FILE', __FILE__ );

if (!class_exists('Foobox_Free')) {

	// Includes
	require_once FOOBOXFREE_PATH . "includes/class-settings.php";
	require_once FOOBOXFREE_PATH . "includes/class-script-generator.php";
	require_once FOOBOXFREE_PATH . "includes/class-foogallery-foobox-free-extension.php";
	require_once FOOBOXFREE_PATH . "includes/foopluginbase/bootstrapper.php";
	require_once FOOBOXFREE_PATH . 'includes/class-exclude.php';

	class Foobox_Free extends Foo_Plugin_Base_v2_1 {

		const JS                   = 'foobox.free.min.js';
		const CSS                  = 'foobox.free.min.css';
		const CSS_NOIE7            = 'foobox.noie7.min.css';
		const FOOBOX_URL           = 'http://fooplugins.com/plugins/foobox/?utm_source=fooboxfreeplugin&utm_medium=fooboxfreeprolink&utm_campaign=foobox_free_pro_tab';
		const BECOME_AFFILIATE_URL = 'http://fooplugins.com/affiliate-program/';

		private static $instance;

		public static function get_instance() {
			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Foobox_Free ) ) {
				self::$instance = new Foobox_Free();
			}
			return self::$instance;
		}

		/**
		 * Initialize the plugin by setting localization, filters, and administration functions.
		 */
		private function __construct() {
			//init FooPluginBase
			$this->init( FOOBOXFREE_FILE, FOOBOXFREE_SLUG, FOOBOX_BASE_VERSION, 'FooBox FREE' );

			if (is_admin()) {

				add_action('admin_head', array($this, 'admin_inline_content'));
				add_action('foobox-free-settings_custom_type_render', array($this, 'custom_admin_settings_render'));
				new FooBox_Free_Settings();

				add_action( FOOBOX_ACTION_ADMIN_MENU_RENDER_GETTING_STARTED, array( $this, 'render_page_getting_started' ) );
				add_action( FOOBOX_ACTION_ADMIN_MENU_RENDER_SETTINGS, array( $this, 'render_page_settings' ) );

				add_filter( 'foobox-free-has_settings_page', '__return_false' );

			} else {

				// Render JS to the front-end pages
				add_action('wp_enqueue_scripts', array($this, 'frontend_print_scripts'), 20);
				add_action('foobox-free_inline_scripts', array($this, 'inline_dynamic_js'));

				// Render CSS to the front-end pages
				add_action('wp_enqueue_scripts', array($this, 'frontend_print_styles'));

				if ( $this->is_option_checked('disable_others') ) {
					add_action('wp_footer', array($this, 'disable_other_lightboxes'), 200);
				}
			}

			new FooBox_Free_Exclude();
		}

		function custom_admin_settings_render($args = array()) {
			$type = '';

			extract($args);

			if ($type == 'debug_output') {
				echo '</td></tr><tr valign="top"><td colspan="2">';
				$this->render_debug_info();
			} else if ($type == 'upgrade') {
				echo '</td></tr><tr valign="top"><td colspan="2">';
				$this->render_upgrade_notice();
			}
		}

		function generate_javascript($debug = false) {
			return FooBox_Free_Script_Generator::generate_javascript($this, $debug);
		}

		function render_for_archive() {
			if (is_admin()) return true;

			return !is_singular();
		}

		function render_debug_info() {

			echo '<strong>Javascript:<br /><pre style="width:600px; overflow:scroll;">';

			echo htmlentities($this->generate_javascript(true));

			echo '</pre><br />Settings:<br /><pre style="width:600px; overflow:scroll;">';

			echo htmlentities( print_r(get_option($this->plugin_slug), true) );

			echo '</pre>';
		}

		function render_upgrade_notice() {
			require_once FOOBOXFREE_PATH . "includes/upgrade.php";
		}

		function frontend_init() {
			add_action('wp_head', array($this, 'inline_dynamic_js'));
		}

		function admin_print_styles() {
			parent::admin_print_styles();
			$this->frontend_print_styles();
		}

		function admin_print_scripts() {
			parent::admin_print_scripts();
			$this->register_and_enqueue_js( self::JS );
		}

		function admin_inline_content() {
			if ( 'toplevel_page_' . FOOBOX_BASE_SLUG === foo_current_screen_id() ||
				 'foobox_page_' . FOOBOX_BASE_PAGE_SLUG_SETTINGS === foo_current_screen_id() ) {
				$this->inline_dynamic_js();
			}
		}

		function frontend_print_styles() {
			if ( !apply_filters('foobox_enqueue_styles', true) ) return;

			//enqueue foobox CSS
			if ( $this->is_option_checked( 'dropie7support' ) ) {
				$this->register_and_enqueue_css(self::CSS_NOIE7);
			} else {
				$this->register_and_enqueue_css(self::CSS);
			}
		}

		function frontend_print_scripts() {
			if (!apply_filters('foobox_enqueue_scripts', true)) return;

			$this->register_and_enqueue_js(
				$file = self::JS,
				$d = array('jquery'),
				$v = false,
				$f = false);
		}

		function inline_dynamic_js() {
			if (!apply_filters('foobox_enqueue_scripts', true)) return;

			$foobox_js = $this->generate_javascript();

			$defer_js = !$this->is_option_checked( 'disable_defer_js', true );

			$script_type = $defer_js ? 'text/foobox' : 'text/javascript';

			echo '<script type="' . $script_type . '">' . $foobox_js . '</script>';

			if ( $defer_js ) {
				?>
				<script type="text/javascript">
					if (window.addEventListener){
						window.addEventListener("DOMContentLoaded", function() {
							var arr = document.querySelectorAll("script[type='text/foobox']");
							for (var x = 0; x < arr.length; x++) {
								var script = document.createElement("script");
								script.type = "text/javascript";
								script.innerHTML = arr[x].innerHTML;
								arr[x].parentNode.replaceChild(script, arr[x]);
							}
						});
					} else {
						console.log("FooBox does not support the current browser.");
					}
				</script>
				<?php
			}
		}

		/**
		 * PLEASE NOTE : This is only here to avoid the problem of hard-coded lightboxes.
		 * This is not meant to be malicious code to override all lightboxes in favour of FooBox.
		 * But sometimes theme authors hard code galleries to use their built-in lightbox of choice, which is not the desired solution for everyone.
		 * This can be turned off in the FooBox settings page
		 */
		function disable_other_lightboxes() {
			if ( !apply_filters('foobox_enqueue_scripts', true ) ) return;

			?>
			<script type="text/javascript">
				jQuery.fn.prettyPhoto   = function () { return this; };
				jQuery.fn.fancybox      = function () { return this; };
				jQuery.fn.fancyZoom     = function () { return this; };
				jQuery.fn.colorbox      = function () { return this; };
				jQuery.fn.magnificPopup = function () { return this; };
			</script>
		<?php
		}

		function render_page_getting_started() {
			require_once FOOBOXFREE_PATH . 'includes/view-getting-started.php';
		}

		function render_page_settings() {
			if ( isset( $_GET['settings-updated'] ) ) {
				if ( false === get_option( FOOBOXFREE_SLUG ) ) { ?>
					<div id="message" class="updated">
						<p>
							<strong><?php _e( 'FooBox settings restored to defaults.', 'foobox-image-lightbox' ); ?></strong>
						</p>
					</div>
				<?php } else { ?>
					<div id="message" class="updated">
						<p><strong><?php _e( 'FooBox settings updated.', 'foobox-image-lightbox' ); ?></strong></p>
					</div>
				<?php }
			}

			$instance = Foobox_Free::get_instance();
			$instance->admin_settings_render_page();
		}

		function is_option_checked($key) {
			$options = $this->options()->get_all();

			if ($options) {
				return array_key_exists($key, $options);
			}

			return false;
		}
	}
}

Foobox_Free::get_instance();
