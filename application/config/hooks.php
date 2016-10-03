<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

// security headers
$hook['post_controller'] = function()
{
	if (!headers_sent())
	{
		$csp = "default-src 'none'; img-src 'self'; style-src 'self'; script-src 'self'; frame-ancestors 'none'; form-action 'self'; block-all-mixed-content; sandbox allow-same-origin; reflected-xss block; referrer no-referrer; sandbox allow-same-origin;";
		header('X-XSS-Protection: 1, mode=block');
		header('X-Content-Type-Options: nosniff');
		header('X-Permitted-Cross-Domain-Policies: none');
		header('X-Frame-Options: DENY');
		header('X-Content-Security-Policy: ' . $csp);
		header('Content-Security-Policy: ' . $csp);
		header('X-WebKit-CSP: ' . $csp);
		header('Cache-Control: no-cache');
	}
};