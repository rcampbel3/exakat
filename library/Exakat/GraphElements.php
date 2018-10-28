<?php
/*
 * Copyright 2012-2018 Damien Seguy – Exakat Ltd <contact(at)exakat.io>
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


namespace Exakat;

abstract class GraphElements {
    static public $ATOMS = array('Addition',
                                 'Array',
                                 'Arrayappend',
                                 'Arrayliteral',
                                 'As',
                                 'Assignation',
                                 'Bitshift',
                                 'Block',
                                 'Boolean',
                                 'Break',
                                 'Case',
                                 'Cast',
                                 'Catch',
                                 'Class',
                                 'Classanonymous',
                                 'Clone',
                                 'Closure',
                                 'Coalesce',
                                 'Comparison',
                                 'Concatenation',
                                 'Const',
                                 'Constant',
                                 'Continue',
                                 'Declare',
                                 'Declaredefinition',
                                 'Default',
                                 'Defineconstant',
                                 'Dowhile',
                                 'Echo',
                                 'Empty',
                                 'Eval',
                                 'Exit',
                                 'File',
                                 'Finally',
                                 'For',
                                 'Foreach',
                                 'Function',
                                 'Functioncall',
                                 'Global',
                                 'Globaldefinition',
                                 'Goto',
                                 'Gotolabel',
                                 'Halt',
                                 'Heredoc',
                                 'Identifier',
                                 'Ifthen',
                                 'Include',
                                 'Inlinehtml',
                                 'Instanceof',
                                 'Insteadof',
                                 'Integer',
                                 'Interface',
                                 'Isset',
                                 'Keyvalue',
                                 'List',
                                 'Logical',
                                 'Magicconstant',
                                 'Member',
                                 'Magicmethod',
                                 'Method',
                                 'Methodcall',
                                 'Methodcallname',
                                 'Multiplication',
                                 'Name',
                                 'Namespace',
                                 'New',
                                 'Newcall',
                                 'Not',
                                 'Nsname',
                                 'Null',
                                 'Parameter',
                                 'Parametername',
                                 'Parent',
                                 'Parenthesis',
                                 'Php',
                                 'Phpvariable',
                                 'Postplusplus',
                                 'Power',
                                 'Ppp',
                                 'Preplusplus',
                                 'Print',
                                 'Project',
                                 'Propertydefinition',
                                 'Real',
                                 'Return',
                                 'Self',
                                 'Sequence',
                                 'Shell',
                                 'Sign',
                                 'Static',
                                 'Staticclass',
                                 'Staticconstant',
                                 'Staticdefinition',
                                 'Staticmethod',
                                 'Staticmethodcall',
                                 'Staticproperty',
                                 'Staticpropertyname',
                                 'String',
                                 'Switch',
                                 'Ternary',
                                 'This',
                                 'Throw',
                                 'Trait',
                                 'Try',
                                 'Unset',
                                 'Usenamespace',
                                 'Usetrait',
                                 'Var',
                                 'Variable',
                                 'Variabledefinition',
                                 'Variablearray',
                                 'Variableobject',
                                 'Void',
                                 'While',
                                 'Yield',
                                 'Yieldfrom',
                                );
    static public $ATOMS_EXAKAT = array('Analysis',
                                        'Noresult',
                                       );
    
    static public $LINKS = array('APPEND',
                                 'ARGUMENT',
                                 'AS',
                                 'BLOCK',
                                 'BREAK',
                                 'CASE',
                                 'CASES',
                                 'CAST',
                                 'CATCH',
                                 'CLASS',
                                 'CLONE',
                                 'CODE',
                                 'CONCAT',
                                 'CONDITION',
                                 'CONST',
                                 'CONSTANT',
                                 'CONTINUE',
                                 'DEFAULT',
                                 'DECLARE',
                                 'EXPRESSION',
                                 'ELSE',
                                 'EXTENDS',
                                 'FILE',
                                 'FINAL',
                                 'FINALLY',
                                 'FUNCTION',
                                 'GLOBAL',
                                 'GOTO',
                                 'GROUPUSE',
                                 'IMPLEMENTS',
                                 'INCREMENT',
                                 'INDEX',
                                 'INIT',
                                 'INSTEADOF',
                                 'GOTOLABEL',
                                 'LEFT',
                                 'METHOD',
                                 'NAME',
                                 'NEW',
                                 'NOT',
                                 'OBJECT',
                                 'PPP',
                                 'POSTPLUSPLUS',
                                 'PREPLUSPLUS',
                                 'PROJECT',
                                 'MAGICMETHOD',
                                 'MEMBER',
                                 'RETURN',
                                 'RETURNTYPE',
                                 'RIGHT',
                                 'SIGN',
                                 'SOURCE',
                                 'STATIC',
                                 'THEN',
                                 'THROW',
                                 'TRAILING',
                                 'TYPEHINT',
                                 'USE',
                                 'VALUE',
                                 'VAR',
                                 'VARIABLE',
                                 'YIELD',
                                 'ALIAS',
                                );
    static public $LINKS_EXAKAT = array('DEFINITION',
                                        'ANALYZED',
                                        'RETURNED',
                                        'OVERWRITE'
                                       );
    static public $LINKS_DOWN = array('APPEND',
                                      'ARGUMENT',
                                      'AS',
                                      'BLOCK',
                                      'CASE',
                                      'CASES',
                                      'CAST',
                                      'CATCH',
                                      'CLASS',
                                      'CLONE',
                                      'CODE',
                                      'CONCAT',
                                      'CONDITION',
                                      'CONST',
                                      'CONSTANT',
                                      'CONTINUE',
                                      'DEFAULT',
                                      'EXPRESSION',
                                      'ELSE',
                                      'FILE',
                                      'FINALLY',
                                      'FUNCTION',
                                      'GLOBAL',
                                      'GOTO',
                                      'GROUPUSE',
                                      'IMPLEMENTS',
                                      'INCREMENT',
                                      'INDEX',
                                      'INIT',
                                      'GOTOLABEL',
                                      'LEFT',
                                      'METHOD',
                                      'NAME',
                                      'NEW',
                                      'NOT',
                                      'OBJECT',
                                      'POSTPLUSPLUS',
                                      'PREPLUSPLUS',
                                      'PROJECT',
                                      'MEMBER',
                                      'RETURN',
                                      'RIGHT',
                                      'SIGN',
                                      'SOURCE',
                                      'STATIC',
                                      'THEN',
                                      'THROW',
                                      'TRAILING',
                                      'USE',
                                      'VALUE',
                                      'VARIABLE',
                                      'YIELD',
                                      'ALIAS',
                                );

    static public $ATOMS_LINKS = array('Addition'                  => array('LEFT', 'RIGHT'),
                                       'Array'                     => array('VARIABLE', 'INDEX'),
                                       'Arrayappend'               => array('APPEND'),
                                       'Arrayliteral'              => array('ARGUMENT', 'DEFINITION'),
                                       'As'                        => array('NAME', 'AS'),
                                       'Assignation'               => array('LEFT', 'RIGHT'),
                                       'Bitshift'                  => array('LEFT', 'RIGHT'),
                                       'Block'                     => array('EXPRESSION'),
                                       'Boolean'                   => array(),
                                       'Break'                     => array('BREAK'),
                                       'Case'                      => array('CASE', 'CODE'),
                                       'Cast'                      => array('CAST'),
                                       'Catch'                     => array('CLASS', 'VARIABLE', 'BLOCK'),
                                       'Class'                     => array('NAME', 'IMPLEMENTS', 'EXTENDS', 'METHOD', 'MAGICMETHOD', 'CONST', 'PPP', 'DEFINITION'),
                                       'Classanonymous'            => array('NAME', 'IMPLEMENTS', 'EXTENDS', 'METHOD', 'MAGICMETHOD', 'CONST', 'PPP', 'DEFINITION'),
                                       'Clone'                     => array('CLONE'),
                                       'Closure'                   => array('BLOCK', 'USE', 'ARGUMENT', 'RETURNTYPE', 'DEFINITION', 'RETURNED'),
                                       'Coalesce'                  => array('LEFT', 'RIGHT'),
                                       'Comparison'                => array('LEFT', 'RIGHT'),
                                       'Concatenation'             => array('CONCAT'),
                                       'Const'                     => array('CONST'),
                                       'Constant'                  => array('NAME', 'VALUE', 'DEFINITION'),
                                       'Continue'                  => array('CONTINUE'),
                                       'Declare'                   => array('BLOCK'),
                                       'Declaredefinition'         => array('NAME', 'VALUE'),
                                       'Default'                   => array('CODE'),
                                       'Defineconstant'            => array('NAME', 'VALUE', 'ARGUMENT', 'DEFINITION'),
                                       'Dowhile'                   => array('CONDITION', 'BLOCK'),
                                       'Echo'                      => array('ARGUMENT'),
                                       'Empty'                     => array('ARGUMENT'),
                                       'Eval'                      => array('ARGUMENT'),
                                       'Exit'                      => array('ARGUMENT'),
                                       'File'                      => array('FILE'),
                                       'Finally'                   => array('BLOCK'),
                                       'For'                       => array('INIT', 'FINAL', 'INCREMENT', 'BLOCK'),
                                       'Foreach'                   => array('SOURCE', 'VALUE', 'BLOCK'),
                                       'Function'                  => array('NAME', 'ARGUMENT', 'RETURNTYPE', 'BLOCK', 'DEFINITION', 'RETURNED'),
                                       'Functioncall'              => array('NAME', 'ARGUMENT'),
                                       'Global'                    => array('GLOBAL'),
                                       'Globaldefinition'          => array('DEFAULT', 'DEFINITION'),
                                       'Goto'                      => array('GOTO'),
                                       'Gotolabel'                 => array('GOTOLABEL'),
                                       'Halt'                      => array(),
                                       'Heredoc'                   => array('CONCAT'),
                                       'Identifier'                => array(),
                                       'Ifthen'                    => array('CONDITION', 'THEN', 'ELSE'),
                                       'Include'                   => array('ARGUMENT'),
                                       'Inlinehtml'                => array(),
                                       'Instanceof'                => array('VARIABLE', 'CLASS'),
                                       'Insteadof'                 => array('NAME', 'INSTEADOF'),
                                       'Integer'                   => array(),
                                       'Interface'                 => array('NAME', 'IMPLEMENTS', 'METHOD', 'MAGICMETHOD', 'CONST', 'DEFINITION'),
                                       'Isset'                     => array('ARGUMENT'),
                                       'Keyvalue'                  => array('INDEX', 'VALUE'),
                                       'List'                      => array('ARGUMENT', 'NAME'),
                                       'Logical'                   => array('LEFT', 'RIGHT'),
                                       'Magicconstant'             => array(),
                                       'Member'                    => array('OBJECT', 'MEMBER'),
                                       'Magicmethod'               => array('NAME',  'ARGUMENT', 'RETURNTYPE', 'BLOCK', 'DEFINITION', 'RETURNED'),
                                       'Method'                    => array('NAME',  'ARGUMENT', 'RETURNTYPE', 'BLOCK', 'DEFINITION', 'RETURNED'),
                                       'Methodcall'                => array('OBJECT', 'METHOD'),
                                       'Methodcallname'            => array('NAME', 'ARGUMENT', 'DEFINITION'),
                                       'Multiplication'            => array('LEFT', 'RIGHT'),
                                       'Name'                      => array('DEFINITION'),
                                       'Namespace'                 => array('NAME', 'BLOCK'),
                                       'New'                       => array('NEW'),
                                       'Newcall'                   => array('ARGUMENT', 'NAME'),
                                       'Not'                       => array('NOT'),
                                       'Nsname'                    => array(),
                                       'Null'                      => array(),
                                       'Parameter'                 => array('TYPEHINT', 'DEFAULT', 'NAME'),
                                       'Parametername'             => array('DEFINITION'),
                                       'Parent'                    => array(),
                                       'Parenthesis'               => array('CODE'),
                                       'Php'                       => array('CODE'),
                                       'Phpvariable'               => array(),
                                       'Postplusplus'              => array('POSTPLUSPLUS'),
                                       'Power'                     => array('LEFT', 'RIGHT'),
                                       'Ppp'                       => array('PPP'),
                                       'Preplusplus'               => array('PREPLUSPLUS'),
                                       'Print'                     => array('ARGUMENT'),
                                       'Project'                   => array('PROJECT'),
                                       'Propertydefinition'        => array('DEFAULT', 'NAME','DEFINITION'),
                                       'Real'                      => array(),
                                       'Return'                    => array('RETURN'),
                                       'Self'                      => array(),
                                       'Sequence'                  => array('EXPRESSION'),
                                       'Shell'                     => array('CONCAT'),
                                       'Sign'                      => array('SIGN'),
                                       'Static'                    => array('STATIC'),
                                       'Staticclass'               => array('CLASS'),
                                       'Staticconstant'            => array('CLASS', 'CONSTANT'),
                                       'Staticdefinition'          => array('DEFINITION', 'DEFAULT', 'NAME'),
                                       'Staticmethod'              => array(),
                                       'Staticmethodcall'          => array('CLASS', 'METHOD'),
                                       'Staticproperty'            => array('CLASS', 'MEMBER'),
                                       'Staticpropertyname'        => array(),
                                       'String'                    => array('CONCAT'),
                                       'Switch'                    => array('CONDITION', 'CASES'),
                                       'Ternary'                   => array('CONDITION', 'THEN', 'ELSE'),
                                       'This'                      => array(),
                                       'Throw'                     => array('THROW'),
                                       'Trait'                     => array('NAME', 'USE', 'METHOD', 'MAGICMETHOD', 'PPP', 'DEFINITION'),
                                       'Try'                       => array('CATCH', 'FINALLY', 'BLOCK'),
                                       'Unset'                     => array('ARGUMENT'),
                                       'Usenamespace'              => array('USE'),
                                       'Usetrait'                  => array('USE'),
                                       'Var'                       => array('PPP'),
                                       'Variable'                  => array(),
                                       'Variabledefinition'        => array('DEFINITION'),
                                       'Variablearray'             => array(),
                                       'Variableobject'            => array(),
                                       'Void'                      => array(),
                                       'While'                     => array('CONDITION', 'BLOCK'),
                                       'Yield'                     => array('YIELD'),
                                       'Yieldfrom'                 => array('YIELD'),
                                );

    static public function linksAsList() {
        return makeList(self::$LINKS);
    }

    static public function linksDownAsList() {
        return makeList(self::$LINKS_DOWN);
    }
}

?>
