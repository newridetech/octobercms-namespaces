<?php

namespace Newride\Normalizer\tests;

use Newride\Normalizer\Normalizer;
use PHPUnit\Framework\TestCase;

class NormalizerTest extends TestCase
{
    public function testPercentageIsNormalized()
    {
        $this->assertSame(3.24, Normalizer::percentage('3,24%')->toFloat());
    }
}
