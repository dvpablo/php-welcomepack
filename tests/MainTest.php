<?php
class MainTest extends PHPUnit_Framework_TestCase
{
    public function testHelloEndpoint()
    {
        // Arrange
        $a = new \Main\Hello();

        // Act
        $b = $a->world();

        // Assert
        $this->assertStringEndsWith("!", $b);
    }
}