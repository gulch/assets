<?php

namespace gulch\Assets\Tests;

use PHPUnit\Framework\TestCase;
use gulch\Assets\Asset;
use gulch\Assets\Renderer\DeferJsRenderer;

class DeferJsRendererTest extends TestCase
{
    /** @test */
    public function testDeferJsRenderer()
    {
        $asset = new Asset(new DeferJsRenderer);
        $asset->add('asset1.js')->add('asset2.js');

        $this->assertSame(
            '<script defer src="asset1.js"></script><script defer src="asset2.js"></script>',
            $asset->write()
        );
    }
}
