<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

$option_name = 'scand_osticket_config';

delete_option( $option_name );