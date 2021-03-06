<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Twig_Tests_Grammar_ArrayTest extends PHPUnit_Framework_TestCase
{
    public function testMagicToString()
    {
        $grammar = new Twig_Grammar_Array('foo');
        $this->assertEquals('<foo:array>', (string) $grammar);
    }
}
