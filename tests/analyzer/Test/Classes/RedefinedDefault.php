<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 4).'/library/Autoload.php';
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class RedefinedDefault extends Analyzer {
    /* 4 methods */

    public function testClasses_RedefinedDefault01()  { $this->generic_test('Classes/RedefinedDefault.01'); }
    public function testClasses_RedefinedDefault02()  { $this->generic_test('Classes/RedefinedDefault.02'); }
    public function testClasses_RedefinedDefault03()  { $this->generic_test('Classes/RedefinedDefault.03'); }
    public function testClasses_RedefinedDefault04()  { $this->generic_test('Classes/RedefinedDefault.04'); }
}
?>