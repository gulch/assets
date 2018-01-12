<?php

namespace gulch\Assets\Tests;

use PHPUnit\Framework\TestCase;
use gulch\Assets\Asset;
use gulch\Assets\Renderer\PreloadWoff2Renderer;

class PreloadWoff2RendererTest extends TestCase
{
    public function testPreloadJsRenderer()
    {
        $asset = new Asset(new PreloadWoff2Renderer);
        $asset->add('roboto.woff2');

        $this->assertSame(
            '<link rel="preload" href="roboto.woff2" as="font" type="font/woff2">',
            $asset->write()
        );
    }
}
