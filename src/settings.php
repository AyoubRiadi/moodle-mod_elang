<?php

/**
 * Elang module admin settings and defaults
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package     mod
 * @subpackage  elang
 * @copyright   2013 University of La Rochelle, France
 * @license     http://www.cecill.info/licences/Licence_CeCILL-B_V1-en.html CeCILL-B license
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree)
{
	require_once $CFG->libdir . '/resourcelib.php';

	// General settings
	$settings->add(
		new admin_setting_configcheckbox(
			'elang/requiremodintro',
			get_string('requiremodintro', 'admin'),
			get_string('configrequiremodintro', 'admin'),
			1
		)
	);
}
