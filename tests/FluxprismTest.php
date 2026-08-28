<?php
/**
 * Tests for FluxPrism
 */

use PHPUnit\Framework\TestCase;
use Fluxprism\Fluxprism;

class FluxprismTest extends TestCase {
    private Fluxprism $instance;

    protected function setUp(): void {
        $this->instance = new Fluxprism(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fluxprism::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
