<?php
/**
 * Tests for ChainTalon
 */

use PHPUnit\Framework\TestCase;
use Chaintalon\Chaintalon;

class ChaintalonTest extends TestCase {
    private Chaintalon $instance;

    protected function setUp(): void {
        $this->instance = new Chaintalon(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaintalon::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
