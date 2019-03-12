<?php
// Respondus 4.0 Web Service Extension For Moodle
// Copyright (c) 2009-2019 Respondus, Inc.  All Rights Reserved.
// Date: January 14, 2019.
defined("MOODLE_INTERNAL") || die();
if (!isset($CFG)) {
    global $CFG;
}
if (isset($CFG) && isset($CFG->version) && $CFG->version >= 2014051200) {
    if (!isset($plugin)) {
        $plugin = new stdClass();
    }
    $plugin->version = 2019011400;
    $plugin->requires = 2010122500;
    $plugin->cron = 0;
    $plugin->component = 'mod_respondusws';
    $respondusws_info = $plugin;
} else {
    if (!isset($module)) {
        $module = new stdClass();
    }
    $respondusws_alias = &$module;
    $respondusws_alias->version = 2019011400;
    $respondusws_alias->requires = 2010122500;
    $respondusws_alias->cron = 0;
    $respondusws_info = $module;
}
$respondusws_info->release = "3.0.0.04";
