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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Upgrade code for install
 *
 * @package   assignsubmission_file
 * @copyright 2012 NetSpot {@link http://www.netspot.com.au}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Stub for upgrade code
 * @param int $oldversion
 * @return bool
 */
function xmldb_assignsubmission_file_upgrade($oldversion) {
    global $DB;

    $dbman = $DB->get_manager();

    // Bảng cần sửa đổi
    $table = new xmldb_table('assignsubmission_file');

    // Từ phiên bản nào thì thêm cột
    if ($oldversion < 2025041900) {
        // Thêm cột plagiarism
        $field_plagiarism = new xmldb_field('plagiarism', XMLDB_TYPE_CHAR, '10', null, XMLDB_NOTNULL, null, '');
        if ($dbman->field_exists($table, $field_plagiarism)) {
            $field_plagiarism->setDefault('');
            $dbman->change_field_default($table, $field_plagiarism);
        }

        // Thêm cột urlfilechecked
        $field_urlfilechecked = new xmldb_field('urlfilechecked', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL, null, '');
        if (!$dbman->field_exists($table, $field_urlfilechecked)) {
            $field_urlfilechecked->setDefault('');
            $dbman->change_field_default($table, $field_urlfilechecked);
        }

        // Đánh dấu nâng cấp thành công
        upgrade_plugin_savepoint(true, 2025041900, 'assignsubmission', 'file');
    }

    return true;
}

