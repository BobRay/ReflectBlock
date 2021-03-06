<?php
/**
 * ReflectBlock
 *
 *
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
 * ReflectBlock; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package reflectblock
 */
/**
 * Properties (property descriptions) Lexicon Topic
 *
 * @package reflectblock
 * @subpackage lexicon
 */

/* ReflectBlock Default Property descriptions */

$_lang['reflectblock_interval_desc'] = 'Time interval for fast scrapers. Default: 7';
$_lang['reflectblock_max_visits_desc'] = 'Fast scrapers will exceed this value during the interval. Important: *must* be greater than interval. Default: 14 (allows two visits per second in any given 14-second period with the interval set to 7)';
$_lang['reflectblock_penalty_desc'] = 'Penalty (in seconds) for violators; used as a multiplier in determining the wait time for fast scrapers. Default: 60';
$_lang['reflectblock_total_visits_desc'] = 'Slow scrapers must make fewer than this number of visits in the interval set by start_over_secs. Set to `none` to disable the slow scraper check. Default: 1500. You can reduce this for small sites, but watch the log (and show the appeal Tpl).';
$_lang['reflectblock_start_over_secs_desc'] = 'Seconds between tracking restarts for slow scrapers. Default :43200 (12 hours)';
$_lang['reflectblock_ip_length_desc'] = 'Determines the maximum number of possible IP files to be stored. There will be one, zero-length, IP file for each unique visitor to the site. If there are more visitors than the limit, IP files will be shared, which is no problem unless two visitors with similar IPs visit on the same day -- and that will only be a problem if either one is badly behaved. 2=255 files, 3=4,096 files 4=65,025 files, 5=1,044,480 files. Default: 3';
$_lang['reflectblock_show_slow_appeal_desc'] = 'Show slow scrapers a message suggesting that they can appeal to via the contact page. Default: Yes ';
$_lang['reflectblock_show_fast_appeal_desc'] = 'Show fast scrapers a message suggesting that they can appeal to via the contact page. Default: Yes ';
$_lang['reflectblock_appeal_tpl_desc'] = 'Name of the chunk to use for the appeal. Default: "AppealTpl"';
$_lang['reflectblock_slow_tpl_desc'] = 'Name of the chunk to use for the slow scraper violation message. Default: "SlowScraperTpl"';
$_lang['reflectblock_fast_tpl_desc'] = 'Name of the chunk to use for the fast scraper violation message. Default: "FastScraperTpl"';
