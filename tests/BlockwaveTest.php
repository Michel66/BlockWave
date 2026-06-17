<?php
/**
 * Tests for BlockWave
 */

use PHPUnit\Framework\TestCase;
use Blockwave\Blockwave;

class BlockwaveTest extends TestCase {
    private Blockwave $instance;

    protected function setUp(): void {
        $this->instance = new Blockwave(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockwave::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
