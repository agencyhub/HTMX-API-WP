<?php
// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

/**
 * HTMX API URL
 *
 * @since 2023-12-04
 * @return string
 */
if (!function_exists('hxwp_api_url')) {
	function hxwp_api_url()
	{
		return home_url(HXWP_ENDPOINT . '/' . HXWP_ENDPOINT_VERSION);
	}
}