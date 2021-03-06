<?php
/**
 * ReflectBlock transport plugins
 * Copyright 2011-2017 Bob Ray <https://bobsguides.com>
 * @author Bob Ray <https://bobsguides.com>
 * 10/12/2011
 *
 * ReflectBlock is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ReflectBlock is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ReflectBlock; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package reflectblock
 */
/**
 * Description:  plugin object for ReflectBlock package
 * @package reflectblock
 * @subpackage build
 */

if (! function_exists('getPluginContent')) {
    function getpluginContent($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<?php','',$o);
        $o = str_replace('?>','',$o);
        $o = trim($o);
        return $o;
    }
}
$plugins = array();


$plugins[1]= $modx->newObject('modplugin');
$plugins[1]->fromArray(array(
    'id' => 1,
    'name' => 'ReflectBlock',
    'description' => 'Blocks requests containing the word reflect',
    'plugincode' => getPluginContent($sources['source_core'].'/elements/plugins/reflectblock.plugin.php'),
    'disabled' => '0',
),'',true,true);
$properties = include $sources['data'].'properties/properties.reflectblock.plugin.php';
$plugins[1]->setProperties($properties);

unset($properties);

return $plugins;