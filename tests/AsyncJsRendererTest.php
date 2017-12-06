<?php

namespace gulch\Assets\Tests;

use PHPUnit\Framework\TestCase;
use gulch\Assets\Asset;
use gulch\Assets\Renderer\AsyncJsRenderer;

class AsyncJsRendererTest extends TestCase
{
    /** @test */
    public function testAsyncJsRenderer()
    {
        $asset = new Asset(new AsyncJsRenderer);
        $asset->add('asset.js');

        $this->assertSame(
            '<script async src="asset.js"></script>',
            $asset->write()
        );
    }
}
