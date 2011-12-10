<?php
/**
 * Resource objects for the ReflectBlock package
 * @author Bob Ray <http://bobsguides.com>
 * 10/12/2011
 *
 * @package reflectblock
 * @subpackage build
 */

$resources = array();

$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Reflect Block Report<br />');


$modx->log(modX::LOG_LEVEL_INFO,'Packaging resource: Reflect Block Log Report<br />');
$resources[1]= $modx->newObject('modResource');
$resources[1]->fromArray(array(
    'id' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Reflect Block Log Report',
    'longtitle' => 'Reflect Block Log Report',
    'description' => 'Shows the formatted content of the Reflect Block Log (note: alias cannot contain the word "reflect")',
    'alias' => 'reflct-block-log-report',
    'published' => '0',
    'parent' => '0',
    'isfolder' => '0',
    'richtext' => '0',
    'menuindex' => '',
    'searchable' => '0',
    'cacheable' => '1',
    'menutitle' => 'Reflect Block Log Report',
    'hidemenu' => '1',
),'',true,true);
$resources[1]->setContent(file_get_contents($sources['build'] . 'data/resources/reflectblocklogreport.content.html'));

return $resources;
