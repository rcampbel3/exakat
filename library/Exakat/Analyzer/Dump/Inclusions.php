<?php
/*
 * Copyright 2012-2019 Damien Seguy – Exakat SAS <contact(at)exakat.io>
 * This file is part of Exakat.
 *
 * Exakat is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Exakat is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Exakat.  If not, see <http://www.gnu.org/licenses/>.
 *
 * The latest code can be found at <http://exakat.io/>.
 *
*/

namespace Exakat\Analyzer\Dump;

use Exakat\Analyzer\Analyzer;

class Inclusions extends Analyzer {
    public function analyze() {
        // Store inclusionss of files within each other
        $this->analyzerTable = 'inclusions';
        $this->analyzerSQLTable = <<<'SQL'
CREATE TABLE inclusions (  id INTEGER PRIMARY KEY AUTOINCREMENT,
                           including STRING,
                           included STRING
                        )
SQL;

        $this ->atomIs('Include', Analyzer::WITHOUT_CONSTANTS)
              ->_as('included')
              ->goToInstruction('File')
              ->_as('including')
              ->select(array('included'  => 'fullcode',
                             'including' => 'fullcode'));

        $res = $this->prepareQuery(self::QUERY_TABLE);
    }
}

?>
