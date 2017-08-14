<?php
/**
* @package Scand_osTicket_Connector
* @version 1.0.0
*/

/*
Plugin Name: osTicket Connector
Plugin URI: https://wordpress.org/plugins/scand-osticket-connector/
Description: Create tickets in osTicket support system via the existing contact form.
Text Domain: scand-osticket-connector
Domain Path: /languages
Version: 1.0.1
Author: SCAND Ltd.
Author email: wordpress@scand.com
Author URI: http://scand.com/
License: GPLv2 or later
*/

/* Copyright SCAND Ltd. http://www.scand.com
Plugin is free software: you can redistribute it and/or modify  it under the terms of the GNU General Public License
as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.
Plugin is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with extension.
If not, see http://www.gnu.org/licenses/gpl.html .
*/

// Prohibit direct script loading
defined('ABSPATH') || die('No direct script access allowed!');

// Plugin constant
define('SCAND_OST_CONNECTOR_VERSION', '1.0.1');
define('SCAND_OST_CONNECTOR_TITLE', 'osTicket Connector');
define('SCAND_OST_CONNECTOR_FILE', __FILE__);
define('SCAND_OST_CONNECTOR_NAME', 'scand-osticket-connector');
define('SCAND_OST_CONNECTOR_TEXTDOMAIN', 'scand-osticket-connector');
define('SCAND_OST_CONNECTOR_ABSPATH', plugin_dir_path( __FILE__ ));
define('SCAND_OST_CONNECTOR_OPTION_PAGE', 'scand_osticket_settings');
define('SCAND_OST_CONNECTOR_CONFIG_NAME', 'scand_osticket_config');
define('SCAND_OST_CONNECTOR_CONFIG_DEFAULT_URL', 'http://your.domain/api/tickets.json');
define('SCAND_OST_CONNECTOR_CONFIG_DEFAULT_KEY', 'PUTyourAPIkeyHERE');

// Loads main classes
require_once SCAND_OST_CONNECTOR_ABSPATH . 'class-http-api.php';
