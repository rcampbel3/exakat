<?php

namespace Test\Functions;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class CouldTypeWithInt extends Analyzer {
    /* 1 methods */

    public function testFunctions_CouldTypeWithInt01()  { $this->generic_test('Functions/CouldTypeWithInt.01'); }
}
?>