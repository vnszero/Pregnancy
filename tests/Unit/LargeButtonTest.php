<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\View\Components\LargeButton;
use InvalidArgumentException;

class LargeButtonTest extends TestCase
{
    #[\PHPUnit\Framework\Attributes\Test]
    public function it_applies_standard_variant_class()
    {
        $component = new LargeButton('standard');
        $this->assertEquals('bg-white text-black rounded border border-black mt-4 p-4', $component->buttonClass());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_applies_invert_variant_class()
    {
        $component = new LargeButton('invert');
        $this->assertEquals('bg-black text-white rounded border border-black mt-4 p-4', $component->buttonClass());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_throws_exception_for_invalid_variant()
    {
        $this->expectException(InvalidArgumentException::class);
        new LargeButton('invalid-variant');
    }
}