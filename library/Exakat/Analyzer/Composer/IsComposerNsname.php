<?php
/*
 * Copyright 2012-2017 Damien Seguy – Exakat Ltd <contact(at)exakat.io>
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


namespace Exakat\Analyzer\Composer;

use Exakat\Analyzer\Analyzer;
use Exakat\Data\Composer;

class IsComposerNsname extends Analyzer {
    public function analyze() {
        $data = new Composer($this->config);

        $packagistNamespaces = $data->getComposerNamespaces();
        $packagistNamespacesFullNS = $this->makeFullNsPath($packagistNamespaces);

        $packagistClasses = $data->getComposerClasses();
        $packagistClassesFullNS = $this->makeFullNsPath($packagistClasses);

        $packagistInterfaces = $data->getComposerInterfaces();
        $packagistInterfacesFullNs = $this->makeFullNsPath($packagistInterfaces);

        $packagistTraits = $data->getComposerTraits();
        $packagistTraitsFullNs = $this->makeFullNsPath($packagistTraits);

        ////////////////////////////////////////////////
        // Use
        // namespaces in Composer
        $list = array_merge($packagistNamespacesFullNS, $packagistClassesFullNS, $packagistInterfacesFullNs, $packagistTraitsFullNs);
        $n = floor(count($list) / 10000);
        for($i = 0; $i < $n; ++$i) {
            $this->atomIs('Use')
                 ->outIs('USE')
                 ->is('originpath', array_slice($list, $i * 10000, ($i + 1) * 10000));
            $this->prepareQuery();
        }

        ////////////////////////////////////////////////
        // Classes extends or implements
        // Classes in Composer
        $list = array_merge($packagistInterfacesFullNs, $packagistClassesFullNS);
        $n = floor(count($list) / 10000);
        for($i = 0; $i < $n; ++$i) {
            $this->atomIs('Class')
                 ->outIs(array('IMPLEMENTS', 'EXTENDS'))
                 ->fullnspathIs(array_slice($list, $i * 10000, ($i + 1) * 10000));
            $this->prepareQuery();
        }

        ////////////////////////////////////////////////
        // Instanceof
        // Classes or interfaces in Composer
        $n = floor(count($list) / 10000);
        for($i = 0; $i < $n; ++$i) {
            $this->atomIs('Instanceof')
                 ->outIs('CLASS')
                 ->atomIs(array('Nsname', 'Identifier'))
                 ->fullnspathIs(array_slice($packagistInterfacesFullNs, $i * 10000, ($i + 1) * 10000));
            $this->prepareQuery();
        }

    }
}

?>
