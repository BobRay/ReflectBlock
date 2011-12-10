<?php

/**
 * Default properties for the Reflect Block Log Report snippet
 * @author Bob Ray <http://bobsguides.com>
 * 10/31/2011
 *
 * @package reflectblock
 * @subpackage build
 */

$properties = array(
    array(
        'name' => 'table_width',
        'desc' => 'rblr_table_width_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '80%',
        'lexicon' => 'reflectblock:properties',
    ),
    array(
        'name' => 'cell_width',
        'desc' => 'rblr_cell_width_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '30',
        'lexicon' => 'reflectblock:properties',
    ),
 );

return $properties;