<?php

$expected     = array('foo(\'1234567890123456789012345678901234567890123456789012345678901\')',
                      'foo(1, 2, \'1234567890123456789012345678901234567890123456789012345678901\')',
                      'foo(<<<SQL
1234567890123456789012345678901234567890123456789012345678901
SQL)',
                      'foo("1234567890123456789{$a12345689}1234567890123456789012345678901")',
                      'A::foo(1, \'1234567890123456789012345678901234567890123456789012345678901\')',
                      '$o->foo(1, 2, \'1234567890123456789012345678901234567890123456789012345678901\', 4, \'1234567890123456789012345678901234567890123456789012345678901\')',
                      'foo(\'123456789012345678901234567890123456789012345678901234567890\')',
                     );

$expected_not = array('foo(\'12345678901234567890123456789012345678901234567890101234567890\')',
                      'foo()',
                      'foo(\'123\')',
                     );

?>