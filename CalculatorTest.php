<?php
require 'Calculator.php'; // Подключается файл для теста
 
class CalculatorTests extends PHPUnit_Framework_TestCase //Наследуется класс для тестов 
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
 
}

?>