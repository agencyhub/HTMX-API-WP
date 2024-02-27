<?php

/**
 * Handles compatibility with WordPress themes
 *
 * @package HXWP
 * @since   2024-02-27
 */

namespace HXWP;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

/**
 * Theme support Class
 */
class HXWP_Theme
{
	/**
	 * Runner
	 */
	public function run()
	{
		add_action('wp_footer', [$this, 'hx_boost'], 1);

		do_action('hxwp/theme/run');
	}

	/**
	 * Add the `hx-boost` attribute to any theme <body> tag.
	 */
	public function hx_boost()
	{
		// Check if set_htmx_hxboost is enabled
		$hxwp_options     = get_option('hxwp_options');
		$set_htmx_hxboost = $hxwp_options['set_htmx_hxboost'] ?? 0;

		if ($set_htmx_hxboost == 0) {
			return;
		}

		echo '<script>document.body.setAttribute("hx-boost", "true");</script>';
	}
}
