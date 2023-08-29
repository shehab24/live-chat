<?php

if (!defined('ABSPATH')) {
    exit();
}



global $wpdb;

define('LC_LIVE_CHAT_TABLE', $wpdb->prefix . 'lc_live_chat_table');
define('LC_CHAT_USER_LIST_TABLE', $wpdb->prefix . 'chat_user_list_table');