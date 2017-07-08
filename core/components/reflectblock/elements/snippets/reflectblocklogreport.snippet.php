<?php
/**
 * ReflectBlockLogReport
 * Copyright 2011-2017 Bob Ray
 *
 * ReflectBlockLogReport is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ReflectBlockLogReport is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ReflectBlockLogReport; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package reflectblock
 * @author Bob Ray <https://bobsguides.com>
 
 *
 * Description: The Reflect BlockLogReport snippet presents the contents of the Reflect Block log as a table.
 *
 * /

/* Modified: November 5, 2011 */


/* ToDo: Allow compressed report, sorted by IP, with one entry per IP and # of hits */

$file = MODX_CORE_PATH . '/logs/reflctblock.log';

$cellWidth = empty($scriptProperties['cell_width'])? 30 : $scriptProperties['cell_width'];
$tableWidth = empty($scriptProperties['table_width'])? '80%' : $scriptProperties['table_width'];

$fp = fopen ($file, 'r');
$output = '';
if ($fp) {
    $output = '<table class="BlockLog" border="1" cellpadding="10" width="' . $tableWidth .  '">';
    $output .= "\n   <tr>" . '<th width="' . $cellWidth . '">IP</th><th width="' . $cellWidth . '">Host</th><th width="' . $cellWidth . '">Time</th><th width="' . $cellWidth . '">User Agent</th><th width="' . $cellWidth . '">Request</th>' . "\n   </tr>";
    while (($line = fgets($fp)) !== false) {
        $line = trim($line);
        if (strpos($line,'#' == 0) || empty($line)) continue;
        $lineArray = explode('`',$line);
        $output .= "\n   <tr>";
        foreach($lineArray as $item) {
            $item = strip_tags($item);
            $item = htmlspecialchars($item, ENT_QUOTES, 'UTF-8');
            $output .= "\n" . '      <td style="word-break:break-all;" width="' . $cellWidth . '">' . $item . '</td>';
        }
        $output .= "\n   </tr>";
    }
    $output .= '</table>';
    fclose($fp);
} else {
    $output = 'Could not open: ' . $file;
}

return $output;