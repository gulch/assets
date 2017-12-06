<?php

namespace gulch\Assets\Tests;

use PHPUnit\Framework\TestCase;
use gulch\Assets\Asset;
use gulch\Assets\Renderer\PreloadCssRenderer;

class PreloadCssRendererTest extends TestCase
{
    /** @test */
    public function testPreloadCssRenderer()
    {
        $asset = new Asset(new PreloadCssRenderer);
        $asset->add('asset.css');

        $this->assertSame(
            '<link rel="preload" href="asset.css" as="style">',
            $asset->write()
        );
    }
}
