<?php

namespace Test;

include_once(dirname(dirname(dirname(__DIR__))).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');

class Variables_VariableLong extends Analyzer {
    /* 1 methods */

    public function testVariables_VariableLong01()  { $this->generic_test('Variables_VariableLong.01'); }
}
?>