<?php

/**
 * Default properties for the LogFileNotFound plugin
 * @author Bob Ray <http://bobsguides.com>
 * 10/31/2011
 *
 * @package logpagenotfound
 * @subpackage build
 */

$properties = array(
    array(
        'name' => 'log_max_lines',
        'desc' => 'rb_log_max_lines_desc',
        'type' => 'integer',
        'options' => '',
        'value' => '300',
        'lexicon' => 'reflectblock:properties',
    ),
 );

return $properties;