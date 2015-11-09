<?php
/*
 * Copyright 2012-2015 Damien Seguy – Exakat Ltd <contact(at)exakat.io>
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


namespace Analyzer\Functions;

use Analyzer;

class funcGetArgModified extends Analyzer\Analyzer {
    public function dependsOn() {
        return array('Variables/IsModified');
    }
    
    public function analyze() {
        $this->atomIs('Function')
             ->outIs('ARGUMENTS')
             ->outIs('ARGUMENT')
             ->outIsIE('RIGHT')
             ->savePropertyAs('rank', 'rank')
             ->savePropertyAs('code', 'arg')
             ->inIsIE('RIGHT')
             ->inIs('ARGUMENT')
             ->inIs('ARGUMENTS')
             ->outIs('BLOCK')
             ->atomInside('Functioncall')
             ->fullnspath('\\func_get_arg')
             ->outIs('ARGUMENTS')
             ->outIs('ARGUMENT')
             ->atomIs('Integer')
             ->samePropertyAs('intval', 'rank', true)
             ->goToFunction()
             ->outIs('BLOCK')
             ->atomInside('Variable')
             ->samePropertyAs('code', 'arg')
             ->analyzerIs('Variables/IsModified')
             ->back('first');
        $this->prepareQuery();
    }
}

?>
