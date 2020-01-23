<?php

class CalculatorTest extends PHPUnit_Framework_TestCase {

    private $calc=null;

    /**
     * Setting up the test env
     */
    public function setUp(){

        $this->calc = new JomWeb\Calculator;
    }
    /**
     * Teardown the test env
     */

     public function tearDown(){

        $this->calc = null;
     }

     /**
      * Test Instance
      *
      *@test
      */

      public function testInstanceOf(){

        $this->assertInstanceOf('JomWeb\Calculator', $this->calc);
      } 

      /**
       * Test provide invalid argument throw an exception
       * 
       * @expectedException InvalidArgumentException
       */
      public function testInvalidArgumentIsProperlyThrown(){

        $this->calc->add('A', 2);
      }

      /**
       * Test calc returns true
       * 
       * @test
       */
      public function testValidResult(){

        $this->assertSame(5, $this->calc->add(2, 3));

      }
}