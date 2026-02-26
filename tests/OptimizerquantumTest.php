<?php
/**
 * Tests for OptimizerQuantum
 */

use PHPUnit\Framework\TestCase;
use Optimizerquantum\Optimizerquantum;

class OptimizerquantumTest extends TestCase {
    private Optimizerquantum $instance;

    protected function setUp(): void {
        $this->instance = new Optimizerquantum(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Optimizerquantum::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
