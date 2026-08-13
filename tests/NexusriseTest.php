<?php
/**
 * Tests for NexusRise
 */

use PHPUnit\Framework\TestCase;
use Nexusrise\Nexusrise;

class NexusriseTest extends TestCase {
    private Nexusrise $instance;

    protected function setUp(): void {
        $this->instance = new Nexusrise(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nexusrise::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
