<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    block_ubicast
 * @copyright  Stéphane Diemer
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2019032900;
$plugin->requires = 2015111610; // 3.0
$plugin->component = 'block_ubicast';
$plugin->release = '1.0';
$plugin->maturity = MATURITY_STABLE;
$plugin->cron = 0;

$plugin->dependencies = [
    'mod_ubicast' => 2019032900,
];
