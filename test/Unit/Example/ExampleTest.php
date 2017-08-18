<?php

namespace Sparhandy\Test\Unit\Example;

use Mockery;
use PHPUnit_Framework_TestCase;
use Sparhandy\Test\Example\Example;

/**
 * Testcase.
 *
 * @author Sebastian Knott <sebastian.knott@sh.de>
 */
class ExampleTest extends PHPUnit_Framework_TestCase
{
    /** @var Example */
    private $subject = null;

    protected function setUp()
    {
        $this->subject = new Example();
    }

    /**
    * @test
    */
    public function testMe_with_parameter_returns_concatenation()
    {
        $mockedTestParameter = 'World';
        $expectedResult = 'Hello ' . $mockedTestParameter;

        $result = $this->subject->testMe($mockedTestParameter);

        self::assertSame($expectedResult, $result);
    }

    protected function tearDown()
    {
        Mockery::close();
    }
}