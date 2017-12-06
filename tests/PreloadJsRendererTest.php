<?php

namespace gulch\Assets\Tests;

use PHPUnit\Framework\TestCase;
use gulch\Assets\Asset;
use gulch\Assets\Renderer\PreloadJsRenderer;

class PreloadJsRendererTest extends TestCase
{
    /** @test */
    public function testPreloadJsRenderer()
    {
        $asset = new Asset(new PreloadJsRenderer);
        $asset->add('asset.js');

        $this->assertSame(
            '<link rel="preload" href="asset.js" as="script">',
            $asset->write()
        );
    }
}
